<?php

namespace Source\WebService;

use Source\Models\User;
use Source\Core\JWTToken;
use SorFabioSantos\Uploader\Uploader;

class Users extends Api
{
    public function listUsers (): void
    {
        $users = new User();
        $this->call(200, "success", "Lista de usuários", "success")
            ->back($users->findAll());
    }

    public function createUser(array $data)
    {

        $user = new User(
            null,
            $data["idType"] ?? 2,
            $data["name"] ?? null,
            $data["email"] ?? null,
            $data["password"] ?? null
        );

        if (!empty($_FILES["photo"])) {
            $uploader = new Uploader();
            $path = $uploader->Image($_FILES["photo"], str_replace(' ', '-', $user->getName()) . "-photo"); 
            if (!$path) {
                $this->call(400, "bad_request", $uploader->getMessage(), "error")->back();
                return;
            }
            $user->setPhoto($path);
        }

        if(!$user->insert()){
            $this->call(500, "internal_server_error", $user->getErrorMessage(), "error")->back();
            return;
        }
        
        $response = [
            "name" => $user->getName(),
            "email" => $user->getEmail(),
            "photo" => $user->getPhoto()
        ];

        $this->call(201, "created", "Usuário criado com sucesso", "success")
            ->back($response);
    }

    public function listUserById (array $data): void
    {
        if(!isset($data["id"])) {
            $this->call(400, "bad_request", "ID inválido", "error")->back();
            return;
        }

        if(!filter_var($data["id"], FILTER_VALIDATE_INT)) {
            $this->call(400, "bad_request", "ID inválido", "error")->back();
            return;
        }

        $user = new User();
        if(!$user->findById($data["id"])){
            $this->call(200, "success", "Usuário não encontrado", "error")->back();
            return;
        }
        $response = [
            "name" => $user->getName(),
            "email" => $user->getEmail()
        ];
        $this->call(200, "success", "Encontrado com sucesso", "success")->back($response);
    }

    public function deleteUser (array $data): void
    {
        $this->call(200, "success", "Usuário excluído com sucesso", "success")
            ->back($data);
    }

    public function updateUser (array $data): void
    {
        var_dump($data);
    }

    public function login(): void
    {
        if (empty($this->headers["email"]) || empty($this->headers["password"])) {
            $this->call(400, "bad_request", "Credenciais inválidas", "error")->back();
            return;
        }

        $user = new User();

        if(!$user->findByEmail($this->headers["email"])){
            $this->call(401, "unauthorized", "Usuário não encontrado", "error")->back();
            return;
        }

        if(!password_verify($this->headers["password"], $user->getPassword())){
            $this->call(401, "unauthorized", "Senha inválida", "error")->back();
            return;
        }

        $jwt = new JWTToken();
        $token = $jwt->create([
            "id" => $user->getId(),
            "email" => $user->getEmail(),
            "name" => $user->getName(),
            "photo" => $user->getPhoto()
        ]);

        $this->call(200, "success", "Login realizado com sucesso", "success")
            ->back([
                "token" => $token,
                "user" => [
                    "id" => $user->getId(),
                    "name" => $user->getName(),
                    "email" => $user->getEmail(),
                    "photo" => $user->getPhoto()
                ]
            ]);
    }
}
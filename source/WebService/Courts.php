<?php

namespace Source\WebService;

use Source\Models\Court;
use Source\Core\Connect;

class Courts extends Api
{
    public function listCourts(): void
    {
        $courts = new Court();
        $this->call(200, "success", "Lista de quadras", "success")
            ->back($courts->findAll());
    }

    public function listCourtById(array $data): void
    {
        if (!isset($data["id"])) {
            $this->call(400, "bad_request", "ID inválido", "error")->back();
            return;
        }

        if (!filter_var($data["id"], FILTER_VALIDATE_INT)) {
            $this->call(400, "bad_request", "ID inválido", "error")->back();
            return;
        }

        $court = new Court();
        if (!$court->findById($data["id"])) {
            $this->call(200, "success", "Quadra não encontrada", "error")->back();
            return;
        }

        $response = [
            "name" => $court->getName(),
            "type" => $court->getType(),
            "hours" => $court->getHours(),
            "price" => $court->getPrice()
        ];

        $this->call(200, "success", "Quadra encontrada com sucesso", "success")->back($response);
    }

    public function createCourt(): void
{
    try {
        $pdo = \Source\Core\Connect::getConnection();

        $data = $_POST;

        if (
            !isset($data['name']) 
            || !isset($data['hours']) 
            || !isset($data['type']) 
            || !isset($data['price'])
        ) {
            echo json_encode(['success' => false, 'message' => 'Todos os campos são obrigatórios']);
            return;
        }

        $stmt = $pdo->prepare("
            INSERT INTO courts (name, hours, type, price)
            VALUES (:name, :hours, :type, :price)
        ");

        $stmt->execute([
            ':name'  => $data['name'],
            ':hours' => (int)$data['hours'],
            ':type'  => $data['type'],
            ':price' => (float)$data['price']
        ]);

        echo json_encode(['success' => true, 'message' => 'Quadra criada com sucesso']);
    } catch (\PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

    public function updateCourt(array $params): void
{
    try {
        $pdo = \Source\Core\Connect::getConnection();
        $id = $params['id'];

        $data = [];

        if (!empty($_POST)) {
            $data = $_POST;
        } else {
            parse_str(file_get_contents("php://input"), $data);
        }

        if (
            !isset($data['name']) 
            || !isset($data['hours']) 
            || !isset($data['type']) 
            || !isset($data['price'])
        ) {
            echo json_encode(['success' => false, 'message' => 'Todos os campos são obrigatórios']);
            return;
        }

        $stmt = $pdo->prepare("
            UPDATE courts
            SET name = :name,
                hours = :hours,
                type = :type,
                price = :price
            WHERE id = :id
        ");

        $stmt->execute([
            ':name'  => $data['name'],
            ':hours' => (int)$data['hours'],
            ':type'  => $data['type'],
            ':price' => (float)$data['price'],
            ':id'    => $id
        ]);

        echo json_encode(['success' => true, 'message' => 'Quadra atualizada com sucesso']);
    } catch (\PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}
    public function deleteCourt(array $params): void
{
    try {
        $pdo = \Source\Core\Connect::getConnection();
        $id = $params['id'];

        $stmt = $pdo->prepare("DELETE FROM courts WHERE id = :id");
        $stmt->execute([':id' => $id]);

        echo json_encode(['success' => true, 'message' => 'Quadra deletada com sucesso']);
    } catch (\PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}
}

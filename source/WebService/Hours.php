<?php

namespace Source\WebService;

use Source\Models\Hour;
use Source\Core\Connect;

class Hours extends Api
{

public function listHours(): void
{
    $hours = new Hour();
    $this->call(200, "success", "Lista de horários", "success")
        ->back($hours->findAll());
}

public function listHoursById(array $data): void
{
    if (!isset($data["id"])) {
        $this->call(400, "bad_request", "ID inválido", "error")->back();
        return;
    }

    if (!filter_var($data["id"], FILTER_VALIDATE_INT)) {
        $this->call(400, "bad_request", "ID inválido", "error")->back();
        return;
    }

    $hour = new Hour();
    if (!$hour->findById($data["id"])) {
        $this->call(200, "success", "Horário não encontrado", "error")->back();
        return;
    }

    $response = [
        "courtId" => $hour->getCourtId(),
        "startTime" => $hour->getStartTime(),
        "endTime" => $hour->getEndTime(),
        "available" => $hour->getAvailable()  
    ];

    $this->call(200, "success", "Horário encontrado com sucesso", "success")->back($response);
}

public function createHour(array $data): void
    {
        try {
            $pdo = Connect::getConnection();

            $stmt = $pdo->prepare("
                INSERT INTO hours (courtId, startTime, endTime, available)
                VALUES (:courtId, :startTime, :endTime, :available)
            ");

            $stmt->execute([
                ':courtId'   => $data['courtId'],
                ':startTime' => $data['startTime'],
                ':endTime'   => $data['endTime'],
                ':available' => $data['available']
            ]);

            echo json_encode(['success' => true, 'message' => 'Hora criada com sucesso']);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }

public function updateHour(array $params): void
{
    try {
        $pdo = \Source\Core\Connect::getConnection();
        $id = $params['id'];

        $data = [];

        
        if (!empty($_POST)) {
            $data = $_POST;
        } else {
            
            $rawInput = file_get_contents("php://input");

            if (strpos($rawInput, 'Content-Disposition') === false) {
                parse_str($rawInput, $data);
            }
        }

        
        if (
            !isset($data['courtId'])
            || !isset($data['startTime']) 
            || !isset($data['endTime']) 
            || !isset($data['available'])
        ) {
            echo json_encode(['success' => false, 'message' => 'Campos ausentes ou inválidos']);
            return;
        }

        $stmt = $pdo->prepare("
            UPDATE hours
            SET courtId = :courtId,
                startTime = :startTime,
                endTime = :endTime,
                available = :available
            WHERE id = :id
        ");

        $stmt->execute([
            ':courtId'   => $data['courtId'],
            ':startTime' => $data['startTime'],
            ':endTime'   => $data['endTime'],
            ':available' => filter_var($data['available'], FILTER_VALIDATE_BOOLEAN),
            ':id'        => $id
        ]);

        echo json_encode(['success' => true, 'message' => 'Hora atualizada com sucesso']);
    } catch (\PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}

    public function deleteHour(array $data): void
    {
        try {
            $pdo = Connect::getConnection();

            $stmt = $pdo->prepare("DELETE FROM hours WHERE id = :id");
            $stmt->execute([':id' => $data['id']]);

            echo json_encode(['success' => true, 'message' => 'Hora deletada com sucesso']);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
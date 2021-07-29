<?php

namespace Controllers;

use Core\Controller;
use Services\ContactService;

class ContactController extends Controller {
    private $contactService;

    public function __construct()
    {
        $this->contactService = new ContactService();
    }

    public function store() {
        $request = file_get_contents('php://input');
        $request = json_decode($request, true);

        if ($this->contactService->store($request)) {
            header('Content-Type: application/json');
            $response = [
                "success" => true,
                "message" => "Cadastrado com sucesso."
            ];
            echo json_encode($response);
        } else {
            $response = [
                "success" => false,
                "message" => "Whoops, houve um problema no cadastro."
            ];

            echo json_encode($response);
        }
    }

    public function search()
    {
        $request = file_get_contents('php://input');
        $request = json_decode($request, true);

        header('Content-Type: application/json');
        $response = [
            "result" => "Aqui retorno da busca"
        ];

        echo json_encode($response);
    }
}

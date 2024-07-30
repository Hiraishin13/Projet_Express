<?php

class ServiceController {
    public function index() {
        // Logique pour afficher tous les services
        $services = $this->getAllServices();
        include 'app/views/service/list.php';
    }

    public function add() {
        // Logique pour ajouter un nouveau service
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Valider et traiter les données du formulaire
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            $this->createService($name, $description, $price);
            header('Location: /admin/services.php');
        } else {
            include 'app/views/service/add.php';
        }
    }

    public function edit($id) {
        // Logique pour modifier un service existant
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Valider et traiter les données du formulaire
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            $this->updateService($id, $name, $description, $price);
            header('Location: /admin/services.php');
        } else {
            $service = $this->getServiceById($id);
            include 'app/views/service/edit.php';
        }
    }

    public function delete($id) {
        // Logique pour supprimer un service
        $this->deleteService($id);
        header('Location: /admin/services.php');
    }

    private function getAllServices() {
        // Logique pour obtenir tous les services
        return []; // Exemple
    }

    private function createService($name, $description, $price) {
        // Logique pour créer un nouveau service
    }

    private function getServiceById($id) {
        // Logique pour obtenir un service par ID
        return null; // Exemple
    }

    private function updateService($id, $name, $description, $price) {
        // Logique pour mettre à jour un service existant
    }

    private function deleteService($id) {
        // Logique pour supprimer un service
    }
}

?>

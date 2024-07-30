<?php

class UserController {
    public function index() {
        // Logique pour afficher tous les utilisateurs
        $users = $this->getAllUsers();
        include 'app/views/user/list.php';
    }

    public function delete($id) {
        // Logique pour supprimer un utilisateur
        $this->deleteUser($id);
        header('Location: /admin/users.php');
    }

    private function getAllUsers() {
        // Logique pour obtenir tous les utilisateurs
        return []; // Exemple
    }

    private function deleteUser($id) {
        // Logique pour supprimer un utilisateur
    }
}

?>

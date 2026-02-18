<?php 
namespace Core\middleware;

class adminmanagerpharmacist {
    public function handle() {
        $role = $_SESSION['user']['UserType'] ?? null;

        if (!in_array($role, ['admin', 'manager', 'pharmacist'])) {
            abort(403);
            exit();
        }
    }
}

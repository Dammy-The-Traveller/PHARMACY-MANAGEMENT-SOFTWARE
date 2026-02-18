<?php 
namespace Core\middleware;

class AdminPharmacist {
    public function handle() {
        $role = $_SESSION['user']['UserType'] ?? null;
        if (!in_array($role, ['admin', 'pharmacist'])) {
            abort(403);
            exit();
        }
    }
}

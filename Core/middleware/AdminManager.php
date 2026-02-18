<?php 
namespace Core\middleware;

class AdminManager {
    public function handle() {
        $role = $_SESSION['user']['UserType'] ?? null;
        if (!in_array($role, ['admin', 'manager'])) {
            abort(403);
            exit();
        }
    }
}

<?php 
namespace Core\middleware;

class AdminManagerHr {
    public function handle() {
        $role = $_SESSION['user']['UserType'] ?? null;
        if (!in_array($role, ['admin', 'manager', 'HR'])) {
            abort(403);
            exit();
        }
    }
}

<?php 
namespace Core\middleware;

class AdminManagerAccountant {
    public function handle() {
        $role = $_SESSION['user']['UserType'] ?? null;

        if (!in_array($role, ['admin', 'manager','accountant'])) {
            abort(403);
            exit();
        }
    }
}

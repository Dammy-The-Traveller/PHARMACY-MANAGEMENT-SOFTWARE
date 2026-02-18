<?php 
namespace Core\middleware;

class AdminAccountant {
    public function handle() {
        $role = $_SESSION['user']['UserType'] ?? null;

        if (!in_array($role, ['admin', 'accountant'])) {
            abort(403);
            exit();
        }
    }
}

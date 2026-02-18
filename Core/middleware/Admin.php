<?php 
namespace Core\middleware;

class Admin {
    public function handle() {
        // Check if UserType is not set or not equal to 'admin'
        if (!isset($_SESSION['user']['UserType']) || $_SESSION['user']['UserType'] !== 'admin') {
            abort(403);
            exit();
        }
    }
}
// This middleware checks if the user is an admin.
// If not, it aborts the request with a 403 Forbidden status.
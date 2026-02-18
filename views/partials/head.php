<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
  <meta charset="utf-8">
  <meta name="author" content="PHARMACY MANAGEMENT SYSTEM">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
  <link rel="shortcut icon" type="image/x-icon" href="Public/assets/images/logo/favicon.png">
  <title><?= htmlspecialchars($_ENV['APP_NAME']) ?></title>
  <link rel="stylesheet" href="Public/assets/css/dashlite9b70.css?ver=3.3.0">
  <link id="skin-default" rel="stylesheet" href="Public/assets/css/theme9b70.css?ver=3.3.0">
</head>
<script>
  let logoutTimer;
function resetLogoutTimer() {
    clearTimeout(logoutTimer);
    logoutTimer = setTimeout(function () {
        alert("You have been logged out due to inactivity.");
        window.location.href = "/PMS/logout";
    }, 21600000); // Reset 6-hour timer
}
// Reset timer on user activity
document.addEventListener("mousemove", resetLogoutTimer());
document.addEventListener("keydown", resetLogoutTimer());
document.addEventListener("click", resetLogoutTimer());
// Start the timer initially
resetLogoutTimer();
</script>
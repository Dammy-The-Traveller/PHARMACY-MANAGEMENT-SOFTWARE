<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | <?= htmlspecialchars($_ENV['APP_NAME']) ?></title>
       <!-- SEO Meta Tags -->
    <title>Pharmacy Management System | PMS</title>
    <meta name="description" content="Manage your pharmacy easily with PMS's Pharmacy Management System – inventory, sales, HR, reports, returns, and more.">
    <meta name="keywords" content="pharmacy management system, inventory, POS, medicine sales, HR, pharmacist software, PMS">
    <meta name="author" content="PMS">
    <!-- CSRF Token for Security -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?? '' ?>">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Pharmacy Management System by PMS">
    <meta property="og:description" content="Powerful pharmacy management made simple. Track inventory, sales, HR, returns, and more.">
    <meta property="og:image" content="https://pms.reliccasa.com/Public/assets/images/preview.jpg">
    <meta property="og:url" content="https://pms.reliccasa.com/">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pharmacy Management System by PMS">
    <meta name="twitter:description" content="Manage your pharmacy operations seamlessly – inventory, sales, HR, reports.">
    <meta name="twitter:image" content="https://pms.reliccasa.com/Public/assets/images/preview.jpg">
    <!-- Apple iOS Support -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Relic Pharmacy">
    <link rel="shortcut icon" type="image/x-icon" href="Public/assets/images/logo/favicon.png">
<!-- Bootstrap -->
 <link rel="stylesheet" href="Public/assets/css/bootstrap.rtl.min.css">
<link rel="stylesheet" href="Public/assets/css/bootstrap.min.css">
<!-- Fontawesome -->
<link rel="stylesheet" href="Public/assets/fonts/fontawesome/css/fontawesome-all.min.css">
<link rel="stylesheet" href="Public/assets/plugins/jquery-confirm/jquery-confirm.min.css">
<!-- Lily -->
<link rel="stylesheet" href="Public/assets/css/lity.css">
<!-- Style -->
<link rel="stylesheet" href="Public/assets/css/style.css">
<link rel="stylesheet" href="Public/assets/css/custom.css">
<!-- Toaster -->
<link rel="stylesheet" href="Public/assets/css/toastr.min.css">
<!-- ApexChart -->
<link rel="stylesheet" href="Public/assets/css/apexcharts.css">
<link rel="stylesheet" href="Public/assets/css/arabic.css">


<!-- Custom Css -->
<link rel="stylesheet" href="Public/assets/css/styles/styles.css?ver=<?php echo time(); ?>" />
<link rel="stylesheet" href="Public/assets/css/responsive.css?ver=<?php echo time(); ?>" />
<style>
    .custom-link {
    color: black;
    text-decoration: none;
}

.custom-link:hover {
    color: #fd7f0b;
}

.feather-shopping-cart {
    color: #101828; 
    width: 32px;
    height: 32px;
    margin-top: 2px;
}

</style>
</head>
<body>
  <!-- <header class="header-section home-header">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="custom-container">
             <div class="collapse navbar-collapse navbar-lg-device d-flex align-items-center justify-content-between">
                 <ul class="navbar-nav  mb-2 mb-lg-0">
                     <li class="nav-item">
                         <a href="https://pms.reliccasa.com" class="nav-link active" aria-current="page">Home</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="https://relicedge.com/about.html" target="_blank">About Us</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="https://relicedge.com/services.html">Services</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="https://relicedge.com/blog.html" target="_blank">Blogs</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="https://relicedge.com/contact.html" target="_blank">Contact Us</a>
                     </li>
                 </ul>
    <a href="https://pms.reliccasa.com" class="header-logo logo-lg-device">
  <div style="display: flex; align-items: center; gap: 1px;">
    <img src="Public/assets/images/logo/relic.png" alt="header-logo" style="height: 100px; margin: -3rem; padding: -5px;" />
    <h1 style="margin: 0; font-size: 20px; line-height: 1;">PMS Pharmacy</h1>
  </div>
</a>




                    <div class="get-btn-container d-flex gap-2">
                    <a href="mailto:info@relicedge.com" target="_blank"
                        class="get-app-btn ps-custom-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" 
     stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
  <circle cx="9" cy="21" r="1" />
  <circle cx="20" cy="21" r="1" />
  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
</svg>

                        Purchase Now

                    </a>
                  
                </div>
                
            </div>
             <div class="header-sm-container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                    aria-controls="staticBackdrop">

                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.5 4.16668C2.5 3.70644 2.8731 3.33334 3.33333 3.33334H16.6667C17.1269 3.33334 17.5 3.70644 17.5 4.16668C17.5 4.62692 17.1269 5.00001 16.6667 5.00001H3.33333C2.8731 5.00001 2.5 4.62691 2.5 4.16668Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.5 9.99999C2.5 9.53974 2.8731 9.16666 3.33333 9.16666H16.6667C17.1269 9.16666 17.5 9.53974 17.5 9.99999C17.5 10.4602 17.1269 10.8333 16.6667 10.8333H3.33333C2.8731 10.8333 2.5 10.4602 2.5 9.99999Z"
                            fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.5 15.8333C2.5 15.3731 2.8731 15 3.33333 15H16.6667C17.1269 15 17.5 15.3731 17.5 15.8333C17.5 16.2936 17.1269 16.6667 16.6667 16.6667H3.33333C2.8731 16.6667 2.5 16.2936 2.5 15.8333Z"
                            fill="black" />
                    </svg>

                </button>
                <a href="https://pms.reliccasa.com" class="header-logo  ">
                    <img class="img-fluid nav-logo"
                    src="Public/assets/images/logo/1739264471-519.svg"
                    alt="header-logo" />
                </a>

                <div class="get-btn-container login-sm-device">
                     <a href="mailto:info@relicedge.com" target="_blank"
                        class="get-app-btn ps-custom-btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" 
     stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
  <circle cx="9" cy="21" r="1" />
  <circle cx="20" cy="21" r="1" />
  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
</svg>

                        Purchase Now

                    </a>
                </div>
            </div>
            

            <div class="offcanvas offcanvas-start mobile-menu" data-bs-backdrop="static" tabindex="-1"
                id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                <div class="offcanvas-header">
                    <a href="https://pms.reliccasa.com" class="header-logo"><img
                            src="Public/assets/images/logo/1739264471-519.svg"
                            alt="header-logo" class="w-75"/></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 5L5 15" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                            <path d="M5 5L15 15" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <div class="accordion accordion-flush" id="sidebarMenuAccordion">
                        <div class="accordion-item">
                            <a href="https://pms.reliccasa.com" class="accordion-button without-sub-menu"
                                type="button">Home</a>
                        </div>
                        <div class="accordion-item">
                            <a href="https://relicedge.com/about.html" target="_blank" class="accordion-button without-sub-menu"
                                type="button">About Us</a>
                        </div>

                        <div class="accordion-item">
                            <a href="https://relicedge.com/services.html" class="accordion-button without-sub-menu"
                                type="button">Services</a>
                        </div>


                        <div class="accordion-item">
                            <a href="https://relicedge.com/blog.html" target="_blank" class="accordion-button without-sub-menu"
                                type="button">Blogs</a>
                        </div>

                        <div class="accordion-item">
                            <a href="https://relicedge.com/contact.html" target="_blank" class="accordion-button without-sub-menu"
                                type="button">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header> -->

<section class="main_content">
    <div class="footer position-relative">
        <div class="mybazar-login-section">
            <div class="d-flex align-items-center justify-content-center ">
                
                <div class="mybazar-login-wrapper" style="margin-top: 124px;">
                    <div class="login-wrapper">
                        <div class="login-body w-100">
                           <h2 class="text-center login-title">Welcome to<span><?=htmlspecialchars($_ENV['APP_NAME']) ?></span></h2>
                            <h6 class="text-center login-para">Welcome back, Please login in to your account</h6>
                            <form method="POST" action="/PMS/login">
                                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
                                <div class="input-group">
                             <label for="demoRole" class="form-label w-100 mb-1"><h5>Choose Role for Demo</h5></label>
                    <select id="demoRole" class="form-select">
                       <option value="">-- Select Role --</option>
                        <option value="admin">Admin</option>
                      <option value="pharmacist">Pharmacist</option>
                     <option value="manager">Manager</option>
                    <option value="accountant">Accountant</option>
                    <option value="hr">HR</option>
                       </select>
                  </div>

                                <div class="input-group">
                                    <span><img loading="lazy" src="Public/assets/images/icons/user.png" alt="img"></span>
                                    <input type="email" name="email" class="form-control email"
                                        placeholder="Enter your Email" required >
                                </div>

                                <div class="input-group">
                                    <span><img loading="lazy" src="Public/assets/images/icons/lock.png" alt="img"></span>
                                    <span class="hide-pass">
                                        <img loading="lazy" src="Public/assets/images/icons/Hide.svg" alt="img">
                                        <img loading="lazy" src="Public/assets/images/icons/show.svg" alt="img">
                                    </span>
                                    <input type="password" name="password" class="form-control password" placeholder="Your Password" required >
                                </div>
   <?php if(isset($errors['email'])):?>
                <small style="color:red" class= "text-center"><?=$errors['email'] ?></small>
                <?php endif; ?>
                      <?php if(isset($errors['password'])):?>
                <p style="color:red" class= "text-center"><?=$errors['password'] ?></p>
                <?php endif; ?>
                                <div class="mt-lg-3 mb-0 forget-password">
                                    <label class="custom-control-label">
                                        <input type="checkbox" name="remember" class="custom-control-input" >
                                        <span>Remember me</span>
                                    </label>
                                    <a href="">Forgot Password</a>
                                </div>

                                <button type="submit" class="btn login-btn submit-btn">Log In</button>


                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img loading="lazy" class="position-absolute illistration-img1  bottom-0" src="Public/assets/images/login/loginillustrator2.svg" alt="" srcset="">
        <img loading="lazy" class="position-absolute illistration-img2 bottom-0 " src="Public/assets/images/login/loginillustrator1.svg" alt="" srcset="">
    </div>
    <input type="hidden" data-model="Login" id="auth">
</section>

  <footer class="footer-section py-3 position-relative">
    
    <img class="footer-shape1" src="Public/assets/images/logo/footer-shape1.svg" id="image"
    class="">
    <img class="footer-shape2" src="Public/assets/images/logo/shape3.svg" id="image"
    class="">
    

    <div class="container">
        <div class="row mt-5 justify-content-between features-section-container">
            <div class="col-md-6 col-lg-3">
                  <a href="https://pms.reliccasa.com" class="footer-logo logo-lg-device">
  <div style="display: flex; align-items: center; gap: 1px; margin-left: 138px;">
    <img class="footer-logo" src="Public/assets/images/logo/relic.png" alt="footer-logo" style="height: 100px; margin: -3rem; padding: -5px;" />
    <h1 style="margin: 0; font-size: 20px; line-height: 1; color:white;">PMS Pharmacy</h1>
  </div>
</a>
                <p class="mt-4">
                    Pharmacy Management System. The best pharmacy software system.
                </p>
                <br>
                <div class="social-icon">
                                            <a href="https://twitter.com/" target="_blank">
                            <img class="footer-social-icon"
                                src="Public/assets/images/logo/1740035756_67b6d6ac1e907.svg"
                                alt="icon" />
                        </a>
                                            <a href="https://www.instagram.com/relic.edge?igsh=MWdlODQ1Z2x2dnI4cA==" target="_blank">
                            <img class="footer-social-icon"
                                src="Public/assets/images/logo/1738983843_67a6c9a308c7d.svg"
                                alt="icon" />
                        </a>
                                            <a href="https://www.facebook.com/share/19G2JjP6DE/" target="_blank">
                            <img class="footer-social-icon"
                                src="Public/assets/images/logo/1738983843_67a6c9a309871.svg"
                                alt="icon" />
                        </a>
                                            <a href="https://youtube.com/@reliccasalimited?si=IHaaiqJ12nDokWQ9" target="_blank">
                            <img class="footer-social-icon"
                                src="Public/assets/images/logo/1738983843_67a6c9a30a609.svg"
                                alt="icon" />
                        </a>
                                    </div>
            </div>


            <div class="col-md-6 col-lg-6">
                <div class="footer-features">
                    <div class="">
                        <h6 class="mb-4 mt-3 mt-sm-0 text-white footer-title ">
                            Our App Features</h6>
                        <div class="d-flex align-items-center gap-5 footer-menu ">
                            <ul>

                                <li>
                                    <a href=""
                                        target="_blank">Customer Inventory</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Medicine Inventory</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Manufacturer List & Ledger</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Returns</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Human Resources</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Finance</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href=""
                                        target="_blank">Report</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Support</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Settings</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Members Profile</a>
                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Sales Inventory</a>

                                </li>
                                <li>
                                    <a href=""
                                        target="_blank">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="col-md-6 col-lg-3 quick-footer footer-menu">
                <h6 class="mb-4 text-white footer-title">Quick Links</h6>
                <ul>
                    <li>
                        <a href="https://pms.reliccasa.com/about-us"
                            target="_blank">About us</a>
                    </li>
                    <li>
                        <a href="https://relicedge.com/contact.html" target="_blank"
                            target="_blank">Contact Us</a>
                    </li>
                    <li>
                        <a href="https://pms.reliccasa.com/terms-conditions"
                            target="_blank">Terms And Conditions</a>
                    </li>
                    <li>
                        <a href="https://pms.reliccasa.com/privacy-policy"
                            target="_blank">Privacy Policy</a>
                    </li>

                </ul>

            </div>
        </div>
        <hr class="custom-clr-white" />
        <div class="text-center">
            <p class="text-white mb-0">© 2025 PMS, all rights reserved.</p>
        </div>
    </div>

</footer>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const roleSelect = document.getElementById('demoRole');
    const emailInput = document.querySelector('input[name="email"]');
    const passwordInput = document.querySelector('input[name="password"]');

    const demoCredentials = {
        admin:     { email: 'admin@pharmacy.com',     password: 'Relicdemo' },
        pharmacist:{ email: 'pharmacist@pharmacy.com',    password: 'Relicdemo' },
        manager:   { email: 'manager@pharmacy.com',   password: 'Relicdemo' },
        accountant:{ email: 'accountant@pharmacy.com',password: 'Relicdemo' },
        hr:        { email: 'hr@pharmacy.com',        password: 'Relicdemo' },
    };

    roleSelect.addEventListener('change', function () {
        const selected = this.value;
        if (demoCredentials[selected]) {
            emailInput.value = demoCredentials[selected].email;
            passwordInput.value = demoCredentials[selected].password;
        } else {
            emailInput.value = '';
            passwordInput.value = '';
        }
    });
});
</script>

</body>
</html>
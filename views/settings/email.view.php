<?php include __DIR__ . '/../partials/head.php' ?>
<body class="nk-body ui-rounder npc-default has-sidebar ">
  <div class="nk-app-root">
    <!-- Sidebar wrapper starts -->
      <?php include __DIR__ . '/../partials/Sidenav.php' ?>
      <!-- Sidebar wrapper ends -->
    <div class="nk-main ">
      <div class="nk-wrap ">
        <!-- App header start -->
        <?php include __DIR__ . '/../partials/header.php' ?>
                <!-- App header ends -->
        <div class="nk-content ">
          <div class="container-fluid">
            <div class="nk-content-inner">
              <div class="nk-content-body">
                <div class="nk-block">
                  <div class="card card-bordered">
                    <div class="card-aside-wrap">
                      <div class="card-inner card-inner-lg">
                        <div class="nk-block-head nk-block-head-lg">
                          <div class="nk-block-between">
                            <div class="nk-block-head-content">
                              <h5 class="nk-block-title">E-mail settings</h5><span>These settings are helps you modify your e-mail.</span>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none"><a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a></div>
                          </div>
                        </div>
                        <div class="nk-block">
                          <form action="#" class="gy-3 form-settings">
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-name">Email</label><span class="form-note">Specify the email of your hospital.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" id="site-name" value="info@softnio.com"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-email">Password</label><span class="form-note">Specify the email password.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" id="site-email" value="Nio35@**"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-copyright">SMTP Host</label><span class="form-note">Specify the SMTP host of your email address.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" id="site-copyright" value="https://www.softnio.com"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label">SMTP Port</label><span class="form-note">Specify the email SMTP port.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" id="site-copyright" value="921"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label">SMTP Encryption</label><span class="form-note">Specify the encryption of your hospital email.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" name="site-url" value="ITS"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3">
                              <div class="col-lg-7">
                                <div class="form-group mt-2"><button id="demo-lock-btn26" type="submit" class="btn btn-lg btn-primary">Update</button></div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                           <!-- right Sidebar  starts -->
           <?php include __DIR__ . '/./partials/Sidenav.php' ?>
      <!--right  Sidebar  ends --> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
     <!-- right Sidebar  starts -->
    <?php include __DIR__ . '/../partials/rightnav.php' ?>
      <!--right  Sidebar  ends --> 
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="Public/assets/js/bundle9b70.js?ver=<?php echo time(); ?>"></script>
  <script src="Public/assets/js/scripts9b70.js?ver=<?php echo time(); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
  <script src="Public/assets/js/demo-settings9b70.js?ver=<?php echo time(); ?>"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const demoBtn = document.getElementById('demo-lock-btn26');
    const message = "🚫 This is a demo version.\nTo use this feature, please purchase the system.\nContact us: info@relicedge.com";

    if (demoBtn) {
      demoBtn.addEventListener('click', function (e) {
        e.preventDefault(); 
        alert(message);
      });
    }
  });
</script>
</body>
</html>
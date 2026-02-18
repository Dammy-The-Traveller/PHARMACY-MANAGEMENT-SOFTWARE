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
                   <!-- App top-nav start -->
            <?php include __DIR__ . '/../partials/TopNav.php' ?>
                <!-- App top-nav ends -->
                <div class="nk-block">
                  <div class="card card-bordered">
                    <div class="card-aside-wrap">
                      <div class="card-inner card-inner-lg">
                        <div class="nk-block-head nk-block-head-lg">
                          <div class="nk-block-between">
                            <div class="nk-block-head-content">
                              <h5 class="title fw-medium">General settings</h5><span>These settings helps you modify site settings.</span>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none"><a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a></div>
                          </div>
                        </div>
                        <div class="nk-block">
                          <form action="#" class="form-settings gy-3">
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-name">pharmacy Name</label><span class="form-note">Specify the name of your pharmacy.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" id="site-name" value="Ancoo"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-email">pharmacy Address</label><span class="form-note">Specify the key of your pharmacy address</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="site-email" value="Softnio Street 3">
                                </div>
                                </div>
                              </div>
                            </div>

                             

                                 <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-email">pharmacy logo</label><span class="form-note">Upload your logo here</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="file" class="form-control" id="site-email" value="Softnio Street 3">
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-copyright">Copyright</label><span class="form-note">Copyright information of your pharmacy.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" id="site-copyright" value="&copy; 2019, Acnoo. All Rights Reserved."></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label">Allow Registration</label><span class="form-note">Enable or disable registration from site.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <ul class="custom-control-group g-3 align-center flex-wrap">
                                  <li>
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable"><label class="custom-control-label" for="reg-enable">Enable</label></div>
                                  </li>
                                  <li>
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="reg-public" id="reg-disable"><label class="custom-control-label" for="reg-disable">Disable</label></div>
                                  </li>
                                  <li>
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="reg-public" id="reg-request"><label class="custom-control-label" for="reg-request">On Request</label></div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label">Main Site</label><span class="form-note">Specify the URL if your main website is external.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap"><input type="text" class="form-control" name="site-url" value="https://www.softnio.com"></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-name"> Description</label><span class="form-note">Describe your pharmacy information.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <div class="form-control-wrap"><textarea class="form-control form-control no-resize" id="fv-message" name="fv-message" placeholder="Hello World!">                                                 </textarea></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3 align-center">
                              <div class="col-lg-5">
                                <div class="form-group"><label class="form-label" for="site-off">Maintenace Mode</label><span class="form-note">Enable to make Project make offline.</span></div>
                              </div>
                              <div class="col-lg-7">
                                <div class="form-group">
                                  <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" name="reg-public" id="site-off"><label class="custom-control-label" for="site-off">Offline</label></div>
                                </div>
                              </div>
                            </div>
                            <div class="row g-3">
                              <div class="col-lg-7">
                                <div class="form-group mt-2"><button id="demo-lock-btn24" type="submit" class="btn btn-lg btn-primary">Update</button></div>
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
    const demoBtn = document.getElementById('demo-lock-btn24');
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
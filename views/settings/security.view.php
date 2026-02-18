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
                              <h5 class="title fw-medium">Security Settings</h5><span>These settings are helps you keep your account secure.</span><span class="text-success"><em class="icon ni ni-shield-check"></em></span>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none"><a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a></div>
                          </div>
                        </div>
                        <div class="nk-block">
                          <div class="card card-bordered">
                            <div class="card-inner-group">
                              <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                  <div class="nk-block-text">
                                    <h6>Save my Activity Logs</h6>
                                    <p>You can save your all activity logs including unusual activity detected.</p>
                                  </div>
                                  <div class="nk-block-actions">
                                    <ul class="align-center gx-3">
                                      <li class="order-md-last">
                                        <div class="custom-control custom-switch me-n2"><input type="checkbox" class="custom-control-input" checked="" id="activity-log"><label class="custom-control-label" for="activity-log"></label></div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="card-inner">
                                <div class="between-center flex-wrap g-3">
                                  <div class="nk-block-text">
                                    <h6>Change Password</h6>
                                    <p>Set a unique password to protect your account.</p>
                                  </div>
                                  <div class="nk-block-actions flex-shrink-sm-0">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                      <li class="order-md-last"><a href="#" class="btn btn-primary">Change Password</a></li>
                                      <li><em class="text-soft text-date fs-12px">Last changed: <span>Oct 2, 2019</span></em></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                  <div class="nk-block-text">
                                    <h6>2 Factor Auth &nbsp; <span class="badge bg-success ms-0">Enabled</span></h6>
                                    <p>Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app. </p>
                                  </div>
                                  <div class="nk-block-actions"><a href="#" class="btn btn-primary">Disable</a></div>
                                </div>
                              </div>
                              <div class="card-inner">
                                <div class="between-center flex-wrap g-3">
                                  <div class="nk-block-text">
                                    <h6>Auto Logout</h6>
                                    <p>Set a auto logout time to disconnect your account from all sessions.</p>
                                  </div>
                                  <div class="nk-block-actions flex-shrink-sm-0">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                      <li class="order-md-last"><a href="#" class="btn btn-primary">Update</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="card-inner">
                                <div class="between-center flex-wrap flex-md-nowrap g-3">
                                  <div class="nk-block-text">
                                    <h6>Turn on login alerts <span class="badge bg-success ms-0">Enabled</span></h6>
                                    <p>Be notified if anyone logs in account from unknown or new device</p>
                                  </div>
                                  <div class="nk-block-actions"><a href="#" class="btn btn-primary">Disable</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
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
</body>
</html> 
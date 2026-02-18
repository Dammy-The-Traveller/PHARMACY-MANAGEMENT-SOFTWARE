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
                              <h5 class="title fw-medium">Account Activity</h5>
                              <div class="nk-block-des">
                                <p>Here is your last 20 login activities log. <span class="text-soft"><em class="icon ni ni-info text-danger"></em></span></p>
                              </div>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none"><a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a></div>
                          </div>
                        </div>
                        <div class="nk-block card card-bordered">
                          <table class="table table-ulogs">
                            <thead class="thead-light">
                              <tr>
                                <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
                                <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                <th class="tb-col-time"><span class="overline-title">Time</span></th>
                                <th class="tb-col-time"><span class="overline-title">Activity</span></th>
                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="tb-col-os">Chrome on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-danger ms-0">Deleted</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Mozilla on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-success ms-0">Updated</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Chrome on iMac</td>
                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-danger ms-0">Deleted</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Chrome on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-primary ms-0">Created</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Mozilla on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-success ms-0">Updated</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Chrome on iMac</td>
                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-primary ms-0">Created</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Chrome on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-success ms-0">Updated</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Mozilla on Window</td>
                                <td class="tb-col-ip"><span class="sub-text">86.188.154.225</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-danger ms-0">Deleted</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Chrome on iMac</td>
                                <td class="tb-col-ip"><span class="sub-text">192.149.122.128</span></td>
                                <td class="tb-col-time"><span class="sub-text">11:34 PM</span></td>
                                <td class="tb-col-time"><span class="sub-text"><span class="badge bg-primary ms-0">Created</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                              <!-- settings Sidebar  starts -->
           <?php include __DIR__ . '/./partials/Sidenav.php' ?>
      <!--settings  Sidebar  ends --> 
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
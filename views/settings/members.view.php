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
                              <h5 class="title fw-medium">Member Settings</h5><span>These settings are helps youto add or manage user.</span><span class="text-success"><em class="icon ni ni-shield-check"></em></span>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none"><a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row g-gs">
                            <div class="col-md-6"><label class="form-label">Select Member</label>
                              <div class="form-control-wrap"><select class="form-select js-select2" data-placeholder="You Can Select Multiple Users">
                                  <option value="option_select_name">Select User</option>
                                  <option value="option_select_name">Abu Bin Ishtiyak</option>
                                  <option value="option_select_name">Ashley Lawson</option>
                                  <option value="option_select_name">Joe Larson</option>
                                  <option value="option_select_name">Joe Larson</option>
                                  <option value="option_select_name">Frances Burns</option>
                                  <option value="option_select_name">Victoria Lynch</option>
                                  <option value="option_select_name">Jane Harris</option>
                                  <option value="option_select_name">Emma Walker</option>
                                  <option value="option_select_name">Patrick Newman</option>
                                  <option value="option_select_name">Victoria Lynch</option>
                                </select></div><span class="form-note text-success mt-1">Add one or more user at a time who is not a current user of this space</span>
                            </div>
                            <div class="col-md-6"><label class="form-label">Select Designation</label>
                              <div class="form-control-wrap"><select class="form-select js-select2">
                                  <option value="option_select_role">Select Designation</option>
                                  <option value="option_select_role">Admin</option>
                                  <option value="option_select_role">Manager</option>
                                  <option value="option_select_role">Delivery Man</option>
                                  <option value="option_select_role">Accountant</option>
                                  <option value="option_select_role">Pharmacist</option>
                                  <option value="option_select_role">Salesman</option>
                                  <option value="option_select_role">Cleaner</option>
                                </select></div>
                            </div>
                          </div><a href="#" id="demo-lock-btn25" class="btn btn-primary mt-2">Add Selected</a>
                        </div>
                        <div class="nk-block card card-bordered mt-5">
                          <table class="table table-ulogs">
                            <thead class="thead-light">
                              <tr>
                                <th class="tb-col-os"><span class="overline-title">Name</span></th>
                                <th class="tb-col-ip"><span class="overline-title">Email address</span></th>
                                <th class="tb-col-time"><span class="overline-title">Role</span></th>
                                <th class="tb-col-time"><span class="overline-title">Joined on</span></th>
                                <th class="tb-col-action"><span class="overline-title">&nbsp;</span></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="tb-col-os">Abu Bin Ishtiyak</td>
                                <td class="tb-col-ip"><span class="sub-text">info@softnio.com</span></td>
                                <td class="tb-col-time"><span class="sub-text">Admin</span></td>
                                <td class="tb-col-time"><span class="badge badge-dim bg-dark">10 Feb 2020</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Ashley Lawson</td>
                                <td class="tb-col-ip"><span class="sub-text">AshleyLawson@.com</span></td>
                                <td class="tb-col-time"><span class="sub-text">Manager</span></td>
                                <td class="tb-col-time"><span class="badge badge-dim bg-warning">17 Feb 2020</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Joe Larson</td>
                                <td class="tb-col-ip"><span class="sub-text">joelarson123@gmail.com</span></td>
                                <td class="tb-col-time"><span class="sub-text">Pharmacist</span></td>
                                <td class="tb-col-time"><span class="badge badge-dim bg-info">31 Jan 2020</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Jane Harris</td>
                                <td class="tb-col-ip"><span class="sub-text">Jane@Harris.com</span></td>
                                <td class="tb-col-time"><span class="sub-text">Salesman</span></td>
                                <td class="tb-col-time"><span class="badge badge-dim bg-success">19 Feb 2020</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Frances Burns</td>
                                <td class="tb-col-ip"><span class="sub-text">Frances@Burns.com</span></td>
                                <td class="tb-col-time"><span class="sub-text">Delivery Man</span></td>
                                <td class="tb-col-time"><span class="badge badge-dim bg-danger">17 Feb 2020</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                              <tr>
                                <td class="tb-col-os">Victoria Lynch</td>
                                <td class="tb-col-ip"><span class="sub-text">Victoria@Lynch.com</span></td>
                                <td class="tb-col-time"><span class="sub-text">Cleaner</span></td>
                                <td class="tb-col-time"><span class="badge badge-dim bg-gray">11 jan 2020</span>
                                <td class="tb-col-action"><a href="#" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                              </tr>
                            </tbody>
                          </table>
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
    const demoBtn = document.getElementById('demo-lock-btn25');
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
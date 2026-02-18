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
                    <div class="card-inner">
                      <div class="row gy-4">
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="first-name">First Name</label><input type="text" class="form-control" id="first-name" placeholder="First Name" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="last-name">Last Name</label><input type="text" class="form-control" id="last-name" placeholder="Last Name"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Gender</label>
                            <div class="form-control-wrap"><select class="form-select js-select2" data-placeholder="Select multiple options">
                                <option value="default_option">Select</option>
                                <option value="option_select_gender">Male</option>
                                <option value="option_select_gender">Female</option>
                                <option value="option_select_gender">Other</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Date of Birth</label>
                            <div class="form-control-wrap">
                              <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="phone-no">Phone</label><input type="number" class="form-control" id="phone-no" placeholder="Phone no"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="email">Email</label><input type="email" class="form-control" id="email" placeholder="Email"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Adddress</label><input type="text" class="form-control" id="address" placeholder="Address"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="photo">Upload Photo</label>
                            <div class="form-control-wrap">
                              <div class="custom-file"><input type="file" multiple class="form-control" id="customFile"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Designation</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Select</option>
                                <option value="option_select_designation">Admin</option>
                                <option value="option_select_designation">Manager</option>
                                <option value="option_select_designation">Pharmacist</option>
                                <option value="option_select_designation">Accountant</option>
                                <option value="option_select_designation">Salesman</option>
                                <option value="option_select_designation">Cleaner</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="nidLabel">National ID</label>
                            <div class="form-control-wrap">
                              <div class="custom-file"><input type="file" multiple class="form-control" id="nid"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="certificatesLabel">Certificates</label>
                            <div class="form-control-wrap">
                              <div class="custom-file"><input type="file" multiple class="form-control" id="certificates"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Joining Date</label>
                            <div class="form-control-wrap">
                              <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Status</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Active</option>
                                <option value="option_select_status">Inactive</option>
                                <option value="option_select_status">Pending</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group"><label class="form-label" for="bio">Short Biography</label>
                            <div class="form-control-wrap">
                              <div class="quill-basic">
                                <p>Hello World!</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group"><button type="submit" class="btn btn-primary">Add Member</button></div>
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
    </div>
  </div>
  <!-- right Sidebar  starts -->
    <?php include __DIR__ . '/../partials/rightnav.php' ?>
      <!--right  Sidebar  ends --> 
  <script src="Public/assets/js/bundle9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/scripts9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/demo-settings9b70.js?ver=3.3.0"></script>
  <link rel="stylesheet" href="Public/assets/css/editors/quill9b70.css?ver=3.3.0">
  <script src="Public/assets/js/libs/editors/quill9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/editors9b70.js?ver=3.3.0"></script>
</body>
</html>
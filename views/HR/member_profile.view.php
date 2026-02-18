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
                              <h4 class="nk-block-title">Personal Information</h4>
                              <div class="nk-block-des">
                                <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                              </div>
                            </div>
                            <div class="nk-block-head-content align-self-start d-lg-none"><a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a></div>
                          </div>
                        </div>
                        <div class="nk-block">
                          <div class="nk-data data-list">
                            <div class="data-head">
                              <h6 class="overline-title">Basics</h6>
                            </div>
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                              <div class="data-col"><span class="data-label">Full Name</span><span class="data-value">Abu Bin Ishtiyak</span></div>
                              <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                              <div class="data-col"><span class="data-label">Display Name</span><span class="data-value">Ishtiyak</span></div>
                              <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item">
                              <div class="data-col"><span class="data-label">Email</span><span class="data-value">info@softnio.com</span></div>
                              <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                            </div>
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                              <div class="data-col"><span class="data-label">Phone Number</span><span class="data-value text-soft">Not add yet</span></div>
                              <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                              <div class="data-col"><span class="data-label">Date of Birth</span><span class="data-value">29 Feb, 1986</span></div>
                              <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit" data-tab-target="#address">
                              <div class="data-col"><span class="data-label">Address</span><span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span></div>
                              <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                          </div>
                          <div class="nk-data data-list">
                            <div class="data-head">
                              <h6 class="overline-title">Preferences</h6>
                            </div>
                            <div class="data-item">
                              <div class="data-col"><span class="data-label">Language</span><span class="data-value">English (United State)</span></div>
                              <div class="data-col data-col-end"><a href="#" class="link link-primary">Change Language</a></div>
                            </div>
                            <div class="data-item">
                              <div class="data-col"><span class="data-label">Date Format</span><span class="data-value">M d, YYYY</span></div>
                              <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
                            </div>
                            <div class="data-item">
                              <div class="data-col"><span class="data-label">Timezone</span><span class="data-value">Bangladesh (GMT +6)</span></div>
                              <div class="data-col data-col-end"><a href="#" class="link link-primary">Change</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                        <!-- HR Sidebar  starts -->
                      <?php include __DIR__ . '/./partials/sidenav.php' ?>
                      <!--HR Sidebar  ends --> 
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
  <div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-lg">
          <h5 class="title">Update Profile</h5>
          <ul class="nk-nav nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#address">Address</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="personal">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="full-name">Full Name</label><input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name"></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="display-name">Display Name</label><input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name"></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="phone-no">Phone Number</label><input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number"></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="birth-day">Date of Birth</label><input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your birth day"></div>
                </div>
                <div class="col-12">
                  <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="latest-sale"><label class="custom-control-label" for="latest-sale">Use full name to display </label></div>
                </div>
                <div class="col-12">
                  <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li><a href="#" id="demo-lock-btn12" data-bs-dismiss="modal" class="btn btn-lg btn-primary">Update Profile</a></li>
                    <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="address">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="address-l1">Address Line 1</label><input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive"></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="address-l2">Address Line 2</label><input type="text" class="form-control form-control-lg" id="address-l2" value=""></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="address-st">State</label><input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky"></div>
                </div>
                <div class="col-md-6">
                  <div class="form-group"><label class="form-label" for="address-county">Country</label><select class="form-select js-select2" id="address-county" data-ui="lg">
                      <option>Canada</option>
                      <option>United State</option>
                      <option>United Kindom</option>
                      <option>Australia</option>
                      <option>India</option>
                      <option>Bangladesh</option>
                    </select></div>
                </div>
                <div class="col-12">
                  <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                    <li><a href="#" id="demo-lock-btn13" class="btn btn-lg btn-primary">Update Address</a></li>
                    <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a></li>
                  </ul>
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
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const demoAlert = "⚠️ This is a demo version.\nTo get full access, please purchase the product.\nContact us: info@relicedge.com";

   
    const buttonIds = [
      'demo-lock-btn13',
      'demo-lock-btn12',  
    ];

    buttonIds.forEach(id => {
      const btn = document.getElementById(id);
      if (btn) {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          alert(demoAlert);
        });
      }
    });
  });
</script>
</body>
</html>
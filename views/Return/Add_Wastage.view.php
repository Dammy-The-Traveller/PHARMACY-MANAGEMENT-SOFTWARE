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
                          <div class="form-group"><label class="form-label" for="name">Customer</label><input type="text" class="form-control" id="name" placeholder="Customer" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="seller">Seller</label><input type="text" class="form-control" id="seller" placeholder="Seller" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="mail">Email</label><input type="email" class="form-control" id="mail" placeholder="Email"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="name">Product Name</label><input type="text" class="form-control" id="name" placeholder="Name" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="gname">Generic Name</label><input type="text" class="form-control" id="gname" placeholder="Generic Name" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Category</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Select</option>
                                <option value="option_select_reason">Tablet</option>
                                <option value="option_select_reason">Syrup</option>
                                <option value="option_select_reason">Vitamin</option>
                                <option value="option_select_reason">Inhealer</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="amount">Amount</label><input type="number" class="form-control" id="amount" placeholder="Amount" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="invoice">Invoice No</label><input type="number" class="form-control" id="invoice" placeholder="Invoice No" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Reason</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Select</option>
                                <option value="option_select_reason">Wrong medication</option>
                                <option value="option_select_reason">Wrong dispensing</option>
                                <option value="option_select_reason">Subsidence symptoms</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="quantity">Quantity</label><input type="number" class="form-control" id="quantity" placeholder="Quantity" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Date</label>
                            <div class="form-control-wrap"><input type="text" class="form-control date-picker" placeholder="Date"></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Status</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Select</option>
                                <option value="option_select_status">Active</option>
                                <option value="option_select_status">Inactive</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group"><label class="form-label" for="bio">Description</label>
                            <div class="form-control-wrap">
                              <div class="quill-basic">
                                <p>Hello World!</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                            <li><a href="#" id="demo-lock-btn8" data-bs-dismiss="modal" class="btn btn-primary">Add Return</a></li>
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

       <script>
  document.addEventListener('DOMContentLoaded', function () {
    const demoBtn = document.getElementById('demo-lock-btn8');
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
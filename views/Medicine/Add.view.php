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
                          <div class="form-group"><label class="form-label" for="name">Medicine Name</label><input type="text" class="form-control" id="name" placeholder="Medicine Name" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="generic">Generic name</label><input type="number" class="form-control" id="generic" placeholder="Generic Name"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="sKU">SKU</label><input type="email" class="form-control" id="sKU" placeholder="SKU"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="weight">Weight</label><input type="text" class="form-control" id="weight" placeholder="Weight"></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Category</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Select</option>
                                <option value="option_select_category">Tablet</option>
                                <option value="option_select_category">Syrup</option>
                                <option value="option_select_category">Vitamin</option>
                                <option value="option_select_category">Inhealer</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Manufacturer</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">Select</option>
                                <option value="option_select_manufacturer">Healthcare</option>
                                <option value="option_select_category">Square</option>
                                <option value="option_select_category">lupin</option>
                                <option value="option_select_category">Sun</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="price">Price</label><input type="number" class="form-control" id="price" placeholder="Price" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label" for="manufacturer Price">Manufacturer Price</label><input type="number" class="form-control" id="manufacturer Price" placeholder="Manufacturer Price" required></div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Stock(Box)</label>
                            <div class="form-control-wrap number-spinner-wrap"><button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button><input type="number" class="form-control number-spinner" value="0"><button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button></div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Expire Date</label>
                            <div class="form-control-wrap">
                              <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                            </div>
                          </div>
                        </div>
                        <div class="col-xxl-3 col-md-4">
                          <div class="form-group"><label class="form-label">Status</label>
                            <div class="form-control-wrap"><select class="form-select js-select2">
                                <option value="default_option">select</option>
                                <option value="option_select_status">Active</option>
                                <option value="option_select_status">Inactive</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group"><label class="form-label" for="bio">Medicine Details</label>
                            <div class="form-control-wrap">
                              <div class="quill-basic">
                                <p>Hello World!</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group"><button id="demo-lock-btn3" type="submit" class="btn btn-primary">Add Medicine</button></div>
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
    const demoBtn = document.getElementById('demo-lock-btn3');
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
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
                      <div class="card-content">
                        <div class="card-inner">
                          <div class="nk-block">
                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                              <h5 class="title">Medicine Information</h5>
                            </div>
                            <div class="row gy-5">
                              <div class="col-md-3 col-lg-2 col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Name</span><span>Zimax</span></div>
                              </div>
                              <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Generic Name</span><span>Azithromycin</span></div>
                              </div>
                              <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Weight</span><span>500mg</span></div>
                              </div>
                              <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Category</span><span>Tablet</span></div>
                              </div>
                              <div class="col-md-3 col-lg-2  col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Manufacturer</span><span>Healthcare</span></div>
                              </div>
                              <div class="col-md-3 col-lg-2 col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Expire Date</span><span>19/12/2020</span></div>
                              </div>
                            </div>
                            <div class="row gy-5">
                              <div class="col-md-3 col-lg-2 col-6">
                                <div class="profile-stats"><span class="profile-ud-label">Popularity</span>
                                  <div><em class="icon ni ni-star-fill text-warning"></em><em class="icon ni ni-star-fill text-warning"></em><em class="icon ni ni-star-fill text-warning"></em><em class="icon ni ni-star-fill text-warning"></em><em class="icon ni ni-star-fill text-warning"></em></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="nk-divider divider md"></div>
                          <div class="nk-block">
                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                              <h5 class="title">Stock</h5>
                            </div>
                            <div class="row gy-5">
                              <div class="col-md-3 col-sm-4">
                                <div class="profile-stats"><span class="profile-ud-label">Starting Stock</span><span class="amount">230box</span></div>
                              </div>
                              <div class="col-md-3 col-sm-4">
                                <div class="profile-stats"><span class="profile-ud-label">Current Stock</span><span class="amount">180box</span></div>
                              </div>
                              <div class="col-md-3 col-sm-4">
                                <div class="profile-stats"><span class="profile-ud-label">Stock Status</span><span class="badge bg-primary">Available</span></div>
                              </div>
                            </div>
                            <div class="row gy-5">
                              <div class="col-lg-4 col-8">
                                <div class="profile-stats"><span class="profile-ud-label">Remaining</span>
                                  <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" data-progress="75">75%</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="nk-divider divider md"></div>
                          <div class="nk-block">
                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                              <h5 class="title">Estimate</h5>
                            </div>
                            <div class="row gy-5">
                              <div class="col-md-3 col-sm-4">
                                <div class="profile-stats"><span class="profile-ud-label">Manufacture price</span><span class="amount">50.00USD</span></div>
                              </div>
                              <div class="col-md-3 col-sm-4">
                                <div class="profile-stats"><span class="profile-ud-label">Seeling price</span><span class="amount">60.00USD </span></div>
                              </div>
                              <div class="col-md-3 col-sm-4">
                                <div class="profile-stats"><span class="profile-ud-label">Wholesale Price</span><span class="amount">55.00USD</span></div>
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
      </div>
    </div>
  </div>
  <div class="modal fade" tabindex="-1" id="modalDelete">
    <div class="modal-dialog" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
        <div class="modal-body modal-body-lg text-center">
          <div class="nk-modal py-4"><em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
            <h4 class="nk-modal-title">Are You Sure ?</h4>
            <div class="nk-modal-text mt-n2">
              <p class="text-soft">This event data will be removed permanently.</p>
            </div>
            <ul class="d-flex justify-content-center gx-4 mt-4">
              <li><button data-bs-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Deleteit</button></li>
              <li><button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="editMedicine">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-md">
          <h5 class="modal-title">Edit Medicine</h5>
          <form action="#" class="mt-4">
            <div class="row g-gs">
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="name">Medicine Name</label><input type="text" class="form-control" id="name" placeholder="Medicine Name" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="generic">Generic name</label><input type="number" class="form-control" id="generic" placeholder="Generic Name"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="sKU">SKU</label><input type="email" class="form-control" id="sKU" placeholder="SKU"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="weight">Weight</label><input type="text" class="form-control" id="weight" placeholder="Weight"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Category</label>
                  <div class="form-control-wrap"><select class="form-select">
                      <option value="default_option">Select</option>
                      <option value="option_select_category">Tablet</option>
                      <option value="option_select_category">Syrup</option>
                      <option value="option_select_category">Vitamin</option>
                      <option value="option_select_category">Inhealer</option>
                    </select></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Manufacturer</label>
                  <div class="form-control-wrap"><select class="form-select">
                      <option value="default_option">Select</option>
                      <option value="option_select_manufacturer">Healthcare</option>
                      <option value="option_select_category">Square</option>
                      <option value="option_select_category">lupin</option>
                      <option value="option_select_category">Sun</option>
                    </select></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="price">Price</label><input type="number" class="form-control" id="price" placeholder="Price" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="manufacturer Price">Manufacturer Price</label><input type="number" class="form-control" id="manufacturer Price" placeholder="Manufacturer Price" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Stock(Box)</label>
                  <div class="form-control-wrap number-spinner-wrap"><button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button><input type="number" class="form-control number-spinner" value="0"><button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Expire Date</label>
                  <div class="form-control-wrap">
                    <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li><a href="#" data-bs-dismiss="modal" class="btn btn-primary">Edit Medicine</a></li>
                  <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a></li>
                </ul>
              </div>
            </div>
          </form>
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
</body>
</html>
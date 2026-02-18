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
                  <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                      <div class="card-inner position-relative card-tools-toggle">
                        <div class="card-title-group">
                          <div class="card-tools">
                            <div class="form-inline flex-nowrap gx-3">
                              <div class="form-wrap w-150px"><select class="form-select form-select-sm js-select2" data-search="off" data-placeholder="Bulk Action">
                                  <option value="">Bulk Action</option>
                                  <option value="delete">Delete</option>
                                  <option value="change">Change status</option>
                                </select></div>
                              <div class="btn-wrap"><span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span><span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span></div>
                            </div>
                          </div>
                          <div class="card-tools me-n1">
                            <ul class="btn-toolbar gx-1">
                              <li><a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                              <li class="btn-toolbar-sep"></li>
                              <li>
                                <div class="toggle-wrap"><a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                  <div class="toggle-content" data-content="cardTools">
                                    <ul class="btn-toolbar gx-1">
                                      <li class="toggle-close"><a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a></li>
                                      <li>
                                        <div class="dropdown"><a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="dot dot-primary"></div><em class="icon ni ni-filter-alt"></em>
                                          </a>
                                          <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head"><span class="sub-title dropdown-title">Filter Stock</span>
                                              <div class="dropdown"><a href="#" class="btn btn-sm btn-icon"><em class="icon ni ni-more-h"></em></a></div>
                                            </div>
                                            <div class="dropdown-body dropdown-body-rg">
                                              <div class="row gx-6 gy-3">
                                                <div class="col-6">
                                                  <div class="form-group"><label class="overline-title overline-title-alt">Status</label><select class="form-select form-select-sm js-select2">
                                                      <option value="out">Any Status</option>
                                                      <option value="low">Low</option>
                                                      <option value="out">Out of stock</option>
                                                      <option value="available">Available</option>
                                                    </select></div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group"><label class="overline-title overline-title-alt">Date</label>
                                                    <div class="form-control-wrap">
                                                      <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-12">
                                                  <div class="form-group"><button type="button" class="btn btn-secondary">Filter</button></div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="dropdown-foot between"><a class="clickable" href="#">Reset Filter</a><a href="#">Save Filter</a></div>
                                          </div>
                                        </div>
                                      </li>
                                      <li>
                                        <div class="dropdown"><a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                          <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                            <ul class="link-check">
                                              <li><span>Show</span></li>
                                              <li class="active"><a href="#">10</a></li>
                                              <li><a href="#">20</a></li>
                                              <li><a href="#">50</a></li>
                                            </ul>
                                            <ul class="link-check">
                                              <li><span>Order</span></li>
                                              <li class="active"><a href="#">DESC</a></li>
                                              <li><a href="#">ASC</a></li>
                                            </ul>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-search search-wrap" data-search="search">
                          <div class="card-body">
                            <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-ulist">
                          <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid"><label class="custom-control-label" for="uid"></label></div>
                            </div>
                            <div class="nk-tb-col"><span>Medicine Name</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Manufacturer Name</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">In Quantity(Box)</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Out Quantity(Box)</span></div>
                            <div class="nk-tb-col"><span>Stock(Box)</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid1"><label class="custom-control-label" for="uid1"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Zimax</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-info-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Square</span><span>square@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>3090</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>2090</span></div>
                            <div class="nk-tb-col"><span>100</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-warning">Low</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid2"><label class="custom-control-label" for="uid2"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Oxidin</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-danger-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Lupun</span><span>lupin@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>5029</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>2098</span></div>
                            <div class="nk-tb-col"><span>2931</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-success">Available</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid3"><label class="custom-control-label" for="uid3"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">MED-1008</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-warning-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Lupun</span><span>lupin@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>7865</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>2342</span></div>
                            <div class="nk-tb-col"><span>5526</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-success">Available</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid4"><label class="custom-control-label" for="uid4"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Ceevit</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-dark-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Medicare</span><span>medicare@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>350</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>240</span></div>
                            <div class="nk-tb-col"><span>110</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-warning">Low</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid5"><label class="custom-control-label" for="uid5"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">DON-A</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-pink-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Supportmedi</span><span>supportmedi@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>3500</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>3500</span></div>
                            <div class="nk-tb-col"><span>0</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-danger">Out Of stock</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid6"><label class="custom-control-label" for="uid6"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Pantonix</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-success-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Sunflower</span><span>sunflower@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>210</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>150</span></div>
                            <div class="nk-tb-col"><span>60</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-warning">Low</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid7"><label class="custom-control-label" for="uid7"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Isoniazid</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-indigo-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Acme</span><span>acme@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>2200</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>1500</span></div>
                            <div class="nk-tb-col"><span>700</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-success">Available</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid8"><label class="custom-control-label" for="uid8"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Ec Plus</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-blue-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">oxidin</span><span>oxidin@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>1300</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>800</span></div>
                            <div class="nk-tb-col"><span>500</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-warning">Available</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid9"><label class="custom-control-label" for="uid9"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Voltaren</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-light"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Heaven Life</span><span>heaven@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>1000</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>900</span></div>
                            <div class="nk-tb-col"><span>100</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-warning">Low</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid10"><label class="custom-control-label" for="uid10"></label></div>
                            </div>
                            <div class="nk-tb-col"><a href="/PMS/MedicineDetails"><span class="tb-product"><span class="title">Acetylaclic Acid</span></span></a></div>
                            <div class="nk-tb-col tb-col-mb"><a href="#">
                                <div class="user-card">
                                  <div class="user-avatar bg-primary-dim"><span><em class="icon ni ni-home-fill"></em></span></div>
                                  <div class="user-info"><span class="tb-lead">Healthcare</span><span>info@softnio.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-md"><span>6532</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>6532</span></div>
                            <div class="nk-tb-col"><span>0</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="tb-status text-danger">Out Of Stock</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner">
                        <ul class="pagination justify-content-center justify-content-md-start">
                          <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                          <li class="page-item"><a class="page-link" href="#">6</a></li>
                          <li class="page-item"><a class="page-link" href="#">7</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
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
  <div class="modal fade" tabindex="-1" role="dialog" id="addStock">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-md">
          <h5 class="modal-title">Add Stock</h5>
          <form action="#" class="mt-4">
            <div class="row g-gs">
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="name">Medicine Name</label><input type="text" class="form-control" id="name" placeholder="Medicine Name" required></div>
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
                <div class="form-group"><label class="form-label">In Quantity(Box)</label>
                  <div class="form-control-wrap number-spinner-wrap"><button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button><input type="number" class="form-control number-spinner" value="0"><button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Out Quantity(Box)</label>
                  <div class="form-control-wrap number-spinner-wrap"><button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button><input type="number" class="form-control number-spinner" value="0"><button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Stock(Box)</label>
                  <div class="form-control-wrap number-spinner-wrap"><button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button><input type="number" class="form-control number-spinner" value="0"><button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Status</label>
                  <div class="form-control-wrap"><select class="form-select">
                      <option value="default_option">Select</option>
                      <option value="option_select_status">Low</option>
                      <option value="option_select_status">Available</option>
                      <option value="option_select_status">Out Of Stock</option>
                    </select></div>
                </div>
              </div>
              <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li><a href="#" id="demo-lock-btn21" data-bs-dismiss="modal" class="btn btn-primary">Add Stock</a></li>
                  <li><a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a></li>
                </ul>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
    <!-- right Sidebar  starts -->
    <?php include __DIR__ . '/../partials/rightnav.php' ?>
      <!--right  Sidebar  ends --> 
  <script src="Public/assets/js/bundle9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/scripts9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/demo-settings9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/charts/pharmacy-report9b70.js?ver=3.3.0"></script>

      <script>
  document.addEventListener('DOMContentLoaded', function () {
    const demoBtn = document.getElementById('demo-lock-btn21');
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
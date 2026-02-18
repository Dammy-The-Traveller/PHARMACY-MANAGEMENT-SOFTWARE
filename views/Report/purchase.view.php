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
                            <div class="form-control-wrap">
                              <div class="input-daterange date-picker-range input-group"><input type="text" class="form-control" placeholder="Start Date" />
                                <div class="input-group-addon">TO</div><input type="text" class="form-control" placeholder="End Date" />
                              </div>
                            </div>
                          </div>
                          <div class="card-tools me-n1">
                            <ul class="btn-toolbar gx-1">
                              <li><a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                            </ul>
                          </div>
                          <div class="card-search search-wrap" data-search="search">
                            <div class="card-body">
                              <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                            </div>
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
                            <div class="nk-tb-col"><span>Invoice No</span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Purchase Id</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Manufacturer Name</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date</span></div>
                            <div class="nk-tb-col"><span>total Amount</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid1"><label class="custom-control-label" for="uid1"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#746F5K2</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-10</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Healthcare</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>17/05/2021</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">80.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid2"><label class="custom-control-label" for="uid2"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#546H74W</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-13</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Square</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>19/12/2020</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">20.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid3"><label class="custom-control-label" for="uid3"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#986G531</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-31</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Lupun</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>02/04/2021</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">18.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid4"><label class="custom-control-label" for="uid4"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#924GH92</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-62</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Sun</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>01/05/2022</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">65.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid5"><label class="custom-control-label" for="uid5"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#165F9K2</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-79</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Medicare</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>07/07/2022</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">62.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid6"><label class="custom-control-label" for="uid6"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#546H74W</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-21</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Supportmedi</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>19/12/2020</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">21.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid7"><label class="custom-control-label" for="uid7"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#87X6A44</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-40</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Sunflower</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>03/04/2021</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">60.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid8"><label class="custom-control-label" for="uid8"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#846F5K2</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-25</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Oxidin</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>02/04/2022</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">79.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid9"><label class="custom-control-label" for="uid9"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#174K7M5</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-32</span></div>
                            <div class="nk-tb-col tb-col-md"><span>HeavenLife</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>12/12/2021</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">58.00 <span class="currency">USD</span></span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid10"><label class="custom-control-label" for="uid10"></label></div>
                            </div>
                            <div class="nk-tb-col"><span class="tb-odr-id"><a href="/PMS/invoice-details">#4S8F5K7</a></span></div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium">#P-52</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Acme</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>19/12/2020</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">20.55 <span class="currency">USD</span></span></div>
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
  <div class="modal fade" tabindex="-1" role="dialog" id="addPurchase">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-md">
          <h5 class="modal-title">Add Purchase</h5>
          <form action="#" class="mt-4">
            <div class="row g-gs">
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="name">Manufacturer Name</label><input type="text" class="form-control" id="name" placeholder="Manufacturer Name" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Date</label>
                  <div class="form-control-wrap">
                    <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="amount">Total Amount</label><input type="number" class="form-control" id="amount" placeholder="Amount" required></div>
              </div>
              <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li><a href="#" id="demo-lock-btn20" data-bs-dismiss="modal" class="btn btn-primary">Add Purchase</a></li>
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

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const demoBtn = document.getElementById('demo-lock-btn20');
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
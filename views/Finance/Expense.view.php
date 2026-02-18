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
                  <div class="row g-gs">
                    <div class="col-xxl-3 col-sm-6">
                      <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                          <div class="card-inner">
                            <div class="card-title-group">
                              <div class="card-title">
                                <h6 class="title">Electricity Charges</h6>
                              </div>
                            </div>
                            <div class="data">
                              <div class="data-group">
                                <div class="amount">$7,955</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3" id="electricity"></canvas></div>
                              </div>
                              <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-up"></em>2.23%</span><span> vs. last month</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                      <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                          <div class="card-inner">
                            <div class="card-title-group">
                              <div class="card-title">
                                <h6 class="title">Equipements</h6>
                              </div>
                            </div>
                            <div class="data">
                              <div class="data-group">
                                <div class="amount">$8,830</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3" id="equipements"></canvas></div>
                              </div>
                              <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-down"></em>1.12%</span><span> vs. last month</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                      <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                          <div class="card-inner">
                            <div class="card-title-group">
                              <div class="card-title ">
                                <h6 class="title">Maintenance</h6>
                              </div>
                            </div>
                            <div class="data">
                              <div class="data-group">
                                <div class="amount">$8,974</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3" id="maintenance"></canvas></div>
                              </div>
                              <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-up"></em>1.36%</span><span> vs. last month</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-sm-6">
                      <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                          <div class="card-inner">
                            <div class="card-title-group">
                              <div class="card-title">
                                <h6 class="title">Manufacture</h6>
                              </div>
                            </div>
                            <div class="data">
                              <div class="data-group">
                                <div class="amount">$30,485</div>
                                <div class="nk-ecwg6-ck"><canvas class="ecommerce-line-chart-s3" id="rents"></canvas></div>
                              </div>
                              <div class="info"><span class="change down text-primary"><em class="icon ni ni-arrow-long-up"></em>1.34%</span><span> vs. last month</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="nk-block">
                  <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                      <div class="card-inner position-relative card-tools-toggle">
                        <div class="card-title-group">
                          <div class="card-title">
                            <h5 class="title">Expenses List</h5>
                          </div>
                          <div class="card-tools me-n1">
                            <ul class="btn-toolbar gx-1">
                              <li><a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                              <li class="btn-toolbar-sep"></li>
                              <li>
                                <div class="dropdown"><a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
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
                                    <ul class="link-check">
                                      <li><span>Density</span></li>
                                      <li class="active"><a href="#">Regular</a></li>
                                      <li><a href="#">Compact</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-search search-wrap" data-search="search">
                          <div class="card-body">
                            <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by expense head"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-ulist is-compact">
                          <div class="nk-tb-item nk-tb-head bg-success-dim">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid"><label class="custom-control-label" for="uid"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="sub-text">Invoice ID</span></div>
                            <div class="nk-tb-col"><span class="sub-text">Category</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Expense Head</span></div>
                            <div class="nk-tb-col"><span class="sub-text">Amount</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid1"><label class="custom-control-label" for="uid1"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#746F5K2</a></span></div>
                            <div class="nk-tb-col"><span>Pharmacy Rent</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>23 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Building rent</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$2300.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid2"><label class="custom-control-label" for="uid2"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#546H74W</a></span></div>
                            <div class="nk-tb-col"><span>EKG/ECG Machines</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>12 Jan 2020</span></div>
                            <div class="nk-tb-col tb-col-md"><span> Equipements</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$3020.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid3"><label class="custom-control-label" for="uid3"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#87X6A44</a></span></div>
                            <div class="nk-tb-col"><span>Vitamin C</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>26 Dec 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Manufacturing Cost</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$560.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid4"><label class="custom-control-label" for="uid4"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#986G531</a></span></div>
                            <div class="nk-tb-col"><span>Electricity Bill</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>21 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Electricity Charges</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$5540.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid5"><label class="custom-control-label" for="uid5"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#326T4M9</a></span></div>
                            <div class="nk-tb-col"><span>Tablet</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>21 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Manufacturing Cost</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$1200.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid6"><label class="custom-control-label" for="uid6"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#746F5K2</a></span></div>
                            <div class="nk-tb-col"><span>Syrup</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>23 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Manufacturing Cost</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$3350.99</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid7"><label class="custom-control-label" for="uid7"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#546H74W</a></span></div>
                            <div class="nk-tb-col"><span>Desc Bill</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>24 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Electricity Charges</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$5550.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid8"><label class="custom-control-label" for="uid8"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#87X6A44</a></span></div>
                            <div class="nk-tb-col"><span>Inhealer</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>25 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Manufacturing Cost</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$8000.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid9"><label class="custom-control-label" for="uid9"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#69X6445</a></span></div>
                            <div class="nk-tb-col"><span>Mask</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>26 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Equipements</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$7050.00</span></div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid10"><label class="custom-control-label" for="uid10"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"><span class="fw-medium"><a href="/PMS/invoice-details">#4206469</a></span></div>
                            <div class="nk-tb-col"><span>Lift Maintenance</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>27 Jan 2019</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Maintenance</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">$2100.00</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner">
                        <div class="nk-block-between-md g-3">
                          <div class="g">
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
                          <div class="g">
                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                              <div>Page</div>
                              <div><select class="form-select form-select-sm js-select2" data-search="on" data-dropdown="xs center">
                                  <option value="page-1">1</option>
                                  <option value="page-2">2</option>
                                  <option value="page-4">4</option>
                                  <option value="page-5">5</option>
                                  <option value="page-6">6</option>
                                  <option value="page-7">7</option>
                                  <option value="page-8">8</option>
                                  <option value="page-9">9</option>
                                  <option value="page-10">10</option>
                                  <option value="page-11">11</option>
                                  <option value="page-12">12</option>
                                  <option value="page-13">13</option>
                                  <option value="page-14">14</option>
                                  <option value="page-15">15</option>
                                  <option value="page-16">16</option>
                                  <option value="page-17">17</option>
                                  <option value="page-18">18</option>
                                  <option value="page-19">19</option>
                                  <option value="page-20">20</option>
                                </select></div>
                              <div>OF 102</div>
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
  <div class="modal fade" tabindex="-1" role="dialog" id="addExpense">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-md">
          <h5 class="modal-title">Add Expense</h5>
          <form action="#" class="mt-4">
            <div class="row g-gs">
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="invoiceId">Invoice ID</label><input type="text" class="form-control" id="invoiceId" placeholder="Invoice ID"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="category">Category</label><input type="text" class="form-control" id="category" placeholder="Category"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Date</label>
                  <div class="form-control-wrap">
                    <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="expenseHead">Expense Head</label><input type="text" class="form-control" id="expenseHead" placeholder="Expense Head"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="amount">Amount</label><input type="number" class="form-control" id="amount" placeholder="$100"></div>
              </div>
              <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li><a href="#" id="demo-lock-btn20" data-bs-dismiss="modal" class="btn btn-primary">Add Expense</a></li>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="Public/assets/js/bundle9b70.js?ver=<?php echo time(); ?>"></script>
  <script src="Public/assets/js/scripts9b70.js?ver=<?php echo time(); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
  <script src="Public/assets/js/demo-settings9b70.js?ver=<?php echo time(); ?>"></script>
  <script src="Public/assets/js/charts/pharmacy-report9b70.js?ver=3.3.0"></script>

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
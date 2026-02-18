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
                      <div class="card-inner">
                        <div class="card-title-group">
                          <div class="card-title">
                            <h5 class="title">All Invoice</h5>
                          </div>
                          <div class="card-tools me-n1">
                            <ul class="btn-toolbar">
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
                          <div class="card-search search-wrap" data-search="search">
                            <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by order id"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner p-0">
                        <table class="table table-orders">
                          <thead class="tb-odr-head">
                            <tr class="tb-odr-item">
                              <th class="tb-odr-info"><span class="tb-odr-id">Order ID</span><span class="tb-odr-date d-none d-md-inline-block">Date</span></th>
                              <th class="tb-odr-amount"><span class="tb-odr-total">Amount</span><span class="tb-odr-status d-none d-md-inline-block">Status</span></th>
                              <th class="tb-odr-action">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody class="tb-odr-body">
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#746F5K2</a></span><span class="tb-odr-date">23 Jan 2019, 10:45pm</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$2300.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-success">Complete</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice-print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#546H74W</a></span><span class="tb-odr-date">12 Jan 2020, 10:45pm</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$120.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-warning">Pending</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#87X6A44</a></span><span class="tb-odr-date">26 Dec 2019, 12:15 pm</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$560.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-success">Complete</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#986G531</a></span><span class="tb-odr-date">21 Jan 2019, 6 :12 am</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$3654.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-danger">Cancelled</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#326T4M9</a></span><span class="tb-odr-date">21 Jan 2019, 6 :12 am</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$200.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-success">Complete</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#746F5K2</a></span><span class="tb-odr-date">23 Jan 2019, 10:45pm</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$2300.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-success">Complete</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#546H74W</a></span><span class="tb-odr-date">12 Jan 2020, 10:45pm</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$120.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-warning">Pending</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                            <tr class="tb-odr-item">
                              <td class="tb-odr-info"><span class="tb-odr-id"><a href="/PMS/invoice-details">#87X6A44</a></span><span class="tb-odr-date">26 Dec 2019, 12:15 pm</span></td>
                              <td class="tb-odr-amount"><span class="tb-odr-total"><span class="amount">$560.00</span></span><span class="tb-odr-status"><span class="badge badge-dot bg-success">Complete</span></span></td>
                              <td class="tb-odr-action">
                                <div class="tb-odr-btns d-none d-sm-inline"><a href="/PMS/invoice_print" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a><a href="/PMS/invoice-details" class="btn btn-dim btn-sm btn-primary">View</a></div><a href="/PMS/invoice-details" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
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
   <!-- right Sidebar  starts -->
    <?php include __DIR__ . '/../partials/rightnav.php' ?>
      <!--right  Sidebar  ends -->  
      <script src="Public/assets/js/bundle9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/scripts9b70.js?ver=3.3.0"></script>
  <script src="Public/assets/js/demo-settings9b70.js?ver=3.3.0"></script>
</body>
</html>
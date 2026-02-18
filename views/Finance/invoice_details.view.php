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
                  <div class="invoice">
                    <div class="invoice-action"><a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="/PMS/invoice-print" target="_blank"><em class="icon ni ni-printer-fill"></em></a></div>
                    <div class="invoice-wrap">
                      <div class="invoice-brand text-center">
                        <div class="logo-link"><img loading="lazy" class="logo-light logo-img" src="Public/assets/images/logo/favicon.png" srcset="/demo7/images/logo2x.png 2x" alt=""><img loading="lazy" class="logo-dark logo-img" src="Public/assets/images/logo/favicon.png" srcset="/demo7/images/logo-dark2x.png 2x" alt=""></div>
                      </div>
                      <div class="invoice-head">
                        <div class="invoice-contact"><span class="overline-title">Invoice To</span>
                          <div class="invoice-contact-info">
                            <h4 class="title">Gregory Ander son</h4>
                            <ul class="list-plain">
                              <li><em class="icon ni ni-map-pin-fill"></em><span>House #65, 4328 Marion Street<br>Newbury, VT 05051</span></li>
                              <li><em class="icon ni ni-call-fill"></em><span>+012 8764 556</span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="invoice-desc">
                          <h3 class="title">Invoice</h3>
                          <ul class="list-plain">
                            <li class="invoice-id"><span>Invoice ID</span>:<span>66K5W3</span></li>
                            <li class="invoice-date"><span>Date</span>:<span>26 Jan, 2020</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="invoice-bills">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="w-150px">Item ID</th>
                                <th class="w-60">Description</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>24108054</td>
                                <td>Zimax - Group of Azithromycin</td>
                                <td>$40.00</td>
                                <td>5</td>
                                <td>$200.00</td>
                              </tr>
                              <tr>
                                <td>24108054</td>
                                <td>6 months premium support</td>
                                <td>$25.00</td>
                                <td>1</td>
                                <td>$25.00</td>
                              </tr>
                              <tr>
                                <td>23604094</td>
                                <td>Oxidon- Group of Domperidon</td>
                                <td>$131.25</td>
                                <td>1</td>
                                <td>$131.25</td>
                              </tr>
                              <tr>
                                <td>23604094</td>
                                <td>6 months premium support</td>
                                <td>$78.75</td>
                                <td>1</td>
                                <td>$78.75</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="2"></td>
                                <td colspan="2">Subtotal</td>
                                <td>$435.00</td>
                              </tr>
                              <tr>
                                <td colspan="2"></td>
                                <td colspan="2">Processing fee</td>
                                <td>$10.00</td>
                              </tr>
                              <tr>
                                <td colspan="2"></td>
                                <td colspan="2">TAX</td>
                                <td>$43.50</td>
                              </tr>
                              <tr>
                                <td colspan="2"></td>
                                <td colspan="2">Grand Total</td>
                                <td>$478.50</td>
                              </tr>
                            </tfoot>
                          </table>
                          <div class="nk-notes ff-italic fs-12px text-soft"> Invoice was created on a computer and is valid without the signature and seal. </div>
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
</body>
</html> 
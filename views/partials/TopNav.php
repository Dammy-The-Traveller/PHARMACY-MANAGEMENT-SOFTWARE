  <?php 
  use Core\App;
use Core\Database;
$db = App::resolve(Database::class);
  $userId = $_SESSION['user']['ID'] ?? null;
$db = App::resolve(Database::class);
$frequentLinks = [];

if ($userId) {
    $frequentLinks = $db->query("SELECT page_name, link FROM frequent_links WHERE user_id = ? ORDER BY count DESC LIMIT 3", [$userId])->get();
}
  ?>
  <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-between">
                    <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title">
                      <?php  
                      $breadcrumbs = [
        "/PMS/dashboard" => "DASHBOARD",

        // CUSTOMER MANAGEMENT
        "/PMS/customer-list" => "Customer Lists",
        "/PMS/Add-Customer" => "ADD NEW CUSTOMER",
        "/PMS/Customer-Ledger" => "CUSTOMER LEDGER",

        // MEDICINE MANAGEMENT
        "/PMS/Medicine-List" => "MEDICINE LIST",
        "/PMS/Add-Medicine" => "ADD NEW MEDICINE",
        "/PMS/MedicineDetails" => "MEDICINE DETAILS",

        // REPORTS
        "/PMS/purchase-reports" => "PURCHASE REPORTS",
        "/PMS/sales-reports" => "SALES REPORTS",
        "/PMS/stock-reports" => "STOCK REPORTS",

        // RETURNS
        "/PMS/add-manufacturer-return" => "ADD MANUFACTURER RETURN",
        "/PMS/add-wastage-return" => "ADD WASTAGE RETURN",
        "/PMS/manufacturer-return" => "MANUFACTURERS RETURN",
        "/PMS/wastage-return" => "WASTAGE RETURN",
        // SETTINGS
        "/PMS/settings" => "Settings",
        // SUPPORT
        "/PMS/support" => "MESSAGE",
        // FINANCE MANAGEMENT
        "/PMS/invoice-list" => "INVOICE LIST",
        "/PMS/invoice-details" => "INVOICE DETAILS #746F5K2",
        "/PMS/income" => "INCOME",
        "/PMS/expense" => "EXPENSES",

        // HR MANAGEMENT
        "/PMS/attendance" => "ATTENDANCE",
        "/PMS/member-profile" => "MEMBER PROFILE",
        "/PMS/member" => "MEMBER",
        "/PMS/salary" => "SALARY",
        "/PMS/add-member" => "ADD MEMBER",
        // MANUFACTURER MANAGEMENT
        "/PMS/ledger" => "MANUFACTURER LEDGER",
        "/PMS/list" => "MANUFACTURER LIST",
      ];
// Get the current path from the request URI
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // gets path only (e.g., /PMS/dashboard)

$pageName = $breadcrumbs[$currentPath] ?? '';
$pageLink = $pageName ? $currentPath : '';

//  echo breadcrumb title on page
echo $pageName;

// Track visit only if valid
if ($pageName && $pageLink) {
    track_visit($pageName, $pageLink);
}
    ?>
                      </h3>
                      <div class="nk-block-des text-soft">
                        <p>
                          <?= urlIs('/PMS/dashboard') ? 'Welcome to Acnoo Pharmacy Dashboard Template.' : '' ?>
                          <?= urlIs('/PMS/Customer-Ledger') ? 'Customer Ledger Template.' : '' ?>
                          <?= urlIs('/PMS/customer-list') ? 'You have total 17890 Customers in Pharmacy.' : '' ?>
                          <?= urlIs('/PMS/MedicineDetails') ? 'Medicine Details Template.' : '' ?>
                          <?= urlIs('/PMS/invoice-details') ? 'Created At: 18 Dec, 2019 01:02 PM.' : '' ?>
                          <?= urlIs('/PMS/invoice-list') ? 'You have total 937 invoices.' : '' ?>
                          <?= urlIs('/PMS/purchase-reports') ? 'Purchase Reports Template.' : '' ?>
                          <?= urlIs('/PMS/sales-reports') ? 'Here is the sales report of this Month.' : '' ?>
                          <?= urlIs('/PMS/stock-reports') ? 'Stock Reports Template.' : '' ?>
                          <?= urlIs('/PMS/Add-Customer') ? 'You can add a customer by fill these field.' : '' ?>
                          <?= urlIs('/PMS/Add-Medicine') ? 'You can add a medicine by fill these field.' : '' ?>
                          <?= urlIs('/PMS/Add-Wastage') ? 'You can add a wastage return by fill these field.' : '' ?>
                          
                          <?= urlIs('/PMS/ledger') ? 'Manufacturer Ledger Template.' : '' ?>
                          <?= urlIs('/PMS/list') ? 'You have total 30 Manufacturer for Acnoo Pharmacy.' : '' ?>
                          <?= urlIs('/PMS/add-manufacturer-return') ? 'You can add a manufacturer return by fill these field.' : '' ?>
                          <?= urlIs('/PMS/add-wastage-return') ? 'You can add a wastage return by fill these field.' : '' ?>
                          <?= urlIs('/PMS/manufacturer-return') ? 'You have total 300 return from manufacturer.' : '' ?>
                          <?= urlIs('/PMS/wastage-return') ? 'You have total 270 return from Customer for wastage.' : '' ?>
                          <?= urlIs('/PMS/Customer-List') ? 'You have total 17890 Customers in Pharmacy.' : '' ?>
                          <?= urlIs('/PMS/expense') ? 'Expense Template.' : '' ?>
                          <?= urlIs('/PMS/income') ? 'Income Template.' : '' ?>
                          <?= urlIs('/PMS/attendance') ? 'ADD AN ATTENDANCE.' : '' ?>
                          <?= urlIs('/PMS/member-profile') ? 'Member Profile Template.' : '' ?>
                          <?= urlIs('/PMS/member') ? 'Member Template.' : '' ?>
                          <?= urlIs('/PMS/salary') ? 'ADD A SALARY.' : '' ?>
                          <?= urlIs('/PMS/Manufacturer-Ledger') ? 'Manufacturer Ledger Template.' : '' ?>
                        
                          <?= urlIs('/PMS/settings') ? 'Settings Template.' : '' ?>
                          <?= urlIs('/PMS/support') ? 'Support Template.' : '' ?>
                          <?= urlIs('/PMS/Medicine-List') ? 'Here is Medicine List Template.' : '' ?>
                        </p>
                      </div>
                    </div>

                 <?php if (urlIs('/PMS/customer-list'))
                  echo ' <div class="nk-block-head-content"><a href="/PMS/Add-Customer" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a href="/PMS/Add-Customer" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add customer</span></a></div>';
                    else if(urlIs('/PMS/Customer-Ledger')){
                    echo ' <div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-3">
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Last 7 Days</span></a></li>
                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                    <li><a href="#"><span>Last 6 Month</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt"><a data-bs-toggle="modal" href="#addCusLedger" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a data-bs-toggle="modal" href="#addCusLedger" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Customer Ledger</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/Medicine-List')){
                      echo '<div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-3">
                            <li>
                              <div class="form-control-wrap">
                                <div class="form-icon form-icon-right"><em class="icon ni ni-search"></em></div><input type="text" class="form-control" id="default-04" placeholder="Quick search by name">
                              </div>
                            </li>
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Alphabetically, A-Z</span></a></li>
                                    <li><a href="#"><span>Alphabetically, Z-A</span></a></li>
                                    <li><a href="#"><span>Best Selling</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt"><a href="/PMS/Add-Medicine" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a href="/PMS/Add-Medicine" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Medicine</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/list')){

                      echo '<div class="nk-block-head-content"><a data-bs-toggle="modal" href="#addManufacture" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a data-bs-toggle="modal" href="#addManufacture" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Manufacturer</span></a></div>';
                    }else if(urlIs('/PMS/ledger')){
                      echo '<div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-3">
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Last 7 Days</span></a></li>
                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                    <li><a href="#"><span>Last 6 Month</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt"><a data-bs-toggle="modal" href="#addManLedger" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a data-bs-toggle="modal" href="#addManLedger" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Ledger</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/wastage-return')){
                      echo '<div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-2">
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Last 7 Days</span></a></li>
                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                    <li><a href="#"><span>Last 6 Month</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt">
                            </li><li class="nk-block-tools-opt"><a href="/PMS/add-wastage-return" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a href="/PMS/add-wastage-return" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Wastage Return</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/manufacturer-return')){
                      echo '<div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-2">
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Last 7 Days</span></a></li>
                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                    <li><a href="#"><span>Last 6 Month</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt">
                            </li><li class="nk-block-tools-opt"><a href="/PMS/add-manufacturer-return" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a href="/PMS/add-manufacturer-return" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Manufacturer Return</span></a></li>
                            
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/member')){
                      echo '<div class="nk-block-head-content"><a href="/PMS/add-member" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a href="/PMS/add-member" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Member</span></a></div>';
                    }else if(urlIs('/PMS/income')){
                      echo '<div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-3">
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Last 7 Days</span></a></li>
                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                    <li><a href="#"><span>Last 6 Month</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt"><a href="#addIncome" data-bs-toggle="modal" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Income</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/expense')){
                      echo '<div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle"><a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                          <ul class="nk-block-tools g-3">
                            <li>
                              <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span><span class="d-none d-md-inline"></span>Filtered By</span></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><span>Last 7 Days</span></a></li>
                                    <li><a href="#"><span>Last 30 Days</span></a></li>
                                    <li><a href="#"><span>Last 6 Month</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                            <li class="nk-block-tools-opt"><a href="#addExpense" data-bs-toggle="modal" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Expense</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>';
                    }else if(urlIs('/PMS/invoice-list')){
                      echo '<div class="nk-block-head-content">
                      <ul class="nk-block-tools g-3">
                        <li>
                          <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <ul class="link-list-opt no-bdr">
                                <li><a href="#"><span>Add New</span></a></li>
                                <li><a href="#"><span>Import</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>';
                    }else if(urlIs('/PMS/purchase-reports')){
                      echo '<div class="nk-block-head-content"><a data-bs-toggle="modal" href="#addPurchase" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a data-bs-toggle="modal" href="#addPurchase" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Purchase</span></a></div>';
                    }else if(urlIs('/PMS/stock-reports')){
                      echo '<div class="nk-block-head-content"><a data-bs-toggle="modal" href="#addStock" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a><a data-bs-toggle="modal" href="#addStock" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Stock</span></a></div>';
                    }else if(urlIs('/PMS/support')){
                      echo '<div class="nk-block-head-content">
                      <ul class="nk-block-tools g-3">
                        <li><a href="#" class="btn btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em><span>New</span></a></li>
                        <li class="nk-block-tools-opt">
                          <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-light btn-icon" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <ul class="link-list-opt no-bdr">
                                <li><a href="#"><span>Notification Settings</span></a></li>
                                <li><a href="#"><span>Message Setting</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>';
                    }else if(urlIs('/PMS/support')){
                      echo '<div class="nk-block-head-content">
                      <ul class="nk-block-tools g-3">
                        <li><a href="#" class="btn btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em><span>New</span></a></li>
                        <li class="nk-block-tools-opt">
                          <div class="drodown"><a href="#" class="dropdown-toggle btn btn-white btn-light btn-icon" data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <ul class="link-list-opt no-bdr">
                                <li><a href="#"><span>Notification Settings</span></a></li>
                                <li><a href="#"><span>Message Setting</span></a></li>
                              </ul>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>';
                    }else if(urlIs('/PMS/add-member')){
                      echo '';
                    } else {
    ?>
    <div class="nk-block-head-content"> 
        <h4>FREQUENTLY VISITED</h4>  
        <div class="toggle-wrap nk-block-tools-toggle">    
            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
               data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
            <div class="toggle-expand-content" data-content="pageMenu">    
                <ul class="nk-block-tools g-3">
                    <?php if (!empty($frequentLinks)): ?>
                        <?php foreach ($frequentLinks as $link): ?>
                            <li class="nk-block-tools-opt">
                                <a href="<?= $link['link'] ?>" class="btn btn-primary">
                                    <em class="icon ni ni-arrow-right"></em>
                                    <span><?= strtoupper($link['page_name']) ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- fallback if user has no history yet -->
                        <li class="nk-block-tools-opt">
                            <a href="#" class="btn btn-primary disabled">
                                <em class="icon ni ni-info"></em>
                                <span>No history yet</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
}

                  ?>

                    
                  </div>
                </div>
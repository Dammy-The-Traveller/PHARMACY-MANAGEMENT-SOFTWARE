<?php 
 $logged_user_type = $_SESSION['user']['UserType'] ?? 'guest';
 ?>
<div class="nk-sidebar" data-content="sidebarMenu">
  <div class="nk-sidebar-main">
    <div class="nk-sidebar-inner" data-simplebar>
      <div class="nk-menu-content menu-active" data-content="navPharmacy">
        <br> 
       <a href="#" class="header-logo logo-lg-device">
  <div style="display: flex; align-items: center; gap: 1px;">
    <img src="Public/assets/images/logo/relic.png" alt="header-logo" style="height: 100px; margin: -3rem; padding: -5px;" />
    <h1 style="margin: 0; font-size: 20px; line-height: 1;">PMS Pharmacy</h1>
  </div>
</a>
<br>
        <ul class="nk-menu">
          <!-- Dashboard: accessible by all logged-in users -->
          <li class="nk-menu-item <?= urlIs('/PMS/dashboard') ? 'active current-page' : '' ?>">
            <a href="/PMS/dashboard" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
              <span class="nk-menu-text">Dashboard</span>
            </a>
          </li>
  
          <!-- Customer: admin, manager -->
          <?php if (in_array($logged_user_type, ['admin', 'manager', 'pharmacist'])): ?>
         <li class="nk-menu-item has-sub <?= urlIs('/PMS/customer-list') || urlIs('/PMS/Add-Customer') || urlIs('/PMS/Customer-Ledger') ? 'active current-page' : '' ?>">
  <a href="#" class="nk-menu-link nk-menu-toggle">
    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
    <span class="nk-menu-text">Customer</span>
  </a>
  <ul class="nk-menu-sub">
    <li class="nk-menu-item <?= urlIs('/PMS/Add-Customer') ? 'active current-page' : '' ?>">
      <a href="/PMS/Add-Customer" class="nk-menu-link"><span class="nk-menu-text">Add Customer</span></a>
    </li>
    <li class="nk-menu-item <?= urlIs('/PMS/customer-list') ? 'active current-page' : '' ?>">
      <a href="/PMS/customer-list" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a>
    </li>
    <li class="nk-menu-item <?= urlIs('/PMS/Customer-Ledger') ? 'active current-page' : '' ?>">
      <a href="/PMS/Customer-Ledger" class="nk-menu-link"><span class="nk-menu-text">Customer Ledger</span></a>
    </li>
  </ul>
</li>
          <?php endif; ?>

          <!-- Medicine: admin, pharmacist -->
          <?php if (in_array($logged_user_type, ['admin', 'pharmacist'])): ?>
         <li class="nk-menu-item has-sub <?= urlIs('/PMS/Add-Medicine') || urlIs('/PMS/Medicine-List') || urlIs('/PMS/MedicineDetails') ? 'active current-page' : '' ?>">
  <a href="#" class="nk-menu-link nk-menu-toggle">
    <span class="nk-menu-icon"><em class="icon ni ni-capsule-fill"></em></span>
    <span class="nk-menu-text">Medicine</span>
  </a>
  <ul class="nk-menu-sub">
    <li class="nk-menu-item <?= urlIs('/PMS/Add-Medicine') ? 'active current-page' : '' ?>">
      <a href="/PMS/Add-Medicine" class="nk-menu-link"><span class="nk-menu-text">Add Medicine</span></a>
    </li>
    <li class="nk-menu-item <?= urlIs('/PMS/Medicine-List') ? 'active current-page' : '' ?>">
      <a href="/PMS/Medicine-List" class="nk-menu-link"><span class="nk-menu-text">Medicine List</span></a>
    </li>
    <li class="nk-menu-item <?= urlIs('/PMS/MedicineDetails') ? 'active current-page' : '' ?>">
      <a href="/PMS/MedicineDetails" class="nk-menu-link"><span class="nk-menu-text">Medicine Details</span></a>
    </li>
  </ul>
</li>
          <?php endif; ?>

          <!-- Manufacturer: admin only -->
          <?php if ($logged_user_type == 'admin'): ?>
         <li class="nk-menu-item has-sub <?= urlIs('/PMS/list') || urlIs('/PMS/ledger') ? 'active current-page' : '' ?>">
  <a href="#" class="nk-menu-link nk-menu-toggle">
    <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
    <span class="nk-menu-text">Manufacturer</span>
  </a>
  <ul class="nk-menu-sub">
    <li class="nk-menu-item <?= urlIs('/PMS/list') ? 'active current-page' : '' ?>">
      <a href="/PMS/list" class="nk-menu-link"><span class="nk-menu-text">Manufacturer List</span></a>
    </li>
    <li class="nk-menu-item <?= urlIs('/PMS/ledger') ? 'active current-page' : '' ?>">
      <a href="/PMS/ledger" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Ledger</span></a>
    </li>
  </ul>
</li>
          <?php endif; ?>

           <!-- RETURN  -->
  <?php if (in_array($logged_user_type, ['admin', 'manager'])): ?>
           <li class="nk-menu-item has-sub <?= urlIs('/PMS/add-wastage-return') || urlIs('/PMS/wastage-return') || urlIs('/PMS/add-manufacturer-return') || urlIs('/PMS/manufacturer-return') ? 'active current-page' : '' ?>"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span><span class="nk-menu-text">Return</span></a>
                <ul class="nk-menu-sub">
                  <li class="nk-menu-item <?= urlIs('/PMS/add-wastage-return') ? 'active current-page' : '' ?>"><a href="/PMS/add-wastage-return" class="nk-menu-link"><span class="nk-menu-text">Add Wastage Return</span></a></li>
                  <li class="nk-menu-item <?= urlIs('/PMS/wastage-return') ? 'active current-page' : '' ?>"><a href="/PMS/wastage-return" class="nk-menu-link"><span class="nk-menu-text">Wastage Return List</span></a></li>
                  <li class="nk-menu-item <?= urlIs('/PMS/add-manufacturer-return') ? 'active current-page' : '' ?>"><a href="/PMS/add-manufacturer-return" class="nk-menu-link"><span class="nk-menu-text">Add Manufacture Return</span></a></li>
                  <li class="nk-menu-item <?= urlIs('/PMS/manufacturer-return') ? 'active current-page' : '' ?>"><a href="/PMS/manufacturer-return" class="nk-menu-link"><span class="nk-menu-text">Manufacturer Return List</span></a></li>
                </ul>
              </li>
<?php endif; ?>

          <!-- Human Resource: admin only -->
          <?php if (in_array($logged_user_type, ['admin', 'HR', 'manager'])): ?>
          <li class="nk-menu-item has-sub">
         <li class="nk-menu-item has-sub <?= urlIs('/PMS/member') || urlIs('/PMS/member-profile') || urlIs('/PMS/attendance') || urlIs('/PMS/salary') ? 'active current-page' : '' ?>">
            <a href="#" class="nk-menu-link nk-menu-toggle">
              <span class="nk-menu-icon"><em class="icon ni ni-user-circle-fill"></em></span>
              <span class="nk-menu-text">Human resource</span>
            </a>
            <ul class="nk-menu-sub">
              <li class="nk-menu-item <?= urlIs('/PMS/member') ? 'active current-page' : '' ?>"><a href="/PMS/member" class="nk-menu-link"><span class="nk-menu-text">Member</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/member-profile') ? 'active current-page' : '' ?>"><a href="/PMS/member-profile" class="nk-menu-link"><span class="nk-menu-text">Members Profile</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/attendance') ? 'active current-page' : '' ?>"><a href="/PMS/attendance" class="nk-menu-link"><span class="nk-menu-text">Attendance</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/salary') ? 'active current-page' : '' ?>"><a href="/PMS/salary" class="nk-menu-link"><span class="nk-menu-text">Salary</span></a></li>
            </ul>
          </li>
          <?php endif; ?>

          <!-- Finance: admin, accountant -->
          <?php if (in_array($logged_user_type, ['admin', 'accountant'])): ?>
          <li class="nk-menu-item has-sub <?= urlIs('/PMS/income') || urlIs('/PMS/expense') || urlIs('/PMS/invoice-list') || urlIs('/PMS/invoice-details') ? 'active current-page' : '' ?>">
            <a href="#" class="nk-menu-link nk-menu-toggle">
              <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
              <span class="nk-menu-text">Finance</span>
            </a>
            <ul class="nk-menu-sub">
              <li class="nk-menu-item <?= urlIs('/PMS/income') ? 'active current-page' : '' ?>"><a href="/PMS/income" class="nk-menu-link"><span class="nk-menu-text">Income</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/expense') ? 'active current-page' : '' ?>"><a href="/PMS/expense" class="nk-menu-link"><span class="nk-menu-text">Expenses</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/invoice-list') ? 'active current-page' : '' ?>"><a href="/PMS/invoice-list" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/invoice-details') ? 'active current-page' : '' ?>"><a href="/PMS/invoice-details" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a></li>
            </ul>
          </li>
          <?php endif; ?>

          <!-- Report: admin, manager, accountant -->
          <?php if (in_array($logged_user_type, ['admin', 'manager', 'accountant'])): ?>
        <li class="nk-menu-item has-sub <?= urlIs('/PMS/sales-reports') || urlIs('/PMS/purchase-reports') || urlIs('/PMS/stock-reports') ? 'active current-page' : '' ?>">
            <a href="#" class="nk-menu-link nk-menu-toggle">
              <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
              <span class="nk-menu-text">Report</span>
            </a>
            <ul class="nk-menu-sub">
              <li class="nk-menu-item <?= urlIs('/PMS/sales-reports') ? 'active current-page' : '' ?>"><a href="/PMS/sales-reports" class="nk-menu-link"><span class="nk-menu-text">Sales Report</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/purchase-reports') ? 'active current-page' : '' ?>"><a href="/PMS/purchase-reports" class="nk-menu-link"><span class="nk-menu-text">Purchase Report</span></a></li>
              <li class="nk-menu-item <?= urlIs('/PMS/stock-reports') ? 'active current-page' : '' ?>"><a href="/PMS/stock-reports" class="nk-menu-link"><span class="nk-menu-text">Stock Report</span></a></li>
            </ul>
          </li>
          <?php endif; ?>

          <!-- Support: all roles -->
            <li class="nk-menu-item <?= urlIs('/PMS/support') ? 'active current-page' : '' ?>">
            <a href="/PMS/support" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-msg-fill"></em></span>
              <span class="nk-menu-text">Support</span>
            </a>
          </li>

          <!-- Settings: admin only -->
          <?php if ($logged_user_type == 'admin'): ?>
            <li class="nk-menu-item <?= urlIs('/PMS/settings')  ? 'active current-page' : '' ?>">
            <a href="/PMS/settings" class="nk-menu-link">
              <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
              <span class="nk-menu-text">Setting</span>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
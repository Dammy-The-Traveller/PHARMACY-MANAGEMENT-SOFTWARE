<?php
// INDEX
$router->get("/","index.php")->only("guest");
$router->post("/login","Sessions/store.php")->only("guest");


// DASHBOARD
$router->get("/dashboard","Dashboard.php")->only("auth");

// CUSTOMERS
$router->get("/customer-list","Customer/List.php")->only("admin&manager&pharmacist");
// $router->post("/Delete_Customer","Customer/destroy.php")->only("auth");
$router->get("/Add-Customer","Customer/Add.php")->only("admin&manager&pharmacist");
$router->get("/Customer-Ledger","Customer/Ledger.php")->only("admin&manager&pharmacist");
// $router->post("/customerStore","Customer/store.php")->only("auth");
// $router->get("/Edit-Customer","Customer/update.php")->only("auth");
// $router->patch('/update', 'Patients/update.php')->only("auth");



// FINANCE
$router->get("/expense","Finance/Expense.php")->only("admin&accountant");
$router->get("/income","Finance/income.php")->only("admin&accountant");
$router->get("/invoice-details","Finance/invoice_details.php")->only("admin&accountant");
$router->get("/invoice-list","Finance/invoice_list.php")->only("admin&accountant");
$router->get("/invoice-print","Finance/invoice_print.php")->only("admin&accountant");


// HR
$router->get("/attendance","HR/attendance.php")->only("admin&manager&hr");
$router->get("/member-profile","HR/member_profile.php")->only("admin&manager&hr");
$router->get("/member-profile-notification","HR/members_profile_notif.php")->only( "admin&manager&hr");
$router->get("/member-profile-activity","HR/members_profile_activity.php")->only( "admin&manager&hr");
$router->get("/members-profile-setting","HR/members_profile_setting.php")->only( "admin&manager&hr");
$router->get("/member","HR/member.php")->only("admin&manager&hr");
$router->get("/salary","HR/salary.php")->only(key: "admin&manager&hr");
$router->get("/add-member","HR/add_member.php")->only(key: "admin&manager&hr");
// $router->post("/store","HR/store.php")->only("admin&manager&hr");
 $router->post("/update","HR/update.php")->only("admin&manager&hr");


// MANUFACTURER
$router->get("/ledger","Manufacturer/Ledger.php")->only("admin");
$router->get("/list","Manufacturer/List.php")->only("admin");
// $router->post("/updateManufacturer","Manufacturer/update.php")->only("auth");




// medicines
$router->get("/Medicine-List","Medicine/List.php")->only("admin&pharmacist");
$router->get("/Add-Medicine","Medicine/Add.php")->only("admin&pharmacist");
// $router->post("/addMedicine","Medicine/store.php")->only("auth");
$router->get("/MedicineDetails","Medicine/details.php")->only("admin&pharmacist");
// $router->patch('/updateMedicine', 'Medicine/update.php')->only("auth");


// REPORTS
$router->get("/purchase-reports","Report/purchase.php")->only("admin&manager&accountant");
$router->get("/sales-reports","Report/sales.php")->only("admin&manager&accountant");
$router->get("/stock-reports","Report/stock.php")->only("admin&manager&accountant");

// RETURNS
$router->get("/add-manufacturer-return","Return/Add_Manufacturer.php")->only("admin&manager");
$router->get("/add-wastage-return","Return/Add_Wastage.php")->only("admin&manager");
$router->get("/manufacturer-return","Return/Manufacturer_List.php")->only("admin&manager");
$router->get("/wastage-return","Return/Wastage_List.php")->only("admin&manager");
// $router->post("/ReturnStore","Return/store.php")->only("auth");


// SETTINGS
$router->get("/settings","settings/index.php")->only("admin");
$router->get("/Members-settings","settings/members.php")->only("admin");
$router->get("/email-settings","settings/email.php")->only("admin");
$router->get("/security-settings","settings/security.php")->only("admin");
$router->get("/account-log","settings/account.php")->only("auth");

// SUPPORT
$router->get("/support","support.php")->only("auth");

// LOGOUT
$router->delete("/logout","Sessions/destroy.php")->only("auth");
$router->get("/logout","Sessions/destroy.php")->only("auth");
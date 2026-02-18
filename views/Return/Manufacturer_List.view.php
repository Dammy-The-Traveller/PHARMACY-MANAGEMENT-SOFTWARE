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
                              <div class="form-wrap w-150px"><select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                  <option value="">Bulk Action</option>
                                  <option value="today">Today</option>
                                  <option value="tomorrow">Tomorrow</option>
                                  <option value="month">Last 1 month</option>
                                  <option value="sixmonth">Last 6 month</option>
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
                                            <div class="dropdown-head"><span class="sub-title dropdown-title">Filter Manufacturer Return</span>
                                              <div class="dropdown"><a href="#" class="btn btn-sm btn-icon"><em class="icon ni ni-more-h"></em></a></div>
                                            </div>
                                            <div class="dropdown-body dropdown-body-rg">
                                              <div class="row gx-6 gy-3">
                                                <div class="col-6">
                                                  <div class="custom-control custom-control-sm custom-checkbox"><input type="checkbox" class="custom-control-input" id="hasBalance"><label class="custom-control-label" for="hasBalance"> Have Balance</label></div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="custom-control custom-control-sm custom-checkbox"><input type="checkbox" class="custom-control-input" id="hasKYC"><label class="custom-control-label" for="hasKYC">Email Verified</label></div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group"><label class="form-label">Date</label>
                                                    <div class="form-control-wrap">
                                                      <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group"><label class="form-label">Reason</label>
                                                    <div class="form-control-wrap"><select class="form-select">
                                                        <option value="default_option">Select</option>
                                                        <option value="option_select_reason">Expire Date</option>
                                                        <option value="option_select_reason">Wrong Drug</option>
                                                        <option value="option_select_reason">Extra Drug</option>
                                                        <option value="option_select_reason">Damaged Drug</option>
                                                      </select></div>
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
                            <div class="search-content"><a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a><input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by name or Purchase id"><button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-inner p-0">
                        <div class="nk-tb-list nk-tb-ulist">
                          <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid"><label class="custom-control-label" for="uid"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Purchase ID</span></div>
                            <div class="nk-tb-col"><span class="sub-text">Manufacturer</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date</span></div>
                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Phone</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Product Details</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Reason</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Quantity</span></div>
                            <div class="nk-tb-col"><span class="sub-text">Amount</span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1 my-n1">
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid1"><label class="custom-control-label" for="uid1"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#3587</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Healthcare</span><span>info@softnio.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>19/12/2020</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+811 847-4958</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">Zimax</span></span></div>
                              <div><span>Generic Name : Azithromycin</span></div>
                              <div><span>Catagory : Tablet</span></div>
                              <div><span>Invoice : <span class="text-success">#746f5k2</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-danger">Expire Date</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>200box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">7868.55 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid2"><label class="custom-control-label" for="uid2"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#7684</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Square</span><span>square@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>17/05/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+124 394-1787</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">Oxidon</span></span></div>
                              <div><span>Generic Name : Domperidon</span></div>
                              <div><span>Catagory : Tablet</span></div>
                              <div><span>Invoice : <span class="text-success">#75635k9</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-info">Wrong Drug</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>100box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">9047.20 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid3"><label class="custom-control-label" for="uid3"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#3466</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Lupin</span><span>lupin@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>05/12/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+168 603-2320</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">MED-1008</span></span></div>
                              <div><span>Generic Name : hydrazine</span></div>
                              <div><span>Catagory : Inhealer</span></div>
                              <div><span>Invoice : <span class="text-success">#546H74W</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-warning">Damaged</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>250box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">4300.98 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid4"><label class="custom-control-label" for="uid4"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#6523</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Sun</span><span>Sun@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>02/08/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+439 271-5360</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">Ceevit</span></span></div>
                              <div><span>Generic Name : Vitamin C</span></div>
                              <div><span>Catagory : Vitamin</span></div>
                              <div><span>Invoice : <span class="text-success">#87X6A44</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-secondary">Extra Drug</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>140box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">8085.26 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid5"><label class="custom-control-label" for="uid5"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#1274</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Medicare</span><span>medicare@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>09/02/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+639 130-3150</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">DON A</span></span></div>
                              <div><span>Generic Name : Domperidon</span></div>
                              <div><span>Catagory : Tablet</span></div>
                              <div><span>Invoice : <span class="text-success">#986G531</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-danger">Expire Date</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>90box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">1200.20 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid6"><label class="custom-control-label" for="uid6"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#8134</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Supportmedi</span><span>supportmedi@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>20/01/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+963 309-1706</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">Pantonix</span></span></div>
                              <div><span>Generic Name : Pantoprazol</span></div>
                              <div><span>Catagory : Tablet</span></div>
                              <div><span>Invoice : <span class="text-success">#326T4M9</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-info">Wrong Drug</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>187box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">4576.00 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid7"><label class="custom-control-label" for="uid7"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#9124</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Sunflower</span><span>sunflower@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>03/05/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+811 985-4846</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">Iconiazid</span></span></div>
                              <div><span>Generic Name : hydrazine</span></div>
                              <div><span>Catagory : Syrup</span></div>
                              <div><span>Invoice : <span class="text-success">#87Z6A44</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-warning">Damaged</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>229box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">25054.00 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid8"><label class="custom-control-label" for="uid8"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#8264</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Acme</span><span>acme@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>07/05/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+942 238-4474</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">EC Plus</span></span></div>
                              <div><span>Generic Name : Vitamin E</span></div>
                              <div><span>Catagory : Vitamin</span></div>
                              <div><span>Invoice : <span class="text-success">#746F5K2</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-danger">Expire Date</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>195box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">6065.35 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid9"><label class="custom-control-label" for="uid9"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#8125</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">oxidin</span><span>oxidin@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>19/08/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+123 447-2384</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">Acetylsalicylic</span></span></div>
                              <div><span>Generic Name : Aspirin</span></div>
                              <div><span>Catagory : Syrup</span></div>
                              <div><span>Invoice : <span class="text-success">#685HFM1</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-info">Wrong Drug</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>439box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">225.50 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext"><input type="checkbox" class="custom-control-input" id="uid10"><label class="custom-control-label" for="uid10"></label></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><a href="#"><span class="fw-medium">#8123</span></a></div>
                            <div class="nk-tb-col"><a href="#">
                                <div class="user-card">
                                  <div class="user-info"><span class="tb-lead">Heaven Life</span><span>heaven@.com</span></div>
                                </div>
                              </a></div>
                            <div class="nk-tb-col tb-col-lg"><span>29/07/2021</span></div>
                            <div class="nk-tb-col tb-col-lg"><span>+463 471-7173</span></div>
                            <div class="nk-tb-col tb-col-xxl">
                              <div><span>Name : <span class="fw-bold">voltaren</span></span></div>
                              <div><span>Generic Name : Diclofenac</span></div>
                              <div><span>Catagory : Syrup</span></div>
                              <div><span>Invoice : <span class="text-success">#2385L1</span></span></div>
                            </div>
                            <div class="nk-tb-col tb-col-md"><span class="badge  bg-outline-danger">Expire Date</span></div>
                            <div class="nk-tb-col tb-col-xxl"><span>354box</span></div>
                            <div class="nk-tb-col"><span class="tb-amount">3523.55 <span class="currency">USD</span></span></div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden"><a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email"><em class="icon ni ni-mail-fill"></em></a></li>
                                <li>
                                  <div class="drodown"><a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a data-bs-toggle="modal" href="#editManufactureReturn"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                        <li><a data-bs-toggle="modal" href="#modalDelete"><em class="icon ni ni-trash"></em><span>Remove</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
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
                              <div><select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
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
  <div class="modal fade" tabindex="-1" role="dialog" id="editManufactureReturn">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
        <div class="modal-body modal-body-md">
          <h5 class="modal-title">Edit Manufacturer Return</h5>
          <form action="#" class="mt-4">
            <div class="row g-gs">
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="name">Company</label><input type="text" class="form-control" id="name" placeholder="Company" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="mail">Email</label><input type="email" class="form-control" id="mail" placeholder="Email"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="phone">Phone</label><input type="text" class="form-control" id="phone" placeholder="Phone no"></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="name">Product Name</label><input type="text" class="form-control" id="name" placeholder="Name" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="amount">Amount</label><input type="number" class="form-control" id="amount" placeholder="Amount" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="invoice">Invoice No</label><input type="text" class="form-control" id="invoice" placeholder="Invoice No" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Reason</label>
                  <div class="form-control-wrap"><select class="form-select">
                      <option value="default_option">Select</option>
                      <option value="option_select_reason">Wrong Drugs</option>
                      <option value="option_select_reason">Extra Drug</option>
                      <option value="option_select_reason">Damaged</option>
                      <option value="option_select_reason">Expired Drug</option>
                    </select></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label" for="quantity">Quantity</label><input type="number" class="form-control" id="quantity" placeholder="Quantity" required></div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Date of Birth</label>
                  <div class="form-control-wrap">
                    <div class="form-icon form-icon-right"><em class="icon ni ni-calendar"></em></div><input type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group"><label class="form-label">Status</label>
                  <div class="form-control-wrap"><select class="form-select">
                      <option value="default_option">Select</option>
                      <option value="option_select_status">Active</option>
                      <option value="option_select_status">Inactive</option>
                    </select></div>
                </div>
              </div>
              <div class="col-12">
                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                  <li><a href="#" id="demo-lock-btn9" data-bs-dismiss="modal" class="btn btn-primary">Edit Return</a></li>
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
    const demoBtn = document.getElementById('demo-lock-btn9');
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
@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <!-- body start -->
<body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">






            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex align-items-center mb-3">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control border" id="dash-daterange">
                                                <span class="input-group-text bg-blue border-blue text-white">
                                                    <i class="mdi mdi-calendar-range"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                    <i class="fe-heart font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                    <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">127</span></h3>
                                                    <p class="text-muted mb-1 text-truncate">Today's Sales</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                    <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                                    <p class="text-muted mb-1 text-truncate">Conversion</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                    <i class="fe-eye font-22 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">78.41</span>k</h3>
                                                    <p class="text-muted mb-1 text-truncate">Today's Visits</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>

                                        <h4 class="header-title mb-0">Total Revenue</h4>

                                        <div class="widget-chart text-center" dir="ltr">

                                            <div id="total-revenue" class="mt-0"  data-colors="#f1556c"></div>

                                            <h5 class="text-muted mt-0">Total sales made today</h5>
                                            <h2>$178</h2>

                                            <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best in the meat of your page content.</p>

                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                    <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                                                </div>
                                                <div class="col-4">
                                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                    <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->

                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-light">Today</button>
                                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                                <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                                            </div>
                                        </div>

                                        <h4 class="header-title mb-3">Sales Analytics</h4>

                                        <div dir="ltr">
                                            <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>

                                        <h4 class="header-title mb-3">Top 5 Users Balances</h4>

                                        <div class="table-responsive">
                                            <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                                <thead class="table-light">
                                                    <tr>
                                                        <th colspan="2">Profile</th>
                                                        <th>Currency</th>
                                                        <th>Balance</th>
                                                        <th>Reserved in orders</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-2.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>

                                                        <td>
                                                            <h5 class="m-0 fw-normal">Tomaslau</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>

                                                        <td>
                                                            <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                                        </td>

                                                        <td>
                                                            0.00816117 BTC
                                                        </td>

                                                        <td>
                                                            0.00097036 BTC
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-3.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>

                                                        <td>
                                                            <h5 class="m-0 fw-normal">Erwin E. Brown</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>

                                                        <td>
                                                            <i class="mdi mdi-currency-eth text-primary"></i> ETH
                                                        </td>

                                                        <td>
                                                            3.16117008 ETH
                                                        </td>

                                                        <td>
                                                            1.70360009 ETH
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-4.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>

                                                        <td>
                                                            <h5 class="m-0 fw-normal">Margeret V. Ligon</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>

                                                        <td>
                                                            <i class="mdi mdi-currency-eur text-primary"></i> EUR
                                                        </td>

                                                        <td>
                                                            25.08 EUR
                                                        </td>

                                                        <td>
                                                            12.58 EUR
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-5.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>

                                                        <td>
                                                            <h5 class="m-0 fw-normal">Jose D. Delacruz</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>

                                                        <td>
                                                            <i class="mdi mdi-currency-cny text-primary"></i> CNY
                                                        </td>

                                                        <td>
                                                            82.00 CNY
                                                        </td>

                                                        <td>
                                                            30.83 CNY
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 36px;">
                                                            <img src="assets/images/users/user-6.jpg" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                        </td>

                                                        <td>
                                                            <h5 class="m-0 fw-normal">Luke J. Sain</h5>
                                                            <p class="mb-0 text-muted"><small>Member Since 2017</small></p>
                                                        </td>

                                                        <td>
                                                            <i class="mdi mdi-currency-btc text-primary"></i> BTC
                                                        </td>

                                                        <td>
                                                            2.00816117 BTC
                                                        </td>

                                                        <td>
                                                            1.00097036 BTC
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-plus"></i></a>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-danger"><i class="mdi mdi-minus"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Edit Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>

                                        <h4 class="header-title mb-3">Revenue History</h4>

                                        <div class="table-responsive">
                                            <table class="table table-borderless table-nowrap table-hover table-centered m-0">

                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Marketplaces</th>
                                                        <th>Date</th>
                                                        <th>Payouts</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Themes Market</h5>
                                                        </td>

                                                        <td>
                                                            Oct 15, 2018
                                                        </td>

                                                        <td>
                                                            $5848.68
                                                        </td>

                                                        <td>
                                                            <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Freelance</h5>
                                                        </td>

                                                        <td>
                                                            Oct 12, 2018
                                                        </td>

                                                        <td>
                                                            $1247.25
                                                        </td>

                                                        <td>
                                                            <span class="badge bg-soft-success text-success">Paid</span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Share Holding</h5>
                                                        </td>

                                                        <td>
                                                            Oct 10, 2018
                                                        </td>

                                                        <td>
                                                            $815.89
                                                        </td>

                                                        <td>
                                                            <span class="badge bg-soft-success text-success">Paid</span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Envato's Affiliates</h5>
                                                        </td>

                                                        <td>
                                                            Oct 03, 2018
                                                        </td>

                                                        <td>
                                                            $248.75
                                                        </td>

                                                        <td>
                                                            <span class="badge bg-soft-danger text-danger">Overdue</span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Marketing Revenue</h5>
                                                        </td>

                                                        <td>
                                                            Sep 21, 2018
                                                        </td>

                                                        <td>
                                                            $978.21
                                                        </td>

                                                        <td>
                                                            <span class="badge bg-soft-warning text-warning">Upcoming</span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h5 class="m-0 fw-normal">Advertise Revenue</h5>
                                                        </td>

                                                        <td>
                                                            Sep 15, 2018
                                                        </td>

                                                        <td>
                                                            $358.10
                                                        </td>

                                                        <td>
                                                            <span class="badge bg-soft-success text-success">Paid</span>
                                                        </td>

                                                        <td>
                                                            <a href="javascript: void(0);" class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->



            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">

                        <form class="search-bar p-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item ps-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline me-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start noti-user-item">
                                    <div class="position-relative me-2">
                                        <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                    <i class="mdi mdi-spin mdi-loading me-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                        <div class="px-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2 d-grid">
                            <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-width" value="fluid" id="fluid-check" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-width" value="boxed" id="boxed-check" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="menu-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="menu-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light-check" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark-check" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand-check" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient-check" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="fixed" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>


                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
</body>
@endsection



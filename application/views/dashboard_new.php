<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
<link rel="icon" type="image/x-icon" href="<?php echo site_url("resources/assets/img/logo.png"); ?>"/>
<link rel="icon" href="<?php echo site_url("resources/assets/img/logo.png"); ?>" type="image/png" sizes="16x16">
<link rel="stylesheet" href="<?php echo site_url("resources/assets/vendor/pace/pace.css"); ?>">
<script src="<?php echo site_url("resources/assets/vendor/pace/pace.min.js"); ?>"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("resources/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url("resources/assets/vendor/jquery-scrollbar/jquery.scrollbar.css"); ?>">
<link rel="stylesheet" href="<?php echo site_url("resources/assets/vendor/select2/css/select2.min.css"); ?>">
<link rel="stylesheet" href="<?php echo site_url("resources/assets/vendor/jquery-ui/jquery-ui.min.css"); ?>">
<link rel="stylesheet" href="<?php echo site_url("resources/assets/vendor/daterangepicker/daterangepicker.css"); ?>">
<link rel="stylesheet" href="<?php echo site_url("resources/assets/vendor/timepicker/bootstrap-timepicker.min.css"); ?>">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="<?php echo site_url("resources/assets/fonts/jost/jost.css"); ?>">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("resources/assets/fonts/materialdesignicons/materialdesignicons.min.css"); ?>">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("resources/assets/css/atmos.min.css"); ?>">
<!-- Additional library for page -->


</head>
<body class="sidebar-pinned page-home">
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="<?php echo site_url("resources/assets/img/users/logo.png"); ?>" width="40" alt="atmos Logo">
        <span class="admin-brand-content font-secondary"><a href='index.html'>  atmos</a></span>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <ul class="menu">
            <li class="menu-item active ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Dashboard
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                           <span class="icon-badge badge-success badge badge-pill">4</span>
                                                 <i class="icon-placeholder mdi mdi-shape-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item ">
                        <a href='index.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 1</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  mdi mdi-shape-circle-plus ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='dashboard-02.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 2</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-shape-plus ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='dashboard-03.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 3</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  mdi mdi-bitcoin">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='dashboard-04.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 4 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  mdi mdi-cart-outline ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='dashboard-05.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Dashboard 5 </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  mdi mdi-instagram ">

                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Forms
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-lead-pencil "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href='forms.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Basic
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-checkbook "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='forms-custom.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Custom Controls
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-checkbox-multiple-marked-circle "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='forms-advance.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Advance
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-edit "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='forms-wizard.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Wizard
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-step-forward  "></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Apps
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-polymer "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='kanban.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Kanban
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-view-dashboard"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href='chat.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Chat
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-comment-multiple-outline"></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='mail.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Mail
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-inbox-arrow-down  "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='guide.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Guides
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-book-outline "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Pages
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Extra Pages</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-folder-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='profile.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Profile </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    P
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='timeline.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Timeline </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='contacts.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Contacts </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    C
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='login.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Login </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='signup.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Sign Up </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='reset.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Reset Password </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    R
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='logout.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Logout </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    L
                                                </i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='status.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Status Page </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Error Pages
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">404,503 etc</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-pac-man "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href='404.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">404 </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href='502.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">502 </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href='503.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">503 </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href='403.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">403 </span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Er
                                                </i>
                                            </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Widgets
                                                    <span class="menu-arrow"></span>
                                                </span>
<span class="menu-info"> 👌 New Widgets  </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-webpack"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href='widget-01.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Widget 01
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-webpack "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='widget-02.html' class=' menu-link'>
                                        <span class="menu-label">
                                                  <span class="menu-name">Widget 02
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-webpack"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">UI Elements
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-cursor-default-outline "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='alerts.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Alerts </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='avatar.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Avatar </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='buttons.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Buttons </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
B
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item  ">
                        <a href='cards.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Cards
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-cards-outline  "></i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href='icons.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Icons
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-alien "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='modal.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Modals </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
M
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='notification.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Notification </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
N
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='typography.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Typography </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='tabs.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Tabs  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='accordian.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Accordian  </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
A
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='tooltip.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Tooltips </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
T
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='color.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Colors
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-format-color-fill "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='spinners.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Spinners </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
S
                                                </i>
                                            </span>
                        </a>

                    </li>
                    <li class="menu-item">
                        <a href='wireframe.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Wireframe </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder   ">
W
                                                </i>
                                            </span>
                        </a>

                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Calender
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-calendar "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href='calender.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Calender
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-calendar "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='calender-create.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Calender Edit
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-calendar-edit "></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Charts
                                                    <span class="menu-arrow"></span>
                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-finance "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href='apexchart.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Apex Charts
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-chart-gantt "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='chartjs.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Chartsjs
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-chart-bar "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='googlechart.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Google Charts
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-google "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='chartist.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Chartist
                                                </span>
                                            </span>

                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                     <i class="icon-placeholder mdi mdi-chart-arc "></i>
                                                </i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Tables
                                                      <span class="menu-arrow"></span>

                                                </span>

                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-table-edit"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='table.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Table
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-format-list-bulleted "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='datatable.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Datatable
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-format-list-bulleted "></i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Maps
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                 <i class="icon-placeholder mdi mdi-map"></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">

                    <li class="menu-item">
                        <a href='mapael.html' class=' menu-link'>
                                        <span class="menu-label">
                                                <span class="menu-name">Vector Maps
                                                </span>
                                            </span>
                            <span class="menu-icon">
                                                    <!--<span class="icon-badge">10</span>-->
                                                    <i class="icon-placeholder mdi mdi-map-search-outline "></i>
                                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href='google-maps.html' class=' menu-link'>
                                        <span class="menu-label">
                                                  <span class="menu-name">Google Maps
                                                </span>
                                            </span>
                            <span class="menu-icon">

                                                    <i class="icon-placeholder mdi mdi-google"></i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Invoices
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-cash-usd "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='invoice.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Invoice View </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    I
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href='invoice-single.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Single Invoice </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                <span class="menu-name">Editors
                                                    <span class="menu-arrow"></span>
                                                </span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-file-document-box "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href='tinymce.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">TinyMCE </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href='summernote.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name">Summernote </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    S
                                                </i>
                                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href='trumbowyg.html' class=' menu-link'>
                                            <span class="menu-label">
                                                <span class="menu-name"> Trumbowyg </span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    T
                                                </i>
                                            </span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="menu-item ">
                <a href="light/index.html" target="_blank" class="menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Light Version
                                                </span>
                                                <span class="menu-info">🌟 New Layouts</span>
                                            </span>
                    <span class="menu-icon">
                          <span class="icon-badge badge-success badge badge-pill"><i class="mdi  mdi-star "></i></span>
                                                <i class="icon-placeholder mdi mdi-open-in-new "></i>
                                            </span>
                </a>
            </li>
            <li class="menu-item ">
                <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Menus
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Contains submenu</span>
                                            </span>
                    <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                </a>
                <!--submenu-->
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Menu Level </span>
                                                <span class="menu-info">500 New Events</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Sb
                                                </i>
                                            </span>
                        </a>

                    </li>

                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                        <span class="menu-label">
                                                 <span class="menu-name">Menus
                                                    <span class="menu-arrow"></span>
                                                </span>
                                                <span class="menu-info">Contains submenu</span>
                                            </span>
                            <span class="menu-icon">
                                                <i class="icon-placeholder mdi mdi-link-variant "></i>
                                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#" class=" menu-link">
                                            <span class="menu-label">
                                                <span class="menu-name">Menu Level </span>
                                                <span class="menu-info">500 New Events</span>
                                            </span>
                                    <span class="menu-icon">
                                                <i class="icon-placeholder  ">
                                                    Sb
                                                </i>
                                            </span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
        </ul>

    </div>

</aside>
<main class="admin-main">
    <!--site header begins-->
<header class="admin-header">

    <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <a class="nav-link  " data-target="#siteSearchModal" data-toggle="modal" href="#">
                    <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class=" ml-auto">
        <ul class="nav align-items-center">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="light/index.html" class="btn btn-success" target="_blank" >  Light Versasdssssion</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-24px mdi-bell-outline"></i>
                        <span class="notification-counter"></span>
                    </a>

                    <div class="dropdown-menu notification-container dropdown-menu-right">
                        <div class="d-flex p-all-15 bg-white justify-content-between border-bottom ">
                            <a href="#!" class="mdi mdi-18px mdi-settings text-muted"></a>
                            <span class="h5 m-0">Notifications</span>
                            <a href="#!" class="mdi mdi-18px mdi-notification-clear-all text-muted"></a>
                        </div>
                        <div class="notification-events bg-gray-300">
                            <div class="text-overline m-b-5">today</div>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-circle text-success"></i> All systems operational.</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body"> <i class="mdi mdi-upload-multiple "></i> File upload successful.</div>
                                </div>
                            </a>
                            <a href="#" class="d-block m-b-10">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="mdi mdi-cancel text-danger"></i> Your holiday has been denied
                                    </div>
                                </div>
                            </a>


                        </div>

                    </div>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="#">  Add Account
                    </a>
                    <a class="dropdown-item" href="#">  Reset Password</a>
                    <a class="dropdown-item" href="#">  Help </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Logout</a>
                </div>
            </li>

        </ul>

    </nav>
</header>

<!--site header ends -->    <section class="admin-content">
        <div class="container-fluid pull-up">
            <div class="row">
                asd
            </div>
        </div>

        <div class="container-fluid bg-dark m-b-30">
            <div class="row">

                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class="  "><span class="btn btn-white-translucent"><i
                                    class="mdi mdi-shape-circle-plus "></i></span> <span class="js-greeting"></span>,
                        John!</h4>
                    <p class="opacity-75 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad corporis dolores <br> doloribus
                        esse et iste laboriosam maiores maxime, mollitia nisi numquam omnis praesentium provident quam
                        quasi quia quisquam recusandae vel.
                    </p>
                    <a href="#" class="btn btn-white-translucent">View Reports</a>

                </div>
            </div>
        </div>
        <div class="container-fluid pull-up">
            <div class="row">
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-success   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-success"><i
                                                class="mdi mdi-arrow-up-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 19%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$199,580 </h3>
                            </div>
                            <div class="text-overline ">
                                CURRENT FISCAL
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-danger   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-danger"><i
                                                class="mdi mdi-arrow-down-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 32%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$65,055 </h3>
                            </div>
                            <div class="text-overline ">
                                Returning AVG
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-warning   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-warning"><i
                                                class="mdi mdi-arrange-send-to-back mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 74%</h6>
                            </div>


                            <div class=" text-center">
                                <h3> 35 </h3>
                            </div>
                            <div class="text-overline ">
                                on-going Projects
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-info   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-info"><i
                                                class="mdi mdi-account-convert mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 36%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$899,580 </h3>
                            </div>
                            <div class="text-overline ">
                                Recurring bills
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-lg-block d-none m-b-30">
                    <div class="card ">
                        <div class="   text-center card-body">
                            <div class="text-danger   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-danger"><i
                                                class="mdi mdi-arrow-up-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 49%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$19,124 </h3>
                            </div>
                            <div class="text-overline ">
                                server cost
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col visible-xlg m-b-30">
                    <div class="card">
                        <div class="   text-center card-body">
                            <div class="text-success   ">
                                <div class="avatar avatar-sm ">
                                    <span class="avatar-title rounded-circle badge-soft-success"><i
                                                class="mdi mdi-arrow-up-bold mdi-18px"></i> </span>

                                </div>
                                <h6 class="m-t-5 m-b-0"> 85%</h6>
                            </div>


                            <div class=" text-center">
                                <h3>$82,580 </h3>
                            </div>
                            <div class="text-overline ">
                                mobile ads
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Quarterly User Growth</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div id="chart-01"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Country Wise Distribution</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">


                            <div id="chart-02"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Top grossing Products</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">


                            <div id="chart-03"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Gender Based</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">


                            <div id="chart-04"></div>
                        </div>
                        <div class="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
                                </h6>
                                <a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 m-b-30">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">User Renewals</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-hover table-sm ">
                                <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Team</th>
                                    <th>location</th>
                                    <th>Progress</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-online"><img
                                                    src="d33wubrfki0l68.cloudfront.net/49ec5ab9ae08f11cdc3be22bf3b2694e1235b20e/04075/assets/img/users/user-1.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Tiger Nixon</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-danger badge-light"> System Architect</span>
                                    </td>
                                    <td class="align-middle">Edinburgh</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 12%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-online"><img
                                                    src="d33wubrfki0l68.cloudfront.net/ef7ab4ef831282c7ca66cbc681cfdfc0badf2088/28931/assets/img/users/user-2.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Garrett Rose</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-success"> Accounts</span>
                                    </td>
                                    <td class="align-middle">Tokyo</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-offline"><img
                                                    src="d33wubrfki0l68.cloudfront.net/e1763247cad8c56ee476ce2ae3c9a78e40b4d6b2/f3c84/assets/img/users/user-3.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Ashton Cox</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-primary"> Development</span>
                                    </td>
                                    <td class="align-middle">San Francisco</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 60%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-offline"><img
                                                    src="d33wubrfki0l68.cloudfront.net/c0d23254b27148289a3681fb65af34d702eb4f7b/e8a8c/assets/img/users/user-4.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Cedric Kelly</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-primary"> Development</span>
                                    </td>
                                    <td class="align-middle">Edinburgh</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 56%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-online"><img
                                                    src="d33wubrfki0l68.cloudfront.net/c8a7938c60245d499fc16b2dfbc8f5eb7a173607/0a8e3/assets/img/users/user-5.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Airi Satou</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-primary"> Development</span>
                                    </td>
                                    <td class="align-middle">Tokyo</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 40%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">
                                        <div class="avatar avatar-sm avatar-offline"><img
                                                    src="d33wubrfki0l68.cloudfront.net/33288068c2a6321d7ad01d52c779724ad021f113/71eda/assets/img/users/user-6.jpg"
                                                    class="avatar-img avatar-sm rounded-circle" alt="user-image"></div>
                                        <span class="ml-2">Brielle Will</span></td>

                                    <td class="align-middle"><span class="badge badge-soft-dark"> Integration </span>
                                    </td>
                                    <td class="align-middle">New York</td>
                                    <td class="align-middle">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 20%"></div>
                                        </div>
                                    </td>
                                    <td class="text-center align-middle"><a class="btn btn-primary btn-sm" href="#">
                                            Connect</a></td>
                                </tr>


                                </tbody>
                            </table>

                        </div>
                        <div class="card-footer">
                            <div class="d-flex  justify-content-between">
                                <h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i>  List based on your communication history.</span>
                                </h6>
                                <a href="#!" class="btn btn-dark">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-b-30">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Files Library</div>

                            <div class="card-controls">

                                <a href="#" class="js-card-refresh icon"> </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="list-group list-group-flush ">


                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="d33wubrfki0l68.cloudfront.net/903b0c790e4deda0928cd7641008a3737e127957/8d6ba/assets/img/social/s5.jpg"
                                                                        class="avatar-img avatar-sm rounded" alt="user-image">
                                    </div>
                                </div>
                                <div class="">
                                    <div>Recess.jpg</div>
                                    <div class="text-muted">350 Kb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="d33wubrfki0l68.cloudfront.net/94dee657dd6c058bcf3a18e5d905995d826993c7/d904e/assets/img/social/s4.jpg"
                                                                        class="avatar-img avatar-sm rounded" alt="user-image">
                                    </div>
                                </div>
                                <div class="">
                                    <div>Outing.jpg</div>
                                    <div class="text-muted">1.2 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm "><img src="d33wubrfki0l68.cloudfront.net/d6a3935101c0d7905470230b62428a1d61e8214f/7609c/assets/img/logos/nytimes.jpg"
                                                                        class="avatar-img avatar-sm rounded" alt="user-image">
                                    </div>
                                </div>
                                <div class="">
                                    <div>Client.png</div>
                                    <div class="text-muted">45 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-dark rounded"><i
                                                    class="mdi mdi-24px mdi-file-pdf"></i></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>SRS Document</div>
                                    <div class="text-muted">25.5 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-dark rounded"><i
                                                    class="mdi mdi-24px mdi-file-document-box"></i></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>Design Guide.pdf</div>
                                    <div class="text-muted">9 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title  rounded"><i
                                                        class="mdi mdi-24px mdi-code-braces"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>response.json</div>
                                    <div class="text-muted">15 Kb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-group-item d-flex  align-items-center">
                                <div class="m-r-20">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title bg-green rounded"><i
                                                        class="mdi mdi-24px mdi-file-excel"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>June Accounts.xls</div>
                                    <div class="text-muted">6 Mb</div>
                                </div>

                                <div class="ml-auto">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi  mdi-dots-vertical mdi-18px"></i> </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="d33wubrfki0l68.cloudfront.net/e1763247cad8c56ee476ce2ae3c9a78e40b4d6b2/f3c84/assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="d33wubrfki0l68.cloudfront.net/c0d23254b27148289a3681fb65af34d702eb4f7b/e8a8c/assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="d33wubrfki0l68.cloudfront.net/58bb4bf1a4845212494754f9dd8cf21463c0e285/2ec60/assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="<?php echo site_url("resources/assets/vendor/jquery/jquery.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/jquery-ui/jquery-ui.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/popper/popper.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/select2/js/select2.full.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/listjs/listjs.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/moment/moment.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/daterangepicker/daterangepicker.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"); ?>"></script>
<script src="<?php echo site_url("resources/assets/js/atmos.min.js"); ?>"></script>
<!--page specific scripts for demo-->
<!--Additional Page includes-->
<script src="<?php echo site_url("resources/assets/vendor/apexchart/apexcharts.min.js"); ?>"></script>
<!--chart data for current dashboard-->
<script src="<?php echo site_url("resources/assets/js/dashboard-01.js"); ?>"></script>
</body>

</html>
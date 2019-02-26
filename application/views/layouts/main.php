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
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class="">  Form elements
                        </h4>
                        <p class="opacity-75 ">
                            Examples for form control styles, layout options, and custom components for
                            creating a wide variety of forms elements.
                            <br>
                            we have included dropzone for file uploads, datepicker and select2 for custom controls.
                        </p>


                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">
                     <div class="card m-b-30">
                         <?php
                        if (isset($_view) && $_view)
                            $this->load->view($_view);
                        ?>
                     </div>
                </div>

                <div class="col-lg-6">

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Forms
                            </h5>
                            <p class="m-b-0 text-muted">
                                Standard form controls
                            </p>
                        </div>
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4"  >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                       placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">


                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">


                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->

                    <!--widget card begin-->
                    <div class="card m-b-30 ">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Floating Labels
                            </h5>
                            <p class="m-b-0 opacity-50">
                                atmos comes with floating label inputs
                            </p>
                        </div>
                        <div class="card-body ">
                            <!--Following uses  .form-dark class on parent to make controls appear -->
                            <!--transparent in the container-->
                            <form class="" action="#">
                                <div class="form-row">
                                    <div class="form-group floating-label col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group floating-label col-md-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control "  >
                                    </div>
                                </div>
                                <div class="form-group floating-label">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Address 1234 Main St">
                                </div>
                                <div class="form-group floating-label">
                                    <label>Address 2</label>
                                    <input type="text" class="form-control"
                                           placeholder="Address 2 Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group floating-label col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <!--                                    select inputs should have .show-label class by default-->
                                    <div class="form-group floating-label show-label col-md-4">
                                        <label>State</label>
                                        <select class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Remember</option>
                                            <option>keeping</option>
                                            <option>things</option>
                                            <option>Classy</option>
                                            <option>is important</option>
                                        </select>
                                    </div>
                                    <div class="form-group floating-label col-md-2">
                                        <label>Zip</label>
                                        <input type="text" class="form-control" placeholder="Zip">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Create Account</button>

                            </form>
                        </div>
                    </div>
                    <div class="card m-b-30 bg-dark text-white">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Forms Dark
                            </h5>
                            <p class="m-b-0 opacity-50">
                                Form control in dark backgrounds. use form-dark in parent container to make
                                inputs of the given container transparent
                            </p>
                        </div>
                        <div class="card-body ">
                            <!--Following uses  .form-dark class on parent to make controls appear -->
                            <!--transparent in the container-->
                            <form class="form-dark" action="#">
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>State</label>
                                        <select class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Remember</option>
                                            <option>keeping</option>
                                            <option>things</option>
                                            <option>Classy</option>
                                            <option>is important</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Zip</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Create Account</button>

                            </form>
                        </div>
                    </div>
                    <!--widget card ends-->

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Input Groups
                            </h5>
                            <p class="m-b-0 text-muted">
                                Easily extend form controls by adding text, buttons, or button groups on either side of
                                textual inputs, custom selects, and custom file inputs.
                            </p>
                        </div>
                        <div class="card-body ">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                            </div>

                            <label for="basic-url">Your vanity URL</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->


                </div>
                <div class="col-lg-6">
                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Forms Sizes
                            </h5>
                            <p class="m-b-0 text-muted">
                                Form Control Sizes
                            </p>
                        </div>
                        <div class="card-body ">
                            <div class="form-row">
                                <div class="col-12 form-group">
                                    <input class="form-control form-control-lg" type="text"
                                           placeholder=".form-control-lg">

                                </div>
                                <div class="col-12 form-group">

                                    <input class="form-control" type="text" placeholder="Default input">
                                </div>
                                <div class="col-12 form-group">

                                    <input class="form-control form-control-sm" type="text"
                                           placeholder=".form-control-sm">
                                </div>
                                <div class="col-12 form-group">
                                    <select class="form-control form-control-lg">
                                        <option>Large select</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">

                                    <select class="form-control">
                                        <option>Default select</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">

                                    <select class="form-control form-control-sm">
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--widget card ends-->

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                 Validation Server Side
                            </h5>
                            <p class="m-b-0 text-muted">
                                You can add server side validation using you can indicate invalid and valid form fields
                                with .is-invalid and .is-valid. Note that .invalid-feedback is also supported with these
                                classes.
                            </p>
                        </div>
                        <div class="card-body ">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServer01">First name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer01"
                                               placeholder="First name" value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServer02">Last name</label>
                                        <input type="text" class="form-control is-valid" id="validationServer02"
                                               placeholder="Last name" value="Otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServerUsername">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                            </div>
                                            <input type="text" class="form-control is-invalid"
                                                   id="validationServerUsername" placeholder="Username"
                                                   aria-describedby="inputGroupPrepend3" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer03">City</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer03"
                                               placeholder="City" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer04">State</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer04"
                                               placeholder="State" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer05">Zip</label>
                                        <input type="text" class="form-control is-invalid" id="validationServer05"
                                               placeholder="Zip" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input is-invalid" type="checkbox" value=""
                                               id="invalidCheck3" required>
                                        <label class="form-check-label" for="invalidCheck3">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                    <!--widget card ends-->

                    <!--widget card begin-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="m-b-0">
                                Flushed Forms
                            </h5>
                            <p class="m-b-0 text-muted">
                                default form-controls with transparent borders for input group.
                            </p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="input-group input-group-flush mb-3">
                                    <input type="text" class="form-control form-control-prepended"
                                           placeholder="Enter Security Pin Code">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class=" mdi mdi-lock "></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group input-group-flush mb-3">
                                    <input type="number" class="form-control form-control-prepended"
                                           placeholder="Enter your vision">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class=" mdi mdi-eye "></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group input-group-flush mb-3">
                                    <input type="email" class="form-control form-control-appended"
                                           placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class=" mdi mdi-email "></span>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <!--widget card ends-->
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
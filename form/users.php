<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="admin-themes-lab">
  <meta name="author" content="themes-lab">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
  <title>Make</title>
  <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="assets/css/theme.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="assets/css/ui.css" rel="stylesheet"> <!-- MANDATORY -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <![endif]-->
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->
<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-default" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-default" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-default" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-default" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
<body class="builder-page fixed-sidebar color-primary bg-light-blue theme-sltl fixed-topbar">
  <section>
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar">
        <div class="logopanel">
          <h1>
            <a href="index.html"></a>
          </h1>
        </div>
        <div class="sidebar-inner">
          <div class="sidebar-top">
            <form action="search-result.html" method="post" class="searchform" id="search-results">
              <input type="text" class="form-control" name="keyword" placeholder="Search...">
            </form>
            <div class="userlogged clearfix">
              <i class="icon icons-faces-users-01"></i>
              <div class="user-details">
                <h4>Mike Mayers</h4>
                <div class="dropdown user-login">
                  <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                  <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                    <li><a href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                    <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="menu-title">
            Navigation 
            <div class="pull-right menu-settings">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300"> 
              <i class="icon-settings"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
              </ul>
            </div>
          </div>
          <ul class="nav nav-sidebar">
            <li class=""><a href="../../admin/dashboard.html"><i class="icon-home"></i><span data-translate="dashboard">Dashboard</span></a></li>
            <li class="nav-parent nav-active active">
              <a href="#"><i class="icon-puzzle"></i><span data-translate="builder">Builder</span> <span class="fa arrow"></span></a>
              <ul class="children collapse" style="display: block;">
                <li><a target="_blank" href="../admin-builder/index.html"> Admin</a></li>
                <li class="active"><a href="index.html"> Page</a></li>
                <li><a href="../../admin/ecommerce-pricing-table.html"> Pricing Table</a></li>
              </ul>
            </li>
            <li><a href="../../frontend/one-page.html" target="_blank"><i class="fa fa-laptop"></i><span class="pull-right badge badge-primary hidden-st">New</span><span data-translate="Frontend">Frontend</span></a></li>
            <li class="nav-parent">
              <a href="#"><i class="icon-bulb"></i><span data-translate="Mailbox">Mailbox</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/mailbox.html"> Inbox</a></li>
                <li><a href="../../admin/mailbox-send.html"> Send Email</a></li>
                <li><a href="../../admin/mailbox-emails.html"><span class="pull-right badge badge-danger">Hot</span> Email Templates</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-screen-desktop"></i><span data-translate="ui elements">UI Elements</span> <span class="fa arrow"></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/ui-buttons.html" data-translate="buttons"> Buttons</a></li>
                <li><a href="../../admin/ui-components.html" data-translate="components"> Components</a></li>
                <li><a href="../../admin/ui-tabs.html" data-translate="tabs"> Tabs</a></li>
                <li><a href="../../admin/ui-animations.html" data-translate="animations css3"> Animations CSS3</a></li>
                <li><a href="../../admin/ui-icons.html" data-translate="icons"> Icons</a></li>
                <li><a href="../../admin/ui-portlets.html" data-translate="portlets"> Portlets</a></li>
                <li><a href="../../admin/ui-nestable-list.html" data-translate="nestable list"> Nestable List</a></li>
                <li><a href="../../admin/ui-tree-view.html" data-translate="tree view"> Tree View</a></li>
                <li><a href="../../admin/ui-modals.html" data-translate="modals"> Modals</a></li>
                <li><a href="../../admin/ui-notifications.html" data-translate="notifications"> Notifications</a></li>
                <li><a href="../../admin/ui-typography.html" data-translate="typography"> Typography</a></li>
                <li><a href="../../admin/ui-helper.html" data-translate="helper"> Helper Classes</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-layers"></i><span data-translate="layouts">Layouts<span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/layouts-api.html" data-translate=""> API</a></li>
                <li><a href="../../admin/layout-collapsed-sidebar.html" data-translate=""> Collapsed Sidebar</a></li>
                <li><a href="../../admin/layout-topbar-mega-menu.html" data-translate=""> Horizontal Mega Menu</a></li>
                <li><a href="../../admin/layout-topbar-mega-menu-dark.html" data-translate=""> Horizontal Mega Menu Dark</a></li>
                <li><a href="../../admin/layout-sidebar-top.html" data-translate=""> Sidebar on Top</a></li>
                <li><a href="../../admin/layout-right-sidebar.html" data-translate=""> Right Sidebar</a></li>
                <li><a href="../../admin/layout-sidebar-hover.html" data-translate=""> Sidebar on Hover</a></li>
                <li><a href="../../admin/layout-sidebar-condensed.html" data-translate=""> Sidebar Condensed</a></li>
                <li><a href="../../admin/layout-sidebar-light.html" data-translate=""> Sidebar Light</a></li>
                <li><a href="../../admin/layout-boxed.html" data-translate=""> Boxed Layout</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-note"></i><span data-translate="forms">Forms <span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/forms.html"> Forms Elements</a></li>
                <li><a href="../../admin/forms-validation.html"> Forms Validation</a></li>
                <li><a href="../../admin/forms-plugins.html"> Advanced Plugins</a></li>
                <li><a href="../../admin/forms-wizard.html"> <span class="pull-right badge badge-danger">low</span> <span data-translate="form-wizard">Form Wizard</span></a></li>
                <li><a href="../../admin/forms-sliders.html" data-translate="sliders"> Sliders</a></li>
                <li><a href="../../admin/forms-editors.html" data-translate="text editors"> Text Editors</a></li>
                <li><a href="../../admin/forms-input-masks.html" data-translate="input masks"> Input Masks</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="fa fa-table"></i><span data-translate="medias manager">Tables<span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/tables.html" data-translate="tables styling"> Tables Styling</a></li>
                <li><a href="../../admin/tables-dynamic.html" data-translate="tables dynamic"> Tables Dynamic</a></li>
                <li><a href="../../admin/tables-filter.html" data-translate="tables filter"> Tables Filter</a></li>
                <li><a href="../../admin/tables-editable.html" data-translate="tables editable"> Tables Editable</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-bar-chart"></i><span data-translate="charts">Charts <span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/charts.html" data-translate="image croping"> Charts</a></li>
                <li><a href="../../admin/charts-finance.html" data-translate="gallery sortable"> Financial Charts</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-picture"></i><span data-translate="medias manager">Medias<span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/medias-image-croping.html" data-translate="image croping"> Images Croping</a></li>
                <li><a href="../../admin/medias-gallery-sortable.html" data-translate="gallery sortable"> Gallery Sortable</a></li>
                <li><a href="../../admin/medias-hover-effects.html" data-translate="hover effects"> <span class="pull-right badge badge-primary">12</span> Hover Effects</a></li>
                
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-docs"></i><span data-translate="pages">Pages <span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/page-timeline.html"> Timeline</a></li>
                <li><a href="../../admin/page-404.html"> Error 404</a></li>
                <li><a href="../../admin/page-500.html"> Error 500</a></li>
                <li><a href="../../admin/page-blank.html"> Blank Page</a></li>
                <li><a href="../../admin/page-contact.html"> Contact</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-user"></i><span data-translate="pages">User <span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/user-profil.html"> <span class="pull-right badge badge-danger">Hot</span> Profil</a></li>
                <li><a href="../../admin/user-lockscreen.html"> Lockscreen</a></li>
                <li><a href="../../admin/user-login-v1.html"> Login / Register</a></li>
                <li><a href="../../admin/user-login-v2.html"> Login / Register v2</a></li>
                <li><a href="../../admin/user-session-timeout.html"> Session Timeout</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-basket"></i><span data-translate="pages">eCommerce <span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/ecommerce-dashboad.html"> Dashboard</a></li>
                <li><a href="../../admin/ecommerce-cart.html"> Shopping Cart</a></li>
                <li><a href="../../admin/ecommerce-invoice.html"> Invoice</a></li>
                <li><a href="../../admin/ecommerce-pricing-table.html"><span class="pull-right badge badge-success">5</span> Pricing Tables</a></li>
              </ul>
            </li>
            <li class="nav-parent">
              <a href=""><i class="icon-cup"></i><span>Extra <span class="fa arrow"></span></span></a>
              <ul class="children collapse">
                <li><a href="../../admin/extra-widgets.html"> Widgets</a></li>
                <li><a href="../../admin/page-coming-soon.html"> Coming Soon</a></li>
                <li><a href="../../admin/extra-sliders.html"> Sliders</a></li>
                <li><a href="../../admin/maps-google.html"> Google Maps</a></li>
                <li><a href="../../admin/maps-vector.html"> Vector Maps</a></li>
              </ul>
            </li>
          </ul>
          <!-- SIDEBAR WIDGET FOLDERS -->
          <div class="sidebar-widgets">
            <p class="menu-title widget-title">Folders <span class="pull-right"><a href="#" class="new-folder"> <i class="icon-plus"></i></a></span></p>
            <ul class="folders">
              <li>
                <a href="#"><i class="icon-doc c-primary"></i>My documents</a> 
              </li>
              <li>
                <a href="#"><i class="icon-picture"></i>My images</a> 
              </li>
              <li><a href="#"><i class="icon-lock"></i>Secure data</a> 
              </li>
              <li class="add-folder" style="display: none;">
                <input type="text" placeholder="Folder's name..." class="form-control input-sm">
              </li>
            </ul>
          </div>
          <div class="sidebar-footer clearfix">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
            <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
            <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
            <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
            <i class="icon-power"></i></a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
          <div class="header-left">
            <div class="topnav">
              <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
              <ul class="nav nav-icons">
                <li><a href="#" class="toggle-sidebar-top"><span class="icon-user-following"></span></a></li>
                <li><a href="../../admin/mailbox.html"><span class="octicon octicon-mail-read"></span></a></li>
                <li><a href="#"><span class="octicon octicon-flame"></span></a></li>
                <li><a href="index.html"><span class="octicon octicon-rocket"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="header-right">
            <ul class="header-menu nav navbar-nav">
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="language-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-globe"></i>
                <span>Language</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#" data-lang="en"><img src="assets/images/flags/usa.png" alt="flag-english"> <span>English</span></a>
                  </li>
                  <li>
                    <a href="#" data-lang="es"><img src="assets/images/flags/spanish.png" alt="flag-english"> <span>Español</span></a>
                  </li>
                  <li>
                    <a href="#" data-lang="fr"><img src="assets/images/flags/french.png" alt="flag-english"> <span>Français</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
              <!-- BEGIN NOTIFICATION DROPDOWN -->
              <li class="dropdown" id="notifications-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-bell"></i>
                <span class="badge badge-danger badge-header">6</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">12 Pending Notifications</p>
                  </li>
                  <li>
                    <ul class="dropdown-menu-list withScroll mCustomScrollbar _mCS_50" data-height="220" style="height: 220px;"><div class="mCustomScrollBox mCS-light" id="mCSB_50" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                      <li>
                        <a href="#">
                        <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                        Steve have rated your photo
                        <span class="dropdown-time">Just now</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                        John added you to his favs
                        <span class="dropdown-time">15 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-file-text p-r-10 f-18"></i>
                        New document available
                        <span class="dropdown-time">22 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">40 mins</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                        Meeting in 1 hour
                        <span class="dropdown-time">1 hour</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-bell p-r-10 f-18"></i>
                        Server 5 overloaded
                        <span class="dropdown-time">2 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                        Bill comment your post
                        <span class="dropdown-time">3 hours</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                        <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                        New picture added
                        <span class="dropdown-time">2 days</span>
                        </a>
                      </li>
                    </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="#" class="pull-left">See all notifications</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END NOTIFICATION DROPDOWN -->
              <!-- BEGIN MESSAGES DROPDOWN -->
              <li class="dropdown" id="messages-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-paper-plane"></i>
                <span class="badge badge-primary badge-header">
                8
                </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header clearfix">
                    <p class="pull-left">
                      You have 8 Messages
                    </p>
                  </li>
                  <li class="dropdown-body">
                    <ul class="dropdown-menu-list withScroll mCustomScrollbar _mCS_51" data-height="220" style="height: 220px;"><div class="mCustomScrollBox mCS-light" id="mCSB_51" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="assets/images/avatars/avatar3@2x.png" alt="avatar 3" width="0" height="0">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>Alexa Johnson</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="assets/images/avatars/avatar4@2x.png" alt="avatar 4" width="0" height="0">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>John Smith</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="assets/images/avatars/avatar5@2x.png" alt="avatar 5" width="0" height="0">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>Bobby Brown</strong>  
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                      <li class="clearfix">
                        <span class="pull-left p-r-5">
                        <img src="assets/images/avatars/avatar6@2x.png" alt="avatar 6" width="0" height="0">
                        </span>
                        <div class="clearfix">
                          <div>
                            <strong>James Miller</strong> 
                            <small class="pull-right text-muted">
                            <span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
                            </small>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                      </li>
                    </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
                  </li>
                  <li class="dropdown-footer clearfix">
                    <a href="mailbox.html" class="pull-left">See all messages</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- END MESSAGES DROPDOWN -->
              <!-- BEGIN USER DROPDOWN -->
              <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img src="assets/images/avatars/user1.png" alt="user image">
                <span class="username">Hi, John Doe</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-calendar"></i><span>My Calendar</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="icon-logout"></i><span>Logout</span></a>
                  </li>
                </ul>
              </li>
              <!-- END USER DROPDOWN -->
              <!-- CHAT BAR ICON -->
              <li id="quickview-toggle"><a href="#"><i class="icon-bubbles"></i></a></li>
            </ul>
          </div>
          <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div id="hidden-small-screen-message">
            <h2 class="m-t-40"><strong>Page Builder</strong> is not available on small screen</h2>
            <p>Editor is not adapted to screen smaller than 1024px.</p>
            <p>For that reason, page builder is only visible on screen bigger.</p>
          </div>
          
          
            <div class="row">
              
            </div>
            <div class="row">
              
            </div>
            <div class="row">
              
            </div>
            <div class="row">
              
                
                  <div class="col-md-12">
                    
                  <h2 class="summernote editing note-air-editor note-editable" data-airmode="true" id="note-editor-4" contenteditable="true">Usuarios</h2></div>
                
                
              
            </div><div class="row"><div class="col-md-6"><form class="form-horizontal ui-sortable" role="form" method="" action="" style=""><div class="form-group" style="opacity: 1; z-index: 0;"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div></form></div><div class="col-md-6"><form class="form-horizontal ui-sortable" role="form" method="" action="" style=""><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div></form></div></div><div class="row"><div class="col-md-6"><form class="form-horizontal ui-sortable" role="form" method="" action="" style=""><div class="form-group" style="opacity: 1; z-index: 0;"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div><div class="form-group" style="opacity: 1; z-index: 0;"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div></form></div><div class="col-md-6"><form class="form-horizontal ui-sortable" role="form" method="" action="" style=""><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div><div class="form-group"><label class="col-sm-3 control-label">Label</label><div class="col-sm-9"><input class="form-control" type="text" placeholder=""></div></div></form></div></div><div class="row"><div class="col-md-4"><form class="form-horizontal ui-sortable" role="form" method="" action=""><div class="form-group"><div class="col-sm-3 m-t-5"><label>Tipo de Cuenta</label></div><div class="col-sm-9"><div class="input-group width-100p"><div class="select2-container form-control" id="s2id_autogen65" title="" style="display: block;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-66">Almacen</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen66" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-66" id="s2id_autogen66"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen66_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-66" id="s2id_autogen66_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-66">   </ul></div></div><select name="permisos" class="form-control" data-placeholder="" title="" style="display: none;" tabindex="-1"><option>Administrador</option><option>Almacen</option><option>Crédito y Cobranza</option><option>Ventas</option></select></div></div></div></form></div><div class="col-md-8"><form class="form-horizontal ui-sortable" role="form" method="" action=""><div class="form-group"><div class="col-sm-3 m-t-5"><label>Select Label</label></div><div class="col-sm-9"><div class="input-group width-100p"><div class="select2-container form-control" id="s2id_autogen67" title="" style="display: block;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-68">1</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen68" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-68" id="s2id_autogen68"></div><select name="" class="form-control" data-placeholder="" title="" style="display: none;" tabindex="-1"><option>1</option><option>1</option><option>1</option></select></div></div></div><div class="form-group"><div class="col-sm-3 m-t-5"><label>Select Label</label></div><div class="col-sm-9"><div class="input-group width-100p"><div class="select2-container form-control" id="s2id_autogen69"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-70">2</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen70" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-70" id="s2id_autogen70"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen70_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-70" id="s2id_autogen70_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-70">   </ul></div></div><select name="" class="form-control" data-placeholder="" tabindex="-1" title="" style="display: none;"><option>2</option><option>2</option><option>2</option></select></div></div></div></form></div></div><div class="row"><div class="col-md-12"><form class="form-horizontal ui-sortable" role="form" method="" action=""><div class="form-group"><div class="col-sm-3 m-t-5"><label><strong>Crear</strong></label></div><div class="col-sm-9"><button id="" name="" type="button" class="btn btn-primary btn-square">Button</button></div></div><div class="form-group"><div class="col-sm-3 m-t-5"></div><div class="col-sm-9"><button id="" name="" type="button" class="btn btn-primary btn-square">Button</button></div></div><div class="form-group"><div class="col-sm-3 m-t-5"></div><div class="col-sm-9"><button id="" name="" type="button" class="btn btn-primary btn-square">Button</button></div></div></form></div></div>
          
          
          
          
          
          
          
          
          
          
          

          
          
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->
      <div class="builder hidden-sm hidden-xs" id="builder" style="display: none;">
        <a class="builder-toggle"><i class="icon-wrench"></i></a>
        <div class="inner mCustomScrollbar _mCS_1" style="height: 100%;"><div class="mCustomScrollBox mCS-light" id="mCSB_1" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
          <div class="builder-container">
            <a href="#" class="btn btn-sm btn-default" id="reset-style">reset default style</a>
            <h4>Layout options</h4>
            <div class="layout-option">
              <span> RTL</span>
              <label class="switch pull-right">
              <input data-layout="rtl" id="switch-rtl" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Fixed Sidebar</span>
              <label class="switch pull-right">
              <input data-layout="sidebar" id="switch-sidebar" type="checkbox" class="switch-input" checked="">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Hover</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-hover" id="switch-sidebar-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Submenu on Hover</span>
              <label class="switch pull-right">
              <input data-layout="submenu-hover" id="switch-submenu-hover" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span> Sidebar on Top</span>
              <label class="switch pull-right">
              <input data-layout="sidebar-top" id="switch-sidebar-top" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Fixed Topbar</span>
              <label class="switch pull-right">
              <input data-layout="topbar" id="switch-topbar" type="checkbox" class="switch-input" checked="">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <div class="layout-option">
              <span>Boxed Layout</span>
              <label class="switch pull-right">
              <input data-layout="boxed" id="switch-boxed" type="checkbox" class="switch-input">
              <span class="switch-label" data-on="On" data-off="Off"></span>
              <span class="switch-handle"></span>
              </label>
            </div>
            <h4 class="border-top">Color</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="theme-color bg-dark" data-main="default" data-color="#2B2E33"></div>
                <div class="theme-color background-primary active" data-main="primary" data-color="#319DB5"></div>
                <div class="theme-color bg-red" data-main="red" data-color="#C75757"></div>
                <div class="theme-color bg-green" data-main="green" data-color="#1DA079"></div>
                <div class="theme-color bg-orange" data-main="orange" data-color="#D28857"></div>
                <div class="theme-color bg-purple" data-main="purple" data-color="#B179D7"></div>
                <div class="theme-color bg-blue" data-main="blue" data-color="#4A89DC"></div>
              </div>
            </div>
            <h4 class="border-top">Theme</h4>
            <div class="row row-sm">
              <div class="col-xs-6">
                <div class="theme clearfix sdtl" data-theme="sdtl">
                  <div class="header theme-left" style="background-color: rgb(49, 157, 181);"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-dark" style="background-color: rgb(22, 73, 84);"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltd" data-theme="sltd">
                  <div class="header theme-left" style="background-color: rgb(49, 157, 181);"></div>
                  <div class="header theme-right-dark" style="background-color: rgb(22, 73, 84);"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sdtd" data-theme="sdtd">
                  <div class="header theme-left" style="background-color: rgb(49, 157, 181);"></div>
                  <div class="header theme-right-dark" style="background-color: rgb(22, 73, 84);"></div>
                  <div class="theme-sidebar-dark" style="background-color: rgb(22, 73, 84);"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
              <div class="col-xs-6">
                <div class="theme clearfix sltl active" data-theme="sltl">
                  <div class="header theme-left" style="background-color: rgb(49, 157, 181);"></div>
                  <div class="header theme-right-light"></div>
                  <div class="theme-sidebar-light"></div>
                  <div class="bg-light"></div>
                </div>
              </div>
            </div>
            <h4 class="border-top">Background</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="bg-color bg-clean" data-bg="clean" data-color="#F8F8F8"></div>
                <div class="bg-color bg-lighter" data-bg="lighter" data-color="#EFEFEF"></div>
                <div class="bg-color bg-light-default" data-bg="light-default" data-color="#E9E9E9"></div>
                <div class="bg-color bg-light-blue active" data-bg="light-blue" data-color="#E2EBEF"></div>
                <div class="bg-color bg-light-purple" data-bg="light-purple" data-color="#E9ECF5"></div>
                <div class="bg-color bg-light-dark" data-bg="light-dark" data-color="#DCE1E4"></div>
              </div>
            </div>
          </div>
        </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
      </div>
      <!-- END BUILDER -->
    </section>
<!-- Preloader -->
  <div class="loader-overlay">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
<script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/plugins/gsap/main-gsap.min.js"></script> <!-- HTML Animations -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
<script src="assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
<script src="assets/plugins/bootbox/bootbox.min.js"></script> 
<script src="assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
<script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
<script src="assets/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
<script src="assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
<script src="assets/plugins/retina/retina.min.js"></script> 
<script src="assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
<script src="assets/plugins/bootstrap/js/jasny-bootstrap.min.js"></script> <!-- File Upload and Input Masks -->
<script src="assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
<script src="assets/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
<script src="assets/plugins/bootstrap-loading/lada.min.js"></script> <!-- Buttons Loading State -->
<script src="assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
<script src="assets/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
<script src="assets/plugins/colorpicker/spectrum.min.js"></script> <!-- Color Picker -->
<script src="assets/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
<script src="assets/plugins/autosize/autosize.min.js"></script> <!-- Textarea autoresize -->
<script src="assets/plugins/icheck/icheck.min.js"></script> <!-- Icheck -->
<script src="assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
<script src="assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- Context Menu -->
<script src="assets/plugins/prettify/prettify.min.js"></script> <!-- Show html code -->
<script src="assets/plugins/slick/slick.min.js"></script> <!-- Slider -->
<script src="assets/plugins/countup/countUp.min.js"></script> <!-- Animated Counter Number -->
<script src="assets/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
<script src="assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
<script src="assets/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
<script src="assets/plugins/summernote/summernote.js"></script>
<script src="assets/plugins/bootstrap-slider/bootstrap-slider.js"></script>
<script src="assets/plugins/skycons/skycons.js"></script>
<script src="assets/js/application.js"></script> <!-- Main Application Script -->
<script src="assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
<script src="assets/js/widgets/notes.js"></script>
<script src="assets/js/quickview.js"></script> <!-- Chat Script -->
</body>
</html>
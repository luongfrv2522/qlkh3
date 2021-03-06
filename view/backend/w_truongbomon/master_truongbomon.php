<?php 
  ob_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="view/backend/images/favicon.ico" type="image/ico" />

    <title>Trưởng bộ môn</title>
        <!-- jQuery -->
    <script src="public/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="public/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="public/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="public/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="public/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/backend/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Trưởng bộ môn</span></a>
            </div>

            <div class="clearfix"></div>
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="#"><i class="fa fa-home"></i> Home </a></li>

                  <li><a><i class="fa fa-edit"></i> Quản lý đề tài <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="truongbomon.php?controller=detaihoanthanh">Đề tài đã hoàn thành</a></li>
                      <li><a href="truongbomon.php?controller=detaidangthuchien">Đề tài đang thực hiện</a></li>
                      <li><a href="truongbomon.php?controller=detaichoxetduyet">Đề tài chờ xét duyệt</a></li>
                      <li><a href="truongbomon.php?controller=detaibihuy">Đề tài bị hủy</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Hội đồng và thời gian bảo vệ <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="truongbomon.php?controller=hoidong">Duyệt đề tài</a></li>
                      <li><a href="truongbomon.php?controller=hoidongnghiemthu">Nghiệm thu đề tài</a></li>
                    </ul>
                  </li>
                   <li><a href="truongbomon.php?controller=baocaotiendo"><i class="fa fa-table"></i> Xem tiến độ đề tài </a></li>
                  <li><a href="truongbomon.php?controller=ketquadetai"><i class="fa fa-table"></i> Xem kết quả đề tài </a></li>
                
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="admin.php?controller=logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?=$_SESSION["SS_USER"]->c_email ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="admin.php?controller=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
          <div class="container">
            <?php 
              //kiem tra duong dan cua file controller co ton tai khong, neu ton tai thi load MVC
              if(file_exists($file_controller))
                include $file_controller;
             ?>
          </div>
        <!-- /page content -->
      </div>
    </div>


    <!-- Bootstrap -->
    <script src="public/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/backend/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/backend/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="public/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="public/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="public/backend/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="public/backend/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="public/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/backend/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="public/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="public/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="public/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/backend/vendors/moment/min/moment.min.js"></script>
    <script src="public/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/backend/build/js/custom.min.js"></script>

    

  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../node_modules/axios/dist/axios.min.js"></script>
    <script src="../node_modules/bootstrap/dist/css/bootstrap.rtl.css"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/620207ecae.js" crossorigin="anonymous"></script>

    <script src="../js/menu.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <link rel="stylesheet" href="../css/diamon.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/label_button.css">
    <link rel="stylesheet" href="../css/remove_circle.css">
    <link rel="stylesheet" href="../css/upload.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"  onclick="Push();"><i class="fas fa-bars"></i></a>
                        </li>
                    </div>
            </div>
      
            
                <li class="breadcrumb-item" style="font-size:13px;" >หน้าแรก</li>                      
                <li id="li_breadcrumb"></li>
        

            </ul>

 
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">5</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" style="display: block" id="name_user">
                        <div class="container">
                            <div class="row"  style="display: block" id="tag_name_user">
                                <div class="col-lg-8" style="font-size:13px;"><strong>มาดี</strong></div>
                                <div class="w-100"></div>
                                <div class="col" style="font-size:11px;"><strong>สํานักเลขาธิการ</strong></div>
                            </div>
                            <img src="https://source.unsplash.com/random" width="30" height="30" style="border-radius: 50%;">
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info ">
            <!-- Brand Logo -->
            <div align="center" id="logo_img_big" style="display: block">
                <a href="index.php" class="brand-link mt-3">
                    <img src="../pic/logo.png"  width="100" height="100"><br>
                    <h6 style="font-size:11px;"><strong>สํานักเลขาธิการคณะรัฐมนตรี</strong><br>
                        <span style="font-size:10px;">ระบบรับร่างราชกิจจานุเบกษา</span>
                    </h6><br>
                </a>
            </div>
           <!--logo menu small -->     
            <div align="center"  id="logo_img_small" style="display: none">
            <a href="index.php" class="brand-link mt-2" >
                <img src="../pic/logo.png" class="brand-image " width="30" height="30">
                <strong style="font-size:11px;" class="nav-link">สํานักเลขาธิการคณะรัฐมนตรี</strong>
            </a>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fa-solid fa-chart-column"></i>
                                <p style="font-size:12px;">
                                    Dashboard
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                         
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-table-list"></i>
                                <p style="font-size:12px;">
                                    รายการส่งประกาศ
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                          
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-file-circle-plus"></i>
                                <p style="font-size:12px;">
                                    แบบฟอร์ม
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../page/show_report.php" class="nav-link">
                                        <p style="font-size:12px;">●&nbsp;ขอออกประกาศ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/UI/icons.html" class="nav-link">
                                        <p style="font-size:12px;">●&nbsp;ขออื่นๆ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../page/upload_form.php" class="nav-link">
                                        <p style="font-size:12px;">●&nbsp;อัพโหลดแบบฟอร์ม</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-pen"></i>
                                <p style="font-size:12px;">
                                    การดำเนินการภายใน
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                         
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-users-gear"></i>
                                <p style="font-size:12px;">
                                    การจัดการผู้ใช้งาน
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                          
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content" align="center">
                <div class="container-fluid">
                    <div class="row">
                    
                         
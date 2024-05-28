<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" style="background-color:#333333 !important;">
    <!-- Logo -->
    <a href="index.php?p=index&a=statistic" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>QuanVH</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>QuanVH</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top " style="height:20px;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Bạn có 5 tin nhắn</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../uploads/images/<?php echo $row_acc['hinh_anh']; ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 phút trước</small>
                      </h4>
                      <p>Thông báo tiến độ bán hàng tháng này?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Admin Design Team
                        <small><i class="fa fa-clock-o"></i> 2 tiếng trước</small>
                      </h4>
                      <p>Cập nhật tiến độ thiết kế?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Hôm qua</small>
                      </h4>
                      <p>Mọi thứ ổn rồi</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> 1 phút trước</small>
                      </h4>
                      <p>Chúc mừng anh em đã hoàn thành chỉ tiêu tháng này</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 ngày trước</small>
                      </h4>
                      <p>Tốc độ mạng rất ổn định</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Hiển thị toàn bộ tin nhắn</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">5</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Bạn có 5 thông báo mới</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 thành viên mới đã gia nhập hôm nay
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Tháng này không đạt chỉ tiêu bán hàng
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 2 nhân viên đã nghỉ việc
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 15 sản phẩm đã được bán
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> Bạn đã thay đổi tên tài khoản
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Hiển thị tất cả</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Bạn có 4 nhiệm vụ</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3 style ="font-size: 14px;">
                        Thiết kế thêm vài chức năng
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3 >
                        Mở rộng thêm phạm vi bán sim thẻ
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Tư vấn thêm cho khách hàng
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Tổ chức thêm sự kiện quảng bá
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Hiển thị tất cả nhiệm vụ</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../uploads/images/<?php echo $row_acc['hinh_anh']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $row_acc['ten']; ?> <?php echo $row_acc['ho']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../uploads/images/<?php echo $row_acc['hinh_anh']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $row_acc['ten']; ?> <?php echo $row_acc['ho']; ?> - 
                  <?php 
                    if($row_acc['quyen'] == 1)
                    {
                      echo "Quản trị viên";
                    }
                    else
                    {
                      echo "Nhân viên";
                    }
                  ?>
                  <small>
                    <?php 
                      echo "Lượt truy cập: " . $row_acc['truy_cap']; 
                    ?>
                  </small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="thong-tin-tai-khoan.php?p=account&a=profile" class="btn btn-default btn-flat">Thông tin</a>
                </div>
                <div class="pull-right">
                  <a href="dang-xuat.php" class="btn btn-default btn-flat">Đăng xuất</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
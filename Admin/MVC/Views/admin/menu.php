 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
     <div class="sidebar-brand-icon rotate-n-15">
       <i class="fas fa-laugh-wink"></i>
     </div>
     <div class="sidebar-brand-text mx-3">DXD BLOG <sup>
         <3</sup> </div> </a> <!-- Divider -->
           <hr class="sidebar-divider my-0">

           <!-- Divider -->
           <hr class="sidebar-divider">

           <!-- Heading -->
           <div class="sidebar-heading">
             Chức năng
           </div>
           <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
             <li class="nav-item">
               <a class="nav-link" href="index.php">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Trang chủ</span></a>
             </li>

             <!-- Nav Item - Tables -->
             <li class="nav-item">
               <a class="nav-link" href="?mod=posts">
                 <i class="fas fa-fw fa-table"></i>
                 <span>Quản lý bài viết</span></a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="?mod=posts&act=list_select">
                 <i class="fas fa-fw fa-table"></i>
                 <span>Quản lý kiểm duyệt</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="?mod=categories">
                 <i class="fas fa-fw fa-table"></i>
                 <span>Quản lý thẻ</span></a>
             </li>
             <!-- Nav Item - Charts -->
             <li class="nav-item">
               <a class="nav-link" href="?mod=authors">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Quản lý người dùng</span></a>
             </li>
             <?php } else {
              if (isset($_SESSION['isLogin_Author']) && $_SESSION['isLogin_Author'] == true) { ?>
               <li class="nav-item">
                 <a class="nav-link" href="?mod=posts">
                   <i class="fas fa-fw fa-table"></i>
                   <span>Quản lý bài viết</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="?mod=authors">
                   <i class="fas fa-fw fa-chart-area"></i>
                   <span>Quản lý tài khoản</span></a>
               </li>
           <?php }
            } ?>
           <!-- Nav Item - Pages Collapse Menu -->


           <!-- Sidebar Toggler (Sidebar) -->
           <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
           </div>

 </ul>
 <!-- End of Sidebar -->
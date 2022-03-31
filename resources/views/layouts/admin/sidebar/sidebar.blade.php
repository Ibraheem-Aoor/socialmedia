 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('admin.dashboard') }}" class="brand-link">
         <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">لوحة التحكم</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <div>
             <!-- Sidebar user panel (optional) -->
             <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                 <div class="image">
                     <img src="https://en.gravatar.com/userimage/48085813/ad6132c82562d3561ed0400e28b066c3.jpg"
                         class="img-circle elevation-2" alt="User Image">

                 </div>
                 <div class="info">
                     <a href="#" class="d-block">{{ Auth::check() ? Auth::user()->name : 'Admin' }}</a>
                 </div>
             </div>

             <!-- Sidebar Menu -->
             <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                     data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                         <a href="#" class="nav-link active">
                             <i class="nav-icon fa fa-dashboard"></i>
                             <p>
                                 محتوى الموقع
                                 <i class="right fa fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{route('admin.homepage.intro.content.show')}}" class="nav-link active">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>المقدمة الرئيسية</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{route('admin.homepage.proccess.content.show')}}" class="nav-link active">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>الخطوات الرئيسية</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{route('admin.choicepage.content.show')}}" class="nav-link active">
                                     <i class="fa fa-circle-o nav-icon "></i>
                                     <p>صفحة الخيارات</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{route('admin.homepage.platforms.content.show')}}" class="nav-link active">
                                     <i class="fa fa-circle-o nav-icon "></i>
                                     <p>مواقع التواصل</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 </ul>

                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                     data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                         <a href="#" class="nav-link active">
                             <i class="nav-icon fa fa-dashboard"></i>
                             <p>
                                 قائمة الصفحات
                                 <i class="right fa fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="#" class="nav-link active">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p></p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>صفحة غير نشطة</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fa fa-th"></i>
                             <p>
                                 رابط بسيط
                                 <span class="right badge badge-danger">جدید</span>
                             </p>
                         </a>
                     </li>
                 </ul>
             </nav>
             <!-- /.sidebar-menu -->
         </div>
     </div>
     <!-- /.sidebar -->
 </aside>

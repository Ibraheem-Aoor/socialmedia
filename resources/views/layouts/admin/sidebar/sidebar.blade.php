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
                     <img src="{{ asset('assets/dist/img/avatar.png') }}" class="img-circle elevation-2"
                         alt="User Image">

                 </div>
                 <div class="info">
                     <a href="{{ route('admin.profile') }}"
                         class="d-block">{{ Auth::check() ? Auth::user()->name : 'Admin' }}</a>
                 </div>
             </div>

             @php
                 $routeName = Route::currentRouteName();
             @endphp
             <!-- Sidebar Menu -->
             <nav class="mt-2">

                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                     data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                         <a href="#"
                             class="nav-link
                    {{ (($routeName == 'admin.orders'? 'active': '' || $routeName == 'admin.platform.select')? 'active': '' || $routeName == '')? 'active': 'admin.offer' }}">
                             <i class="nav-icon fa fa-dashboard"></i>
                             <p>
                                 التحكم
                                 <i class="right fa fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('admin.orders') }}"
                                     class="nav-link {{ $routeName == 'admin.orders' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>جميع الطلبات</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.platform.select') }}"
                                     class="nav-link {{ $routeName == 'admin.platform.select' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p> طلبات المنصات</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.offer') }}"
                                     class="nav-link {{ $routeName == 'admin.offer' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>رابط صفحة العروض</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            رابط بسيط
                            <span class="right badge badge-danger">جدید</span>
                        </p>
                    </a>
                </li> --}}
                 </ul>

                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                     data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                         <a href="#"
                             class="nav-link
                         {{ $routeName == 'admin.homepage.intro.content.show' ||
                         $routeName == 'admin.homepage.proccess.content.show' ||
                         $routeName == 'admin.homepage.platforms.content.show' ||
                         $routeName == 'admin.choicepage.content.show'
                             ? 'active'
                             : '' }}">
                             <i class="nav-icon fa fa-dashboard"></i>
                             <p>
                                 محتوى الموقع
                                 <i class="right fa fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('admin.homepage.intro.content.show') }}"
                                     class="nav-link {{ $routeName == 'admin.homepage.intro.content.show' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>المقدمة الرئيسية
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.homepage.proccess.content.show') }}"
                                     class="nav-link {{ $routeName == 'admin.homepage.proccess.content.show' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon"></i>
                                     <p>الخطوات الرئيسية</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.choicepage.content.show') }}"
                                     class="nav-link  {{ $routeName == 'admin.choicepage.content.show' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon "></i>
                                     <p>صفحة الخيارات</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.homepage.platforms.content.show') }}"
                                     class="nav-link {{ $routeName == 'admin.homepage.platforms.content.show' ? 'active' : '' }}">
                                     <i class="fa fa-circle-o nav-icon "></i>
                                     <p>المنصات</p>
                                 </a>
                             </li>
                             {{-- <li class="nav-item">
                                 <a href="#" class="nav-link active">
                                     <i class="fa fa-circle-o nav-icon "></i>
                                     <p>عناوين الاقسام</p>
                                 </a>
                             </li> --}}
                         </ul>
                     </li>
                 </ul>

                 @if (Auth::user()->is_owner)
                     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                         data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                         <li class="nav-item has-treeview menu-open">
                             <a href="#"
                                 class="nav-link
                     {{ ($routeName == 'admin.admins.show' ? 'active' : '' || $routeName == 'admin.admins.add') ? 'active' : '' }}">
                                 <i class="nav-icon fa fa-dashboard"></i>
                                 <p>
                                     المشرفين
                                     <i class="right fa fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a href="{{ route('admin.admins.show') }}"
                                         class="nav-link {{ $routeName == 'admin.admins.show' ? 'active' : '' }}">
                                         <i class="fa fa-circle-o nav-icon"></i>
                                         <p>
                                             عرض المشرفين
                                         </p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('admin.admins.add') }}"
                                         class="nav-link {{ $routeName == 'admin.admins.add' ? 'active' : '' }}">
                                         <i class="fa fa-circle-o nav-icon"></i>
                                         <p>
                                             إضافة مشرف جديد
                                         </p>
                                     </a>
                                 </li>
                             </ul>
                 @endif
             </nav>
             <!-- /.sidebar-menu -->
             <!-- Brand Logo -->
             <a href="{{ route('home') }}" class="brand-link">
                 <span class="brand-text font-weight-light">SocailMedia <i style="color:red">2022</i></span>
             </a>
         </div>
     </div>
     <!-- /.sidebar -->
 </aside>

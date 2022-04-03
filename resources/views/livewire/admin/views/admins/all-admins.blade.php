<div>
    @section('title', ' كل المشرفين')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">المشرفين</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">المشرفين</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- homepage content --}}
                    <div class="col-lg-12">
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>تم الحفظ بنجاح</h4>
                            </div>
                        @endif
                        <div class="card card-primary card-outline">
                            {{-- <div class="card-header">
                                <h5 class="m-0">محتوى مقدمة الصفحة الرئيسية</h5>
                            </div> --}}
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table  table-hover">
                                        @php
                                            $i = 1;
                                        @endphp
                                        <thead>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>الحالة</th>
                                            <th>تاريخ الانضمام</th>
                                            <th>عمليات</th>
                                            <th> <a href="{{route('admin.admins.add')}}" class="btn btn-success">
                                                <i class="fa fa-plus" ></i>
                                                جديد</a></th>
                                        </thead>
                                        <tbody>
                                            @forelse($admins as $admin)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td><span class="label label-info"
                                                            style="padding:2px">{{ $admin->name }}</span>
                                                    </td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->status == true ? 'مفعل' : 'محظور' }}</td>
                                                    <td>{{ $admin->created_at}}</td>
                                                    @if(! (Auth::user()->id == $admin->id))
                                                    <td>
                                                        <a href="#" wire:click.prevent="deleteAdmin({{$admin->id}})">
                                                            <i class="fa fa-trash" style="color: red"></i>
                                                            حذف
                                                        </a>
                                                        <a href="#" wire:click.prevent="blockAdmin({{$admin->id}})">
                                                            <i class="fa fa-stop-circle" ></i>
                                                            حظر
                                                        </a>
                                                    </td>
                                                    @endif
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="alert alert-info text-center">لا يوجد مشرفين
                                                        حتى الان</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                {{-- {{ $admins->links() }} --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>

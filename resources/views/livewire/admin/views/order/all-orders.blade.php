<div>
    @section('title', ' كل الطلبات')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> كل  الطلبات</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">كل الطلبات</li>
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
                                <h4><i class="icon fa fa-check"></i>{{session()->get('success')}}</h4>
                            </div>
                        @endif
                        <div class="card card-primary card-outline">
                            {{-- <div class="card-header">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            </div> --}}
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table  table-hover">
                                        @php
                                            $i = 1;
                                        @endphp
                                        <thead>
                                            <th>#</th>
                                            <th>المنصة</th>
                                            <th>الخدمة</th>
                                            <th>البروفايل</th>
                                            <th>تاريخ الطلب</th>
                                            <th>عمليات</th>
                                        </thead>
                                        <tbody>
                                            @forelse($orders as $order)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td><span class="label label-info" style="padding:2px">{{ $order->platform->name }}</span></td>
                                                    <td>{{ $order->choice }}</td>
                                                    <td>{{ $order->url }}</td>
                                                    <td>{{ $order->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <a href="#" wire:click="delete({{$order->id}})">
                                                            <i class="fa fa-trash" style="color:red"></i >حذف
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="alert alert-info text-center">لا يوجد طلبات حتى الان</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                {{ $orders->links() }}
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

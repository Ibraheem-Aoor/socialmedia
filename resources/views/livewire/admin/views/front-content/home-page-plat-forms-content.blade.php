<div>
    <div>
        @section('title', 'محتوى المنصات ')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> المنصات</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                                <li class="breadcrumb-item active">المنصات</li>
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
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <a href="{{ route('admin.platform.add') }}" style="cursor: pointer;">
                                        <p class="card-title mb-2 text-bold btn-sm btn-success text-center col-sm-4">
                                            <i class="fa fa-plus"></i> اضف منصة جديدة
                                        </p>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($platforms as $platform)
                                                <div class="col-sm-6">
                                                    <a href="{{route('admin.platform.show' , $platform->id)}}" style="cursor: pointer;">
                                                        <p
                                                            class="card-title mb-2 text-bold btn-lg btn-info text-center">
                                                            {{$platform->name}}
                                                        </p>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    </p>
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


</div>

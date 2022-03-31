<div>
    @section('title', 'الخطوات الرئيسية')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">الخطوات الرئيسية</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active"> الخطوات الرئيسية</li>
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
                                <h5 class="m-0">محتوى خطوات الصفحة الرئيسية</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                <h6 class="m-0 btn-lg btn-info text-center">الخطوة الاولى</h6>
                                <div class="form-group">
                                    <label>العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب ...">
                                </div>
                                <div class="form-group">
                                    <label>النص</label>
                                    <input type="text" class="form-control" placeholder="اكتب ...">
                                </div>
                                </p>

                                {{-- second step --}}
                                <p class="card-text">
                                <h6 class="m-0 btn-lg btn-info text-center">الخطوة الثانية</h6>
                                <div class="form-group">
                                    <label>العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب ...">
                                </div>
                                <div class="form-group">
                                    <label>النص</label>
                                    <input type="text" class="form-control" placeholder="اكتب ...">
                                </div>
                                </p>

                                {{-- second step --}}
                                <p class="card-text">
                                <h6 class="m-0 btn-lg btn-info text-center">الخطوة الثالثة</h6>
                                <div class="form-group">
                                    <label>العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب ...">
                                </div>
                                <div class="form-group">
                                    <label>النص</label>
                                    <input type="text" class="form-control" placeholder="اكتب ...">
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

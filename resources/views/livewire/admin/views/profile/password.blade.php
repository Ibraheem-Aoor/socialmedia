<div>
    @section('title', ' تغيير كلمة السر')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">كلمة المرور</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">كلمة المرور</li>
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
                                <h4><i class="icon fa fa-check"></i>{{ session()->get('success') }}</h4>
                            </div>
                        @endif
                        <div class="card card-primary card-outline">
                            {{-- <div class="card-header">
                                <h5 class="m-0">محتوى مقدمة الصفحة الرئيسية</h5>
                            </div> --}}
                            <form action="" wire:submit.prevent="UpdatePassword">
                                <div class="card-body">
                                    <p class="card-text">
                                    <div class="form-group">
                                        <label>كلمة المرور الجديدة</label>
                                        <input type="password" class="form-control" wire:model.lazy="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label> تأكيد كلمة المرور الجديدة</label>
                                        <input type="password" class="form-control"
                                            wire:model.lazy="password_confirmation">
                                    </div>
                                    </p>
                                    <button class="btn btn-primary">حفظ</button>
                                </div>
                            </form>
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

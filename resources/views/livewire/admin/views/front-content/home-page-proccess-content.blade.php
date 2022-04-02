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
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>تم الحفظ بنجاح</h4>
                            </div>
                        @endif
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">محتوى خطوات الصفحة الرئيسية</h5>
                            </div>
                            <div class="card-body">
                                {{-- First step --}}
                                <p class="card-text">
                                <h6 class="m-0 btn-lg btn-info text-center">الخطوة الاولى</h6>
                                <div class="form-group">
                                    <label>العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب ..."
                                        wire:model.lazy="proccess_1_headline">
                                    @error('proccess_1_headline')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>النص</label>
                                    <input type="text" class="form-control" placeholder="اكتب ..."
                                        wire:model.lazy="proccess_1_paragraph">
                                    @error('proccess_1_paragraph')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </p>

                                {{-- second step --}}
                                <p class="card-text">
                                <h6 class="m-0 btn-lg btn-info text-center">الخطوة الثانية</h6>
                                <div class="form-group">
                                    <label>العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب ..."
                                        wire:model.lazy="proccess_2_headline">
                                    @error('proccess_2_headline')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>النص</label>
                                    <input type="text" class="form-control" placeholder="اكتب ..."
                                        wire:model.lazy="proccess_2_paragraph">
                                    @error('proccess_2_paragraph')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </p>

                                {{-- second step --}}
                                <p class="card-text">
                                <h6 class="m-0 btn-lg btn-info text-center">الخطوة الثالثة</h6>
                                <div class="form-group">
                                    <label>العنوان:</label>
                                    <input type="text" class="form-control" placeholder="اكتب ..."
                                        wire:model.lazy="proccess_3_headline">
                                    @error('proccess_3_headline')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>النص</label>
                                    <input type="text" class="form-control" placeholder="اكتب ..."
                                        wire:model.lazy="proccess_3_paragraph">
                                    @error('proccess_3_paragraph')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </p>
                                <a href="#" class="btn btn-primary" wire:click.prevent="save">حفظ</a>

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

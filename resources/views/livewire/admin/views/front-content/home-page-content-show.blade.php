<div>
    @section('title', 'محتوى الصفحة الرئيسية')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">محتوى الصفحة الرئيسية</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>

                            <li class="breadcrumb-item active">محتوى الصفحة الرئيسية</li>
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
                                <h5 class="m-0">محتوى مقدمة الصفحة الرئيسية</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title mb-2 text-bold">
                                    تغيير محتوى مقدمة الصفحة الرئيسية (النبذة التعريفية عن الموقع)
                                </h6>

                                <p class="card-text">
                                <div class="form-group">
                                    <label>النص الأول</label>
                                    <textarea class="form-control" rows="4" placeholder="اكتب ..." style="resize:none;"
                                        wire:model.lazy="intro_text"></textarea>
                                    @error('intro_text')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>النص الثاني</label>
                                    <textarea class="form-control" rows="4" placeholder="اكتب ..." style="resize:none;"
                                        wire:model.lazy="intro_text_paragraph"></textarea>
                                    @error('intro_text_paragraph')
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

<div>
    @section('title', 'محتوى الصفحة الرئيسية')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">إضافة منصة جديدة</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                            <li class="breadcrumb-item active">منصة جديدة</li>
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
                                <p class="card-text">
                                <div class="form-group">
                                    <label>اختر المنصة:</label>
                                    <select name="" id="" class="form-control" wire:model="name">
                                        <option value="" selected>اختر </option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="YouTube">YouTube</option>
                                        <option value="SnapChat">SnapChat</option>
                                        <option value="TikTok">TikTok</option>
                                        <option value="Telegram">Telegram</option>
                                        <option value="PUBG">PUBG</option>
                                        <option value="FreeFire">FreeFire</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>ادخل الوصف:</label>
                                    <textarea class="form-control" rows="5" placeholder="اكتب ..." style="resize:none;"
                                        wire:model.lazy="description"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                </p>
                                <a href="#" class="btn btn-primary" wire:click.prevent="save">إضافة</a>

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

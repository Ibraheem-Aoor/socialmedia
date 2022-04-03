<div>
    @section('title', 'لوحة التحكم')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">صفحة البداية</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">صفحة البداية</li>
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-cubes"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text" style="font-size: larger; font-weight:900">عدد الطلبات حتى
                                    الان</span>
                                <span class="info-box-number">{{ $numberOrders }}</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-clipboard"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text " tyle="font-size: larger; font-weight:900">عدد المنصات حتى
                                    الان</span>
                                <span class="info-box-number">{{ $platforms->count() }}</span>
                            </div>

                        </div>
                    </div>

                    @foreach ($platforms as $platform)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green">
                                    <img src="{{ asset('assets/dist_2/img/platforms/' . $platform->name . '.png') }}"
                                        alt="" width="40px" style="background-color: none;">
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text "
                                        tyle="font-size: larger; font-weight:900">{{ $platform->name }}</span>
                                    <span class="info-box-number">{{ $platform->orders()->count() }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-2 text-bold">عنوان البطاقة</h5>

                                <p class="card-text">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                    أنكايديديونتيوت
                                    لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن
                                    يللأمكو لابورأس
                                    نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
                                    أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو
                                    فيجايت نيولا
                                    باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
                                    كيو أوفيسيا
                                    ديسيريونتموليت انيم أيدي
                                    ايست لابوريوم </p>

                                <a href="#" class="card-link">رابط البطاقة</a>
                                <a href="#" class="card-link mr-2">رابط الصفحة</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title mb-2 text-bold">عنوان البطاقة</h5>

                                <p class="card-text">
                                    لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                                    أنكايديديونتيوت
                                    لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد أكسير سيتاشن
                                    يللأمكو لابورأس
                                    نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
                                    أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو
                                    فيجايت نيولا
                                    باراياتيور. </p>
                                <a href="#" class="card-link">رابط البطاقة</a>
                                <a href="#" class="card-link mr-2">رابط الصفحة</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">خاص</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title mb-2 text-bold">عنوان البطاقة الخاصة</h6>

                                <p class="card-text">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                    أليايت,سيت دو أيوسمود
                                    تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                                <a href="#" class="btn btn-primary">انتقل إلى صفحة X</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">خاص</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title mb-2 text-bold">عنوان البطاقة الخاصة</h6>

                                <p class="card-text">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج
                                    أليايت,سيت دو أيوسمود
                                    تيمبور أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا .</p>
                                <a href="#" class="btn btn-primary">انتقل إلى صفحة X</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 --> --}}
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

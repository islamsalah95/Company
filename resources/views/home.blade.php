@extends('layouts.home')

@section('title')
Dashboard
@endsection

@section('content')
<section class="features16 cid-sErKlQBuTo" id="features17-2k">



    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assetsDashboard/images/character.gif" alt="TechsupFlex">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">تكسب فليكس</h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">تم استحداث&nbsp;&nbsp;<strong>تكسب
                                فليكس</strong> كخدمة لمواكبة آلية التوظيف السريع و الأمثل ومزود
                            لبرنامج&nbsp;<strong>العمل المرن</strong> نسعى لأن نكون&nbsp;جزء من نمو فرص العمل&nbsp;
                            وتوفير&nbsp;الكوادر السعودية&nbsp;للإستفادة الحقيقية من&nbsp;خبراتهم <strong>وزيادة
                                الدخل</strong> الفردي&nbsp;وتطوير&nbsp;مستخرجات العمل&nbsp;<br></p>
                        <div class="mbr-section-btn mt-3">

                            <a class="btn btn-success display-4"
                            href="{{ route('users.create.employs') }}" target="_blank">
                                تسجيل أفراد</a>

                                <a class="btn btn-success-outline display-4"
                                href="{{ route('companies.create',['country'=>66]) }}" target="_blank">
                                تسجيل شركات</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features15 cid-sshFeMJqes" id="features16-1o">




    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5"><strong>من نحن
                                ؟</strong><br><strong><br></strong></h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            <strong>هدفنا</strong><br><strong><br></strong>&nbsp;الربط بين اصحاب العمل ممن لديهم الحاجة
                            لتنفيذ الأعمال والاستفادة من وقت الذروة او الخبرات لفترة مؤقتة مع<br>الراغبين بالعمل لساعات
                            مرنه من الطلبه او ذوي
                            الخبرات<br><br><br><strong>رؤيتنا</strong><br><strong><br></strong>&nbsp;التركيز وتقسيم
                            أنواع المهن بحسب عناصر الاحتياج لدى الشركات وبحسب أهداف المملكة في التوسع و تطوير الكوادر
                            المهنية و الإستفادة من خبرات أصحاب التخصصات والمهن بأنسب التكاليف لأصحاب الشركات المتوسطة و
                            الصغيره و سد احتياجهم بأفضل الطرق بإستخدام العمل المرن
                            <br><br><br><strong>دورنا </strong><br><strong><br></strong>الربط بين اصحاب الشركات و
                            الباحثين عن العمل
                            <br><em><br></em>
                        </p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="image-wrapper">
                        <img src="assetsDashboard/images/logo-1-631x261.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features13 cid-sEs9lYXKt9" id="features14-2n">



    <div class="container">
        <div class="row">

            <div class="card col-12 col-md-4 col-lg-2 p-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-edit mobi-mbri"
                            style="color: rgb(10, 155, 185); fill: rgb(10, 155, 185); font-size: 60px;"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4">تتيح <strong>آلية العمل
                                المرن</strong> الفرص&nbsp;<br>طلاب المدارس والجامعات&nbsp;<br>وحاملين الشهادات المهنية
                            والتقنية والفنية وحملة الشهادات الجامعية <br>والعليا&nbsp;<br></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-growing-chart mobi-mbri"
                            style="color: rgb(10, 155, 185); fill: rgb(10, 155, 185); font-size: 60px;"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4">رفع مستوى دخل المواطن
                            <strong>بغض النظر</strong> عن قطاع العمل حتى الغير ربحية<br><br><br><strong><br></strong>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbrib-users"
                            style="color: rgb(10, 155, 185); fill: rgb(10, 155, 185); font-size: 60px;"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4">نحن اليوم في عهد رؤية
                            المملكة العربية السعودية جاءت لتمكين المواطنين<br> <strong>رجالاً و نساء</strong> لإسهام في
                            التنمية بفعالية
                            &nbsp;<span style="font-size: 0.8rem; background-color: transparent;">ورفع نسبة مشاركة
                                المرأة في سوق العمل&nbsp;</span></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mobi-mbri-users mobi-mbri"
                            style="color: rgb(10, 155, 185); fill: rgb(10, 155, 185); font-size: 60px;"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-4">العمر من<strong> 16 -
                                65</strong> سنه<br><br><strong><br></strong><br><br><strong><br></strong></h4>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="features3 cid-sExdhVDKE7" id="features3-2x">

    <BR /><BR /><BR />

    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">تطبيق تكسب فليكس</h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7"><strong>متوفر
                    على</strong><br><strong> android و IOS
                </strong>
                <div><br></div>
            </h5>
        </div>
        <div class="row mt-4">


            <div class="item features-image сol-12 col-md-6 col-lg-4 active">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="https://techsupflex.com/" target="_blank"><img
                                src="assetsDashboard/images/untitled-5-695x593.png" alt="" data-slide-to="1"></a>
                    </div>


                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <a href="https://apps.apple.com/sa/app/techsupflex/id1559016053" target="_blank"><img
                                src="assetsDashboard/images/pp4-695x593.png" alt="" data-slide-to="2"></a>
                    </div>


                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assetsDashboard/images/techsupfapp-755x755.png" alt="" data-slide-to="1">
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonails3 carousel slide testimonials-slider cid-ssyzZM4KYj" data-interval="false"
    id="testimonials3-20">





    <div class="text-center container">
        <h3 class="mb-4 mbr-fonts-style display-7">ماهو المميز في تكسب فليكس ؟</h3>

        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel"
            data-interval="8000">
            <div class="carousel-inner">


                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assetsDashboard/images/calendariconforessentialplantomanagetime.gif" alt="">
                        </div>
                        <div class="user_text mb-4">
                            <p class="mbr-fonts-style display-4">
                                تقارير التوظيف والعمل عن بعد وتقييم آداء الموظفات عن بعد
                            </p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-4">بشكل شهري</div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assetsDashboard/images/mobile-phone-gif-2.gif" alt="">
                        </div>
                        <div class="user_text mb-4">
                            <p class="mbr-fonts-style display-4"><strong><em>
                                        متاح التطبيق بنسخة تعمل على نظام
                                    </em></strong></p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-4">
                            <strong>IOS
                            </strong>
                            <div><strong>Android</strong></div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assetsDashboard/images/gear-500.gif" alt="">
                        </div>
                        <div class="user_text mb-4">
                            <p class="mbr-fonts-style display-4">
                                توفير حساب للعاملين و حساب لمدير الحساب يمكنه من الإشراف عليهم
                            </p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-4"><strong>وادارة العمل من خلاله</strong>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assetsDashboard/images/money-pile-dribble-1.gif" alt="">
                        </div>
                        <div class="user_text mb-4">
                            <p class="mbr-fonts-style display-4">
                                يمكن التطبيق الشركات من الإعتماد على النظام و أستخدامه كنظام إدارة موارد بشرية إلكتروني
                                يعمل على تسجيل
                            </p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-4"><strong>&nbsp;الحضور و الإنصراف ، الأجر ،
                                المهام الموكلة للعامل ، مراسلات</strong></div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assetsDashboard/images/unnamed-1.gif" alt="">
                        </div>
                        <div class="user_text mb-4">
                            <p class="mbr-fonts-style display-4">
                                تحدد ساعات العمل بحسب نظام العمل المرن بحيث لا يسمح للعامل تجاوز
                            </p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-4"><strong>عدد الساعات بالوظيفة
                                ذاتها</strong></div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assetsDashboard/images/01ebae316ea5c41e3c85f54757f0115e.gif" alt="">
                        </div>
                        <div class="user_text mb-4">
                            <p class="mbr-fonts-style display-4">
                                التحقق من دخول الموظف عن طريق التعرف على
                            </p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-4"><strong>بصمة وجه العامل</strong></div>

                    </div>
                </div>
            </div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="features16 cid-sEVTdtjiex" id="features17-34">



    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assetsDashboard/images/connect-with-customers.gif" alt="Flex">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">مهن <strong>ابتدائية</strong> أعمال مؤقته أو
                            موسمية</h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">&nbsp;! نظرا لتوسع قطاع الأعمال
                            <strong>واستحداث نشاطات جديده</strong> مما خلق فرص وظيفية جديده<br> وطرح شواغر ذات صفة
                            <strong>مؤقته أو موسمية</strong> ، مما يتناسب مع قدرات طلاب <strong>المدارس</strong> و
                            <strong>الجامعات</strong> على حد سوا و الكثير من الأعمال التي تخلق فرص لهم لشغل أوقات الفراغ
                            و <strong>زيادة الدخل</strong> الفردي و التي تُمكن الشركات كافة بتفعيل أعمالهم بآلية تخدم
                            إحتياجهم دون التقييد بالعمل الفعلي مما يوفر لهم الزيادة بعدد العاملين و التنوع بخبراتهم
                            <strong>بأقل التكاليف</strong><br><strong><br></strong></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features16 cid-sEVRNuz6Xq" id="features17-33">



    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assetsDashboard/images/01323190cd6933de96287a5804fd636a.gif" alt="Flex">
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">مهن <strong>إحترافية</strong> و تخصصية أعمال
                            مؤقته</h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            تركز الفرص هنا على أصحاب الخبرات و والتخصصات المهنية أو الفنية و والذي و يتطلب سوق العمل
                            لخبراتهم باختلاف التخصصات، ولكن قدرة تحمل الشركات الصغيرة و المتوسطة لأجورهم ضعيفة. لذلك
                            يكون <strong>العمل المرن الحل</strong></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features13 cid-sF6AJ2GsXo" id="features14-3r">



    <div class="container">
        <div class="row">

            <div class="card col-12 col-md-4 col-lg-2 p-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-protect"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>الأمن السيبراني
                            </strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-idea"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>التسويق</strong>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-touch"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>هندسة البرمجيات
                            </strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-paperclip"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>قانون</strong>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-desktop"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>هندسة الحاسوب
                            </strong></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="features13 cid-sF6BK5x1nF" id="features14-3s">



    <div class="container">
        <div class="row">

            <div class="card col-12 col-md-4 col-lg-2 p-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-users"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>موارد بشرية
                            </strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-responsive"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>علم الحاسوب
                                والبرمجة
                            </strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-cash"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>العلوم المالية
                                والمصرفية
                            </strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-edit"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>نظم المعلومات
                            </strong></h4>
                    </div>
                </div>
            </div>
            <div class="card p-3 col-12 col-md-4 col-lg-2">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <span class="mbr-iconfont mbri-setting"></span>
                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>الهندسة
                                الإلكترونية
                            </strong></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="pricing2 cid-sEVXLOIXWb" id="pricing2-3d">

    <span style="color:#FFFFFF;text-align:center;">
        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">أسعار الخدمة</h4>
    </span>

    <span style="color:#FFFFFF;text-align:center;">
        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-6">_________________________________
        </h4>
    </span>
    <br />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">الوظائف الإبتدائية اشتراك سنوي&nbsp;</h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1">8000&nbsp;SAR<br></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">عدد الرخص
                                    </span></li>
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">100 - 199</span><br>
                                </li>
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="index.html#form7-1u"
                                class="btn btn-primary display-4">اطلبها</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">الوظائف الإبتدائية اشتراك سنوي&nbsp;</h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1">5000&nbsp;SAR<br></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">عدد الرخص
                                    </span></li>
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">50 - 99</span><br></li>
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="index.html#form7-1u"
                                class="btn btn-primary display-4">اطلبها</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">الوظائف الإبتدائية اشتراك سنوي&nbsp;</h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1">3000 SAR<br></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">عدد الرخص
                                    </span></li>
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">10 - 49</span><br></li>
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="index.html#form7-1u"
                                class="btn btn-primary display-4">اطلبها</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">الوظائف الإبتدائية اشتراك سنوي&nbsp;</h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1">1500&nbsp;SAR<br></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">عدد الرخص
                                    </span></li>
                                <li class="list-group-item"><span
                                        style="background-color: transparent; font-size: 1rem;">0 - 9&nbsp;</span><br>
                                </li>
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="index.html#form7-1u"
                                class="btn btn-primary display-4">اطلبها</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <span style="color:#FFFFFF;text-align:center;">
        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-6">_________________________________
        </h4>
    </span>
    <br />

    <span style="color:#FFFFFF;text-align:center;">
        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-5">الوظائف الإحترافية و التخصصية
        </h4>
    </span>

    <li>
        <ol style="color:#FFFFFF;text-align:center;">
            <h6 class="plan-title mbr-fonts-style mb-3 display-7">الموظف دون أي رسوم
            </h6>
        </ol>
        <ol style="color:#FFFFFF;text-align:center;">
            <h6 class="plan-title mbr-fonts-style mb-3 display-7">االشركة 1000 ريال عن الموظف تدفع مره واحده

            </h6>
        </ol>
        <ol style="color:#FFFFFF;text-align:center;">
            <h6 class="plan-title mbr-fonts-style mb-3 display-7">اشتراك سنوي</h6>
        </ol>
    </li>

</section>

<section class="form7 cid-ssnoebLK1S" id="form7-1u">


    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-7"><strong><em>كيف أطلب الخدمة
                        ؟</em></strong></h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler mx-auto"
                    data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true"
                        value="krGUF/U9fOZkeMzkXPOS6zNEgTmeU7LWdkvogZIz+e+9ZxYN6ONZl2wwgjPUwkBoGgOc/HUl7ovqailXpxShok4R3A8jWRVZ1eXxx/D8CaXVSnHNdU/ykSkJhVB2LINw">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-4"><em>
                            سنسعد بالتواصل معكم بعد تعبئتكم للبيانات الموضحه أدناه
                        </em></p>
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">تم ارسال طلب الخدمة
                            بنجاح</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                            <input type="text" name="name" placeholder="إسم المنشأه" data-form-field="name"
                                class="form-control" value="" id="name-form7-1u">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="email">
                            <input type="email" name="email" placeholder="الإسم الثلاثي " data-form-field="email"
                                class="form-control" value="" id="email-form7-1u">
                        </div>
                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="tel" name="phone" placeholder="رقم التواصل " data-form-field="phone"
                                class="form-control" value="" id="phone-form7-1u">
                        </div>
                        <div class="col-auto mbr-section-btn align-center"><button type="submit"
                                class="btn btn-primary display-4">ارسال</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@php
    use App\Models\Category;
    $categories = Category::with('services')->where('parent_category', 0)->get();
    $categoriesChild = Category::with('services')->get();

    // dd($categoriesChild);
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/v4-font-face.css')}}">
        
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/light.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/light.min.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/brands.min.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/brands.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/regular.min.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/fontawesome/css/regular.css')}}">
        <link rel="stylesheet" href="{{asset('font/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('fornt/main.css')}}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body{
                font-family: "GE SS Two" !important;
            }
            .home{
                transform: rotateY(181deg) scaleY(1); */
                width: 100%;
                min-height: 100vh;

                background-repeat: no-repeat;
                background-size: cover;
                background-image: url({{asset('pic/2.jpg')}});
                
            }
            .rate{
                width:100%;
                background-repeat: repeat-x;
                background-image: url({{asset('images/header-bg.png')}});
            }
        </style>
    </head>
    <body>
        <div class="navbar absolute w-100">
            <div class="container">
                <div class="modile d-flex justify-between align-items-center w-100">
                    <div class="hamburger d-flex justify-center align-items-center"><div class="bar"></div></div>
                    <a href="" class="d-flex justify-center align-items-center"><img class="logo-bank" src="{{asset('images/logok.svg')}}" alt=""></a>
                    <ul class="logo-bank">
                        <li class="d-flex">
                            <p class="text-white me-2"><i class="fa-solid fa-search"></i></p>
                            <p class="text-white">
                                @foreach (config('locales.languages') as $key => $val)
                                    @if ($key != app()->getLocale())
                                        <a href="{{route('change-language', $key)}}" class="dropdown-item text-white">
                                            @if ($key == 'en')
                                                {{'EN'}}
                                            @else
                                                {{'AR'}}
                                            @endif
                                        </a>
                                    @endif
                                @endforeach
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="nav-items d-flex justify-center align-items-center flex-column">
                        <header class="navbar-top w-100">
                            <ul class="mt-4 mb-3 d-flex align-items-center justify-between hv-10 w-100">
                                <li class="d-flex justify-between m-0 p-0">
                                    <p class="text-white me-0"><i class="fa-solid fa-user"></i> {{__('main.homePage.Jobs')}}</p>
                                    <p class="text-white ms-2"><i class="fa-solid fa-phone"></i> <a href="{{route('about-us')}}">{{__('main.homePage.ContactUs')}}</a></p>
                                </li>
                                <li><img class="text-white logo" src="{{asset('images/logok.svg')}}" alt=""></li>
                                <li class="d-flex logo">
                                    <p class="text-white me-2"><a href="{{route('service-points-maps')}}"><i class="fa-solid fa-location-dot"></i> {{__('main.homePage.ServicesPoint')}}</a></p>
                                    <p class="text-white me-2"><i class="fa-solid fa-search"></i></p>
                                    <p class="text-white">
                                        @foreach (config('locales.languages') as $key => $val)
                                            @if ($key != app()->getLocale())
                                                <a href="{{route('change-language', $key)}}" class="dropdown-item text-white">
                                                    @if ($key == 'en')
                                                        {{'EN'}}
                                                    @else
                                                        {{'AR'}}
                                                    @endif
                                                </a>
                                            @endif
                                        @endforeach
                                    </p>
                                </li>
                            </ul>
                        </header>
                        <nav class="col-md-12 d-flex justify-between relative flex-column">
                            <hr class="bg-white col-md-12 m-0">
                            <ul class="d-flex list-items col-md-12 justify-between px-2 list-none">
                                <li class="text-white py-2 active  pointer">{{__('main.homePage.Home')}}
                                    <div class="row category-parent p-4 w-100">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                        <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer">عن البنك</h1></div>
                                        <div class="col-md-3 relative">
                                            <ul>
                                                <li class="pointer">
                                                    <a href="{{route('our-parteners')}}">شركائنا</a>
                                                    
                                                </li>
                                                <li class="pointer">
                                                    <a href="{{route('financial-reports-front')}}">التقارير المالية</a>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                        عن البنك
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                        <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer">عن البنك</h1></div>
                                        <div class="col-md-3 relative">
                                            <p class="text-second-color">من نحن</p>
                                            <ul>
                                                <li class="pointer">
                                                    من نحن
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            {{-- <p class="text-second-color">من نحن</p> --}}
                                            <ul>
                                                <li class="pointer">
                                                    <a href="{{route('about-bank')}}">مجلس الادارة</a>
                                                </li>
                                                <li class="pointer">
                                                    <a href="{{route('bank-about-us')}}">عن البنك</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                    خدمات الأفراد
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                            <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer">خدمات الأفراد</h1></div>
                                                <div class="col-md-3">
                                                    <p class="text-second-color">ماكينات الصراف الآلي</p>
                                                    <ul>
                                                        <li class="pointer">
                                                            {{-- <a href="{{route('success-stories.show')}}">قصص النجاح</a> --}}
                                                        </li>
                                                    </ul>
                                                </div>
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                    خدمات الشركات
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                            <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer"> خدمات الشركات</h1></div>
                                                {{-- <div class="col-md-3">
                                                    <p class="text-second-color">من نحن</p>
                                                    <ul>
                                                        <li class="pointer">
                                                            من نحن
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                    كريمي اكسبرس
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                            <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer"> كريمي اكسبرس</h1></div>
                                                {{-- <div class="col-md-3">
                                                    <p class="text-second-color">من نحن</p>
                                                    <ul>
                                                        <li class="pointer">
                                                            من نحن
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                    ام فلوس
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                            <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer"> ام فلوس</h1></div>
                                                {{-- <div class="col-md-3">
                                                    <p class="text-second-color">من نحن</p>
                                                    <ul>
                                                        <li class="pointer">
                                                            من نحن
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                    التمويل
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                            <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer"> التمويل</h1></div>
                                                <div class="col-md-3">
                                                    {{-- <p class="text-second-color">من نحن</p> --}}
                                                    <ul>
                                                        <li class="pointer">
                                                            <a href="{{route('service')}}">مشروعي</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                    </div>
                                </li>
                                <li class="text-white py-2 pointer">
                                    تطبيقات البنك
                                    <div class="row category-parent p-4">
                                        <img src="{{asset('pic/Al-_Kurimi_3_f4.png')}}" alt="" >
                                            <div class="col-md-3"><h1 class="font-family main-color fs-4 pointer"> تطبيقات البنك</h1></div>
                                    </div>
                                </li>
                                {{-- @endforeach --}}
                                {{-- <li class="text-white py-2">
                                    {{__('main.homePage.AboutBank')}}
                                    <div class="row category-parent p-4">
                                        
                                        <img src="{{asset('pic/Al-_Kurimi_3 f4.png')}}" alt="" >
                                        <div class="col-md-3"><h1 class="font-family main-color fs-4">عن البنك</h1></div>
                                        <div class="col-md-3">
                                            <p class="text-second-color">من نحن</p>
                                            <ul>
                                                <li>
                                                    من نحن
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <p>من نحن</p>
                                            <ul>
                                                <li>
                                                    من نحن
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> --}}
                                {{-- <li class="text-white py-2">
                                    {{__('main.categories.Name')}}
                                    
                                </li>
                                <li class="text-white py-2">{{__('main.categories.Name')}}</li>
                                <li class="text-white py-2">{{__('main.categories.Name')}}</li>
                                <li class="text-white py-2">{{__('main.categories.Name')}}</li>
                                <li class="text-white py-2">{{__('main.categories.Name')}}</li> --}}
                            </ul>
                            <hr class="bg-white col-md-12 m-0">
                        </nav>
                </div>
                
            </div>
        </div>
        @yield('content')

        <section class="footer bg-second-color relative">
            <div class="container hv-80 pt-5 d-flex flex-column justify-between align-items-center">
                <img src="{{asset('images/logok.svg')}}" alt="" class="mt-5">
                <hr class="w-90 bg-white">
                <div class="row w-90  row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-lx-6">
                    <div class="col">
                        <h1 class="text-white">البنك</h1>
                        <p class="mt-0 mb-0">عن البنك</p>
                        <p class="mt-0 mb-0">الرؤية</p>
                        <p class="mt-0 mb-0">الرسالة</p>
                        <p class="mt-0 mb-0">الأهداف</p>
                        <p class="mt-0 mb-0">القيم والمبادئ</p>
                        <p class="mt-0 mb-0">بيان سياسة</p>
                        <p class="mt-0 mb-0">مكافحة غسل</p>
                        <p class="mt-0 mb-0">شركائنا</p>
                    </div>
                    <div class="col">
                        <h1 class="text-white">شركائنا</h1>
                        <p class="mt-0 mb-0">موني جرام</p>
                        <p class="mt-0 mb-0">ماستر كارد</p>
                        <p class="mt-0 mb-0">البنوك المراسلة</p>
                        <p class="mt-0 mb-0">منظمة التمويل الدولية</p>
                        <p class="mt-0 mb-0">تيمينوس</p>
                    </div>
                    <div class="col">
                        <h1 class="text-white">الخدمات</h1>
                        <p class="mt-0 mb-0">خدمات الأفراد</p>
                        <p class="mt-0 mb-0">خدمات الشركات</p>
                        <p class="mt-0 mb-0">كريمي اكسبرس</p>
                        <p class="mt-0 mb-0">ام فلوس</p>
                        <p class="mt-0 mb-0">التمويل</p>
                    </div>
                    <div class="col">
                        <h1 class="text-white">التقارير</h1>
                        <p class="mt-0 mb-0">التقارير المالية</p>
                        <p class="mt-0 mb-0">القوائم المالية</p>
                    </div>
                    <div class="col">
                        <h1 class="text-white">نقاط الخدمة</h1>
                        <p class="mt-0 mb-0">الفروع وماكينات الصرافة</p>
                    </div>
                    <div class="col">
                        <h1 class="text-white">تواصل معنا</h1>
                        <p class="mt-0 mb-0">967 1 503888 : تلفون</p>
                        <p class="mt-0 mb-0">967 1 435400 : فاكس</p>
                        <p class="mt-0 mb-0">967 1 435400 : فاكس</p>
                        <p class="mt-0 mb-0">الرقم المجاني : 8008800</p>
                        <p class="mt-0 mb-0">صندوق بريد : 19357</p>
                    </div>
                </div>
                <div class="row w-90 justify-between">
                    <div class="col-md-2 d-flex justify-between">
                        <i class="fa-brands text-white fs-5 fa-facebook-f"></i>
                        <i class="fa-brands text-white fs-5 fa-twitter"></i>
                        <i class="fa-brands text-white fs-5 fa-instagram"></i>
                    </div>
                    <div class="col-md-4 d-flex align-items-center justify-center">
                        <img src="{{asset('images/kurimi-buttom.PNG')}}" alt="" class="me-3">
                        <img src="{{asset('images/kurimi-buttom-2.PNG')}}" alt="">
                    </div>
                </div>
                <h1 class="fs-6 text-white text-right">&copy;kurimi 2022</h1>
                </div>
                
                <div class="absolute layout-image d-flex justify-betwen">
                    <img src="{{asset('pic/Layer 116.png')}}" alt="" class="img-one">
                    <img src="{{asset('pic/Layer 116.png')}}" alt="" class="img-tow">
                </div>
        </section>
        @stack('scripts_after')
        <script src="{{asset('fornt/js/main.js')}}"></script>

    </body>
</html>

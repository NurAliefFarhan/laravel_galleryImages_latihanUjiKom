<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tailgrids.com/templates/taildash/signin by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 01:26:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Taildash - Tailwind CSS Admin Dashboard Template</title>
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('assets/css/style_admin.css') }}" rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}

</head>

<body x-data="{ page: 'login', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'b yn mj': darkMode === true }">
    <main class="gv hm hv">
        <div class="sk bu 2xl:ud-p-11">
            <!-- ====== Forms Section Start -->
            <div class="va to rh nj xr">
                <div class="lc jg ng">
                    <div class="yd wu/2">
                        <div class="yd bm ql ct ht bw">
                            <h2 class="eb wn pn zn gs">
                                Log In
                            </h2>
                            <form action="{{ route('auth') }}" method="POST">
                                @csrf
                                @if ($errors->any())
                                    {{-- alert kalau tidak di isi, akan muncul alert denger  --}}
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                @if (Session::get('successRegister'))
                                    <div class="alert alert-success w-70">
                                        {{ Session::get('successRegister') }}
                                    </div>
                                @endif
                                @if (Session::get('failedLogin'))
                                    <div class="alert alert-danger w-70">
                                        {{ Session::get('failedLogin') }}
                                    </div>
                                @endif
                                @if (Session::get('notAllowed'))
                                    <div class="alert alert-danger w-70">
                                        {{ Session::get('notAllowed') }}
                                    </div>
                                @endif
                                @if (Session::get('successLogout'))
                                    <div class="lc w-full rh ui dj qj gk fl gl ro cu">
                                        <div class="cb rc yd lf lc mg pg rh qj">
                                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                                                    fill="white" stroke="white"></path>
                                            </svg>
                                        </div>
                                        <div class="yd">
                                            <h5 class="fb kn tn zn">
                                                {{ Session::get('successLogout') }}
                                            </h5>
                                        </div>
                                    </div>
                                @endif


                                <div class="vb">
                                    <label class="fb jc">Username</label>
                                    <input name="username" type="string" class="yd qh ni bj wr tj el am vo fr ps ir" />
                                </div>
                                <div class="vb">
                                    <label class="fb jc">Password</label>
                                    <input name="password" type="password"
                                        class="yd qh ni bj wr tj el am vo fr ps ir" />
                                </div>
                                <div class="vb">
                                    <input type="submit" value="Log In" class="yd cg qh ni ej oj el am eo xo wq" />
                                </div>
                            </form>
                            <div class="lc jg qg">

                                <p class="ab">
                                    Not a member yet?
                                    <a href="/register" class="_n ar">
                                        Register
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="yd wu/2">
                        <div class="h vc yd ji ki nh oj">
                            <div class="lc vc lg wk et">
                                <h3 class="qn wn eo">
                                    Hey <br />
                                    Welcome <br />
                                    Back
                                </h3>
                                <div>
                                    <span class="g q r">
                                        <svg width="415" height="355" viewBox="0 0 415 355" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M415 107.5C415 244.19 304.19 355 167.5 355C30.8095 355 -80 244.19 -80 107.5C-80 -29.1905 30.8095 -140 167.5 -140C304.19 -140 415 -29.1905 415 107.5Z"
                                                fill="url(#paint0_linear_1179_8)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1179_8" x1="167.5" y1="-140"
                                                    x2="167.5" y2="355" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.177083" stop-color="white" stop-opacity="0.16" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="g r q">
                                        <svg width="177" height="354" viewBox="0 0 177 354" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M177 177C177 274.754 97.7544 354 0 354C-97.7544 354 -177 274.754 -177 177C-177 79.2456 -97.7544 0 0 0C97.7544 0 177 79.2456 177 177Z"
                                                fill="url(#paint0_linear_1179_7)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1179_7" x1="0" y1="0"
                                                    x2="0" y2="354" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.177083" stop-color="white" stop-opacity="0.2" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="g s t">
                                        <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M42.5 -1.85773e-06C65.9721 -2.88373e-06 85 19.0279 85 42.5C85 65.9721 65.9721 85 42.5 85C19.0279 85 -8.31736e-07 65.9721 -1.85773e-06 42.5C-2.88373e-06 19.0279 19.0279 -8.31736e-07 42.5 -1.85773e-06Z"
                                                fill="url(#paint0_linear_1179_6)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_1179_6" x1="-1.85774e-06"
                                                    y1="42.5" x2="85" y2="42.5"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.177083" stop-color="white" stop-opacity="0.16" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ====== Forms Section End -->
        </div>
    </main>

    <!-- ====== Back To Top End ===== -->
    <script defer src="{{ asset('assets/js/bundle_admin.js') }}"></script>
</body>

<!-- Mirrored from demo.tailgrids.com/templates/taildash/signin by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 01:26:54 GMT -->

</html>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.tailgrids.com/templates/taildash/signin by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 01:26:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Taildash - Tailwind CSS Admin Dashboard Template</title>
  <link rel="icon" href="favicon.ico"><link href="{{ asset('assets/css/style_admin.css') }}" rel="stylesheet">
  {{-- @vite('resources/css/app.css') --}}

</head>
  <body
    x-data="{ page: 'login', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b yn mj': darkMode === true}"
  >
  <main class="gv hm hv">
    <div class="sk bu 2xl:ud-p-11">
      <!-- ====== Forms Section Start -->
      <div class="va to rh nj xr">
        <div class="lc jg ng">
          <div class="yd wu/2">
            <div
              class="yd bm ql ct ht bw"
            >
              <h2
                class="eb wn pn zn gs"
              >
                Sign Up
              </h2>
              <form action="{{route('inputRegister')}}" method="POST">
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

                <div class="form-section">
                    <div class="vb">
                      <label class="fb jc">Username</label>
                      <input
                        name="username" type="string" 
                        class="yd qh ni bj wr tj el am vo fr ps ir"
                      />
                    </div>
                    <div class="vb">
                      <label class="fb jc">Password</label>
                      <input
                        name="password" type="password"
                        class="yd qh ni bj wr tj el am vo fr ps ir"
                      />
                    </div>
                    <div class="vb">
                      <label class="fb jc">Email</label>
                      <input
                        name="email" type="email"
                        class="yd qh ni bj wr tj el am vo fr ps ir"
                      />
                    </div>
                  </div>
                  
                  <div class="form-section">
                    <div class="vb">
                      <label class="fb jc">Nama Lengkap</label>
                      <input
                        name="nama_lengkap" type="string"
                        class="yd qh ni bj wr tj el am vo fr ps ir"
                      />
                    </div>
                    
                    <label class="fb jc un zn gs">
                      Alamat
                    </label>
                    <textarea
                      name="alamat" 
                      rows="6"
                      placeholder="Default textarea"
                      class="bj fr kr yd rh qi el yl un vo xo lr mr"
                    ></textarea>
                  </div>
                  
            

                <div class="vb">
                  <input
                    type="submit"
                    value="Sign Up"
                    class="yd cg qh ni ej oj el am eo xo wq"
                  />
                </div>
              </form>
              <div class="lc jg qg">
                
                <p class="ab">
                  A member yet?
                  <a
                    href="/login"
                    class="_n ar"
                  >
                    Login
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="yd wu/2">
            <div
              class="h vc yd ji ki nh oj"
            >
              <div class="lc vc lg wk et">
                <h3 class="qn wn eo">
                  Hey <br />
                  Welcome <br />
                  Back
                </h3>
                <div>
                  <span class="g q r">
                    <svg
                      width="415"
                      height="355"
                      viewBox="0 0 415 355"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M415 107.5C415 244.19 304.19 355 167.5 355C30.8095 355 -80 244.19 -80 107.5C-80 -29.1905 30.8095 -140 167.5 -140C304.19 -140 415 -29.1905 415 107.5Z"
                        fill="url(#paint0_linear_1179_8)"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear_1179_8"
                          x1="167.5"
                          y1="-140"
                          x2="167.5"
                          y2="355"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop
                            offset="0.177083"
                            stop-color="white"
                            stop-opacity="0.16"
                          />
                          <stop
                            offset="1"
                            stop-color="white"
                            stop-opacity="0"
                          />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="g r q">
                    <svg
                      width="177"
                      height="354"
                      viewBox="0 0 177 354"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M177 177C177 274.754 97.7544 354 0 354C-97.7544 354 -177 274.754 -177 177C-177 79.2456 -97.7544 0 0 0C97.7544 0 177 79.2456 177 177Z"
                        fill="url(#paint0_linear_1179_7)"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear_1179_7"
                          x1="0"
                          y1="0"
                          x2="0"
                          y2="354"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop
                            offset="0.177083"
                            stop-color="white"
                            stop-opacity="0.2"
                          />
                          <stop
                            offset="1"
                            stop-color="white"
                            stop-opacity="0"
                          />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="g s t">
                    <svg
                      width="85"
                      height="85"
                      viewBox="0 0 85 85"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M42.5 -1.85773e-06C65.9721 -2.88373e-06 85 19.0279 85 42.5C85 65.9721 65.9721 85 42.5 85C19.0279 85 -8.31736e-07 65.9721 -1.85773e-06 42.5C-2.88373e-06 19.0279 19.0279 -8.31736e-07 42.5 -1.85773e-06Z"
                        fill="url(#paint0_linear_1179_6)"
                      />
                      <defs>
                        <linearGradient
                          id="paint0_linear_1179_6"
                          x1="-1.85774e-06"
                          y1="42.5"
                          x2="85"
                          y2="42.5"
                          gradientUnits="userSpaceOnUse"
                        >
                          <stop
                            offset="0.177083"
                            stop-color="white"
                            stop-opacity="0.16"
                          />
                          <stop
                            offset="1"
                            stop-color="white"
                            stop-opacity="0"
                          />
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
  <script defer src="{{ asset('assets/js/bundle_admin.js') }}"></script></body>

<!-- Mirrored from demo.tailgrids.com/templates/taildash/signin by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 01:26:54 GMT -->
</html>

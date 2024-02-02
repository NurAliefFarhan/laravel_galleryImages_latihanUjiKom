<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tailgrids.com/templates/taildash/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 01:26:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Analytics Dashboard | Taildash - Tailwind CSS Admin Dashboard Template</title>
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('assets/css/style_admin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body
    x-data="{ page: 'analytics', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{ 'b yn mj': darkMode === true }">
    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded"
        x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
        class="f q r ze rd nj pa">
        <div class="c"></div>
    </div>

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="nh">
        <!-- ===== Sidebar Start ===== -->
        <aside :class="sidebarToggle && 'zf ph'" class="qo -ud-translate-x-full _u nj xr _e f u ou q l bv ip hp dp oa">
            <!-- Hamburger Toggle BTN -->
            <button :class="sidebarToggle && 'ga'" class="vu jc g -ud-right-9.5 pa nj xr ni bj wr _k uo qh"
                @click="sidebarToggle = !sidebarToggle">
                <span class="jc h cg bf sd">
                    <span class="du-block g m yd vc">
                        <span class="jc h r q uj cs zh cf td ya gp fp yo" :class="{ 'df zo': !sidebarToggle }"></span>
                        <span class="jc h r q uj cs zh cf td ya gp fp _o" :class="{ 'df gw': !sidebarToggle }"></span>
                        <span class="jc h r q uj cs zh cf td ya gp fp ap" :class="{ 'df bp': !sidebarToggle }"></span>
                    </span>
                    <span class="du-block g m yd vc _f">
                        <span class="jc uj cs zh gp fp zo g ha r ef vc" :class="{ 'ud yo': !sidebarToggle }"></span>
                        <span class="jc uj cs zh gp fp gw g q ia yd td" :class="{ 'ud hw': !sidebarToggle }"></span>
                    </span>
                </span>
            </button>
            <!-- Hamburger Toggle BTN -->

            <!-- Sidebar Menu -->
            <nav class="ml rl fv gc ru" x-data="{ selected: 'Dashboard' }" x-init="selected = JSON.parse(localStorage.getItem('selected'));
            $watch('selected', value => localStorage.setItem('selected', JSON.stringify(value)))">
                <ul class="lc hg bh">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a class="nr h un lc mg sg qh gp dp nl rl _q qq" href="#"
                            @click.prevent="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                            :class="{ 'eo oj': (selected === 'Dashboard') || (page === 'analytics') }">
                            <svg class="hk" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.8125 5.90625C15.0938 4.09375 12.6875 2.96875 10 2.96875C4.78125 2.96875 0.5625 7.21875 0.5625 12.4375C0.5625 13.9062 0.90625 15.3438 1.53125 16.625C1.625 16.8125 1.78125 16.9375 1.96875 17C2.03125 17 2.0625 17.0312 2.125 17.0312C2.125 17.0312 2.125 17.0312 2.15625 17.0312C2.15625 17.0312 2.15625 17.0312 2.1875 17.0312C2.21875 17.0312 2.25 17.0312 2.28125 17.0312C2.34375 17.0312 2.4375 17 2.5 16.9687L3.78125 16.3437C4.125 16.1875 4.28125 15.75 4.09375 15.4062C3.90625 15.0625 3.5 14.9062 3.15625 15.0937L2.53125 15.4062C2.15625 14.5 2 13.5312 1.96875 12.5312H3.28125C3.65625 12.5312 4 12.2187 4 11.8125C4 11.4062 3.6875 11.0938 3.28125 11.0938H2.0625C2.28125 9.71875 2.875 8.46875 3.71875 7.4375L4.84375 8.5625C4.96875 8.6875 5.15625 8.78125 5.34375 8.78125C5.53125 8.78125 5.71875 8.71875 5.84375 8.5625C6.125 8.28125 6.125 7.84375 5.84375 7.5625L4.6875 6.40625C5.9375 5.3125 7.53125 4.5625 9.3125 4.4375V6.34375C9.3125 6.71875 9.625 7.0625 10.0312 7.0625C10.4062 7.0625 10.75 6.75 10.75 6.34375V4.4375C12.5 4.59375 14.125 5.3125 15.375 6.40625L14.5 7.28125C14.2188 7.5625 14.2188 8 14.5 8.28125C14.625 8.40625 14.8125 8.5 15 8.5C15.1875 8.5 15.375 8.4375 15.5 8.28125L16.3438 7.4375C17.1875 8.46875 17.75 9.71875 18 11.0938H16.7813C16.4063 11.0938 16.0625 11.4062 16.0625 11.8125C16.0625 12.2187 16.375 12.5312 16.7813 12.5312H18.0938C18.0938 13.5312 17.9062 14.5 17.5312 15.4375L16.9062 15.125C16.5625 14.9375 16.125 15.0938 15.9687 15.4375C15.8125 15.7813 15.9375 16.2188 16.2812 16.375L17.5625 17C17.6563 17.0625 17.7813 17.0625 17.875 17.0625C17.875 17.0625 17.875 17.0625 17.9062 17.0625C17.9062 17.0625 17.9063 17.0625 17.9375 17.0625C18.1875 17.0625 18.4375 16.9063 18.5625 16.6875C19.2188 15.4063 19.5313 13.9375 19.5313 12.5C19.4688 9.90625 18.4375 7.59375 16.8125 5.90625Z"
                                    fill="" />
                                <path
                                    d="M11.9062 10.75L9.81247 12.3125C9.43747 12.375 9.09372 12.5938 8.87497 12.9063C8.84372 12.9688 8.81247 13 8.78122 13.0625L8.71872 13.125H8.74997C8.40622 13.7813 8.59372 14.5938 9.21872 15.0625C9.84372 15.5 10.6875 15.4375 11.1875 14.9063H11.2187L11.25 14.8438C11.2812 14.8125 11.3437 14.75 11.375 14.6875C11.625 14.375 11.6875 13.9688 11.6562 13.5938L12.4687 11.0938C12.5625 10.8125 12.1875 10.5625 11.9062 10.75Z"
                                    fill="" />
                            </svg>

                            Dashboard

                            <svg class="hk g i j/2 -ud-translate-y-1/2" :class="{ 'ag': (selected === 'Dashboard') }"
                                width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.410704 0.929411C0.736141 0.603974 1.26378 0.603974 1.58922 0.929411L5.99996 5.34016L10.4107 0.929411C10.7361 0.603974 11.2638 0.603974 11.5892 0.929411C11.9147 1.25485 11.9147 1.78249 11.5892 2.10792L6.58922 7.10792C6.26378 7.43336 5.73614 7.43336 5.4107 7.10792L0.410704 2.10792C0.0852667 1.78249 0.0852667 1.25485 0.410704 0.929411Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="nh" :class="(selected === 'Dashboard') ? 'jc' : 'pc'">
                            <ul class="lc hg tg wm yb fb">
                                <li>
                                    <a class="nr h un lc mg sg qh gp dp ol rl zq os vq ls/5" href="index.html"
                                        :class="page === 'analytics' && '_n gs dk cs/5'">Images</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <li>
                    <!-- Menu Item Dashboard -->

                </ul>

            </nav>
            <!-- Sidebar Menu -->
        </aside>

        <!-- ===== Sidebar End ===== -->

        <!-- ===== Header Start ===== -->
        <header class="f q r lc yd nj xr hp dp oa" :class="{ 'iw': stickyMenu }"
            @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
            <!-- Site Logo Start -->
            <div class="lc mg qo rv yu ml rl fv">
                <a class="lc mg zg" href="index.html">
                    <img class="" src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="width:64px;" />
                    <h4 class="tn jn zn gs xb">
                        Album
                    </h4>

                    {{-- <img class="vr" src="{{ asset('assets/img/logo/logo-light.svg') }}" alt="Logo" />
                    <img class="pc ur" src="{{ asset('assets/img/logo/logo-dark.svg') }}" alt="Logo" /> --}}

                    {{-- <span class="pc tu lo gs bc">
                        <svg class="hk" width="118" height="25" viewBox="0 0 118 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.320007 4.77941H7.08207V24.1492H11.1267V4.77941H17.8887V1.05079H0.320007V4.77941Z"
                                fill="" />
                            <path
                                d="M22.4029 24.56C24.8359 24.56 26.953 23.4541 27.6166 21.8425L27.901 24.1492H31.282V14.6697C31.282 10.3407 28.6909 8.06564 24.4883 8.06564C20.2542 8.06564 17.4735 10.2775 17.4735 13.6586H20.7597C20.7597 12.0154 22.0237 11.0675 24.2988 11.0675C26.2579 11.0675 27.5218 11.9206 27.5218 14.0377V14.3853L22.8452 14.7329C19.1482 15.0173 17.0627 16.8184 17.0627 19.6939C17.0627 22.6325 19.085 24.56 22.4029 24.56ZM23.6668 21.653C21.9289 21.653 20.9809 20.9578 20.9809 19.5359C20.9809 18.2719 21.8973 17.482 24.2988 17.2608L27.5534 17.008V17.8296C27.5534 20.231 26.0367 21.653 23.6668 21.653Z"
                                fill="" />
                            <path
                                d="M36.9966 5.41137C38.2606 5.41137 39.3033 4.36863 39.3033 3.07309C39.3033 1.77756 38.2606 0.766409 36.9966 0.766409C35.6695 0.766409 34.6267 1.77756 34.6267 3.07309C34.6267 4.36863 35.6695 5.41137 36.9966 5.41137ZM35.0691 24.1492H38.9241V8.53962H35.0691V24.1492Z"
                                fill="" />
                            <path d="M46.7936 24.1492V0.640015H42.9702V24.1492H46.7936Z" fill="" />
                            <path
                                d="M57.2519 24.56C59.6218 24.56 61.6441 23.5173 62.5921 21.7162L62.8449 24.1492H66.3839V0.640015H62.5605V10.5303C61.5809 8.982 59.6534 8.06564 57.4731 8.06564C52.765 8.06564 49.9211 11.5415 49.9211 16.4076C49.9211 21.2422 52.7334 24.56 57.2519 24.56ZM58.1051 21.021C55.4192 21.021 53.7761 19.0619 53.7761 16.2812C53.7761 13.5006 55.4192 11.5099 58.1051 11.5099C60.791 11.5099 62.5289 13.469 62.5289 16.2812C62.5289 19.0935 60.791 21.021 58.1051 21.021Z"
                                fill="" />
                            <path
                                d="M75.0463 24.56C77.4794 24.56 79.5965 23.4541 80.26 21.8425L80.5444 24.1492H83.9254V14.6697C83.9254 10.3407 81.3344 8.06564 77.1318 8.06564C72.8976 8.06564 70.1169 10.2775 70.1169 13.6586H73.4032C73.4032 12.0154 74.6671 11.0675 76.9422 11.0675C78.9013 11.0675 80.1652 11.9206 80.1652 14.0377V14.3853L75.4887 14.7329C71.7917 15.0173 69.7062 16.8184 69.7062 19.6939C69.7062 22.6325 71.7285 24.56 75.0463 24.56ZM76.3102 21.653C74.5723 21.653 73.6244 20.9578 73.6244 19.5359C73.6244 18.2719 74.5407 17.482 76.9422 17.2608L80.1968 17.008V17.8296C80.1968 20.231 78.6801 21.653 76.3102 21.653Z"
                                fill="" />
                            <path
                                d="M86.5118 19.4095C86.5118 22.4745 88.9765 24.56 92.8631 24.56C96.7181 24.56 99.404 22.6009 99.404 19.4411C99.404 17.0396 98.0769 15.8389 95.4542 15.2385L92.6419 14.5749C91.3148 14.2589 90.6196 13.6902 90.6196 12.8054C90.6196 11.6363 91.5044 10.9411 93.0211 10.9411C94.5062 10.9411 95.391 11.7943 95.4226 13.1214H99.088C99.0564 10.0879 96.6865 8.06564 93.1791 8.06564C89.5769 8.06564 86.9858 9.89835 86.9858 12.9634C86.9858 15.4597 88.3445 16.7868 91.1568 17.4188L93.9691 18.0823C95.3594 18.3983 95.7702 18.9671 95.7702 19.7571C95.7702 20.8946 94.7906 21.6214 92.9895 21.6214C91.22 21.6214 90.2088 20.7682 90.1772 19.4095H86.5118Z"
                                fill="" />
                            <path
                                d="M106.194 24.1492V15.6177C106.194 13.2794 107.616 11.5731 110.049 11.5731C112.008 11.5731 113.304 12.837 113.304 15.4597V24.1492H117.159V14.5433C117.159 10.4987 115.137 8.06564 111.282 8.06564C109.038 8.06564 107.205 9.04519 106.226 10.5619V0.640015H102.339V24.1492H106.194Z"
                                fill="" />
                        </svg>
                    </span> --}}
                </a>
            </div>
            <!-- Site Logo End -->

            <div class="lc xf mg og _s qo ml rl hu 2xl:ud-px-11">
                <div class="pc rs">
                    <form action="https://formbold.com/s/unique_form_id" method="POST">
                        <div class="h">
                            <button class="g -ud-translate-y-1/2 j/2 q">
                                <svg class="mk fs yq ms" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z"
                                        fill="" />
                                </svg>
                            </button>

                            <input type="text" placeholder="Type to search..." class="yd tj gr rm sm" />
                        </div>
                    </form>
                </div>

                <div class="lc mg _g">
                    <ul class="lc mg vg">
                        <li>
                            <!-- Dark Mode Toggler -->
                            <label class="jc ua h">
                                <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode"
                                    class="cg yd vc oo g r ra ua" />
                                <img class="vr" src="{{ asset('assets/img/icon/icon-sun.svg') }}" alt="Sun" />
                                <img class="pc ur" src="{{ asset('assets/img/icon/icon-moon.svg') }}" alt="Moon" />
                            </label>
                            <!-- Dark Mode Toggler -->
                        </li>

                        <li class="h" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                            {{-- <a class="h" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                                <span class="g -ud-top-0.5 -ud-right-0.5 he dd th ck sa">
                                    <span class="bg g nc vc yd th ck po -ud-z-1"></span>
                                </span>

                                <svg class="mk yq gp dp" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4 5C3.45228 5 3 5.45228 3 6V18C3 18.5477 3.45228 19 4 19H20C20.5477 19 21 18.5477 21 18V6C21 5.45228 20.5477 5 20 5H4ZM1 6C1 4.34772 2.34772 3 4 3H20C21.6523 3 23 4.34772 23 6V18C23 19.6523 21.6523 21 20 21H4C2.34772 21 1 19.6523 1 18V6Z"
                                        fill="" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.18085 5.42662C1.49757 4.97417 2.1211 4.86414 2.57355 5.18085L12.0001 11.7794L21.4266 5.18085C21.8791 4.86414 22.5026 4.97417 22.8193 5.42662C23.136 5.87907 23.026 6.5026 22.5735 6.81932L12.5735 13.8193C12.2292 14.0603 11.7709 14.0603 11.4266 13.8193L1.42662 6.81932C0.974174 6.5026 0.864139 5.87907 1.18085 5.42662Z"
                                        fill="" />
                                </svg>
                            </a> --}}

                            <!-- Dropdown Start -->
                            {{-- <div x-show="dropdownOpen"
                                class="a nj xr dc -ud-right-20 sm:-ud-right-8.5 gq mt ve vs od">
                                <div class="vi bj wr vl ql">
                                    <h5 class="tn sn zn gs">
                                        Message (02)
                                    </h5>
                                </div>

                                <ul class="lc hg tg ph ip pd rl ym fn">
                                    <li class="nr cg h lc mg qg qh sq js yk">
                                        <a class="lc mg ug" href="#">
                                            <div class="h sa wf uk th ni ej">
                                                <img src="src/images/user/user-02.png" alt="User" />
                                                <span class="g l m xe qd th pi jj xj ra"></span>
                                            </div>

                                            <div>
                                                <h6 class="un zn gs">
                                                    Craig Baptista
                                                </h6>
                                                <p class="mn hc">
                                                    Lorem ipsum has been th...
                                                </p>
                                            </div>
                                        </a>
                                        <div class="lc mg tg">
                                            <span class="tn nn eo jl kl xh oj">03</span>

                                            <div x-data="{ openDropDown: false }" class="h">
                                                <button @click="openDropDown = !openDropDown"
                                                    @click.outside="openDropDown = false" class="lc mg pg">
                                                    <svg class="hk" width="14" height="14"
                                                        viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_4662_3241)">
                                                            <path
                                                                d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z"
                                                                fill="" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4662_3241">
                                                                <rect width="14" height="14" fill="white"
                                                                    transform="translate(0 14) rotate(-90)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>

                                                <div class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                                                    x-show="openDropDown">
                                                    <button class="yd sh ol ll gn mn tq js">View Profile</button>
                                                    <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                                                    <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                                                    <button class="yd sh ol ll gn mn tq js">Block Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nr cg h lc mg qg qh sq js yk">
                                        <a class="lc mg ug" href="#">
                                            <div class="h sa wf uk th ni ej">
                                                <img src="src/images/user/user-03.png" alt="User" />
                                                <span class="g l m xe qd th pi jj xj ra"></span>
                                            </div>

                                            <div>
                                                <h6 class="un zn gs">
                                                    Maren Lipshutz
                                                </h6>
                                                <p class="mn hc">
                                                    Lorem ipsum has been th...
                                                </p>
                                            </div>
                                        </a>
                                        <div class="lc mg tg">
                                            <span class="tn nn eo jl kl xh oj">01</span>

                                            <div x-data="{ openDropDown: false }" class="h">
                                                <button @click="openDropDown = !openDropDown"
                                                    @click.outside="openDropDown = false" class="lc mg pg">
                                                    <svg class="hk" width="14" height="14"
                                                        viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_4662_3241)">
                                                            <path
                                                                d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z"
                                                                fill="" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4662_3241">
                                                                <rect width="14" height="14" fill="white"
                                                                    transform="translate(0 14) rotate(-90)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>

                                                <div class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                                                    x-show="openDropDown">
                                                    <button class="yd sh ol ll gn mn tq js">View Profile</button>
                                                    <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                                                    <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                                                    <button class="yd sh ol ll gn mn tq js">Block Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nr cg h lc mg qg qh sq js yk">
                                        <a class="lc mg ug" href="#">
                                            <div class="h sa wf uk th ni ej">
                                                <img src="src/images/user/user-02.png" alt="User" />
                                                <span class="g l m xe qd th pi jj sj ra"></span>
                                            </div>

                                            <div>
                                                <h6 class="un zn gs">
                                                    Craig Baptista
                                                </h6>
                                                <p class="mn hc">
                                                    Lorem ipsum has been th...
                                                </p>
                                            </div>
                                        </a>
                                        <div class="lc mg tg">
                                            <div x-data="{ openDropDown: false }" class="h">
                                                <button @click="openDropDown = !openDropDown"
                                                    @click.outside="openDropDown = false" class="lc mg pg">
                                                    <svg class="hk" width="14" height="14"
                                                        viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_4662_3241)">
                                                            <path
                                                                d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z"
                                                                fill="" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4662_3241">
                                                                <rect width="14" height="14" fill="white"
                                                                    transform="translate(0 14) rotate(-90)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>

                                                <div class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                                                    x-show="openDropDown">
                                                    <button class="yd sh ol ll gn mn tq js">View Profile</button>
                                                    <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                                                    <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                                                    <button class="yd sh ol ll gn mn tq js">Block Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nr cg h lc mg qg qh sq js yk">
                                        <a class="lc mg ug" href="#">
                                            <div class="h sa wf uk th ni ej">
                                                <img src="src/images/user/user-03.png" alt="User" />
                                                <span class="g l m xe qd th pi jj xj ra"></span>
                                            </div>

                                            <div>
                                                <h6 class="un zn gs">
                                                    Craig Baptista
                                                </h6>
                                                <p class="mn hc">
                                                    Lorem ipsum has been th...
                                                </p>
                                            </div>
                                        </a>
                                        <div class="lc mg tg">
                                            <div x-data="{ openDropDown: false }" class="h">
                                                <button @click="openDropDown = !openDropDown"
                                                    @click.outside="openDropDown = false" class="lc mg pg">
                                                    <svg class="hk" width="14" height="14"
                                                        viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_4662_3241)">
                                                            <path
                                                                d="M8.75 12.25C8.75 11.2835 7.9665 10.5 7 10.5C6.0335 10.5 5.25 11.2835 5.25 12.25C5.25 13.2165 6.0335 14 7 14C7.9665 14 8.75 13.2165 8.75 12.25Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 7C8.75 6.0335 7.9665 5.25 7 5.25C6.0335 5.25 5.25 6.0335 5.25 7C5.25 7.9665 6.0335 8.75 7 8.75C7.9665 8.75 8.75 7.9665 8.75 7Z"
                                                                fill="" />
                                                            <path
                                                                d="M8.75 1.75C8.75 0.783502 7.9665 1.19677e-07 7 1.61924e-07C6.0335 2.04171e-07 5.25 0.783502 5.25 1.75C5.25 2.7165 6.0335 3.5 7 3.5C7.9665 3.5 8.75 2.7165 8.75 1.75Z"
                                                                fill="" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4662_3241">
                                                                <rect width="14" height="14" fill="white"
                                                                    transform="translate(0 14) rotate(-90)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>

                                                <div class="or pr qr g m n oa de eh sh so nj xr ni bj wr vk gc"
                                                    x-show="openDropDown">
                                                    <button class="yd sh ol ll gn mn tq js">View Profile</button>
                                                    <button class="yd sh ol ll gn mn tq js">Mark As Unread</button>
                                                    <button class="yd sh ol ll gn mn tq js">Delete Message</button>
                                                    <button class="yd sh ol ll gn mn tq js">Block Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="g l ra yd ei ti nj xr bj wr yk">
                                    <a href="#" class="lc mg pg qh un eo oj wq vk">View All Message</a>
                                </div>
                            </div> --}}
                            <!-- Dropdown End -->
                        </li>
                        <!-- Chat Notification Area -->
                    </ul>

                    <!-- User Area -->
                    <div class="h" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                        <a class="lc mg vg" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                            <span class="pc tu in">
                                <span class="jc un mn zn gs">{{ Auth::user()->nama_lengkap }}</span>
                                <span class="jc nn">UX Designer</span>
                            </span>

                            <span class="th ni vj bj wr uk">
                                <img src="{{ asset('assets/img/user/user-01.png') }}" alt="User" />
                            </span>

                            <svg :class="dropdownOpen && 'ag'" class="mk fs pc rs hp ep" width="12" height="8"
                                viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Start -->
                        <div x-show="dropdownOpen" class="a ye m yb">
                            <ul class="lc hg ug vi bj wr ql wl">
                                <li>
                                    <a href="#" class="un mn qv lc mg ah gp dp zq">
                                        <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z"
                                                fill="" />
                                            <path
                                                d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z"
                                                fill="" />
                                        </svg>
                                        My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="un mn qv lc mg ah gp dp zq">
                                        <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z"
                                                fill="" />
                                        </svg>
                                        My Contacts
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="un mn qv lc mg ah gp dp zq">
                                        <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.87499 19.6969 6.39374 19.6969 5.87812C19.6969 5.36249 19.525 4.88124 19.1469 4.50312L17.8062 3.12812C17.0844 2.37187 15.8469 2.33749 15.0906 3.09374L14.9875 3.16249C14.8844 3.26562 14.7125 3.29999 14.5406 3.23124C14.4031 3.16249 14.2656 3.09374 14.0937 3.05937C13.9219 2.99062 13.8187 2.85312 13.8187 2.71562V2.54374C13.8187 1.47812 12.9594 0.618744 11.8937 0.618744H9.96875C9.45312 0.618744 8.97187 0.824994 8.62812 1.16874C8.25 1.54687 8.07812 2.02812 8.07812 2.50937V2.64687C8.07812 2.78437 7.975 2.92187 7.8375 2.99062C7.76875 3.02499 7.73437 3.02499 7.66562 3.05937C7.52812 3.12812 7.35625 3.09374 7.25312 2.99062L7.18437 2.88749C6.84062 2.50937 6.35937 2.30312 5.84375 2.30312C5.32812 2.30312 4.84687 2.47499 4.46875 2.85312L3.09375 4.19374C2.3375 4.91562 2.30312 6.15312 3.05937 6.90937L3.12812 7.01249C3.23125 7.11562 3.26562 7.28749 3.19687 7.39062C3.12812 7.52812 3.09375 7.63124 3.025 7.76874C2.95625 7.90624 2.85312 7.97499 2.68125 7.97499H2.57812C2.0625 7.97499 1.58125 8.14687 1.20312 8.52499C0.824996 8.86874 0.618746 9.34999 0.618746 9.86562L0.584371 11.7906C0.549996 12.8562 1.40937 13.7156 2.475 13.75H2.57812C2.75 13.75 2.8875 13.8531 2.92187 13.9906C2.99062 14.0937 3.05937 14.1969 3.09375 14.3344C3.12812 14.4719 3.09375 14.6094 2.99062 14.7125L2.92187 14.7812C2.54375 15.125 2.3375 15.6062 2.3375 16.1219C2.3375 16.6375 2.50937 17.1187 2.8875 17.4969L4.22812 18.8719C4.95 19.6281 6.1875 19.6625 6.94375 18.9062L7.04687 18.8375C7.15 18.7344 7.32187 18.7 7.49375 18.7687C7.63125 18.8375 7.76875 18.9062 7.94062 18.9406C8.1125 19.0094 8.21562 19.1469 8.21562 19.2844V19.4219C8.21562 20.4875 9.075 21.3469 10.1406 21.3469H12.0656C13.1312 21.3469 13.9906 20.4875 13.9906 19.4219V19.2844C13.9906 19.1469 14.0937 19.0094 14.2312 18.9406C14.3 18.9062 14.3344 18.9062 14.4031 18.8719C14.575 18.8031 14.7125 18.8375 14.8156 18.9406L14.8844 19.0437C15.2281 19.4219 15.7094 19.6281 16.225 19.6281C16.7406 19.6281 17.2219 19.4562 17.6 19.0781L18.975 17.7375C19.7312 17.0156 19.7656 15.7781 19.0094 15.0219L18.9406 14.9187C18.8375 14.8156 18.8031 14.6437 18.8719 14.5406C18.9406 14.4031 18.975 14.3 19.0437 14.1625C19.1125 14.025 19.25 13.9562 19.3875 13.9562H19.4906H19.525C20.5562 13.9562 21.4156 13.1312 21.45 12.0656L21.4844 10.1406C21.4156 9.72812 21.2094 9.21249 20.8656 8.86874ZM19.8344 12.1C19.8344 12.3062 19.6625 12.4781 19.4562 12.4781H19.3531H19.3187C18.5281 12.4781 17.8062 12.9594 17.5312 13.6469C17.4969 13.75 17.4281 13.8531 17.3937 13.9562C17.0844 14.6437 17.2219 15.5031 17.7719 16.0531L17.8406 16.1562C17.9781 16.2937 17.9781 16.5344 17.8406 16.6719L16.4656 18.0125C16.3625 18.1156 16.2594 18.1156 16.1906 18.1156C16.1219 18.1156 16.0187 18.1156 15.9156 18.0125L15.8469 17.9094C15.2969 17.325 14.4719 17.1531 13.7156 17.4969L13.5781 17.5656C12.8219 17.875 12.3406 18.5625 12.3406 19.3531V19.4906C12.3406 19.6969 12.1687 19.8687 11.9625 19.8687H10.0375C9.83125 19.8687 9.65937 19.6969 9.65937 19.4906V19.3531C9.65937 18.5625 9.17812 17.8406 8.42187 17.5656C8.31875 17.5312 8.18125 17.4625 8.07812 17.4281C7.80312 17.2906 7.52812 17.2562 7.25312 17.2562C6.77187 17.2562 6.29062 17.4281 5.9125 17.8062L5.84375 17.8406C5.70625 17.9781 5.46562 17.9781 5.32812 17.8406L3.9875 16.4656C3.88437 16.3625 3.88437 16.2594 3.88437 16.1906C3.88437 16.1219 3.88437 16.0187 3.9875 15.9156L4.05625 15.8469C4.64062 15.2969 4.8125 14.4375 4.50312 13.75C4.46875 13.6469 4.43437 13.5437 4.36562 13.4406C4.09062 12.7187 3.40312 12.2031 2.6125 12.2031H2.50937C2.30312 12.2031 2.13125 12.0312 2.13125 11.825L2.16562 9.89999C2.16562 9.76249 2.23437 9.69374 2.26875 9.62499C2.30312 9.59062 2.40625 9.52187 2.54375 9.52187H2.64687C3.4375 9.55624 4.15937 9.07499 4.46875 8.35312C4.50312 8.24999 4.57187 8.14687 4.60625 8.04374C4.91562 7.35624 4.77812 6.49687 4.22812 5.94687L4.15937 5.84374C4.02187 5.70624 4.02187 5.46562 4.15937 5.32812L5.53437 3.98749C5.6375 3.88437 5.74062 3.88437 5.80937 3.88437C5.87812 3.88437 5.98125 3.88437 6.08437 3.98749L6.15312 4.09062C6.70312 4.67499 7.52812 4.84687 8.28437 4.53749L8.42187 4.46874C9.17812 4.15937 9.65937 3.47187 9.65937 2.68124V2.54374C9.65937 2.40624 9.72812 2.33749 9.7625 2.26874C9.79687 2.19999 9.9 2.16562 10.0375 2.16562H11.9625C12.1687 2.16562 12.3406 2.33749 12.3406 2.54374V2.68124C12.3406 3.47187 12.8219 4.19374 13.5781 4.46874C13.6812 4.50312 13.8187 4.57187 13.9219 4.60624C14.6437 4.94999 15.5031 4.81249 16.0875 4.26249L16.1906 4.19374C16.3281 4.05624 16.5687 4.05624 16.7062 4.19374L18.0469 5.56874C18.15 5.67187 18.15 5.77499 18.15 5.84374C18.15 5.91249 18.1156 6.01562 18.0469 6.11874L17.9781 6.18749C17.3594 6.70312 17.1875 7.56249 17.4625 8.24999C17.4969 8.35312 17.5312 8.45624 17.6 8.55937C17.875 9.28124 18.5625 9.79687 19.3531 9.79687H19.4562C19.5937 9.79687 19.6625 9.86562 19.7312 9.89999C19.8 9.93437 19.8344 10.0375 19.8344 10.175V12.1Z"
                                                fill="" />
                                            <path
                                                d="M11 6.32498C8.42189 6.32498 6.32501 8.42186 6.32501 11C6.32501 13.5781 8.42189 15.675 11 15.675C13.5781 15.675 15.675 13.5781 15.675 11C15.675 8.42186 13.5781 6.32498 11 6.32498ZM11 14.1281C9.28126 14.1281 7.87189 12.7187 7.87189 11C7.87189 9.28123 9.28126 7.87186 11 7.87186C12.7188 7.87186 14.1281 9.28123 14.1281 11C14.1281 12.7187 12.7188 14.1281 11 14.1281Z"
                                                fill="" />
                                        </svg>
                                        Account Settings
                                    </a>
                                </li>
                            </ul>
                            <a class="un mn qv lc mg ah gp dp zq ml ql" href="/logout">
                                <svg class="hk" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                                        fill="" />
                                    <path
                                        d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                                        fill="" />
                                </svg>
                                Log Out
                            </a>
                        </div>
                        <!-- Dropdown End -->
                    </div>
                    <!-- User Area -->
                </div>
            </div>
        </header>

        <!-- ===== Header End ===== -->
        <!-- ===== Main Content Start ===== -->
        <main class="gv hm hv">
            @if (Session::get('succesLogin'))
                <div class="lc w-full rh ui dj qj gk fl gl ro cu">
                    <div class="cb rc yd lf lc mg pg rh qj">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                                fill="white" stroke="white"></path>
                        </svg>
                    </div>
                    <div class="yd">
                        <h5 class="fb kn tn zn">
                            {{ Session::get('succesLogin') }}
                        </h5>
                    </div>
                </div>
            @endif


            {{-- <p class="mn kb qu">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                ultrices lectus sem.
            </p>
             --}}
            <div class="sk bu 2xl:ud-p-11">
                <div style="display: flex; gap:10px;">
                    <a href="{{ route('uji_kom.createImages', $album->id) }}" class="lc mg sg qh un eo oj br el rl"
                        style="width:240px; margin-bottom:20px;">

                        <svg class="hk" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.75 9.3125H10.7187V1.25C10.7187 0.875 10.4062 0.53125 10 0.53125C9.625 0.53125 9.28125 0.84375 9.28125 1.25V9.3125H1.25C0.875 9.3125 0.53125 9.625 0.53125 10.0312C0.53125 10.4062 0.84375 10.75 1.25 10.75H9.3125V1
                                fill=" white" />
                        </svg>

                        Add Images
                    </a>
                    <a href="{{ route('uji_kom.home') }}" class="lc mg sg qh un eo oj br el rl"
                        style=" margin-bottom:20px; background-color:red;">
                        Back to Home
                    </a>

                </div>
                <h4 class="tn jn zn gs xb">
                    Images dari {{ $album->nama_album }}
                </h4>
                @if (Session::get('successAddImage'))
                    <div class="lc w-full rh ui dj qj gk fl gl ro cu">
                        <div class="cb rc yd lf lc mg pg rh qj">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                                    fill="white" stroke="white"></path>
                            </svg>
                        </div>
                        <div class="yd">
                            <h5 class="fb kn tn zn">
                                {{ Session::get('successAddImage') }}
                            </h5>
                        </div>
                    </div>
                @endif
                @if (Session::get('successUpdateImage'))
                    <div class="lc w-full rh ui dj qj gk fl gl ro cu">
                        <div class="cb rc yd lf lc mg pg rh qj">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                                    fill="white" stroke="white"></path>
                            </svg>
                        </div>
                        <div class="yd">
                            <h5 class="fb kn tn zn">
                                {{ Session::get('successUpdateImage') }}
                            </h5>
                        </div>
                    </div>
                @endif
                @if (Session::get('successDeleteImage')) 
                    <div class="qh rj sk">
                        <p class="lc mg mn un do">
                        <span class="km">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="10" r="10" fill="#BC1C21"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0002 5.54922C7.54253 5.54922 5.5502 7.54155 5.5502 9.99922C5.5502 12.4569 7.54253 14.4492 10.0002 14.4492C12.4579 14.4492 14.4502 12.4569 14.4502 9.99922C14.4502 7.54155 12.4579 5.54922 10.0002 5.54922ZM4.4502 9.99922C4.4502 6.93404 6.93502 4.44922 10.0002 4.44922C13.0654 4.44922 15.5502 6.93404 15.5502 9.99922C15.5502 13.0644 13.0654 15.5492 10.0002 15.5492C6.93502 15.5492 4.4502 13.0644 4.4502 9.99922Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0002 7.44922C10.304 7.44922 10.5502 7.69546 10.5502 7.99922V9.99922C10.5502 10.303 10.304 10.5492 10.0002 10.5492C9.69644 10.5492 9.4502 10.303 9.4502 9.99922V7.99922C9.4502 7.69546 9.69644 7.44922 10.0002 7.44922Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.4502 11.9992C9.4502 11.6955 9.69644 11.4492 10.0002 11.4492H10.0052C10.309 11.4492 10.5552 11.6955 10.5552 11.9992C10.5552 12.303 10.309 12.5492 10.0052 12.5492H10.0002C9.69644 12.5492 9.4502 12.303 9.4502 11.9992Z" fill="white"></path>
                            </svg>
                        </span>
                        {{ Session::get('successDeleteImage') }}
                        </p>
                    </div>
                @endif
                @if (Session::get('likeImages')) 
                    <div class="qh rj sk">
                        <p class="lc mg mn un do">
                        <span class="km">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="10" r="10" fill="#00ff00"></circle>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0002 5.54922C7.54253 5.54922 5.5502 7.54155 5.5502 9.99922C5.5502 12.4569 7.54253 14.4492 10.0002 14.4492C12.4579 14.4492 14.4502 12.4569 14.4502 9.99922C14.4502 7.54155 12.4579 5.54922 10.0002 5.54922ZM4.4502 9.99922C4.4502 6.93404 6.93502 4.44922 10.0002 4.44922C13.0654 4.44922 15.5502 6.93404 15.5502 9.99922C15.5502 13.0644 13.0654 15.5492 10.0002 15.5492C6.93502 15.5492 4.4502 13.0644 4.4502 9.99922Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0002 7.44922C10.304 7.44922 10.5502 7.69546 10.5502 7.99922V9.99922C10.5502 10.303 10.304 10.5492 10.0002 10.5492C9.69644 10.5492 9.4502 10.303 9.4502 9.99922V7.99922C9.4502 7.69546 9.69644 7.44922 10.0002 7.44922Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.4502 11.9992C9.4502 11.6955 9.69644 11.4492 10.0002 11.4492H10.0052C10.309 11.4492 10.5552 11.6955 10.5552 11.9992C10.5552 12.303 10.309 12.5492 10.0052 12.5492H10.0002C9.69644 12.5492 9.4502 12.303 9.4502 11.9992Z" fill="white"></path>
                            </svg>
                        </span>
                        {{ Session::get('likeImages') }}
                        </p>
                    </div>
                @endif
                       
                <div class="qh qo nj xr bb">
                    <div class="tk">
                        <!-- ====== Cards Section Start -->
                        <div class="-ud-mx-4 lc jg">
                            @forelse ($images as $image)
                                <div class="yd vt/2 vv/3 rl">
                                    <div class="eb nh uh ni bj wr nj xr">
                                        <img src="{{asset($image->lokasi_file) }}" alt="image" class="yd" />
                                        <div class="wk hn bt eu _v">
                                            <h3>
                                                <a href="#" class="zn gs zq kb jc on tn lt ju pv ew 2xl:ud-text-[22px]">
                                                    {{ $image->judul_image }}
                                                </a>
                                            </h3>
                                            <p class="ib xn">
                                                {{ $image->deskripsi_image }}
                                            </p>
                                            <div style="display: flex; gap:10px;">
                                                <a href="{{ route('uji_kom.editImages', $image->id) }}" class="oq qq kc th ni qw wr ol fl un xo _q">
                                                    Edit
                                                </a>
                                                <form action="{{route('uji_kom.deleteImages', $image['id'])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="oq qq kc th ni qw wr ol fl un xo _q" onmouseover="this.style.backgroundColor='red'; this.style.color='white'" onmouseout="this.style.backgroundColor='white'; this.style.color='gray'">Delete</button>
                                                    
                                                </form>
                                                <a href="{{ route('uji_kom.messageImages', $image->id) }}" class="oq qq kc th ni qw wr ol fl un xo _q">
                                                    <svg class="hk" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.625 17.25C9.46875 17.25 9.3125 17.2187 9.1875 17.1562C3.0625 14.375 0.5625 11.6562 0.5625 7.78125C0.5625 3.90625 3.8125 0.75 7.8125 0.75H12.1875C16.1875 0.75 19.4688 3.90625 19.4688 7.78125C19.4688 11.6562 16.1875 14.8437 12.1875 14.8437H10.6875V16.1875C10.6875 16.5625 10.5 16.9062 10.1875 17.0937C10.0312 17.1875 9.8125 17.25 9.625 17.25ZM7.8125 2.15625C4.59375 2.15625 1.9375 4.6875 1.9375 7.78125C1.9375 10.9687 4 13.1875 9.28125 15.6562V14.5C9.28125 13.9062 9.78125 13.4062 10.375 13.4062H12.1875C15.4063 13.4062 18.0625 10.875 18.0625 7.78125C18.0625 4.6875 15.4375 2.15625 12.1875 2.15625H7.8125V2.15625Z" fill=""></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="like-dislike-container">
                                                <div class="icons-box">
                                                    <div class="icons">
                                                        <form action="{{ route('uji_kom.likeImages', $image['id']) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn-like" style="display:flex; align-items:center;">
                                                                <span class="like-text-content">{{$countLikeImages}}</span> 
                                                                <svg class="svgs" id="icon-like-solid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path>
                                                                </svg>
                                                                <svg class="svgs" id="icon-like-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                    <path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"></path>
                                                                </svg>
                                                                <div class="fireworks">
                                                                    <div class="checked-like-fx"></div>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            <h4 class="tn jn zn gs xb">
                                Image Not Found
                            </h4>
                            @endforelse
                        </div>
                        <!-- ====== Cards Section End -->
                    </div>

                    {{-- <div class="tk ti bj wr">
                        <h2 class="tn kn zn gs db">
                            HTML
                        </h2>
                        <pre>
                                <code class="language-markup">
                                    <xmp>
                                    <!-- ====== Cards Section Start -->
                                    <div class="-ud-mx-4 lc jg">
                                        <div class="yd vt/2 vv/3 rl">
                                        <div class="eb nh rh ni bj wr nj xr">
                                            <img
                                            src="../../../cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                                            alt="image"
                                            class="yd"
                                            />
                                            <div
                                            class="wk hn bt eu _v"
                                            >
                                            <h3>
                                                <a
                                                href="#"
                                                class="zn gs zq kb jc on tn lt ju pv ew 2xl:ud-text-[22px]"
                                                >
                                                50+ Best creative website themes & templates
                                                </a>
                                            </h3>
                                            <p class="ib xn">
                                                Lorem ipsum dolor sit amet pretium consectetur
                                                adipiscing elit. Lorem consectetur adipiscing elit.
                                            </p>
                                            <a
                                                href="#"
                                                class="oq qq kc th ni qw wr ol fl un xo _q"
                                            >
                                                View Details
                                            </a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="yd vt/2 vv/3 rl">
                                        <div class="eb nh rh ni bj wr nj xr">
                                            <img
                                            src="../../../cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
                                            alt="image"
                                            class="yd"
                                            />
                                            <div
                                            class="wk hn bt eu _v"
                                            >
                                            <h3>
                                                <a
                                                href="#"
                                                class="zn gs zq kb jc on tn lt ju pv ew 2xl:ud-text-[22px]"
                                                >
                                                The ultimate UX and UI guide to card design
                                                </a>
                                            </h3>
                                            <p class="ib xn">
                                                Lorem ipsum dolor sit amet pretium consectetur
                                                adipiscing elit. Lorem consectetur adipiscing elit.
                                            </p>
                                            <a
                                                href="#"
                                                class="oq qq kc th ni qw wr ol fl un xo _q"
                                            >
                                                View Details
                                            </a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="yd vt/2 vv/3 rl">
                                        <div class="eb nh rh ni bj wr nj xr">
                                            <img
                                            src="../../../cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
                                            alt="image"
                                            class="yd"
                                            />
                                            <div
                                            class="wk hn bt eu _v"
                                            >
                                            <h3>
                                                <a
                                                href="#"
                                                class="zn gs zq kb jc on tn lt ju pv ew 2xl:ud-text-[22px]"
                                                >
                                                Creative Card Component designs graphic elements
                                                </a>
                                            </h3>
                                            <p class="ib xn">
                                                Lorem ipsum dolor sit amet pretium consectetur
                                                adipiscing elit. Lorem consectetur adipiscing elit.
                                            </p>
                                            <a
                                                href="#"
                                                class="oq qq kc th ni qw wr ol fl un xo _q"
                                            >
                                                View Details
                                            </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- ====== Cards Section End -->
                                    </xmp>
                                </code>
                                </pre>
                    </div> --}}
                </div>


    </div>
    </main>
    <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="pc mg pg zd qc yh jw oj kw f ea fa oa" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'mc': scrollTop }">
        <svg class="nk ge cd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <!-- ====== Back To Top End ===== -->
    <script data-cfasync="false"
        src="{{ asset('assets/taildash/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/bundle_admin.js') }}"></script>
    
    
    
</body>

<!-- Mirrored from demo.tailgrids.com/templates/taildash/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jan 2024 01:26:43 GMT -->



</html>

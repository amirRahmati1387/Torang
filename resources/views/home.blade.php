<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ترنج</title>
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/style/app.css') }}">
</head>

<body class="overflow-x-hidden" id="body">
    <!-- login/signup -->
    <div class="flex justify-center items-center absolute w-screen h-screen bg-[#000000a7] duration-300 opacity-0 invisible z-100"
        id="login_menue_slider_1">
        <div class="duration-600 flex scale-20" id="login_menue_slider_2">
            <div class="w-130 bg-white flex flex-col px-10 py-10">
                <div class="flex items-center justify-center text-[#737370] text-xl">
                    <div class="w-1/2 cursor-pointer">
                        <p class="font-bold text-center">ورود</p>
                    </div>
                    <div class="w-1/2 cursor-pointer">
                        <p class="font-bold text-center">ثبت نام</p>
                    </div>
                </div>
                <form action="" class="w-full mt-10">
                    <label for="phoneNumber" class="text-[#737370] text-lg">شماره تماس:</label>
                    <input type="text" name="phoneNumber" placeholder="09123456789"
                        class="w-full my-3 p-3 border-[#737370b4] border-2 rounded-2xl" id="phoneNumber">
                    <label for="code" class="text-[#737370] text-lg">کد:</label>
                    <div class="flex items-center gap-3">
                        <input type="text" name="code" id="code"
                            class="w-full p-2 border-[#737370b4] border-2 rounded-2xl">
                        <button class="w-7/12 text-center p-2.5 rounded-2xl bg-[#f22568] text-white">دریافت کد</button>
                    </div>
                    <div class="w-full flex justify-between mt-3 text-[#737370]">
                        <div class="cursor-pointer hover:text-[#f22569c1]">فراموش کردن رمز </div>
                        <div class="cursor-pointer hover:text-[#f22569c1]">ورود با پسورد</div>
                    </div>
                    <button class="w-full text-center p-3 rounded-2xl bg-[#f22569c1] text-white mt-6">ورود</button>
                </form>
            </div>
            <div class="bg-[#fef4ea] flex flex-col items-center px-10 py-5">
                <!-- logo/close -->
                <div class="w-full flex justify-end">
                    <div class="w-5 cursor-pointer" onclick="loginANDsignup('close')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <line x1="4" y1="4" x2="16" y2="16" stroke="black" stroke-width="2"
                                stroke-linecap="round" />
                            <line x1="16" y1="4" x2="4" y2="16" stroke="black" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
                <div class="w-15 mt-5">
                    <svg fill="#f22569c1" height="100%" width="100%" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M352.924,278.296h-0.211c-5.771,0-10.449,4.678-10.449,10.449c0,5.771,4.678,10.449,10.449,10.449h0.211
			c5.771,0,10.449-4.678,10.449-10.449C363.373,282.974,358.695,278.296,352.924,278.296z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M343.515,121.375c-20.589-12.762-44.334-19.508-68.67-19.508c-5.771,0-10.449,4.678-10.449,10.449
			c0,5.771,4.678,10.449,10.449,10.449c20.442,0,40.38,5.661,57.66,16.372c1.714,1.063,3.616,1.569,5.495,1.569
			c3.496,0,6.913-1.754,8.89-4.944C349.931,130.857,348.42,124.416,343.515,121.375z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M371.427,150.572h-0.268c-0.007,0-0.014,0-0.021,0c-5.762,0-10.438,4.665-10.449,10.429
			c-0.012,5.771,4.658,10.457,10.429,10.469h0.268c0.007,0,0.014,0,0.021,0c5.761,0,10.438-4.665,10.449-10.429
			C381.867,155.27,377.198,150.583,371.427,150.572z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M256,280.225c-5.771,0-10.449,4.678-10.449,10.449v0.137c0,5.771,4.678,10.449,10.449,10.449
			c5.77,0,10.449-4.678,10.449-10.449v-0.137C266.449,284.903,261.771,280.225,256,280.225z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M115.424,293.454l-0.031-0.133c-1.334-5.614-6.968-9.083-12.582-7.751c-5.614,1.334-9.084,6.967-7.751,12.582l0.031,0.133
			c1.141,4.802,5.427,8.036,10.157,8.036c0.799,0,1.612-0.093,2.424-0.285C113.287,304.702,116.757,299.069,115.424,293.454z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M503.272,228.268c-0.525-0.088-1.046-0.12-1.564-0.129c-4.25-25.182-23.596-45.065-48.031-49.304
			c-28.068-71.766-93.016-122.304-168.263-132.872c1.912-4.129,2.986-8.722,2.986-13.564C288.4,14.535,273.866,0,256,0
			s-32.4,14.535-32.4,32.4c0,4.841,1.075,9.434,2.986,13.563c-75.269,10.57-140.225,61.129-168.284,132.925
			c-24.41,4.242-43.739,24.101-48.004,49.255c-0.52,0.008-1.045,0.041-1.572,0.129C3.691,229.114,0,233.475,0,238.583
			c0,1.248,0.223,2.467,0.643,3.607l90.301,262.757c1.45,4.22,5.42,7.053,9.882,7.053h310.349c4.462,0,8.431-2.833,9.882-7.053
			l90.244-262.59c0.457-1.184,0.7-2.457,0.7-3.761v-0.022C512,233.469,508.309,229.111,503.272,228.268z M256,20.898
			c6.343,0,11.502,5.16,11.502,11.502S262.343,43.903,256,43.903c-6.343,0-11.502-5.16-11.502-11.502S249.657,20.898,256,20.898z
			 M256,64.801c75.705,0,144.113,44.91,174.681,113.186L81.3,178.032C111.856,109.728,180.273,64.801,256,64.801z M160.476,491.102
			l-37.535-164.667c-1.283-5.626-6.878-9.147-12.511-7.865c-5.626,1.283-9.148,6.884-7.865,12.511l36.476,160.021h-30.76
			L30.637,265.17l13.651,9.399c1.871,1.673,4.33,2.66,6.966,2.66h0.147c2.635,0,5.094-0.987,6.965-2.66l33.834-23.293l35.027,24.118
			c3.568,2.458,8.283,2.458,11.851,0l26.61-18.321l26.673,234.029H160.476z M266.449,491.102V324.615
			c0-5.771-4.678-10.449-10.449-10.449c-5.771,0-10.449,4.678-10.449,10.449v166.487h-32.156l-26.314-230.88l22.045,15.179
			c3.197,2.201,7.35,2.434,10.788,0.629c0.518-0.273,1.007-0.585,1.464-0.933L256,251.261l35.027,24.118
			c3.569,2.458,8.283,2.458,11.851,0l22.041-15.174l-26.317,230.896H266.449z M403.717,491.102h-30.963L409.23,331.08
			c1.283-5.626-2.239-11.227-7.865-12.509c-5.628-1.28-11.227,2.24-12.511,7.866l-37.536,164.665h-31.683L346.31,257.06
			l25.429,17.509c1.871,1.673,4.33,2.66,6.966,2.66h0.147c2.635,0,5.094-0.987,6.965-2.66l33.834-23.293l35.027,24.118
			c3.569,2.458,8.283,2.458,11.851,0l14.827-10.209L403.717,491.102z M460.605,254.101l-35.027-24.118
			c-3.568-2.457-8.282-2.457-11.851,0l-34.948,24.061l-34.953-24.068c-3.568-2.457-8.282-2.457-11.851,0l-35.021,24.111
			l-35.027-24.118c-3.569-2.457-8.283-2.457-11.851,0l-35.043,24.126l-35.005-24.104c-3.569-2.457-8.283-2.457-11.851,0
			l-35.021,24.111l-35.027-24.118c-3.568-2.457-8.282-2.457-11.851,0L51.33,254.044l-21.072-14.509
			c0.026-0.304,0.046-0.61,0.046-0.921c0-21.88,16.94-39.682,37.764-39.682l375.87-0.047c20.822,0,37.763,17.801,37.763,39.682
			c0,0.331,0.02,0.657,0.049,0.98L460.605,254.101z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M408.987,285.571c-5.617-1.335-11.248,2.137-12.582,7.751l-0.031,0.133c-1.334,5.615,2.136,11.247,7.751,12.582
			c0.812,0.193,1.624,0.285,2.423,0.285c4.729,0,9.016-3.235,10.159-8.036l0.031-0.133
			C418.072,292.537,414.602,286.905,408.987,285.571z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="flex flex-col mt-3">
                    <p class="text-xl font-bold text-center">به دنیای شیرینی ها</p>
                    <p class="text-xl font-bold text-center">خوش آمدید!</p>
                </div>
                <div class="flex flex-col text-[#737370] text-sm items-center mt-3">
                    <p>برای ادامه شماره موبایل خود را وارد کنید </p>
                    <p>تا کد تایید برای شما ارسال شود</p>
                </div>
                <div class="w-43 mt-10">
                    <img src="{{ asset("assets/image/cakaaa.png") }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <header class="w-full">
        <!-- hamberger_menue_slider -->
        <div class="hamberger_menue_slider absolute w-screen h-screen bg-[#000000a7] duration-300 opacity-0 invisible z-100"
            id="hamberger_menue_slider_1">
            <div class="w-68 h-full bg-white translate-x-100 duration-600 flex flex-col py-3 overflow-y-auto"
                id="hamberger_menue_slider_2">
                <div class="w-11/12 mx-auto">
                    <!-- logo/close -->
                    <div class="w-full flex items-center justify-between">
                        <div class="w-28">
                            <img class="w-full" src="{{ asset('assets/image/logo.png') }}" alt="">
                        </div>
                        <div class="w-5 cursor-pointer" onclick="hambergerMenue('close')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <line x1="4" y1="4" x2="16" y2="16" stroke="black" stroke-width="2"
                                    stroke-linecap="round" />
                                <line x1="16" y1="4" x2="4" y2="16" stroke="black" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <!-- menu-bar -->
                    <div class="w-full flex flex-col mt-4 gap-3">
                        <!-- home -->
                        <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                            <div class="flex gap-5 items-center">
                                <div class="w-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                    </svg>
                                </div>
                                <a href="">صفحه اصلی</a>
                            </div>
                            <div class="w-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                </svg>
                            </div>
                        </div>

                        <!-- product -->
                        <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                            <div class="flex gap-5 items-center">
                                <div class="w-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"
                                        fill="none" stroke="#3a3a3a" stroke-width="1.4" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M 12 3 Q 12.5 1.8, 13.2 1.6" />
                                        <circle cx="12" cy="4.5" r="1.4" />
                                        <path
                                            d="M 12 6 Q 8.5 6, 7.5 8.5 Q 6 9, 6 10.5 L 18 10.5 Q 18 9, 16.5 8.5 Q 15.5 6, 12 6 Z" />
                                        <path d="M 5.5 10.5 L 18.5 10.5" />
                                        <path d="M 5.5 10.5 Q 5 12.5, 6 14.5 L 18 14.5 Q 19 12.5, 18.5 10.5" />
                                        <path d="M 6 14.5 L 7.5 21 L 16.5 21 L 18 14.5 Z" />
                                        <line x1="9" y1="14.5" x2="9.6" y2="21" />
                                        <line x1="12" y1="14.5" x2="12" y2="21" />
                                        <line x1="15" y1="14.5" x2="14.4" y2="21" />

                                    </svg>
                                </div>
                                <a href="">محصولات</a>
                            </div>
                            <div class="w-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                </svg>
                            </div>
                        </div>

                        <!-- about -->
                        <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                            <div class="flex gap-5 items-center">
                                <div class="w-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path
                                            d="M224 48a80 80 0 1 1 0 160 80 80 0 1 1 0-160zm0 208A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 96h91.4c65.7 0 120.1 48.7 129 112H49.3c8.9-63.3 63.3-112 129-112zm0-48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zm431 208c17 0 30.7-13.8 30.7-30.7C640 392.2 567.8 320 478.7 320H417.3c-4.4 0-8.8 .2-13.2 .5c46.4 38.6 75.9 96.7 75.9 161.8c0 10.8-2.8 20.9-7.6 29.7H609.3zM432 256c61.9 0 112-50.1 112-112s-50.1-112-112-112c-24.8 0-47.7 8.1-66.3 21.7C377.4 75.9 384 101.2 384 128c0 35.6-11.6 68.5-31.3 95.1C373 243.4 401 256 432 256z" />
                                    </svg>
                                </div>
                                <a href="">درباره ما</a>
                            </div>
                            <div class="w-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                </svg>
                            </div>
                        </div>

                        <!-- call -->
                        <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                            <div class="flex gap-5 items-center">
                                <div class="w-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M375.8 275.2c-16.4-7-35.4-2.4-46.7 11.4l-33.2 40.6c-46-26.7-84.4-65.1-111.1-111.1L225.3 183c13.8-11.3 18.5-30.3 11.4-46.7l-48-112C181.2 6.7 162.3-3.1 143.6 .9l-112 24C13.2 28.8 0 45.1 0 64v0C0 295.2 175.2 485.6 400.1 509.5c9.8 1 19.6 1.8 29.6 2.2c0 0 0 0 0 0c0 0 .1 0 .1 0c6.1 .2 12.1 .4 18.2 .4l0 0c18.9 0 35.2-13.2 39.1-31.6l24-112c4-18.7-5.8-37.6-23.4-45.1l-112-48zM441.5 464C225.8 460.5 51.5 286.2 48.1 70.5l99.2-21.3 43 100.4L154.4 179c-18.2 14.9-22.9 40.8-11.1 61.2c30.9 53.3 75.3 97.7 128.6 128.6c20.4 11.8 46.3 7.1 61.2-11.1l29.4-35.9 100.4 43L441.5 464zM48 64v0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0s0 0 0 0" />
                                    </svg>
                                </div>
                                <a href="">تماس با ما</a>
                            </div>
                            <div class="w-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                </svg>
                            </div>
                        </div>

                        <!-- baking -->
                        <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                            <div class="flex gap-5 items-center">
                                <div class="w-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M49.6 262C62.4 159.4 149.9 80 256 80s193.6 79.4 206.4 182c-9.4-3.9-19.6-6-30.4-6c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48c44.2 0 80-35.8 80-80V368 336 288C512 146.6 397.4 32 256 32S0 146.6 0 288v48 32 32c0 44.2 35.8 80 80 80c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48c-10.8 0-21 2.1-30.4 6zM48 336c0-17.7 14.3-32 32-32V432c-17.7 0-32-14.3-32-32V368 336zm416 0v32 32c0 17.7-14.3 32-32 32V304c17.7 0 32 14.3 32 32z" />
                                    </svg>
                                </div>
                                <a href="">پشتیبانی</a>
                            </div>
                            <div class="w-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path
                                        d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#edece8] w-full h-[1px] mt-2"></div>

                    <!-- categorys -->
                    <div class="w-full py-3 flex flex-col gap-3">
                        <!-- title -->
                        <p class="text-[#696866] text-md">دسته بندی ها</p>

                        <!-- category-title -->
                        <section>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="links flex items-center justify-between py-2 rounded-xl px-2">
                                <div class="flex gap-5 items-center">
                                    <div class="w-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path
                                                d="M272.5 5.7c9-7.6 22.1-7.6 31.1 0l264 224c10.1 8.6 11.4 23.7 2.8 33.8s-23.7 11.3-33.8 2.8L512 245.5V432c0 44.2-35.8 80-80 80H144c-44.2 0-80-35.8-80-80V245.5L39.5 266.3c-10.1 8.6-25.3 7.3-33.8-2.8s-7.3-25.3 2.8-33.8l264-224zM288 55.5L112 204.8V432c0 17.7 14.3 32 32 32h48V312c0-22.1 17.9-40 40-40H344c22.1 0 40 17.9 40 40V464h48c17.7 0 32-14.3 32-32V204.8L288 55.5zM240 464h96V320H240V464z" />
                                        </svg>
                                    </div>
                                    <a href="">صفحه اصلی</a>
                                </div>
                                <div class="w-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                                    </svg>
                                </div>
                            </div>
                        </section>

                        <!-- festival -->
                        <div class="w-full mt-5 cursor-pointer">
                            <a href="">
                                <img src="{{ asset("assets/image/festival.png") }}" alt="">
                            </a>
                        </div>
                        <!-- <div class="w-full bg-[#fdeae6] flex justify-between rounded-xl mt-5 p-2 py-5">
                            <div class="flex flex-col gap-2 text-xs">
                                <p>تخفیف های ویژه برای مناسبت های خاص</p>
                                <a href="" class="text-[#e7255f]">مشاهده پیشنهاد ها</a>
                            </div>
                            <div class="w-full">
                                <img src="{{ asset("assets/image/cace2.jpg") }}" alt="">
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!---->

        <!-- header -->
        <div class="w-10/12 mx-auto pt-3">
            <div class="w-full h-full flex justify-between items-center">
                <!-- logo -->
                <a href="">
                    <div class="flex items-center">
                        <div class="w-5 md:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                            </svg>
                        </div>
                        <div class="w-28 lg:w-35">
                            <img class="w-full" src="{{ asset('assets/image/logo.png') }}" alt="">
                        </div>
                    </div>
                </a>

                <!-- meno -->
                <section class="gap-6 text-lg hidden xl:flex xl:block">
                    <a class="duration-200 hover:text-[#f53169]" href="">خانه</a>
                    <a class="duration-200 hover:text-[#f53169]" href="">محصولات</a>
                    <a class="duration-200 hover:text-[#f53169]" href="">کیک ها</a>
                    <a class="duration-200 hover:text-[#f53169]" href="">درباره ما </a>
                    <a class="duration-200 hover:text-[#f53169]" href="">تماس با ما </a>
                </section>

                <!-- by -->
                <div class="flex items-center lg:gap-6 gap-4">
                    <!-- serch -->
                    <div
                        class="w-81 items-center justify-between rounded-full gap-10 px-3 py-2 bg-[#f6ede6] hidden md:flex md:block">
                        <input type="text" class="border-none w-full" placeholder="جست و جو ...">
                        <div class="w-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z" />
                            </svg>
                        </div>
                    </div>

                    <!-- user -->
                    <div class="w-4.5 cursor-pointer" onclick="loginANDsignup('open')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                        </svg>
                    </div>

                    <!-- shoppingCart -->
                    <div class="w-5 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                        </svg>
                    </div>

                    <!-- hamberger-menu -->
                    <div class="w-5 flex flex-col gap-1.5 cursor-pointer xl:hidden" onclick="hambergerMenue('open')">
                        <div class="w-full h-[2px] bg-black"></div>
                        <div class="w-full h-[2px] bg-black"></div>
                        <div class="w-full h-[2px] bg-black"></div>
                    </div>
                </div>
                </divc>
            </div>
        </div>

        <!-- hiro_mobile -->
        <div
            class="hiro_mobile w-full h-132 bg-cover bg-center bg-no-repeat relative bg-[url('{{ asset('assets/image/hiromobile.png') }}')] sm:hidden">
            <div
                class="hiro_mobile_title_fader w-full absolute mx-auto top-20 flex flex-col justify-center items-center gap-3">
                <!-- title -->
                <div class="hiro_mobile_title w-54 text-2xl font-bold">
                    <p>هرلحظه،یک دلیل برای
                    <p class="text-[#f73f7d]">شیرین تر شدن ...</p>
                    </p>
                </div>

                <!-- button -->
                <a href="">
                    <div class="w-46 bg-[#fa3071] text-white flex items-center gap-3 justify-center rounded-full p-1.5">
                        <div class="w-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </div>
                        <p>مشاهده محصولات</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- hiro_tablet -->
        <div
            class="hiro_tablet xl:hidden w-full h-100  bg-cover bg-center bg-no-repeat justify-end items-center bg-[url('{{ asset('assets/image/hiro2.png') }}')] hidden sm:block sm:flex">
            <div class="flex flex-col items-center ml-5 lg:ml-15 relative">
                <div class="flex gap-1 flex-col z-50 ">
                    <p class="font-bold text-3xl rounded-full">هر لحظه ،</p>
                    <p class="font-bold text-3xl">یک دلیل برای</p>
                    <p class="font-bold text-3xl text-[#fa2c6d]">شیرین تر شدن ...</p>
                </div>
                <div class="flex items-center gap-5 mt-2 z-50">
                    <a href="">
                        <div class="bg-white text-black border-black border-1 font-bold text-sm px-4 py-2 rounded-full">
                            سفارش کیک اختصاصی</div>
                    </a>
                    <a href="">
                        <div class="bg-[#fa2c6d] text-white text-sm px-4 py-2 font-bold rounded-full">مشاهده محصولات
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- hiro descktop -->
        <div class="hiro_descktop w-full h-123 justify-end hidden xl:block">
            <div class="hiro_descktop-div flex flex-col items-center left-0 top-[203px] ml-43 absolute">
                <div class="flex flex-col z-50 ">
                    <p class="font-bold text-[50px] rounded-full">هر لحظه ،</p>
                    <p class="font-bold text-[50px]">یک دلیل برای</p>
                    <p class="font-bold text-[50px] text-[#fa2c6d]">شیرین تر شدن ...</p>
                </div>
                <div class="flex items-center gap-5 mt-2 z-50">
                    <a href="">
                        <div class="bg-white text-black border-black border-1 font-bold px-6 py-3 rounded-full">
                            سفارش کیک اختصاصی</div>
                    </a>
                    <a href="">
                        <div class="bg-[#fa2c6d] text-white px-6 py-3 font-bold rounded-full">مشاهده محصولات
                        </div>
                    </a>
                </div>
            </div>
            <img src="{{ asset('assets/image/hiro-des.jpg') }}" class="w-full h-full object-cover relative">
        </div>
    </header>

    <main>
        <div class="w-10/12 mx-auto pt-3 mt-4">
            <!-- categorys -->
            <div class="category w-full lg:flex lg:overflow-x-auto lg:gap-3 lg:justify-between grid grid-cols-2 md:grid-cols-3 gap-3 "
                style="scrollbar-width:none;">
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
                <div
                    class="lg:min-w-55 md:max-w-75 min-w-30 py-3 bg-[#faece3] rounded-3xl flex flex-col items-center gap-1">
                    <!-- img -->
                    <div class="w-30 lg:40">
                        <img src="{{ asset('assets/image/deser.png') }}" alt="">
                    </div>

                    <!-- title -->
                    <p class="lg:text-lg text-xs">دسر</p>

                    <!-- link -->
                    <a href="" class="text-[#726255]">
                        <div class="flex items-center gap-3">
                            <div class="w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                                </svg>
                            </div>
                            <p class="text-xs lg:text-md">مشاهده همه</p>
                        </div>
                    </a>
                </div>
            </div>

            <div
                class="w-30 text-center mx-auto border-[#f13369] text-[#f13369] text-sm border-2 my-4 rounded-full p-2 lg:hidden">
                <a href="">
                    مشاهده همه
                </a>
            </div>

            <!-- best-selling_product-title -->
            <div class="w-full flex items-center justify-between mt-5">
                <!-- title -->
                <div class="flex flex-col items-center">
                    <!-- svg/title -->
                    <div class="flex items-center gap-2">
                        <div>
                            <svg class="lg:w-11 w-8 lg:h-11 h-8" viewBox="0 0 200 200"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Main Crown Body -->
                                <path d="M 40 150 
                                    L 30 70 
                                    L 70 100 
                                    L 100 50 
                                    L 130 100 
                                    L 170 70 
                                    L 160 150 
                                    Z" fill="#e91e63" stroke="#e91e63" stroke-width="5" stroke-linejoin="round" />
                                <circle cx="30" cy="70" r="10" fill="#e91e63" />
                                <circle cx="100" cy="40" r="10" fill="#e91e63" />
                                <circle cx="170" cy="70" r="10" fill="#e91e63" />
                                <circle cx="100" cy="115" r="12" fill="#ffffff" />
                            </svg>
                        </div>
                        <p class="lg:text-2xl font-bold">پرفروش ترین ها</p>
                    </div>

                    <!-- subtitle -->
                    <p class="text-[#9e9c9b] lg:text-xs text-[10px]">محبوب ترین شیرینی های این هفته</p>
                </div>

                <!-- lilnk -->
                <a href="" class="hidden xl:block">
                    <div class="flex items-center gap-2 ">
                        <p class="text-[#dc4767]">مشاهده همه</p>
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="#dc4767"
                                    d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <!-- best-selling_product -->
            <div
                class="best-selling_product justify-center overflow-x-auto flex w-full gap-5 lg:grid lg:grid-cols-3 xl:flex lg:p-2 p-4 my-5">
                <div
                    class="min-w-60 lg:min-w-[260px] lg:max-w-[260px] xl:min-w-[295px] xl:max-w-[295px] lg:min-w-75 lg:max-w-75 flex flex-col gap-3 shadow-[0_0_10px_rgba(0,0,0,0.2)] bg-white rounded-xl overflow-hidden pb-5">
                    <!-- img -->
                    <div class="w-full h-40">
                        <img class="w-full h-full object-cover" src="{{ asset('assets/image/g1.png') }}" alt="">
                    </div>

                    <div class="flex flex-col items-center justify-center gap-3 mx-auto w-10/12">
                        <!-- title/star/price -->
                        <div class="w-full flex flex-col justify-start gap-3">
                            <!-- title -->
                            <p class="text-md font-bold ">کیک میوه ای</p>
                            <!-- advantage -->
                            <div class="flex gap-1 items-center">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="flex items-center gap-1 font-bold">
                                <p>100000</p>
                                <p class="text-[#f03b6e] ">تومان</p>
                            </div>
                        </div>

                        <!-- by -->
                        <div class="bg-[#f03b6e] flex gap-2 items-center p-2 px-7 rounded-full text-white">
                            <p class="text-sm">افزودن به سبد خرید</p>
                            <div class="w-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="white"
                                        d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-60 lg:min-w-[260px] lg:max-w-[260px] xl:min-w-[295px] xl:max-w-[295px] lg:min-w-75 lg:max-w-75 flex flex-col gap-3 shadow-[0_0_10px_rgba(0,0,0,0.2)] bg-white rounded-xl overflow-hidden pb-5">
                    <!-- img -->
                    <div class="w-full h-40">
                        <img class="w-full h-full object-cover" src="{{ asset('assets/image/g1.png') }}" alt="">
                    </div>

                    <div class="flex flex-col items-center justify-center gap-3 mx-auto w-10/12">
                        <!-- title/star/price -->
                        <div class="w-full flex flex-col justify-start gap-3">
                            <!-- title -->
                            <p class="text-md font-bold ">کیک میوه ای</p>
                            <!-- advantage -->
                            <div class="flex gap-1 items-center">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="flex items-center gap-1 font-bold">
                                <p>100000</p>
                                <p class="text-[#f03b6e] ">تومان</p>
                            </div>
                        </div>

                        <!-- by -->
                        <div class="bg-[#f03b6e] flex gap-2 items-center p-2 px-7 rounded-full text-white">
                            <p class="text-sm">افزودن به سبد خرید</p>
                            <div class="w-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="white"
                                        d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-60 lg:min-w-[260px] lg:max-w-[260px] xl:min-w-[295px] xl:max-w-[295px] lg:min-w-75 lg:max-w-75 flex flex-col gap-3 shadow-[0_0_10px_rgba(0,0,0,0.2)] bg-white rounded-xl overflow-hidden pb-5">
                    <!-- img -->
                    <div class="w-full h-40">
                        <img class="w-full h-full object-cover" src="{{ asset('assets/image/g1.png') }}" alt="">
                    </div>

                    <div class="flex flex-col items-center justify-center gap-3 mx-auto w-10/12">
                        <!-- title/star/price -->
                        <div class="w-full flex flex-col justify-start gap-3">
                            <!-- title -->
                            <p class="text-md font-bold ">کیک میوه ای</p>
                            <!-- advantage -->
                            <div class="flex gap-1 items-center">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="flex items-center gap-1 font-bold">
                                <p>100000</p>
                                <p class="text-[#f03b6e] ">تومان</p>
                            </div>
                        </div>

                        <!-- by -->
                        <div class="bg-[#f03b6e] flex gap-2 items-center p-2 px-7 rounded-full text-white">
                            <p class="text-sm">افزودن به سبد خرید</p>
                            <div class="w-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="white"
                                        d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-60 lg:min-w-[260px] lg:max-w-[260px] xl:min-w-[295px] xl:max-w-[295px] lg:min-w-75 lg:max-w-75 flex flex-col gap-3 shadow-[0_0_10px_rgba(0,0,0,0.2)] bg-white rounded-xl overflow-hidden pb-5">
                    <!-- img -->
                    <div class="w-full h-40">
                        <img class="w-full h-full object-cover" src="{{ asset('assets/image/g1.png') }}" alt="">
                    </div>

                    <div class="flex flex-col items-center justify-center gap-3 mx-auto w-10/12">
                        <!-- title/star/price -->
                        <div class="w-full flex flex-col justify-start gap-3">
                            <!-- title -->
                            <p class="text-md font-bold ">کیک میوه ای</p>
                            <!-- advantage -->
                            <div class="flex gap-1 items-center">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="flex items-center gap-1 font-bold">
                                <p>100000</p>
                                <p class="text-[#f03b6e] ">تومان</p>
                            </div>
                        </div>

                        <!-- by -->
                        <div class="bg-[#f03b6e] flex gap-2 items-center p-2 px-7 rounded-full text-white">
                            <p class="text-sm">افزودن به سبد خرید</p>
                            <div class="w-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="white"
                                        d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="min-w-60 lg:min-w-[260px] lg:max-w-[260px] xl:min-w-[295px] xl:max-w-[295px] lg:min-w-75 lg:max-w-75 flex flex-col gap-3 shadow-[0_0_10px_rgba(0,0,0,0.2)] bg-white rounded-xl overflow-hidden pb-5">
                    <!-- img -->
                    <div class="w-full h-40">
                        <img class="w-full h-full object-cover" src="{{ asset('assets/image/g1.png') }}" alt="">
                    </div>

                    <div class="flex flex-col items-center justify-center gap-3 mx-auto w-10/12">
                        <!-- title/star/price -->
                        <div class="w-full flex flex-col justify-start gap-3">
                            <!-- title -->
                            <p class="text-md font-bold ">کیک میوه ای</p>
                            <!-- advantage -->
                            <div class="flex gap-1 items-center">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- price -->
                            <div class="flex items-center gap-1 font-bold">
                                <p>100000</p>
                                <p class="text-[#f03b6e] ">تومان</p>
                            </div>
                        </div>

                        <!-- by -->
                        <div class="bg-[#f03b6e] flex gap-2 items-center p-2 px-7 rounded-full text-white">
                            <p class="text-sm">افزودن به سبد خرید</p>
                            <div class="w-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="white"
                                        d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32h-411C111 12.8 91.6 0 69.5 0H24zM131.1 80H520.7L482.4 222.2c-2.8 10.5-12.3 17.8-23.2 17.8H161.6L131.1 80zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- baner -->
            <div
                class=" mx-auto md:max-w-160 md:min-w-160 w-full bg-[#faf3ed] rounded-xl flex items-center justify-between p-4 md:hidden my-5">
                <div class="flex items-center gap-2 border-[#f13369] text-xs p-3 border-1 rounded-2xl text-[#f13369]">
                    <div class="w-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#f13369"
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </div>
                    <p><a href="">سفارش اختصاصی</a></p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 48 48" fill="none"
                        stroke="#f13369" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Cake Base -->
                        <rect x="8" y="38" width="32" height="4" rx="1" />

                        <!-- Cake Body with Drip -->
                        <path d="M9 22 H39 V38 H9 V22 Z" />
                        <path
                            d="M9 26 C11 26 11 30 13 30 C15 30 15 26 17 26 H21 V30 C23 30 23 34 25 34 C27 34 27 30 29 30 H33 V26 C35 26 35 30 37 30 C38 30 39 29 39 28" />

                        <!-- Cake Top Rim -->
                        <rect x="8" y="18" width="32" height="4" rx="1" />

                        <!-- Left Candle -->
                        <rect x="14" y="12" width="4" height="6" rx="0.5" />
                        <path d="M16 12 V10" />
                        <path d="M16 7 C17.5 8 17.5 9.5 16 10.5 C14.5 9.5 14.5 8 16 7 Z" />

                        <!-- Middle Candle -->
                        <rect x="22" y="9" width="4" height="9" rx="0.5" />
                        <path d="M24 9 V7" />
                        <path d="M24 3 C26 4.5 26 6.5 24 8 C22 6.5 22 4.5 24 3 Z" />

                        <!-- Right Candle -->
                        <rect x="30" y="12" width="4" height="6" rx="0.5" />
                        <path d="M32 12 V10" />
                        <path d="M32 7 C33.5 8 33.5 9.5 32 10.5 C30.5 9.5 30.5 8 32 7 Z" />

                        <!-- Sparkles -->
                        <path d="M11 8 L13 8 M12 7 L12 9" />
                        <path d="M35 6 L37 6 M36 5 L36 7" />
                        <path d="M8 17 L10 17 M9 16 L9 18" />
                        <path d="M38 18 L40 18 M39 17 L39 19" />

                        <!-- Dots -->
                        <circle cx="18" cy="4" r="1" fill="#f13369" stroke="none" />
                        <circle cx="39" cy="11" r="1" fill="#f13369" stroke="none" />
                    </svg>
                </div>
                <div class="flex flex-col gap-1 w-38">
                    <p class="text-black text-sm">سفارش سازی کیک</p>
                    <p class="text-[#9d988f] text-xs">کیک مورد علاقتون رو با سلیقه خودتون سفارش بدید</p>
                </div>
            </div>

            <!-- banner2 -->
            <div class="hidden md:block">

            </div>

            <!-- value Propsition -->
            <div
                class="w-full bg-[#faf3ed] rounded-xl grid grid-cols-2 gap-3 lg:flex justify-center items-center lg:py-10 p-5">
                <div class="w-full flex justify-center items-center gap-3">
                    <div class="lg:w-9 w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#f93171"
                                d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center gap-1">
                        <p class="font-bold lg:text-lg">قلبی ترنج</p>
                        <p class="text-xs text-[#83817c]">حس خوب در هر موقع</p>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center gap-3">
                    <div>
                        <svg class="lg:w-10 w-8" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background secondary leaf shape -->
                            <path d="M13 8C7 8 4 12 4 18C4 24 7 28 13 28C13 20 16 13 22 9C19 8 16 8 13 8Z"
                                fill="#A5D6A7" opacity="0.6" />

                            <!-- Main leaf shape -->
                            <path d="M34 6C34 6 22 6 15 13C8 20 8 32 8 32C8 32 20 32 27 25C34 18 34 6 34 6Z"
                                fill="#4CAF50" />

                            <!-- Central stem and veins -->
                            <path d="M9 31C12 24 18 16 32 8" stroke="#E8F5E9" stroke-width="2.5"
                                stroke-linecap="round" />

                            <!-- Small secondary vein -->
                            <path d="M20 19L25 15" stroke="#E8F5E9" stroke-width="2" stroke-linecap="round" />

                            <!-- Small detail dot/vein -->
                            <circle cx="23" cy="21" r="1.5" fill="#E8F5E9" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center gap-1">
                        <p class="font-bold lg:text-lg">مواد اولیه تازه</p>
                        <p class="text-xs text-[#83817c]">بدون مواد نگه دارنده</p>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center gap-3">
                    <div>
                        <svg class="lg:w-10 w-7" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Main Body Shape -->
                            <path d="M8 14H32V31C32 33.5 30.5 35 28 35H12C9.5 35 8 33.5 8 31V14Z" stroke="#4A4548"
                                stroke-width="2.5" stroke-linejoin="round" />

                            <!-- Top Flap/Lid Shape -->
                            <rect x="6" y="7" width="28" height="7.5" rx="3.5" stroke="#4A4548" stroke-width="2.5" />

                            <!-- Inner Diamond Shape -->
                            <path d="M20 18L26 24L20 30L14 24L20 18Z" stroke="#4A4548" stroke-width="2.2"
                                stroke-linejoin="round" />

                            <!-- Small Pink Detail on the left of the flap -->
                            <path d="M12 10C14 9.5 16 9.8 17 10.5" stroke="#D98A9A" stroke-width="2.2"
                                stroke-linecap="round" />

                            <!-- Small Dot on the right of the flap -->
                            <circle cx="27" cy="10.5" r="1.2" fill="#4A4548" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center gap-1">
                        <p class="font-bold lg:text-lg">پخت روزانه </p>
                        <p class="text-xs text-[#83817c]">با تازه ترین مواد</p>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center gap-3">
                    <div>
                        <svg class="lg:w-10 w-8" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Main Truck Body Outline -->
                            <path d="M8 29V11C8 9.5 9 9 10 9H23C24.5 9 25.5 10 25.5 11.5V28" stroke="#4A4548"
                                stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />

                            <!-- Truck Cab Outline -->
                            <path d="M25.5 16H29C30 16 30.5 16.5 31 17.5L33 21.5C33.3 22.2 33.5 22.8 33.5 23.5V28"
                                stroke="#4A4548" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />

                            <!-- Bottom Chassis Line -->
                            <path d="M8 28H12.5" stroke="#4A4548" stroke-width="2.5" stroke-linecap="round" />
                            <path d="M18 28H25.5" stroke="#4A4548" stroke-width="2.5" stroke-linecap="round" />
                            <path d="M32.5 28H33.5" stroke="#4A4548" stroke-width="2.5" stroke-linecap="round" />

                            <!-- Front Wheel (Pink Accent) -->
                            <circle cx="15" cy="29" r="4" stroke="#B84E6E" stroke-width="2.5" />

                            <!-- Rear Wheel (Pink Accent) -->
                            <circle cx="29" cy="29" r="4" stroke="#B84E6E" stroke-width="2.5" />

                            <!-- Cargo Detail (Pink Envelope/Box) -->
                            <path
                                d="M5 19.5C5 18 6.5 16.5 8 16.5H14C15.5 16.5 17 18 17 19.5C17 21 15.5 22.5 14 22.5H8C6.5 22.5 5 21 5 19.5Z"
                                stroke="#B84E6E" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11 16.5V22.5" stroke="#B84E6E" stroke-width="2" stroke-linecap="round" />

                            <!-- Cab Window Detail (Pink Accent) -->
                            <path d="M26.5 18H29.5L31.5 22H26.5V18Z" stroke="#B84E6E" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M27 20.5H30.5" stroke="#B84E6E" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="flex flex-col justify-center gap-1">
                        <p class="font-bold lg:text-lg">ارسال سریع</p>
                        <p class="text-xs text-[#83817c]">در کمترین زمان</p>
                    </div>
                </div>
            </div>

            <!-- galery_product_title -->
            <div class="w-full flex items-center justify-between mt-5">
                <!-- title -->
                <div class="flex flex-col gap-2 items-center">
                    <!-- svg/title -->
                    <div class="flex items-center gap-3">
                        <div class="lg:w-8 w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#fd2b6e"
                                    d="M199.1 32c-24.1 0-45.5 15.4-53.1 38.3l22.8 7.6-22.8-7.6L137.4 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H374.6l-8.6-25.7C358.4 47.4 337 32 312.9 32H199.1zm-7.6 53.5c1.1-3.3 4.1-5.5 7.6-5.5H312.9c3.4 0 6.5 2.2 7.6 5.5l14 42.1c3.3 9.8 12.4 16.4 22.8 16.4H448c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V160c0-8.8 7.2-16 16-16h90.7c10.3 0 19.5-6.6 22.8-16.4l14-42.1zM256 400a112 112 0 1 0 0-224 112 112 0 1 0 0 224zM192 288a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" />
                            </svg>
                        </div>
                        <p class="lg:text-2xl font-bold">گالری ترنج</p>
                    </div>

                    <!-- subtitle -->
                    <p class="text-[#9e9c9b] lg:text-xs text-[10px]">نگاهی به لحظه های خوشمزه ما</p>
                </div>

                <!-- lilnk -->
                <a href="" class="hidden xl:block">
                    <div class="flex items-center gap-2 ">
                        <p class="text-[#dc4767]">مشاهده همه</p>
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="#dc4767"
                                    d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <!-- galery_product -->
            <div class="w-full grid grid-cols-2 sm:grid-cols-4 md:flex justify-center items-center gap-3 mt-3">
                <div class="flex justify-center items-center rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/image/g6.png') }}">
                </div>
                <div class="flex justify-center items-center rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/image/g6.png') }}">
                </div>
                <div class="flex justify-center items-center rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/image/g6.png') }}">
                </div>
                <div class="flex justify-center items-center rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/image/g6.png') }}">
                </div>
                <div class="flex justify-center items-center rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/image/g6.png') }}">
                </div>
            </div>

            <div
                class="w-30 text-center mx-auto border-[#f13369] text-[#f13369] text-sm border-2 my-4 rounded-full p-2 lg:hidden">
                <a href="">
                    مشاهده همه
                </a>
            </div>

            <!-- about -->
            <div
                class="w-full flex flex-col gap-3 lg:flex-row justify-between items-center bg-[#fceae6] rounded-2xl mt-10">
                <div class="w-full rounded-xl overflow-hidden lg:hidden">
                    <img src="{{ asset('assets/image/file_0000000023e08211a0c547da771b9140.png') }}" alt="">
                </div>
                <div class="w-full lg:w-118 flex flex-col justify-center items-center p-5 gap-5">
                    <p class="text-2xl font-bold lg:self-start text-center lg:text-start">داستان ترنج</p>
                    <p class="text-center text-sm">ترنج در سال 1387 با عشق شیرینی پزی و با هدف ارائه محصولات با
                        کیفیت و
                        سالم به کار کرد . امروزه با بیش از 59 نوع محصول یکی از محبوب ترین برند های شیرینی پزی در
                        بناب
                        تبدیل شده</p>
                    <a href="" class="w-35 text-center bg-[#583b35] text-white p-2 px-3 rounded-full">بیشتر
                        بدانید</a>
                </div>
                <div class="w-250 rounded-xl overflow-hidden hidden lg:block">
                    <img src="{{ asset('assets/image/file_0000000023e08211a0c547da771b9140.png') }}" alt="">
                </div>
            </div>

            <div class="w-full flex items-center justify-between mt-5 mb-5">
                <!-- title -->
                <div class="flex flex-col gap-2 items-center">
                    <!-- svg/title -->
                    <div class="flex items-center gap-3">
                        <div class="lg:w-8 w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48">
                                <!-- Chat bubble outline -->
                                <path
                                    d="M23.5 10.5 C14.5 10.5 7.5 16.5 7.5 24 C7.5 27.5 9 30.5 11.5 33 L9.5 40 L15.5 37.5 C18 38.5 20.5 39 23.5 39 C32.5 39 39.5 33 39.5 25.5 C39.5 17.5 32.5 10.5 23.5 10.5 Z"
                                    fill="none" stroke="#333333" stroke-width="2.8" stroke-linejoin="round"
                                    stroke-linecap="round" />

                                <!-- Small dot inside bubble -->
                                <circle cx="16" cy="25" r="1.5" fill="#D94A63" />

                                <!-- Heart shape -->
                                <path
                                    d="M30 13 C27 13 25 15.5 25 18.5 C25 23 30.5 27 30 27 C29.5 27 35 23 35 18.5 C35 15.5 33 13 30 13 Z"
                                    fill="#E8365D" />

                                <!-- Curved line above heart -->
                                <path d="M27 11 C28.5 8 33 7.5 35.5 9.5" fill="none" stroke="#E8365D" stroke-width="2.2"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                        <p class="lg:text-2xl font-bold">نظرات
                        <p class="lg:text-2xl font-bold text-[#f03b6e]">مشتری ها</p>
                        </p>
                    </div>

                    <!-- subtitle -->
                    <p class="text-[#9e9c9b] lg:text-xs text-[10px]">خوشحالیم نظراتتون رو با ما به اشتراک میزارید
                    </p>
                </div>

                <!-- lilnk -->
                <a href="" class="hidden xl:block">
                    <div class="flex items-center gap-2 ">
                        <p class="text-[#dc4767]">مشاهده همه</p>
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="#dc4767"
                                    d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>

            <!-- comments -->
            <div
                class="w-full overflow-x-auto bg-gradient-to-r from-[#fcedea] to-[white] p-2 flex gap-2 justify-between items-center rounded-2xl py-10">
                <div class="p-2 px-3 rounded-full bg-white shadow-[0_0_10px_rgba(0,0,0,0.2)] hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512">
                        <path
                            d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                    </svg>
                </div>
                <div class="flex gap-5">
                    <div
                        class="w-75 lg:w-100 text-center flex flex-col gap-20 bg-white rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.2)] py-5 px-5 h-80 overflow-hidden">
                        <div class="flex mt-5 justify-end items-center gap-4">
                            <div class="flex flex-col items-center gap-1">
                                <p class="font-bold text-sm">سارا محمدی</p>
                                <div class="flex gap-1 items-center">
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-13 overflow-hidden rounded-full">
                                <img src="http://localhost/Torang/public/assets/image/user.jpg" alt="">
                            </div>
                        </div>
                        <p class="text-start">کیفیت عالی ، بسته بندی تمیز و ارسال خیلی سریع بود. واقعا از خریدم راضی
                            ام.
                        </p>
                    </div>
                    <div
                        class="w-75 lg:w-100 text-center flex flex-col gap-20 bg-white rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.2)] py-5 px-5 h-80 overflow-hidden">
                        <div class="flex mt-5 justify-end items-center gap-4">
                            <div class="flex flex-col items-center gap-1">
                                <p class="font-bold text-sm">سارا محمدی</p>
                                <div class="flex gap-1 items-center">
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-13 overflow-hidden rounded-full">
                                <img src="http://localhost/Torang/public/assets/image/user.jpg" alt="">
                            </div>
                        </div>
                        <p class="text-start">کیک شکلاتی فوق العاده بود طمعش دقیفا همونی بود که می خواستم ممنون!
                        </p>
                    </div>
                    <div
                        class="w-75 lg:w-100 text-center flex flex-col gap-20 bg-white rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.2)] py-5 px-5 h-80 overflow-hidden">
                        <div class="flex mt-5 justify-end items-center gap-4">
                            <div class="flex flex-col items-center gap-1">
                                <p class="font-bold text-sm">سارا محمدی</p>
                                <div class="flex gap-1 items-center">
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="w-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="gold"
                                                d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-13 overflow-hidden rounded-full">
                                <img src="http://localhost/Torang/public/assets/image/user.jpg" alt="">
                            </div>
                        </div>
                        <p class="text-start">طمع کیک ها فوق العاده ست همه چیز تازه و با کیفیت بود. حتما دوباره
                            سفارش
                            میدم
                        </p>
                    </div>
                </div>
                <div class="p-2 px-3 rounded-full bg-white shadow-[0_0_10px_rgba(0,0,0,0.2)] hidden lg:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512">
                        <path
                            d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                    </svg>
                </div>
            </div>

            {{--
            <!-- comments -->
            <div class="w-full md:flex my-7 gap-4">
                <div
                    class="w-full lg:min-w-[468px] flex md:flex-col lg:flex-row md:justify-center md:gap-5 justify-between bg-gradient-to-r from-[#fcedea] to-[white] rounded-xl">
                    <div class="flex gap-3 items-center">
                        <div class="w-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#f73969"
                                    d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <p class="lg:text-xl font-bold text-sm">نظرات مشتریان</p>
                            <p class="text-[#9e9c9b] text-xs">آنچه مشتریان میگویند</p>
                        </div>
                    </div>
                    <div class="lg:w-77 w-70 md:w-60">
                        <img src="{{ asset('assets/image/comment.png') }}" alt="">
                    </div>
                </div>
                <div class="w-full flex lg:flex-row flex-col items-center justify-between mt-5">
                    <div class="p-2 px-3 rounded-full bg-white shadow-[0_0_10px_rgba(0,0,0,0.2)] hidden lg:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512">
                            <path
                                d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                        </svg>
                    </div>
                    <div class="flex items-center gap-10">
                        <div
                            class="flex px-10 flex-col bg-white rounded-xl shadow-[0_0_10px_rgba(0,0,0,0.2)] p-4 gap-6">
                            <div class="flex gap-1 items-center">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path fill="gold"
                                            d="M310.9 16.7C307.7 6.8 298.5 0 288 0s-19.7 6.8-22.9 16.7L214.5 176H56c-10.3 0-19.4 6.5-22.7 16.2s-.1 20.4 8 26.7L172.1 320.7 121.1 480.7c-3.2 10 .5 21 9.1 27s20.2 5.7 28.5-.7L288 406.4 417.3 506.9c8.3 6.5 19.8 6.8 28.5 .7s12.3-16.9 9.1-27L403.9 320.7 534.7 218.9c8.1-6.3 11.3-17 8-26.7s-12.4-16.2-22.7-16.2H361.5L310.9 16.7z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600">
                                کیک تولد عالی بود هم ظاهرش زیبا بود هم طعمش بینظیر
                            </p>
                            <div class="flex items-center self-end gap-4">
                                <div class="flex flex-col items-center">
                                    <p class="font-bold text-sm">سارا محمدی</p>
                                    <p class="text-xs text-gray-600">تهران</p>
                                </div>
                                <div class="w-13 overflow-hidden rounded-full">
                                    <img src="{{ asset(" assets/image/user.jpg") }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 px-3 rounded-full bg-white shadow-[0_0_10px_rgba(0,0,0,0.2)] hidden lg:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512">
                            <path
                                d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                        </svg>
                    </div>
                    <div class="flex gap-3 items-center mt-3 lg:hidden">
                        <div class="p-2 px-3 rounded-full bg-white shadow-[0_0_10px_rgba(0,0,0,0.2)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512">
                                <path
                                    d="M273 239c9.4 9.4 9.4 24.6 0 33.9L113 433c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l143-143L79 113c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L273 239z" />
                            </svg>
                        </div>
                        <div class="p-2 px-3 rounded-full bg-white shadow-[0_0_10px_rgba(0,0,0,0.2)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 320 512">
                                <path
                                    d="M47 239c-9.4 9.4-9.4 24.6 0 33.9L207 433c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97.9 256 241 113c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L47 239z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </main>

    <footer class="bg-[#261712] w-full mt-5">
        <div class="w-10/12 mx-auto py-3">
            <div class="w-full md:flex lg:flex lg:items-center justify-between gap-3 py-10 grid grid-cols-2">
                <div class="flex flex-col items-center gap-3 hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-17 md:h-17" viewBox="0 0 100 100">
                        <!-- Cupcake Liner and Frosting (White Lines, Transparent Background) -->
                        <g fill="none" stroke="#FFFFFF" stroke-width="5" stroke-linecap="round" stroke-linejoin="round">
                            <!-- Liner Outline -->
                            <path d="M 22,55 L 78,55 L 72,88 L 28,88 Z" />

                            <!-- Liner Vertical Stripes -->
                            <path d="M 33,61 L 31,82" />
                            <path d="M 42,61 L 41,82" />
                            <path d="M 50,61 L 50,82" />
                            <path d="M 58,61 L 59,82" />
                            <path d="M 67,61 L 69,82" />

                            <!-- Frosting Base Outline & Wavy Bottom -->
                            <path
                                d="M 18,55 C 18,40 25,28 40,25 C 45,24 48,16 52,14 C 56,12 58,18 55,23 C 55,23 65,22 72,30 C 78,38 82,45 82,55" />

                            <!-- Wavy line separating frosting and liner -->
                            <path
                                d="M 18,55 Q 23,61 28,55 Q 33,61 38,55 Q 43,61 48,55 Q 53,61 58,55 Q 63,61 68,55 Q 73,61 78,55 Q 80,58 82,55" />

                            <!-- Frosting Swirl Details -->
                            <path d="M 28,42 C 45,42 60,38 72,45" />
                            <path d="M 52,14 C 48,20 55,25 60,25" />
                            <path d="M 45,25 C 50,28 52,32 52,38" />

                            <!-- Sprinkles -->
                            <path d="M 32,34 L 35,31" />
                            <path d="M 38,38 L 42,35" />
                            <path d="M 55,30 L 58,32" />
                            <path d="M 63,32 L 66,30" />
                            <path d="M 62,38 L 66,36" />
                            <path d="M 48,32 L 51,33" />
                        </g>
                    </svg>
                    <p class="text-2xl font-bold text-white">ترنج</p>
                    <p class="text-sm text-white hidden md:block">طعم خوشبختی</p>
                </div>
                <div class="flex flex-col md:grid justify-center gap-3">
                    <p class="text-gl font-bold text-white">لینک های مفید</p>
                    <a href="" class="text-xs text-white">صفحه اصلی</a>
                    <a href="" class="text-xs text-white">محصولات</a>
                    <a href="" class="text-xs text-white">کیک ها</a>
                    <a href="" class="text-xs text-white">درباره ما</a>
                    <a href="" class="text-xs text-white">تماس با ما</a>
                </div>
                <div class="flex flex-col gap-3 justify-center">
                    <div class="flex items-center gap-3">
                        <div class="w-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#f72e67"
                                    d="M0 32L144 0l80 144-83.8 67c36.1 68.4 92.3 124.6 160.8 160.8L368 288l144 80L480 512H448C200.6 512 0 311.4 0 64L0 32z" />
                            </svg>
                        </div>
                        <p class="font-bold text-lg text-white">تماس با ما</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="white"
                                    d="M0 32L144 0l80 144-83.8 67c36.1 68.4 92.3 124.6 160.8 160.8L368 288l144 80L480 512H448C200.6 512 0 311.4 0 64L0 32z" />
                            </svg>
                        </div>
                        <p class="font-bold text-xs text-white">09123456789</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="white"
                                    d="M192 512s192-208 192-320C384 86 298 0 192 0S0 86 0 192C0 304 192 512 192 512zm0-384a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                        </div>
                        <p class="font-bold text-xs text-white">بناب ، خیابان طالقانی ، روبروی افق کوروش</p>
                    </div>
                    <div class="flex flex-col justify-center gap-3">
                        <div class="flex items-center gap-3">
                            <div class="w-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="white"
                                        d="M256 0H224V32 96v32h64V96 66.7C378.8 81.9 448 160.9 448 256c0 106-86 192-192 192S64 362 64 256c0-53.7 22-102.3 57.6-137.1L76.8 73.1C29.5 119.6 0 184.4 0 256C0 397.4 114.6 512 256 512s256-114.6 256-256S397.4 0 256 0zM193 159l-17-17L142.1 176l17 17 80 80 17 17L289.9 256l-17-17-80-80z" />
                                </svg>
                            </div>
                            <p class="font-bold text-xs text-white">ساعت کاری از 8 صبح تا 10 شب</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <!-- telegram -->
                            <div class="border-white border-1 rounded-full p-1">
                                <div class="w-4">
                                    <svg fill="white" class="w-full" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- instagram -->
                            <div class="border-white border-1 rounded-full p-1 px-1.5">
                                <div class="w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="white"
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6 justify-center hidden lg:block">
                    <div class="flex items-center gap-3">
                        <div class="flex flex-col gap-1 justify-center">
                            <p class="text-white text-lg font-bold">عضویت در خبر نامه</p>
                            <p class="text-white text-xs font-bold">با عضویت در خبر نامه از تخفیف ها و محصولات جدید
                                ما
                                با خبر باشید</p>
                        </div>
                        <div class="w-16">
                            <svg fill="white" class="w-full" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full flex bg-white justify-between"
                        style="border-bottom-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
                        <input type="text" placeholder="ایمیل خود را وارد کنید.." class="p-3">
                        <p class="text-white bg-[#f33e6b] p-3 px-8"
                            style="border-bottom-right-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
                            عضویت</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:items-center gap-6 justify-center lg:hidden">
                <div class="flex items-center gap-3">
                    <div class="flex flex-col gap-1 justify-center">
                        <p class="text-white text-lg font-bold">عضویت در خبر نامه</p>
                        <p class="text-white text-xs font-bold">با عضویت در خبر نامه از تخفیف ها و محصولات جدید ما
                            با خبر باشید</p>
                    </div>
                    <div class="w-10">
                        <svg fill="white" class="w-full" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m20.665 3.717-17.73 6.837c-1.21.486-1.203 1.161-.222 1.462l4.552 1.42 10.532-6.645c.498-.303.953-.14.579.192l-8.533 7.701h-.002l.002.001-.314 4.692c.46 0 .663-.211.921-.46l2.211-2.15 4.599 3.397c.848.467 1.457.227 1.668-.785l3.019-14.228c.309-1.239-.473-1.8-1.282-1.434z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full sm:w-78 flex bg-white justify-between"
                    style="border-bottom-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
                    <input type="text" placeholder="ایمیل خود را وارد کنید.." class="p-2">
                    <p class="text-white bg-[#f33e6b] p-2 px-3 md:p-3 md:px-8"
                        style="border-bottom-right-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
                        عضویت
                    </p>
                </div>
                <!-- <div class="w-full flex bg-white justify-between"
                    style="border-bottom-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
                    <input type="text" placeholder="ایمیل خود را وارد کنید.." class="p-3">
                    <p class="text-white bg-[#f33e6b] p-3 px-8"
                        style="border-bottom-right-radius: 15px; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">
                        عضویت</p>
                </div> -->
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
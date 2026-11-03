<?php 
$ids = [];
?>
<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="relative">
    <div class="w-full flex flex-row relative z-999">
        <div class="hidden lg:block lg:w-[265px] bg-[#0D0E12] fixed z-50 right-0 top-0 h-dvh px-3 text-sm">
            <div class="w-full">
                <a href=""
                    class="block w-full py-3 text-center font-bold text-3xl text-white border-b border-[darkslategray]">
                    bersogold.ir
                </a>
            </div>
            <div class="py-5 h-[90%] overflow-y-auto flex flex-col gap-5" style="scrollbar-width: none;">
                <div class="flex flex-row items-center gap-2.5 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 576 512">
                        <path fill="white"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    <a href="{{ route("home") }}" class="block w-full text-white py-1" target="_blank">
                        صفحه اول
                    </a>
                </div>

                <div
                    class="flex flex-row items-center gap-2.5 rounded-sm px-2 @if (Route::is('dashboard')) bg-gray-700 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                        <path fill="white"
                            d="M256 464c7.4 0 27-7.2 47.6-48.4c8.8-17.7 16.4-39.2 22-63.6H186.4c5.6 24.4 13.2 45.9 22 63.6C229 456.8 248.6 464 256 464zM178.5 304h155c1.6-15.3 2.5-31.4 2.5-48s-.9-32.7-2.5-48h-155c-1.6 15.3-2.5 31.4-2.5 48s.9 32.7 2.5 48zm7.9-144H325.6c-5.6-24.4-13.2-45.9-22-63.6C283 55.2 263.4 48 256 48s-27 7.2-47.6 48.4c-8.8 17.7-16.4 39.2-22 63.6zm195.3 48c1.5 15.5 2.2 31.6 2.2 48s-.8 32.5-2.2 48h76.7c3.6-15.4 5.6-31.5 5.6-48s-1.9-32.6-5.6-48H381.8zm58.8-48c-21.4-41.1-56.1-74.1-98.4-93.4c14.1 25.6 25.3 57.5 32.6 93.4h65.9zm-303.3 0c7.3-35.9 18.5-67.7 32.6-93.4c-42.3 19.3-77 52.3-98.4 93.4h65.9zM53.6 208c-3.6 15.4-5.6 31.5-5.6 48s1.9 32.6 5.6 48h76.7c-1.5-15.5-2.2-31.6-2.2-48s.8-32.5 2.2-48H53.6zM342.1 445.4c42.3-19.3 77-52.3 98.4-93.4H374.7c-7.3 35.9-18.5 67.7-32.6 93.4zm-172.2 0c-14.1-25.6-25.3-57.5-32.6-93.4H71.4c21.4 41.1 56.1 74.1 98.4 93.4zM256 512A256 256 0 1 1 256 0a256 256 0 1 1 0 512z" />
                    </svg>
                    <a href="" class="block w-full text-white py-1">
                        داشبورد
                    </a>
                </div>

                <!-- users -->
                <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('aboutUs.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('aboutUs.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">کاربران</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 640 512">
                                <path fill="white"
                                    d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('aboutUs.create_edit') || Route::is('aboutUs.list')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutUs.create_edit')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">لیست کاربران</a>
                        </li>

                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutUs.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">ایجاد کاربر</a>
                        </li>

                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutUs.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">لیست مدیران</a>
                        </li>
                    </ul>
                </div>

                @can("admin_panel")
                    
                
                @endcan

                @can('admin_panel')
                    <div class="dashboard">
                        <div
                            class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('generalQrCodes.*')) bg-gray-700 @endif">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="size-4 transition-all duration-200 @if (Route::is('generalQrCodes.*')) rotate-180 @endif"
                                viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class=" text-[white] flex justify-end font-bold">دسته بندی</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                                    <path fill="white"
                                        d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                                </svg>
                            </div>
                        </div>
                        <ul
                            class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('generalQrCodes.create') || Route::is('generalQrCodes.list')) max-h-[500px] @else max-h-0 @endif">
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('generalQrCodes.create')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('Category.create') }}" class="text-white py-1 block">
                                    ایجاد دسته بندی جدید </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('generalQrCodes.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('Category.index') }}" class="text-white py-1 block">
                                    لیست دسته بندی های من
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dashboard">
                        <div
                            class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('generalQrCodes.*')) bg-gray-700 @endif">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="size-4 transition-all duration-200 @if (Route::is('generalQrCodes.*')) rotate-180 @endif"
                                viewBox="0 0 448 512">
                                <path fill="white"
                                    d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                            </svg>
                            <div class="flex flex-row-reverse items-center gap-2">
                                <span class=" text-[white] flex justify-end font-bold">محصولات</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 448 512">
                                    <path fill="white"
                                        d="M0 80C0 53.5 21.5 32 48 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80zM64 96v64h64V96H64zM0 336c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V336zm64 16v64h64V352H64zM304 32h96c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H304c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48zm80 64H320v64h64V96zM256 304c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16v96c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16v64c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V304zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                                </svg>
                            </div>
                        </div>
                        <ul
                            class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('generalQrCodes.create') || Route::is('generalQrCodes.list')) max-h-[500px] @else max-h-0 @endif">
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('generalQrCodes.create')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('Product.create') }}" class="text-white py-1 block">
                                    ایجاد محصول جدید </a>
                            </li>
                            <li
                                class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('generalQrCodes.list')) bg-gray-700 @endif">
                                <span class="size-1 bg-white rounded-sm"></span>
                                <a href="{{ route('Product.index') }}" class="text-white py-1 block">
                                    لیست محصولات های من
                                </a>
                            </li>
                        </ul>
                    </div>
                @endcan

                <!-- سفارش ها -->
                <div class="dashboard">
                    <div
                        class="flex justify-between flex-row-reverse cursor-pointer px-2 rounded-sm py-1.5 @if (Route::is('aboutUs.*')) bg-gray-700 @endif">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4 transition-all duration-200 @if (Route::is('aboutUs.*')) rotate-180 @endif"
                            viewBox="0 0 448 512">
                            <path fill="white"
                                d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z" />
                        </svg>
                        <div class="flex flex-row-reverse items-center gap-2">
                            <span class=" text-[white] flex justify-end font-bold">سفارشات</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 640 512">
                                <path fill="white"
                                    d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                            </svg>
                        </div>
                    </div>
                    <ul
                        class="my-1 pr-3 transition-all duration-500 overflow-hidden @if (Route::is('aboutUs.create_edit') || Route::is('aboutUs.list')) max-h-[500px] @else max-h-0 @endif">
                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutUs.create_edit')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">سفارشات ادمین</a>
                        </li>

                        <li
                            class="flex flex-row items-center gap-2.5 mt-2.5 mb-2.5 pr-5 rounded-sm @if (Route::is('aboutUs.list')) bg-gray-700 @endif">
                            <span class="size-1 bg-white rounded-sm"></span>
                            <a href="" class="text-white py-1 block">لیست سفارش ها</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full relative">
        <div class="w-full h-dvh lg:w-[calc(100%-265px)] pb-24 float-end pt-20 lg:px-5 overflow-y-auto px-3 relative bg-[#F2F2F2] z-9"
            style="scrollbar-width:none;">
            @yield("content")
        </div>
    </div>
    <script>
        // let menuBlockliet = document.getElementById('menuBlockliet')
        let menuList = document.getElementById('menuList')
        function hamburgerMenu(state) {
            if (state == "open") {
                menuBlock.classList.remove('invisible')
                menuBlock.classList.remove('opacity-0')
                menuList.classList.remove('translate-x-full')
                menuBlockliet.children[0].classList.add('-translate-x-[30px]')
                menuBlockliet.children[0].classList.add('opacity-0')
                menuBlockliet.children[1].classList.add('translate-x-[30px]')
                menuBlockliet.children[1].classList.add('opacity-0')
                menuBlockliet.children[2].classList.add('-translate-x-[30px]')
                menuBlockliet.children[2].classList.add('opacity-0')
            }
            if (state == "close") {
                console.log("asgfk.asjhgfkgsf")
                menuBlock.classList.add('invisible')
                menuBlock.classList.add('opacity-0')
                menuList.classList.add('translate-x-full')
                menuBlockliet.children[0].classList.remove('-translate-x-[30px]')
                menuBlockliet.children[0].classList.remove('opacity-0')
                menuBlockliet.children[1].classList.remove('translate-x-[30px]')
                menuBlockliet.children[1].classList.remove('opacity-0')
                menuBlockliet.children[2].classList.remove('-translate-x-[30px]')
                menuBlockliet.children[2].classList.remove('opacity-0')
            }
        }

        // let menus = document.querySelectorAll('.dashboard')
        // menus.forEach((element)=>{
        //     element.children[0].addEventListener('click', ()=>{
        //         menus.forEach((item)=>{
        //             item.children[1].classList.remove('max-h-[500px]')
        //             item.children[1].classList.add('max-h-0')
        //         })
        //         element.children[1].classList.remove('max-h-0');
        //         element.children[1].classList.add('max-h-[500px]');
        //     })
        // })
        let dashboards = document.querySelectorAll(".dashboard")
        dashboards.forEach(dashboard => {
            dashboard.children[0].addEventListener('click', () => {
                if (dashboard.children[1].classList.contains('max-h-0')) {
                    dashboards.forEach((item) => {
                        item.children[1].classList.remove('max-h-[500px]')
                        item.children[1].classList.add('max-h-0')
                        item.children[0].children[0].classList.remove('rotate-180')
                        item.children[0].children[0].classList.add('rotate-0')
                    })
                    dashboard.children[1].classList.remove('max-h-0')
                    dashboard.children[1].classList.add('max-h-[500px]')
                    dashboard.children[0].children[0].classList.remove('rotate-0')
                    dashboard.children[0].children[0].classList.add('rotate-180')
                } else {
                    dashboard.children[1].classList.remove('max-h-[500px]')
                    dashboard.children[1].classList.add('max-h-0')
                    dashboard.children[0].children[0].classList.remove('rotate-180')
                    dashboard.children[0].children[0].classList.add('rotate-0')
                }
            })
        })


        let parentFields = document.querySelectorAll('.parentFields')
        parentFields.forEach((parentField) => {
            parentField.addEventListener('click', () => {
                if (parentField.nextElementSibling.classList.contains('max-h-0')) {
                    parentFields.forEach(row => {
                        row.nextElementSibling.classList.remove('max-h-[1000px]')
                        row.children[1].classList.remove('rotate-180')
                        row.nextElementSibling.classList.add('max-h-0')
                    })
                    parentField.nextElementSibling.classList.remove('max-h-0')
                    parentField.nextElementSibling.classList.add('max-h-[1000px]')
                    parentField.children[1].classList.add('rotate-180')
                } else {
                    parentField.nextElementSibling.classList.remove('max-h-[1000px]')
                    parentField.children[1].classList.remove('rotate-180')
                    parentField.nextElementSibling.classList.add('max-h-0')
                }
            })
        })

        // search popup

        let searchP = document.getElementById('searchP')
        let searchSection = document.getElementById('searchSection')

        function searchPopup(state) {
            if (state == 'open') {
                searchP.classList
                    .remove('invisible')
                searchP.classList.remove('opacity-0')
                searchSection.classList.remove('-translate-y-full')
            }
            if (state == 'close') {
                searchP.classList.add('invisible')
                searchP.classList.add('opacity-0')
                searchSection.classList.add('-translate-y-full')
            }
        }
    </script>
    {{--
    <script src="{{ asset('assets/js/ecomm_product_create.js') }}"></script> --}}

    {{--
    <script src="{{ asset('assets/js/userPanel.js') }}"></script> --}}
</body>

</html>
@extends('dashbord')
@section("content")


    <!-- <div id="basket_buy" class="w-[200px] h-[50px] bg-green-500 ">
            </div>
            <div id="order" class="hiddeen w-[100px] h-[50px] justify-center items-center bg-blue-500 cursor-pointer">
                <span>سفارش</span>
            </div>
            <div class="w-full h-dvh bg-black/40 hidden"></div>
            <div class="w-[500px] h-[200px] bg-white hidden"></div>
            <div class="container-fluid px-4 py-4 " dir="rtl">
                <div class=" w-[100px] h-[100px] bg-red-500">
                    <span>افزودن به سبد خرید</span>
                    <div class="w-full items-center justify-center  gap-4 hidden">
                        <span class="cursor-pointer" onclick="update(5 , '+')">+</span>
                        <span id="count_shop">1</span>
                        <span class="cursor-pointer" onclick="update(5 , '-')">-</span>
                    </div>
                </div>
                <div class="w-[150px] h-[80px] bg-blue-500 hidden" id="buy">
                    ثلت سفارش
                </div> -->


    <!-- هدر ساده و مینیمال -->
    <div class="flex flex-row justify-between items-center mb-4">
        <div>
            <h4 class="text-gray-800 font-bold text-lg">لیست محصولات</h4>
            <p class="text-gray-500 text-sm mt-1">مدیریت و مشاهده تمام محصولات فروشگاه</p>
        </div>
        <a href="{{ route('Product.create') }}"
            class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 transition-colors text-sm">
            <i class="fa fa-plus ml-1"></i>
            محصول جدید
        </a>
    </div>
    <!-- کارت اصلی با حاشیه ساده -->
    <div class="bg-white border border-gray-200 rounded">
        <!-- جدول بدون حاشیه‌های اضافی -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">ردیف</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">تصویر</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">عنوان</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">قیمت</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">تخفیف</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">قیمت نهایی</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">دسته‌بندی</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">نمایش</th>
                        <th class="text-center py-3 px-4 text-gray-600 font-medium text-sm">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $index => $product)
                        @php
                            $mainImage = $medias->where('product_id', $product->id)->where('is_main', 1)->first();
                            $productCategories = $proCats->where('product_id', $product->id);
                            $categoriesNames = [];
                            foreach ($productCategories as $proCat) {
                                $category = $categories->where('id', $proCat->category_id)->first();
                                if ($category) {
                                    $categoriesNames[] = $category->title;
                                }
                            }
                            $finalPrice = (int) $product->price - ((int) $product->price * (int) $product->discount / 100);
                        @endphp
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <!-- آیدی -->
                            <td class="text-center py-3 px-4">
                                <span class="text-sm text-gray-600">{{ $index + 1 }}</span>
                            </td>
                            <!--  -->

                            <!-- تصویر -->
                            <td class="text-center py-3 px-4">
                                @if($mainImage)
                                    <div class="w-10 h-10 mx-auto border border-gray-200">
                                        <img src="{{ asset('storage/' . $mainImage->path) }}" alt="{{ $product->title }}"
                                            class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div
                                        class="w-10 h-10 mx-auto border border-gray-200 bg-gray-50 flex items-center justify-center">
                                        <i class="fa fa-image text-gray-400"></i>
                                    </div>
                                @endif
                            </td>
                            <!--  -->

                            <!-- عنوان -->
                            <td class="py-3 px-4">
                                <span class="text-sm text-gray-800">{{ $product->title }}</span>
                            </td>
                            <!--  -->

                            <!-- قیمت -->
                            <td class="text-center py-3 px-4">
                                <span class="text-sm text-gray-600">{{ number_format($product->price) }}</span>
                                <span class="text-xs text-gray-400 block">تومان</span>
                            </td>
                            <!--  -->

                            <!-- تخفیف -->
                            <td class="text-center py-3 px-4">
                                @if($product->discount > 0)
                                    <span class="inline-block px-2 py-0.5 bg-orange-500 text-white text-xs">
                                        {{ $product->discount }}%
                                    </span>
                                @else
                                    <span class="text-xs text-gray-400">—</span>
                                @endif
                            </td>
                            <!--  -->

                            <!-- قیمت نهایی -->
                            <td class="text-center py-3 px-4">
                                <span class="text-sm text-orange-600">{{ number_format($finalPrice) }}</span>
                                <span class="text-xs text-gray-400 block">تومان</span>
                            </td>
                            <!--  -->

                            <!-- دسته بندی ها -->
                            <td class="py-3 px-4">
                                @if(!empty($categoriesNames))
                                    <div class="flex flex-wrap gap-1 justify-center">
                                        @foreach(array_slice($categoriesNames, 0, 2) as $catName)
                                            <span class="px-2 py-0.5 bg-gray-100 text-gray-600 text-xs">
                                                {{ $catName }}
                                            </span>
                                        @endforeach
                                        @if(count($categoriesNames) > 2)
                                            <span class="px-2 py-0.5 bg-gray-200 text-gray-600 text-xs">
                                                +{{ count($categoriesNames) - 2 }}
                                            </span>
                                        @endif
                                    </div>
                                @else
                                    <div class="flex flex-wrap gap-1 justify-center">
                                        <span class="px-2 py-0.5 bg-gray-100 text-gray-600 text-xs">ندارد</span>
                                    </div>
                                @endif
                            </td>
                            <!--  -->

                            <!-- فعال بودن -->
                            <td class="text-center py-3 px-4">
                                @if($product->show_home == 1)
                                    <span class="inline-block px-2 py-0.5 bg-green-100 text-green-700 text-xs">
                                        فعال
                                    </span>
                                @else
                                    <span class="inline-block px-2 py-0.5 bg-gray-100 text-gray-500 text-xs">
                                        غیرفعال
                                    </span>
                                @endif
                            </td>
                            <!--  -->

                            <!-- عملیات -->
                            <td class="text-center py-3 px-4">
                                <div class="flex justify-center gap-3">
                                    <a href="{{ route('Product.single', ["product" => $product->id]) }}"
                                        class="text-blue-500 hover:text-blue-700 transition-colors text-base" title="مشاهده">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('Product.edite', ["product" => $product->id]) }}"
                                        class="text-orange-500 hover:text-orange-700 transition-colors text-base"
                                        title="ویرایش">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('Product.delete', ["product" => $product->id]) }}"
                                        class="text-red-500 hover:text-red-700 transition-colors text-base" title="حذف"
                                        onclick="return confirm('آیا از حذف این محصول اطمینان دارید؟')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                            <!--  -->
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center py-8 px-4">
                                <div class="flex flex-col items-center">
                                    <div
                                        class="w-16 h-16 border-2 border-gray-200 bg-gray-50 flex items-center justify-center mb-3">
                                        <i class="fa fa-box-open text-gray-400 text-2xl"></i>
                                    </div>
                                    <h6 class="text-gray-700 font-medium mb-1">هیچ محصولی یافت نشد</h6>
                                    <p class="text-gray-400 text-sm mb-3">اولین محصول خود را ایجاد کنید</p>
                                    <a href="{{ route('Product.create') }}"
                                        class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 transition-colors text-sm">
                                        <i class="fa fa-plus ml-1"></i>
                                        ایجاد محصول جدید
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
    </div>

    <!-- فونت‌آسوم -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* تنظیمات RTL برای فاصله‌ها */
        .ml-1 {
            margin-left: 0 !important;
            margin-right: 0.25rem;
        }

        /* استایل اسکرول ساده برای جدول */
        .overflow-x-auto {
            scrollbar-width: thin;
            scrollbar-color: #d1d5db #f3f4f6;
        }

        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f3f4f6;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #d1d5db;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #9ca3af;
        }

        /* حذف تمام rounded‌ها */
        * {
            border-radius: 0 !important;
        }

        /* استثنا برای آیکون‌ها */
        .fa {
            border-radius: 0 !important;
        }

        /* فاصله بیشتر بین آیکون‌ها */
        .gap-3 {
            gap: 1rem;
        }
    </style>
@endsection
@extends("Dashbord")
@section("content")
    <div class="container mx-auto mt-8 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                {{-- هدر --}}
                <div class="bg-gradient-to-r from-[#FF6B8A] to-[#FF8A9E] px-6 py-5">
                    <h3 class="text-2xl font-bold text-white flex items-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        ویرایش محصول
                    </h3>
                </div>
                <div class="p-6">
                    <form action="{{ route("Product.update") }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        {{-- ردیف اول: عنوان و قیمت --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="title" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    عنوان محصول <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="title" id="title" 
                                       class="w-full rounded-xl border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition duration-200 px-4 py-2.5" 
                                       value="{{ $product->title }}" required>
                            </div>
                            <div>
                                <label for="price" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    قیمت (تومان) <span class="text-red-500">*</span>
                                </label>
                                <input type="number" name="price" id="price" 
                                       class="w-full rounded-xl border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition duration-200 px-4 py-2.5" 
                                       value="{{ $product->price }}" required>
                            </div>
                        </div>

                        {{-- ردیف دوم: تخفیف و برند --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="discount" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    درصد تخفیف
                                </label>
                                <input type="number" name="discount" id="discount" 
                                       class="w-full rounded-xl border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition duration-200 px-4 py-2.5" 
                                       value="{{ $product->discount }}" min="0" max="100">
                            </div>

                            {{-- ==================== بخش برند ==================== --}}
                            <div>
                                <label for="brand_id" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    برند محصول
                                </label>
                                <select name="brand_id" id="brand_id" 
                                        class="w-full rounded-xl border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition duration-200 px-4 py-2.5">
                                    <option value="">-- انتخاب برند --</option>
                                    @if(isset($brands) && count($brands) > 0)
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                                {{ $brand->title }}
                                            </option>
                                        @endforeach
                                    @else
                                        <option value="" disabled>هیچ برندی یافت نشد</option>
                                    @endif
                                </select>
                                <small class="text-gray-400 text-xs mt-1 block">برای افزودن برند جدید به بخش مدیریت برندها مراجعه کنید.</small>
                            </div>
                            {{-- ==================== پایان بخش برند ==================== --}}
                        </div>

                        {{-- ردیف سوم: عدم نمایش در صفحه اصلی --}}
                        <div class="flex items-center gap-3">
                            <input type="checkbox" name="not_show_home" id="not_show_home" 
                                   class="h-5 w-5 rounded border-gray-300 text-[#FF6B8A] focus:ring-[#FF6B8A] focus:ring-opacity-20" 
                                   value="1" {{ $product->show_home ? 'checked' : '' }}>
                            <label for="not_show_home" class="text-sm font-medium text-gray-700 cursor-pointer">
                                عدم نمایش در صفحه اصلی
                            </label>
                        </div>

                        {{-- خلاصه توضیحات --}}
                        <div>
                            <label for="summary" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                خلاصه توضیحات
                            </label>
                            <textarea name="summary" id="summary" rows="3" 
                                      class="w-full rounded-xl border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition duration-200 px-4 py-2.5 resize-none">{{ $product->summary }}</textarea>
                        </div>

                        {{-- توضیحات کامل --}}
                        <div>
                            <label for="description" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                توضیحات کامل
                            </label>
                            <textarea name="description" id="description" rows="5" 
                                      class="w-full rounded-xl border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition duration-200 px-4 py-2.5 resize-none">{{ $product->description }}</textarea>
                        </div>

                        <hr class="border-gray-200">

                        {{-- ==================== بخش تصاویر ==================== --}}
                        <div>
                            <h5 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-[#FF6B8A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                تصاویر محصول
                            </h5>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                {{-- تصویر اصلی --}}
                                <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        تصویر اصلی فعلی
                                    </label>
                                    @if($mainImage)
                                        <div class="mb-3">
                                            <img src="{{ asset('storage/' . $mainImage->path) }}" 
                                                 alt="تصویر اصلی" 
                                                 class="rounded-lg shadow-md max-h-48 object-cover border border-gray-200">
                                            <div class="mt-2">
                                                <label class="inline-flex items-center gap-2 cursor-pointer text-sm text-red-500 hover:text-red-600 transition">
                                                    <input type="checkbox" name="remove_main_image" value="1" class="rounded border-gray-300 text-red-500 focus:ring-red-400">
                                                    حذف تصویر اصلی
                                                </label>
                                            </div>
                                        </div>
                                    @else
                                        <p class="text-gray-400 text-sm">تصویر اصلی وجود ندارد</p>
                                    @endif

                                    <label for="mainImage" class="block text-sm font-semibold text-gray-700 mt-3 mb-1.5">
                                        تصویر اصلی جدید
                                    </label>
                                    <input type="file" name="mainImage" id="mainImage" 
                                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#FF6B8A] file:text-white hover:file:bg-[#e55a7a] transition cursor-pointer" 
                                           accept="image/*">
                                </div>

                                {{-- گالری تصاویر --}}
                                <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                                        گالری تصاویر فعلی
                                    </label>
                                    @if($gallery->count() > 0)
                                        <div class="grid grid-cols-2 gap-3 mb-3">
                                            @foreach($gallery as $image)
                                                <div class="relative group">
                                                    <img src="{{ asset('storage/' . $image->path) }}" 
                                                         alt="گالری" 
                                                         class="w-full h-24 object-cover rounded-lg border border-gray-200 shadow-sm">
                                                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition rounded-lg flex items-center justify-center">
                                                        <label class="text-white text-xs bg-red-500 bg-opacity-80 px-2 py-1 rounded-full opacity-0 group-hover:opacity-100 transition cursor-pointer">
                                                            <input type="checkbox" name="remove_gallery[]" value="{{ $image->id }}" class="hidden">
                                                            ✕ حذف
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-gray-400 text-sm">تصویر گالری وجود ندارد</p>
                                    @endif

                                    <label for="gallery" class="block text-sm font-semibold text-gray-700 mt-3 mb-1.5">
                                        افزودن تصاویر جدید به گالری
                                    </label>
                                    <input type="file" name="gallery[]" id="gallery" 
                                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#FF6B8A] file:text-white hover:file:bg-[#e55a7a] transition cursor-pointer" 
                                           accept="image/*" multiple>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-200">

                        {{-- ==================== بخش ویژگی‌ها ==================== --}}
                        <div>
                            <h5 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-[#FF6B8A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                </svg>
                                ویژگی‌های محصول
                            </h5>

                            <div id="attributes-container" class="space-y-3">
                                @foreach($attributes as $index => $attribute)
                                <div class="attribute-row grid grid-cols-1 sm:grid-cols-12 gap-3 items-center bg-gray-50 rounded-xl p-3 border border-gray-200">
                                    <div class="sm:col-span-5">
                                        <input type="text" name="attribute_keys[]" 
                                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition px-3 py-2 text-sm" 
                                               placeholder="عنوان ویژگی" value="{{ $attribute->key }}" required>
                                    </div>
                                    <div class="sm:col-span-5">
                                        <input type="text" name="attribute_units[]" 
                                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition px-3 py-2 text-sm" 
                                               placeholder="مقدار ویژگی" value="{{ $attribute->value }}" required>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <button type="button" class="remove-attribute w-full sm:w-auto px-4 py-2 bg-red-100 text-red-600 hover:bg-red-200 rounded-lg text-sm font-medium transition flex items-center justify-center gap-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            حذف
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <button type="button" id="add-attribute" 
                                    class="mt-3 inline-flex items-center gap-2 px-5 py-2.5 bg-[#FF6B8A] hover:bg-[#e55a7a] text-white rounded-xl text-sm font-medium transition shadow-sm hover:shadow-md">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                افزودن ویژگی جدید
                            </button>
                        </div>

                        <hr class="border-gray-200">

                        {{-- ==================== بخش دسته‌بندی ==================== --}}
                        <div>
                            <h5 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-[#FF6B8A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                                دسته‌بندی
                            </h5>

                            <div class="space-y-4">
                                @foreach ($categories as $category)
                                <div class="border border-gray-200 rounded-xl p-4 bg-[#FFF0F5]">
                                    <label class="flex items-center gap-3 cursor-pointer">
                                        <input type="checkbox" name="categories[]" value="{{$category->id}}" id="category_{{ $category->id }}" 
                                               {{ in_array($category->id, $productCategories) ? 'checked' : '' }} 
                                               class="h-5 w-5 rounded border-gray-300 text-[#FF6B8A] focus:ring-[#FF6B8A] focus:ring-opacity-20">
                                        <span class="font-medium text-gray-800">{{$category->title}}</span>
                                    </label>
                                    <div class="mt-3 pr-6 space-y-3">
                                        @foreach($category->grandchild as $child)
                                        <div class="border border-gray-200 rounded-lg p-3 bg-white">
                                            <label class="flex items-center gap-3 cursor-pointer">
                                                <input type="checkbox" name="categories[]" value="{{$child->id}}" 
                                                       class="h-4 w-4 rounded border-gray-300 text-[#FF6B8A] focus:ring-[#FF6B8A] focus:ring-opacity-20">
                                                <span class="text-gray-700">{{$child->title}}</span>
                                            </label>
                                            <div class="mt-2 pr-6 space-y-2">
                                                @foreach($child->grandchild as $grand)
                                                <div class="border border-gray-200 rounded-lg p-2 bg-[#F8F8FF]">
                                                    <label class="flex items-center gap-3 cursor-pointer">
                                                        <input type="checkbox" name="categories[]" value="{{$grand->id}}" 
                                                               class="h-3 w-4 rounded border-gray-300 text-[#FF6B8A] focus:ring-[#FF6B8A] focus:ring-opacity-20">
                                                        <span class="text-gray-700 text-sm">{{$grand->title}}</span>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <hr class="border-gray-200">

                        {{-- دکمه‌ها --}}
                        <div class="flex flex-col sm:flex-row justify-between gap-3 pt-2">
                            <a href="{{ route('Product.index') }}" 
                               class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-xl text-sm font-medium transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                بازگشت
                            </a>
                            <button type="submit" 
                                    class="inline-flex items-center justify-center gap-2 px-8 py-2.5 bg-[#FF6B8A] hover:bg-[#e55a7a] text-white rounded-xl text-sm font-medium transition shadow-sm hover:shadow-md">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                                بروزرسانی محصول
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ==================== اسکریپت ویژگی‌ها ==================== --}}
    <script>
        document.getElementById('add-attribute').addEventListener('click', function() {
            const container = document.getElementById('attributes-container');
            const newRow = document.createElement('div');
            newRow.className = 'attribute-row grid grid-cols-1 sm:grid-cols-12 gap-3 items-center bg-gray-50 rounded-xl p-3 border border-gray-200';
            newRow.innerHTML = `
                <div class="sm:col-span-5">
                    <input type="text" name="attribute_keys[]" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition px-3 py-2 text-sm" placeholder="عنوان ویژگی" required>
                </div>
                <div class="sm:col-span-5">
                    <input type="text" name="attribute_units[]" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-[#FF6B8A] focus:ring focus:ring-[#FF6B8A] focus:ring-opacity-20 transition px-3 py-2 text-sm" placeholder="مقدار ویژگی" required>
                </div>
                <div class="sm:col-span-2">
                    <button type="button" class="remove-attribute w-full sm:w-auto px-4 py-2 bg-red-100 text-red-600 hover:bg-red-200 rounded-lg text-sm font-medium transition flex items-center justify-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                        حذف
                    </button>
                </div>
            `;
            container.appendChild(newRow);
        });

        document.addEventListener('click', function(e) {
            if(e.target.classList.contains('remove-attribute') || e.target.closest('.remove-attribute')) {
                const btn = e.target.classList.contains('remove-attribute') ? e.target : e.target.closest('.remove-attribute');
                btn.closest('.attribute-row').remove();
            }
        });
    </script>
@endsection
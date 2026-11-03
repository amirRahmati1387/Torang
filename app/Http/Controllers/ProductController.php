<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\Media;
// use App\Models\cart;
use App\Models\Attribute;
// use App\Models\province_city;
use App\Models\product_category;
// use App\Models\Brands;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function text_city()
    {
        $city = province_city::where('parent', 0)->get();
        // dd($city[0]->children);
    }
    public function create()
    {
        $categories = category::all();
        // $brands = Brands::all();
        return view('Product.create', ['categories' => $categories]);
    }
    public function insert(Request $request)
    {
        $productId = Product::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'summary' => $request->summary,
            'price' => $request->price,
            'weight' => $request->weight,
            // 'Fee' => isset($request->Fee) ? $request->Fee : null,
            // 'carat' => $request->carat,
            'discount' => isset($request->discount) ? $request->discount : 0,
            'show_home' => isset($request->show_home) ? $request->show_home : 0,
            // 'brand_id' => isset($request->brand_id) ? $request->brand_id : null,
        ]);
        if ($request->mainImage) {
            $type = $request->mainImage->getClientOriginalExtension();
            $name = $request->mainImage->getClientOriginalName();
            $fullName = Str::uuid() . "_" . $name;
            $path = $request->file('mainImage')->storeAs('images', $fullName, 'public');
            Media::create([
                'product_id' => $productId,
                'type' => $type,
                'path' => $path,
                'is_main' => 1
            ]);
        }

        if (isset($request->gallery)) {
            foreach ($request->gallery as $gallery) {
                $typeGallery = $gallery->getClientOriginalExtension();
                $nameGallery = $gallery->getClientOriginalName();
                $fullNameGallery = Str::uuid() . "_" . $nameGallery;
                $gallertPath = $gallery->storeAs('images', $fullNameGallery, 'public');
                $products[] = ['product_id' => $productId, 'type' => $typeGallery, 'path' => $gallertPath, 'is_main' => 0];
            }
            Media::insert($products);
        }

        foreach ($request['attribute_keys'] as $key => $value) {
            Attribute::create([
                'key' => $value,
                'value' => $request['attribute_units'][$key],
                'product_id' => $productId,
            ]);
        }

        if (!$request->categories) {
            product_category::create([
                "product_id" => $productId,
                "category_id" => "ندارد"
            ]);
        }

        if ($request->categories) {
            foreach ($request->categories as $categoryId) {
                product_category::create([
                    'product_id' => $productId,
                    'category_id' => $categoryId
                ]);
            }
        }
        return to_route('Product.index');
    }
    public function index()
    {
        // $count_user = count(Auth::user()->cart);
        // $quantity = 0;
        // // dd($count_user);
        // if (cart::where('user_id' , Auth::id())->where('pro_id' , 5)->first()) {
        //     $quantity = cart::where('user_id' , Auth::id())->where('pro_id' , 5)->first()->quantity;
        //     // $count_pro = ->quantity;
        //     # code...
        // }
        // if ($quantity == 0) {
        //     # code...
        // }
        // dd($quantity);
        // if ($count_pro != 0) {
        //     $quantity = cart::where('user_id' , Auth::id())->where('pro_id' , 4)->first();
        // }
        // dd($quantity);
        // dd($count_po);
        // dd(Auth::user()->cart);
        $products = Product::paginate(5);
        $attributes = Attribute::all();
        $proCats = product_category::all();
        $medias = Media::all();
        $categories = Category::all();
        return view(
            'Product.index',
            [
                'products' => $products,
                'attributes' => $attributes,
                'proCats' => $proCats,
                'medias' => $medias,
                'categories' => $categories,
            ]
        );
    }
    public function single(Product $product, $true = null)
    {
        // dd($true);
        // dd($product);
        $cart_pro_user = [];
        $quantitys = [];
        $single_quantity = '';
        foreach (Auth::user()->cart as $value) {
            $cart_pro_user[] = product::find($value->pro_id);
            if ($value->order_id != null) {
                $true = 1;
            }
            $quantitys[] = $value->quantity;
        }
        $cart = cart::where('pro_id', $product->id)->where('user_id', Auth::id())->first();
        if ($cart) {
            $single_quantity = $cart->quantity;
        }
        if (!$product) {
            return redirect()->route('product.list')->with('error', 'محصول مورد نظر یافت نشد');
        }

        $medias = Media::where('product_id', $product->id)->get();
        $attributes = Attribute::where('product_id', $product->id)->get();
        $productCategories = product_category::where('product_id', $product->id)->get();
        $categoryIds = $productCategories->pluck('category_id')->toArray();
        $categories = Category::whereIn('id', $categoryIds)->get();

        $relatedProducts = [];
        // dd();
        if (!empty($categoryIds)) {
            $relatedProducts = Product::whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('category_id', $categoryIds);
            })
                ->where('id', '!=', $product->id)
                ->with('medias')
                ->get();
        }

        $finalPrice = $product->price - ($product->price * $product->discount / 100);
        $mainImage = $medias->where('is_main', 1)->first();
        $gallery = $medias->where('is_main', 0);
        // $footers = footer::all();
        // $settings = setting::all();
        // $footer_expresses = footer_express::all();
        $categories = Category::with([
            'products' => function ($query) {
                $query->with(['medias', 'attributes']);
            }
        ])->get();
        // foreach ($settings as $setting) {
        //     // dd($setting);
        //     $footerLogo = $setting->where('meta_key', 'footerLogo')->first();
        //     $footerDescription = $setting->where('meta_key', 'footerDescription')->first();
        //     // $HeroBannerRight = $setting->where('meta_key', 'mainPageRightHeroBanner')->get();
        //     // $HeroBannerLeft = $setting->where('meta_key', 'mainPageLeftHeroBanner')->get();
        // }
        // dd($footerLogo);
        // foreach ($footers as $value) {
        //     $footer['column_one'] = footer::where('column_id', '1')->get();
        //     $footer['column_two'] = footer::where('column_id', '2')->get();
        //     $footer['column_three'] = footer::where('column_id', '3')->get();
        //     $footer['column_four'] = footer::where('column_id', '4')->get();
        //     $footer['column_five'] = footer::where('column_id', '5')->get();
        //     $footer['column_six'] = footer::where('column_id', '6')->get();
        //     $footer['column_six'] = footer::where('column_id', '6')->get();
        //     $footer['column_six_title'] = footer::select('column_title')->where('column_id', '6')->first();
        // }
        // dd($product->id);
        return view('Product.single', [
            'quantitys' => $quantitys,
            'single_quantity' => $single_quantity,
            'product' => $product,
            'true' => $true,
            'cart_pro_user' => $cart_pro_user,
            'medias' => $medias,
            'attributes' => $attributes,
            'categories' => $categories,
            'finalPrice' => $finalPrice,
            'mainImage' => $mainImage,
            'gallery' => $gallery,
            'footer_expresses' => isset($footer_expresses) ? $footer_expresses : null,
            'footer' => isset($footer) ? $footer : null,
            'footerLogo' => isset($footerLogo) ? $footerLogo : null,
            'footerDescription' => isset($footerDescription) ? $footerDescription : null,
            'categories' => isset($categories) ? $categories : null,
            'relatedProducts' => isset($relatedProducts) ? $relatedProducts : null,
        ]);
    }
    public function edite(Product $product)
    {
        // $brands = Brands::all();
        $categories = Category::all();
        $medias = Media::where('product_id', $product->id)->get();
        $attributes = Attribute::where('product_id', $product->id)->get();
        $productCategories = product_category::where('product_id', $product->id)->pluck('category_id')->toArray();
        $mainImage = $medias->where('is_main', 1)->first();
        $gallery = $medias->where('is_main', 0);

        return view('Product.edite', [
            'product' => $product,
            // 'brands' => $brands,
            'categories' => $categories,
            'medias' => $medias,
            'attributes' => $attributes,
            'productCategories' => $productCategories,
            'mainImage' => $mainImage,
            'gallery' => $gallery
        ]);
    }
    public function update(Request $request)
    {

        $product = Product::find($request->product_id);
        // dd($product);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->summary = $request->summary;
        $product->price = $request->price;
        $product->discount = $request->discount;
        // $product->brand_id = $request->brand_id;
        $product->show_home = isset($request->show_home) ? 1 : 0;

        $product->save();


        if (isset($request->remove_main_image)) {
            $mainImage = Media::where('product_id', $product->id)->where('is_main', 1)->first();
            if ($mainImage) {
                Storage::disk('public')->delete($mainImage->path);
                $mainImage->delete();
            }
        }

        if ($request->hasFile('mainImage')) {
            $oldMainImage = Media::where('product_id', $product->id)->where('is_main', 1)->first();
            if ($oldMainImage) {
                Storage::disk('public')->delete($oldMainImage->path);
                $oldMainImage->delete();
            }

            $type = $request->mainImage->getClientOriginalExtension();
            $name = $request->mainImage->getClientOriginalName();
            $fullName = Str::uuid() . "_" . $name;
            $path = $request->file('mainImage')->storeAs('images', $fullName, 'public');

            Media::create([
                'product_id' => $product->id,
                'type' => $type,
                'path' => $path,
                'is_main' => 1
            ]);
        }

        if (isset($request->remove_gallery)) {
            foreach ($request->remove_gallery as $mediaId) {
                $media = Media::find($mediaId);
                if ($media) {
                    Storage::disk('public')->delete($media->path);
                    $media->delete();
                }
            }
        }

        if ($request->hasFile('gallery')) {
            $galleryData = [];
            foreach ($request->file('gallery') as $gallery) {
                $typeGallery = $gallery->getClientOriginalExtension();
                $nameGallery = $gallery->getClientOriginalName();
                $fullNameGallery = Str::uuid() . "_" . $nameGallery;
                $galleryPath = $gallery->storeAs('images', $fullNameGallery, 'public');

                $galleryData[] = [
                    'product_id' => $product->id,
                    'type' => $typeGallery,
                    'path' => $galleryPath,
                    'is_main' => 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            if (!empty($galleryData)) {
                Media::insert($galleryData);
            }
        }

        Attribute::where('product_id', $product->id)->delete();

        if (isset($request->attribute_keys)) {
            foreach ($request->attribute_keys as $key => $value) {
                if (!empty($value) && !empty($request->attribute_units[$key])) {
                    Attribute::create([
                        'key' => $value,
                        'value' => $request->attribute_units[$key],
                        'product_id' => $product->id,
                    ]);
                }
            }
        }

        product_category::where('product_id', $product->id)->delete();

        if (isset($request->categories)) {
            foreach ($request->categories as $categoryId) {
                product_category::create([
                    'product_id' => $product->id,
                    'category_id' => $categoryId
                ]);
            }
        }
        return redirect()->route('Product.index')->with('success', 'محصول با موفقیت بروزرسانی شد.');
    }
    public function delete(Product $product)
    {
        $medias = Media::where('product_id', $product->id)->get();
        foreach ($medias as $media) {
            Storage::disk('public')->delete($media->path);
            $media->delete();
        }
        product_category::where('product_id', $product->id)->delete();
        Attribute::where('product_id', $product->id)->delete();

        $product->delete();
        return redirect()->route('Product.index')
            ->with('success', 'محصول با موفقیت حذف شد.');
    }
}
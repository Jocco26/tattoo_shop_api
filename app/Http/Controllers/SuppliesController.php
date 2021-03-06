<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplies_Category;
use App\Models\Products_Category;
use App\Models\Brand;
use App\Models\Product;
use App\Http\Resources\Supplies_Category as SuppliesCategoryResource;
use App\Http\Resources\Products_Category as ProductsCategoryResource;
use App\Http\Resources\Brand as BrandResource;
use App\Http\Resources\Product as ProductResource;

class SuppliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SuppliesShop');

    }

    public function loadSuppliesCategories()
    {
        $categories = Supplies_Category::all();

        return SuppliesCategoryResource::collection($categories);
    }
    
    public function loadProductsCategories()
    {
        $categories02 = Products_Category::all();

        return ProductsCategoryResource::collection($categories02);
    }
    
    public function brandView($id){
        $data = []; 
        $data['brand_id'] = $id;

        return view('BrandList',$data);
    }

    public function loadBrands($id){
        $brands = Brand::where('product_category_id','=',$id)->get();

        return BrandResource::collection($brands);
    
    }

    public function productView($id){
        $data = []; 
        $data['brand_id'] = $id;

        return view('productlist',$data);
    }

    public function loadProducts($id){
        $products = Product::where('brand_id','=',$id)->get();

        return ProductResource::collection($products);
    }

    public function productDetailsView($id){
        $data = []; 
        $data['product_id'] = $id;

        return view('ProductDetails',$data);
    }

    public function loadProductDetails($id){
        $products = Product::where('id','=',$id)->get();

        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Type;
use App\model\Product;
use App\model\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        return view('products.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $name = $request->has('search') ? $request->search : '';
        $page = $request->has('page') ? $request->page : 1;
        $offset = $page == 1 ? 0 : 16*($page - 1);
        $products = Product::where("name", 'LIKE','%'.$name.'%')->offset($offset)->limit(16)->get();
        $numberPage = count($products) / 16;
        return view('products.list', compact('products', 'name', 'numberPage'));
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function showCategories($slug)
    {
        $categor = Category::where('slug', $slug)->first();
        $categories = Category::all();
        if (!$categor) {
            $type = Type::where('slug', $slug)->first();
            $types = Type::all();
            $categories = Category::where("type_id", $type->id);
            return view("products.types", compact("type", "types", "categories"));
        } else {
            return view("products.categories", compact("categor", "categories"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $sameProducts = Product::where("category_id", $product->category_id)
            ->whereNotIn("id", [$product->id])->get();
        $productHots = Product::whereNotIn("id", [$product->id])
            ->orderBy('price', 'DESC')->limit(10)->get();
        $categories = Category::all();
        return view("products.show", compact("product", "categories", "sameProducts", "productHots"));
    }
}
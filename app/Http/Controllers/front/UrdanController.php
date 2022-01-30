<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubImage;
use Illuminate\Http\Request;

class UrdanController extends Controller
{
    protected $products;
    protected $product;
    protected $relatedProducts;

    public function index(){

        return view('front.home.home');
    }

    public function categoryPage($id){
        $this->products = Product::where('category_id',$id)->get();

        return view('front.category.category',[
            'products' => $this->products,
            'category' => Category::find($id),
            ]);
    }
    public function productDetails($id){
        $this->product= Product::find($id);
        $this->relatedProducts= Product::where('category_id', $this->product->category_id)->take(4)->get();
        return view('front.product.product-details',[
        'product' =>$this->product,
        'relatedProducts'=>$this->relatedProducts,
        'subImages'      => SubImage::where('product_id', $this->product->id)->get(),

        ]);
    }

    public function getProductInfoForModal(){
        $this->product = Product::find($_GET[id]);
        $this->product->hit_count = $this->product->hit_count+1;
        $this->product->save();
        return json_encode($this->product);
    }
}

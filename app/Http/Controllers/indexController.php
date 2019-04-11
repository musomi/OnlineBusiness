<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
use App\Sub_categorie;
use Mail;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories=Categorie::where('trashed',false)->get();
      return view('pages.intro')->with('categories',$categories);

    }

    public function shop()
    {
      $categories=Categorie::where('trashed','false')->paginate(12);
      $active="shop";
      return view('pages.index')->with('categories',$categories)->with('active',$active);
    }

    public function contact()
    {
      $active="contact";
      return view('pages.contact')->with('active',$active);
    }

    public function about()
    {
      $active="about";
      return view('pages.about')->with('active',$active);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showByCategory($category_id)
    {
        $categories=Categorie::where('trashed',false)->get();
        $products=Product::where('category_id',$category_id)->orderBy('price','asc')->paginate(10);
        $active="shop";
        $category=Categorie::find($category_id);


        return view('pages.view_products_by_category')->with('categories',$categories)->with('products',$products)->with('category',$category)->with('active',$active);

    }

    public function showBySubCategory($sub_category_id)
    {
        $categories=Categorie::where('trashed',false)->get();
        $products=Product::where('sub_category_id',$sub_category_id)->orderBy('created_at','asc')->paginate(10);
        $active="shop";
        $category=Sub_categorie::find($sub_category_id);


        return view('pages.view_products_by_category')->with('categories',$categories)->with('products',$products)->with('category',$category)->with('active',$active);

    }

    public function productprofile(Product $product)
    {
        $category=Categorie::find($product['category_id']);
        $active="shop";

        return view('pages.product_profile')->with('category',$category)->with('product',$product)->with('active',$active);

    }

    public function makeOrder(Request $request, $id)
    {
        $product=Product::find($id);
        $pname=$product['product_name'];
      //  echo $product['product_name'];
        $name=$request->input('names');
        $email=$request->input('email');
        $quantity=$request->input('quantity');
        $location=$request->input('location');
        $comment=$request->input('comment');
        $price=$request->input('price');

        $data = array('name'=>$name,'email'=>$email,'product'=>$pname,'quantity'=>$quantity,'location'=>$location,'comment'=>$comment,'price'=>$price);
        Mail::send('mail', $data, function($message) {

           $message->to('robertmuthomi6@gmail.com', 'Esaji')->subject
              ('Order from Site');
           $message->from('robertmuthomi66@gmail.com','Esaji');
        });
        return redirect('/shop/product/'.$product['product_id']);

      //  return view('pages.product_profile')->with('category',$category)->with('product',$product);

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
      return view('pages.product_profile');
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

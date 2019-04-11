<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
use App\Sub_categorie;
use Auth;

class ProductController extends Controller
{


  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $this->validate($request,[
    'select_file'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);
    $image=$request->file('select_file');
    $new_name=rand().'.'.$image->getClientOriginalExtension();
    $image->move(public_path("images"),$new_name);

      $category=$request->input('category_id');
      $product=new Product;
      $product->category_id=$category;
      $product->product_name=$request->input('name');
      $product->image=$new_name;
      $product->description=$request->input('description');
      $product->price=$request->input('price');
      $product->quantity=$request->input('quantity');
      $product->register_user=Auth::user()->name;
      $product->save();

    return redirect('/menu/'.$category);
    }


    public function storeSub(Request $request)
    {

        $this->validate($request,[
    'select_file'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);
    $image=$request->file('select_file');
    $new_name=rand().'.'.$image->getClientOriginalExtension();
    $image->move(public_path("images"),$new_name);

      $category=$request->input('category_id');
      $sub_category=$request->input('sub_category_id');
      $product=new Product;
      $product->category_id=$category;
      $product->sub_category_id=$sub_category;
      $product->product_name=$request->input('name');
      $product->image=$new_name;
      $product->description=$request->input('description');
      $product->price=$request->input('price');
      $product->quantity=$request->input('quantity');
      $product->register_user=Auth::user()->name;
      $product->save();

    return redirect('/submenu/'.$sub_category);
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
    public function edit(Product $product)
    {
      $food=Categorie::find($product->category_id);
      $foods=Categorie::where('hasub',false)->get();
      $hasubcategory=$product['sub_category_id']==0?false:true;

      return view ('pages/food_profile')->with('service',$product)->with('food',$food)->with('foods',$foods)->with('hasubcategory',$hasubcategory);
    }

    public function editsubcategory(Product $product)
    {
      $food=Sub_categorie::find($product->sub_category_id);
      $foods=Sub_categorie::all();

      return view ('pages/subcategory_food_profile')->with('service',$product)->with('food',$food)->with('foods',$foods);
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

    $category=$request->input('category_id');
    $product=Product::find($id);
    $product->category_id=$category;
    $product->product_name=$request->input('name');
    $product->description=$request->input('description');
    $product->price=$request->input('price');
    $product->quantity=$request->input('quantity');
    $product->save();

  return redirect('/CategoryProducts/edit/'.$id);
    }

    public function updatesubcategory(Request $request, $id)
    {

    $sub_category_id=$request->input('sub_category_id');
    $sub_category=Sub_categorie::find($sub_category_id);

    $product=Product::find($id);
    $product->category_id=$sub_category->category_id;
    $product->sub_category_id=$sub_category_id;
    $product->product_name=$request->input('name');
    $product->description=$request->input('description');
    $product->price=$request->input('price');
    $product->quantity=$request->input('quantity');
    $product->save();

  return redirect('/CategoryProducts/edit/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product=Product::find($id);
      $category=$product['category_id'];
        $product->delete();
        return redirect('/menu/'.$category);
    }
}

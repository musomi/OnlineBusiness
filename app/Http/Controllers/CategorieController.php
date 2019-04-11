<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Sub_categorie;
use App\Product;
use Auth;

class CategorieController extends Controller
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
    $foods=Categorie::where('trashed',false)->get();
    $Tfoods=Categorie::where('trashed',true)->get();
    return view('pages/manage_category')->with('foods',$foods)->with('Tfoods',$Tfoods);
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

      $category=new Categorie;

      $category->category_name=$request->input('menu_name');
      $category->image=$new_name;
      $category->price_range=$request->input('range');
      $category->trashed=false;
      $category->register_user=Auth::user()->name;

      $category->save();
      return redirect('/menu');
    }

    public function storesub(Request $request)
    {

      $category=new Sub_categorie;
      $maincategory=Categorie::find($request->input('category_id'));
      $maincategory->hasub=true;
      $maincategory->save();

      $category->category_name=$request->input('menu_name');
      $category->price_range=$request->input('range');
      $category->category_id=$request->input('category_id');

      $category->save();
      return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $category)
    {
      $category_foods=Product::where('category_id',$category->category_id)->get();
      $subcategories=Sub_categorie::where('category_id',$category->category_id)->get();
      $hasub=count($subcategories) > 0 ? true:false;

      return view('pages/by_category')->with('category_foods',$category_foods)->with('food',$category)->with('hasub',$hasub);
    }

    public function showBySubCategoryProducts(Sub_categorie $subcategorie)
    {
      $category=Categorie::find($subcategorie->category_id);
      $category_foods=Product::where('sub_category_id',$subcategorie->sub_category_id)->get();
      //echo $category_foods['product_name'];

     return view('pages/by_subcategory')->with('category_foods',$category_foods)->with('food',$subcategorie)->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
      return view('pages/category_profile')->with('category',$category);
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
      $category=Categorie::find($id);

      $category->category_name=$request->input('name');
      $category->price_range=$request->input('range');

      $category->save();
      return redirect('/menu');
    }

    public function trash(Categorie $category)
    {
      $value=$category->trashed ? '0':'1';
      $category->trashed=$value;
      $category->save();


        return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $category=Categorie::find($id);
      $products=Product::where('category_id',$category['category_id']);
      $subcat=Sub_categorie::where('category_id',$id);

        $products->delete();
        $category->delete();
        $subcat->delete();
        return redirect('/menu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categories;
use App\Models\ProductTypes;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Contact;
use DB;
use Cart;
use Auth;
class HomeController extends Controller
{
    public function __construct(){
        $category = Categories::where('status',1)->get();
        $producttype = ProductTypes::where('status',1)->get();
        view()->share(['category' => $category,'producttype' => $producttype]);
    }

    public function index(){
        $products = Product::where('featured',1)->paginate(4);
        $product1 = Product::where('status',1)->orderBy('created_at','desc')->paginate(6);
        $product2 = Product::where('status',1)->where('idCategory',15)->paginate(3);
        return view('client.pages.index',['procaycanh' => $product1, 'procaycn' => $product2, 'new' => $products]);
    }

    public function getDetail($slug) {
        $productDetail = Product::where('slug', $slug)->first();
        $idProType = ProductTypes::where('slug', $slug)->first();
        $comments = DB::table('comments')->get();
        
        if (count($productDetail) > 0) {
            return view('client.pages.detail', ['product' => $productDetail, 'comments' => $comments]);
        }
        else if( count($idProType) > 0 ) {
            $productByProdType = Product::where('idProductType', $idProType->id)->get();
            return view('client.pages.detail_protype', ['product' => $productByProdType, 'producttype' => $idProType]);
        }
    }
    public function postComment(Request $request){
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->message = $request->content;
        $comment->save();
        return back();
    }
    // public function getSearch(Request $request){
    //     $result = $request->result;
    //     $data['keysearch'] = $result;
    //     $result = str_replace(' ', '%', $result);
    //     $data['product'] = DB::table('product')->join('slug','product.idCategory','product.idProductType','category.id')->where('name', 'like', '%'.$result.'%')->orWhere('price',$result)->orderBy('product_id','desc')->paginate(3);
    //     return view('frontend.product.product',$data);
    // }
    public function infoClient(){
        return view('client.pages.info');
    }
    public function getorder(){
        $user = Auth::user()->id;
        $order = Order::where('idUser',$user)->get();
        return view('client.pages.order',compact('order'));
    }
    public function allPro()
    {
        $allproduct = DB::table('product')->orderBy('created_at','desc')->paginate(12);
        return view('client.pages.allproduct',compact('allproduct'));
    }
    public function getabout()
    {
        return view('client.pages.about');
    }
    public function search(Request $request){
        $allproduct = Product::where('name','like','%' .$request->key.'%')
                    ->orWhere('price',$request->key)
                    ->paginate(12);
        return view('client.pages.allproduct',compact('allproduct'));
    } 
    public function getcontact()
    {
        return view('client.pages.contact');
    }
    public function postcontact(Request $request)
    {
        $contacts = new Contact;
        $contacts->email = $request->email;
        $contacts->message = $request->content;
        $contacts->save();
        return back()->with('thongbao','Cảm ơn bạn đã liên hệ chúng tôi.Chúng tôi sẽ trả lời bạn sớm nhất');
    }
}

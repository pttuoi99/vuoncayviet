<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function index()
    {
        $order = DB::table('order')
        ->orderBy('id','desc')
        ->select('id','name','email','address','phone','monney','message','status')
        ->paginate(5);
        return view('admin.pages.order.order',compact('order'));
    }
     public function getViewOrder($id){
        $vieworder = DB::table('order_details')->where('order_details.idOrder',$id)->get();
        return view('admin.pages.order.view',compact('vieworder'));
    }
    public function postEditOrder(Request $request,$id){
    	$order = new Order();
    	$pr['status'] = $request->status;
    	$order = Order::where('id',$id)->update($pr);
    	return redirect()->back()->with('thongbao','Duyệt đơn hàng thành công!');
    }
    public function getDeleteOrder($id){
        Order::where('id',$id)->delete();
        return back()->with('thongbao','Xóa đơn hàng thành công!');
    }
    public function deleteDetail($id){
        OrderDetail::where('id',$id)->delete();
        return back()->with('thongbao','Xóa sản phẩm thành công!');
    }
    public function store()
    {
        //
    }
}

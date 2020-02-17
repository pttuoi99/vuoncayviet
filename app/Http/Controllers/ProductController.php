<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductTypes;
use App\Http\Requests\StoreProductRequest;
use File;
use Validator;
use DB;
// use App\Services\ImageService;
class ProductController extends Controller
{
    // protected $image_service;
    // public function __construct(ImageService $imageService) {
    //     $this->image_service = $imageService;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::where('status',1)->paginate(10);
        return view('admin.pages.product.list',compact('product'));
    }
    public function search(Request $request){
        $product = Product::where('name','like','%' .$request->name.'%')
                    ->orWhere('price',$request->name)
                    ->paginate(10);
        return view('admin.pages.product.list',compact('product'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::where('status',1)->get();
        $producttype = ProductTypes::where('status',1)->get();
        return view('admin.pages.product.add',compact('category','producttype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest;  $request
     * @return \Illuminate\Http\Response
     */
    // if($request->hasFile('image')){
    //         $file = $request->image;
    //         if( $this->image_service->checkFile($file) == 1) {
    //             $fileName = $this->image_service->moveImage($file, 'img/upload/product');
    //             if($fileName != 0) {
    //                 $data = $request->all();
    //                 $data['slug'] = utf8tourl($request->name);
    //                 $data['image'] = $fileName;
    //                 Product::create($data);
    //                 return redirect()->route('product.create')->with('thongbao','Đã thêm thành công sản phẩm mới');
    //             }
    //         } elseif ( $this->image_service->checkFile($file) == 0) {
    //             return back()->with('error','Ảnh của bạn quá lớn chỉ được upload ảnh dưới 1mb');
    //         } else {
    //             return back()->with('error','File bạn chọn không là hình ảnh');
    //         }
    //     }
    public function store(StoreProductRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->image;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //lấy loại file
            $file_type = $file->getMimeType();
            //lấy kích thước file 
            $file_size = $file->getSize();
            if ($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif') {
                if ($file_size <= 1048576) {
                    $file_name = utf8tourl($file_name);
                    if ($file->move('img/upload/product',$file_name)) {
                        $data = $request->all();
                        $data['slug'] = utf8tourl($request->name);
                        $data['image'] = $file_name;
                        Product::create($data);
                        return redirect()->route('product.index')->with('thongbao','Đã thêm thành công sản phẩm');
                    }
                }else{
                    return back()->with('error', 'bạn không thể upload ảnh quá 1MB');
                }
            }else{
                return back()->with('error', 'file bạn chọn không phải là hình ảnh');
            }
        }else{
            return back()->with('error', 'bạn chưa thêm ảnh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
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
        $category = Categories::where('status',1)->get();
        $producttype = ProductTypes::where('status',1)->get();
        $product = Product::find($id);
        return response()->json(['category' => $category, 'producttype' => $producttype, 'product' => $product],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     $product = Product::find($id);
        $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
        if($request->hasFile('image')){
            $file = $request->image;
            if( $this->image_service->checkFile($file) == 1) {
                $nameImage = $this->image_service->moveImage($file, 'img/upload/product');
                if($nameImage != 0) {
                    $data['image'] = $nameImage;
                }
            } elseif ( $this->image_service->checkFile($file) == 0) {
                return response()->json(['result' => 'Ảnh của bạn quá lớn chỉ được upload ảnh dưới 1mb '.$id],200);
            } 
        }else{
            $data['image'] = $product->image;
        }
        $product->update($data);
        return response()->json(['result' => 'Đã sửa thành công sản phẩm có id là '.$id],200);
     */
    public function update(StoreProductRequest $request, $id)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|min:2|max:255',
                'description' => 'required|min:2',
                'quantity' => 'required|numeric',
                'price' => 'required|numeric',
                'promotional' => 'numeric',
                'image' => 'image',
            ],
            [
                'required' => ':attribute không được bỏ trống',
                'min' => ':attribute tối thiểu có 2 ký tự',
                'max' => ':attribute tối đa có 255 ký tự',
                'numeric' => ':attribute phải là một số ',
                'image' => ':attribute không là hình ảnh',
            ],
            [
                'name' => 'Tên sản phẩm',
                'description' => 'Mô tả sản phẩm',
                'quantity' => 'Số lượng sản phẩm',
                'price' => 'Đơn giá sản phẩm',
                'promotional' => 'Giá khuyến mại',
                'image' => 'Ảnh minh họa',
            ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'true','message' => $validator->errors()],200);
        }
        $product = Product::find($id);
        $data = $request->all();
        $data['slug'] = utf8tourl($request->name);
        if ($request->hasFile('image')) {
            $file = $request->image;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //lấy loại file
            $file_type = $file->getMimeType();
            //lấy kích thước file 
            $file_size = $file->getSize();
            if ($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'image/gif') {
                if ($file_size <= 1048576) {
                    $file_name = utf8tourl($file_name);
                    if ($file->move('img/upload/product',$file_name)) {
                        $data['image'] = $file_name;
                        if (File::exists('img/upload/product'.$product->image)) {
                            //xóa file
                            unlink('img/upload/product'.$product->image);
                        }
                    }
                }else{
                    return response()->json(['error' => 'Bạn chỉ có thể upload ảnh dưới 1MB'],200);
                }
            }else{
                return response()->json(['error' => 'File bạn chọn không phải là ảnh'],200);
            }
        }else{
            $data['image'] = $product->image;
        }
        $product->update($data);
        return response()->json(['result' => 'Đã sửa thành công sản phẩm '.$id],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        // $this->image_service->deleteFile($product->image, 'img/upload/product');
        if (File::exists('img/upload/product/'.$product->image)) {
            unlink('img/upload/product/'.$product->image);
        }
        $product->delete();
         // return redirect()->route('product.index')->with('thongbao','Đã xóa thành công sản phẩm');
        return response()->json(['result' => 'Đã xóa thành công sản phẩm '.$id],200);
    }
}

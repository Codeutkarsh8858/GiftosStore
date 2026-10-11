<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{

    // category
    public function addCategory(){
        return view('admin.addcategory');
    }

    public function postAddCategory(Request $req){
            $req->validate([
                'category' => 'required|unique:categories,category'
            ]);
            $category = new Category();
            $category->category = $req->category;
            $category->save();
            return redirect()->route('admin.viewcategory')->with('category_message','Category Added Successfully.');
    }
    public function viewCategory(){
        $categories = Category::paginate(2);
        return view('admin.viewcategory',compact('categories'));
    }

    public function deleteCategory($id){
        $category = Category::findorFail($id);
        $category->delete();
        return redirect()->back()->with('category_delete_message','Category deleted successfully.');
    }

    public function updateCategory($id){
            $category = Category::findorFail($id);
            return view('admin.updatecategory',compact('category'));
    }   

    public function postUpdateCategory(Request $req , $id){
            $req->validate([
                'category' => 'required|unique:categories,category'
            ]);
            $category = Category::findorFail($id);

            $category->category = $req->category;
            $category->save();
            return redirect()->route('admin.viewcategory')->with('category_update_message','Category updated successfully.');

    }

    // product

    public function addProduct(){

        $categories = Category::all();
        return view('admin.addproduct',compact('categories'));
    }

    public function postAddProduct(Request $req){
            $req->validate([
                'product_title' => 'required|string|max:255',
                //'product_description' => 'required|string',
                'product_quantity' => 'required|integer|min:1',
                'product_price' => 'required|numeric|min:0',
                'product_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
                'product_category' => 'required|exists:categories,id',
            ]);

            $product = new Product();
            $product->product_title = $req->product_title ;
            $product->product_description = $req->product_description ;
            $product->product_quantity = $req->product_quantity ;
            $product->product_price = $req->product_price ;
            if($req->hasFile('product_image'))
                {
                    $image = $req->file('product_image');

                    $imageName = time().'.'.$image->getClientOriginalExtension();

                    $image->move(public_path('product_images'), $imageName);

                    $product->product_image = $imageName;
                }
            $product->category_id = $req->product_category ;

            $product->save();
            return redirect()->route('admin.viewproduct')->with('product_add_message','Product added Successfully.');
    }
    
    public  function viewProduct(){
            $products = Product::with('category')->paginate(2);

            return view('admin.viewproduct',compact('products'));
    }
    
    public function deleteProduct($id){
            $product = Product::findorFail($id);
            $image_path = public_path('product_images/').$product->product_image;
            if(file_exists($image_path)){
                @unlink($image_path);
            }

            $product->delete();

            return redirect()->back()->with('delete_product_message',"Product Deleted SuccessFully.");
    }
    public function updateProduct($id){
            $product = Product::findorFail($id);
            $categories = Category::all();
            return view('admin.updateproduct',compact(['product','categories']));
    }

    public function postUpdateProduct(Request $req , $id){
            $req->validate([
                
                'product_title' => 'required|string|max:255',
                //'product_description' => 'required|string',
                'product_quantity' => 'required|integer|min:1',
                'product_price' => 'required|numeric|min:0',
                'product_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
                'category_id' => 'required|exists:categories,id',
            ]);
            $product = Product::findorFail($id);
            $product->product_title = $req->product_title ;
            $product->product_description = $req->product_description ;
            $product->product_quantity = $req->product_quantity ;
            $product->product_price = $req->product_price ;
            if($req->hasFile('product_image')){
                $image_path = public_path('product_images/').$product->product_image;
                if(file_exists($image_path)){
                    @unlink($image_path);
                }
                $image = $req->product_image;
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('product_images'),$imageName);
                $product->product_image = $imageName;
            }
            $product->category_id = $req->category_id;
            

            $product->save();

            return redirect()->route('admin.viewproduct')->with('update_product_message','Product Updated SuccessFully.');
    }
    public function productDetail($id){
            $product = Product::with('category')->findorFail($id);
            return view('admin.product_detail',compact('product'));
    }

    public function searchProduct(Request $req){
            $products = Product::with('category')->where('product_title','LIKE','%'.$req->search.'%')->Paginate(2);

            return view('admin.viewproduct',compact('products'));
    }

    public function viewOrder(){
            $orders = Order::all();
            return view('admin.vieworder',compact('orders'));
    }

    public function deleteOrder($id){
        $order = Order::findorFail($id);
        $order->delete();
        return redirect()->back()->with('order_delete','order data deleted successfully.');
    }

    public function statusCheck(Request $req , $id){
        $order_status = Order::findorFail($id);
        $order_status->status = $req->status;
        $order_status->save();
        return redirect()->back()->with('status_update_message','Order status updated successfully.');
    }

    public function downloadPdf($id){
        $order = Order::findorFail($id);

        $pdf = Pdf::loadView('admin.invoice',compact('order'))->setPaper('A4');
        return $pdf->download('invoice.pdf');
    }


    // admin Count
 
    public function adminCount(){
        $totalusers = User::count();
        $userPercentage = min($totalusers,100);
        $totalorder = Order::count();
        $orderPercentage = min(($totalorder/500)*100,100);
        $totalcategory = Category::count();
        $catePercentage = min($totalcategory,100);
        $totalproduct = Product::count();
        $productPercentage = min($totalproduct,100);

        return view('admin.dashboard',compact(
            'totalusers',
            'userPercentage',
            'totalorder',
            'orderPercentage',
            'totalcategory',
            'catePercentage',
            'totalproduct',
            'productPercentage' 
            ));
    }

}

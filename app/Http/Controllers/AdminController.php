<?php

namespace App\Http\Controllers;

use App\category;
use App\Contact;
use App\Gallery;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        if (Auth::check()) {
            return view('admin.index', [
            ]);
        }
        else{
            return redirect(url('Login'))->with('error','Credentials doesnt match');
        }
    }
    public function contact(){
        $contacts = Contact::all();
        return view('admin.contact',[
            'contacts'=>$contacts
        ]);
    }
    public function gallery(){
        $images = Gallery::all();
        return view('admin.gallery',[
            'images'=>$images,
        ]);
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.edit',[
            'product'=>$product
        ]);
    }
    public function storeGalleryImage(Request $request){
        $storeimage = new Gallery();
        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $storeimage->image = $filename;
        }
        $storeimage->desc = $request->desc;
        $storeimage->save();
        return redirect()->back()->with('success','Image saved success');
    }
    public function editModal(Request $request){
        if ($request->ajax()){
            $output = "";
            $image = Gallery::find($request->order);
        }
        $output= '
          <div class="modal-header">
          <input type="hidden" name="imageId" value="'.$image->id.'">
                        <h5 class="modal-title" id="customModalTwoLabel">Edit '.$image->desc.' picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="file" name="image" value="'.$image->image.'">
                        </div>
                        <div class="form-group">
                            <input type="text" name="desc" class="form-control" value="'.$image->desc.'">
                        </div>


                    </div>
                    <div class="modal-footer custom">

                        <div class="left-side">
                            <button type="button" class="btn btn-link danger" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="divider"></div>
                        <div class="right-side">
                            <button type="submit" class="btn btn-link success">Submit</button>
                        </div>
                    </div>
        ';
        return response($output);
    }
public function editGalleryImage(Request $request){
        $edit = Gallery::find($request->imageId);
    if ($request->image) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('uploads/product/', $filename);
        $edit->image = $filename;
    }
        $edit->desc = $request->desc;
        $edit->save();
    return back()->with('success','Product Edited success');

}
public function deleteGalleryImage(Request $request){
        $delete = Gallery::find($request->id);
        $delete->delete();
    return back()->with('success','Product Deleted success');

}
    public function editProd(Request $request){
        $edit = Product::find($request->product_id);
        if ($request->productImage) {
            $file = $request->file('productImage');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->product_image = $filename;
        }
        $edit->product_name = $request->input('product_name');
        $edit->product_desc = $request->input('product_desc');
        $edit->product_price = $request->input('product_price');
        $edit->product_cancel_price = $request->input('product_cancel_price');
        $edit->product_category = $request->input('category');
        $edit->product_brand = $request->input('brand');

        $edit->save();
        return redirect(url('products'))->with('success','Product Edited Success');
    }
    public function delete(Request $request){
        $delete = Product::find($request->product_id);
        $delete->delete();
        return back()->with('success','Product deleted success');
    }
    public function storeCategory(Request $request){
        $category = category::create([
            'category'=>$request->input('category'),
            'brand'=>$request->input('brand'),
        ]);
        return back()->with('success','Category saved');
    }
    public function products(){
        $products = Product::all();
        return view('admin.product',[
            'products'=>$products
        ]);
    }
    public function storeProduct(Request $request){
        $products = new Product();
        if ($request->product_image) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $products->product_image = $filename;
        }
        $products->product_name = $request->input('product_name');
        $products->product_desc = $request->input('product_desc');
        $products->product_price = $request->input('product_price');
        $products->product_cancel_price = $request->input('product_cancel_price');
        $products->product_category = $request->input('category');
        $products->product_brand = $request->input('brand');
        $products->save();

        return back()->with('success','Product Stored Success');

    }
    public function deleteContact(Request $request){
        $delete = Contact::find($request->deleteContact);
        $delete->delete();
        return back()->with('success','Info Deleted');
    }
    public function orders(){
        return view('admin.orders');
    }
    public function reviews(){
        return view('admin.reviews');
    }
}

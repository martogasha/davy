<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class BlogController extends Controller
{
    public function Blog(){
        $lats = Product::where('product_category','digital')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::all();
        $blogs = Blog::latest('id')->paginate(8);
        return view('client.blog',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops,
            'blogs'=>$blogs
        ]);
    }
    public function adminBlog(){
        $products = Product::all();
        $blogs = Blog::all();
        return view('admin.blog',[
            'products' => $products,
            'blogs' => $blogs
        ]);
    }
    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.editBlog',[
            'blog'=>$blog
        ]);
    }
    public function eBlog(Request $request){
        $edit = Blog::find($request->id);
        $edit->title = $request->input('title');
        $edit->detail = $request->input('detail');
        $edit->link = $request->input('link');
        $edit->linkName = $request->input('linkName');
        $edit->detailOne = $request->input('detailOne');
        $edit->linkNameOne = $request->input('linkNameOne');
        $edit->linkOne = $request->input('linkOne');
        $edit->quote = $request->input('quote');
        $edit->quoteAuthor = $request->input('quoteAuthor');
        $edit->detailTwo = $request->input('detailTwo');
        $edit->linkNameTwo = $request->input('linkNameTwo');
        $edit->linkTwo = $request->input('linkTwo');
        $edit->detailThree = $request->input('detailThree');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $edit->image = $filename;
        }

        $edit->save();


        return redirect()->back()->with('success','Blog Edited Successfully');

    }
    public function storeBlog(Request $request){
        $pictures = new Blog();
        $pictures->title = $request->input('title');
        $pictures->detail = $request->input('detail');
        $pictures->link = $request->input('link');
        $pictures->linkName = $request->input('linkName');
        $pictures->detailOne = $request->input('detailOne');
        $pictures->linkNameOne = $request->input('linkNameOne');
        $pictures->linkOne = $request->input('linkOne');
        $pictures->quote = $request->input('quote');
        $pictures->quoteAuthor = $request->input('quoteAuthor');
        $pictures->detailTwo = $request->input('detailTwo');
        $pictures->linkNameTwo = $request->input('linkNameTwo');
        $pictures->linkTwo = $request->input('linkTwo');
        $pictures->detailThree = $request->input('detailThree');
        $pictures->titleOne = $request->input('titleOne');
        $pictures->titleOneLinkName = $request->input('titleOneLinkName');
        $pictures->detailTitleOneLink = $request->input('detailTitleOneLink');
        $pictures->detailTitleOne = $request->input('detailTitleOne');
        $pictures->titleTwo = $request->input('titleTwo');
        $pictures->titleTwoLinkName = $request->input('titleTwoLinkName');
        $pictures->detailTitleTwoLink = $request->input('detailTitleTwoLink');
        $pictures->detailTitleTwo = $request->input('detailTitleTwo');
        $pictures->titleThree = $request->input('titleThree');
        $pictures->titleThreeLinkName = $request->input('titleThreeLinkName');
        $pictures->detailTitleThreeLink = $request->input('detailTitleThreeLink');
        $pictures->detailTitleThree = $request->input('detailTitleThree');
        $pictures->titleFour = $request->input('titleFour');
        $pictures->titleFourLinkName = $request->input('titleFourLinkName');
        $pictures->detailTitleFourLink = $request->input('detailTitleFourLink');
        $pictures->detailTitleFour = $request->input('detailTitleFour');
        $pictures->titleFive = $request->input('titleFive');
        $pictures->titleFiveLinkName = $request->input('titleFiveLinkName');
        $pictures->detailTitleFiveLink = $request->input('detailTitleFiveLink');
        $pictures->detailTitleFive = $request->input('detailTitleFive');
        $pictures->titleSix = $request->input('titleSix');
        $pictures->titleSixLinkName = $request->input('titleSixLinkName');
        $pictures->detailTitleSixLink = $request->input('detailTitleSixLink');
        $pictures->detailTitleSix = $request->input('detailTitleSix');
        $pictures->titleSeven = $request->input('titleSeven');
        $pictures->titleSevenLinkName = $request->input('titleSevenLinkName');
        $pictures->detailTitleSevenLink = $request->input('detailTitleSevenLink');
        $pictures->detailTitleSeven = $request->input('detailTitleSeven');
        $pictures->titleEight = $request->input('titleEight');
        $pictures->titleEightLinkName = $request->input('titleEightLinkName');
        $pictures->detailTitleEightLink = $request->input('detailTitleEightLink');
        $pictures->detailTitleEight = $request->input('detailTitleEight');
        $pictures->titleNine = $request->input('titleNine');
        $pictures->titleNineLinkName = $request->input('titleNineLinkName');
        $pictures->detailTitleNineLink = $request->input('detailTitleNineLink');
        $pictures->detailTitleNine = $request->input('detailTitleNine');
        $pictures->titleTen = $request->input('titleTen');
        $pictures->titleTenLinkName = $request->input('titleTenLinkName');
        $pictures->detailTitleTenLink = $request->input('detailTitleTenLink');
        $pictures->detailTitleTen = $request->input('detailTitleTen');
        $pictures->titleConclusion = $request->input('titleConclusion');
        $pictures->detailConclusion = $request->input('detailConclusion');
        $pictures->linkConclusion = $request->input('linkConclusion');
        $pictures->linkNameConclusion = $request->input('linkNameConclusion');
        $pictures->detailOneConclusion = $request->input('detailOneConclusion');
        $pictures->linkNameOneConclusion = $request->input('linkNameOneConclusion');
        $pictures->linkOneConclusion = $request->input('linkOneConclusion');
        $pictures->quoteConclusion = $request->input('quoteConclusion');
        $pictures->quoteAuthorConclusion = $request->input('quoteAuthorConclusion');
        $pictures->detailTwoConclusion = $request->input('detailTwoConclusion');
        $pictures->linkNameTwoConclusion = $request->input('linkNameTwoConclusion');
        $pictures->linkTwoConclusion = $request->input('linkTwoConclusion');
        $pictures->detailThreeConclusion = $request->input('detailThreeConclusion');

        if ($request->image) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $pictures->image = $filename;
        }

        $pictures->save();


        return redirect()->back()->with('success','Blog Added Successfully');
    }
    public function blogDetail($id,$name){
        $lats = Product::where('product_category','digital')->get();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::all();
        $detail = Blog::find($id);
        return view('client.blogDetail',[
            'products'=>$cart->item,
            'lats'=>$lats,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops,
            'detail'=>$detail,
        ]);
    }
}

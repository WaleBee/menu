<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footer;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\visitor;
use App\Models\visitorMonth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;
use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    public function index(Request $request){
        $ip = $request->ip();
        $date = Carbon::now()->toDateString();
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('y');
        if (visitor::where('ip', $ip)->first()) {
            visitor::where('ip', $ip)->update([
                'date' => $date,
                'updated_at' => Carbon::now()
            ]);
            
        }
        else{
            visitor::insert([
                'ip' => $ip,
                'date' => $date,
                'created_at' => Carbon::now()
            ]);
        }
        if (visitorMonth::where('ip', $ip)->where('month', $month)->where('year', $year)->first()) {
            visitorMonth::where('ip', $ip)->update([
                'date' => $date,
                'month' => $month,
                'year' => $year,
                'updated_at' => Carbon::now()
            ]);
            
        }
        else{
            visitorMonth::insert([
                'ip' => $ip,
                'date' => $date,
                'month' => $month,
                'year' => $year,
                'created_at' => Carbon::now()
            ]);
        }
        
        $category = Category::all();
        $product = Product::all();
        $footer = Footer::first();
        return view('Front.index', compact('category', 'product', 'footer'));
    }

    public function dashboard(){
        $today = visitor::where('date','>=', Carbon::now()->toDateString())->count();
        $week = visitor::where('date','>=', Carbon::now()->subdays(7)->toDateString())->count();
        $month = visitor::where('date','>=', Carbon::now()->subdays(30)->toDateString())->count();
        return view('admin.dashboard', compact('today', 'week', 'month'));
    }
    
    public function profile(){
        $category = null;
        return view('admin.profile', compact('category'));
    }
    
                            // All Category *****************

    public function categories(){
        $category = Category::paginate(10);
        return view('admin.categories', compact('category'));
    }
    public function add_category(Request $request){
        if (Category::where('name', $request->category)->get() == null) {
            return back()->with('error', 'error');
        }
        else{
            if ($request->hasFile('image')) {
                if ($request->category != null) {
                    $getImage = $request->file('image');
                    $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
                    Image::make($getImage)->save(public_path('front/uploads/cat_img/').$name);
                    $save_to = 'front/uploads/cat_img/'.$name;
                    
                    Category::insert([
                        'name' => $request->category,
                        'image' => $save_to,
                        'created_at' => Carbon::now()
                    ]);
                    return back()->with('success', 'success');
                }
                else{
                    return back()->with('name', 'name');
                }
                
            }
            else{
                return back()->with('image', 'image');
            }
            
           
        }
    }

    public function get_category(Request $request){
        $data = Category::findOrFail($request->id);
        return response()->json($data);
    }

    public function update_category(Request $request){
        $old_image = Category::findOrFail($request->id)->image;
        if ($request->hasFile('image')) {
            if (file_exists(public_path($old_image))) {
                unlink(public_path($old_image));
            }
            $getImage = $request->file('image');
            $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
            Image::make($getImage)->save(public_path('front/uploads/cat_img/').$name);
            $save_to = 'front/uploads/cat_img/'.$name;
        }
        else{
            $save_to = Category::findOrFail($request->id)->image;
        }
        Category::findOrFail($request->id)->update([
            'name' => $request->category,
            'image' => $save_to,
            'created_at' => Carbon::now()
        ]);
        return back()->with('update', 'update');
    }

    public function category_delete($id){
        $old_image = Category::findOrFail($id)->image;
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
        Category::findOrFail($id)->delete();
        return back()->with('delete', 'delete');
    }

    /* Sub Category */

    public function subcategory(){
        $category = SubCategory::paginate(10);
        $main = Category::all();
        return view('admin.subcategory', compact('category', 'main'));
    }
    public function add_sub_category(Request $request){
        if (SubCategory::where('name', $request->category)->get() == null) {
            return back()->with('error', 'error');
        }
        else{
            if ($request->hasFile('image')) {
                if ($request->category != null) {
                    $getImage = $request->file('image');
                    $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
                    Image::make($getImage)->save(public_path('front/uploads/cat_img/').$name);
                    $save_to = 'front/uploads/cat_img/'.$name;
                    
                    SubCategory::insert([
                        'name' => $request->category,
                        'category' => $request->main,
                        'image' => $save_to,
                        'created_at' => Carbon::now()
                    ]);
                    return back()->with('success', 'success');
                }
                else{
                    return back()->with('name', 'name');
                }
                
            }
            else{
                return back()->with('image', 'image');
            }
            
           
        }
    }

    public function get_sub_category(Request $request){
        $data = SubCategory::findOrFail($request->id);
        return response()->json($data);
    }

    public function update_subcategory(Request $request){
        $old_image = SubCategory::findOrFail($request->id)->image;
        if ($request->main != null) {
            $main = $request->main;
        }
        else{
            $main = SubCategory::findOrFail($request->id)->category;
        }
        if ($request->hasFile('image')) {
            if (file_exists(public_path($old_image))) {
                unlink(public_path($old_image));
            }
            $getImage = $request->file('image');
            $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
            Image::make($getImage)->save(public_path('front/uploads/cat_img/').$name);
            $save_to = 'front/uploads/cat_img/'.$name;
        }
        else{
            $save_to = SubCategory::findOrFail($request->id)->image;
        }
        SubCategory::findOrFail($request->id)->update([
            'name' => $request->category,
            'category' => $main,
            'image' => $save_to,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('update', 'update');
    }

    public function subcategory_delete($id){
        $old_image = SubCategory::findOrFail($id)->image;
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
        SubCategory::findOrFail($id)->delete();
        return back()->with('delete', 'delete');
    }

            // product *****************************

    public function product(){
        $category = Category::all();
        $sub = SubCategory::all();
        $product = Product::paginate(10);
        return view('admin.product', compact('category', 'sub', 'product'));
    }  
    
    public function add_product(Request $request){
        $request->validate([
            'image'=> 'required',
            'name'=> 'required',
            'price'=> 'required',
            'category'=> 'required',
            'status'=> 'required'
        ]);
            if ($request->hasFile('image')) {
                $getImage = $request->file('image');
                $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
                Image::make($getImage)->save(public_path('front/uploads/products/').$name);
                $save_to = 'front/uploads/products/'.$name;
            
            }

        Product::insert([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'sub_category' => $request->subcategory,
            'status' => $request->status,
            'image' => $save_to,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'success');
    }  
    
    public function get_product(Request $request){
        $data = Product::findOrFail($request->id);
        return response()->json($data);
    }
    
    public function update_product(Request $request){
        $old_image = Product::findOrFail($request->id)->image;
        if ($request->category != null) {
            $category = $request->category;
        }
        else{
            $category = Product::findOrFail($request->id)->category;
        }
        
        if ($request->subcategory != null) {
            $subcategory = $request->subcategory;
        }
        else{
            $subcategory = Product::findOrFail($request->id)->sub_category;
        }
        if ($request->status != null) {
            $status = $request->status;
        }
        else{
            $status = Product::findOrFail($request->id)->status;
        }

        if ($request->hasFile('image')) {
            if (file_exists(public_path($old_image))) {
                unlink(public_path($old_image));
            }
            $getImage = $request->file('image');
            $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
            Image::make($getImage)->save(public_path('front/uploads/products/').$name);
            $save_to = 'front/uploads/products/'.$name;
        }
        else{
            $save_to = Product::findOrFail($request->id)->image;
        }
        Product::findOrFail($request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $category,
            'sub_category' => $subcategory,
            'status' => $status,
            'image' => $save_to,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('update', 'update');
    }

    public function product_delete($id){
        $old_image = Product::findOrFail($id)->image;
        if (file_exists(public_path($old_image))) {
            unlink(public_path($old_image));
        }
        Product::findOrFail($id)->delete();
        return back()->with('delete', 'delete');
    }


                            // Footer **************************

    public function information(){
        $data = Footer::first();
        return view('admin.footer', compact('data'));
    }
    
    public function footer_update(Request $request){
        $old_image = Footer::findOrFail(1)->logo;
        if ($request->hasFile('image')) {
            if (file_exists(public_path($old_image))) {
                unlink(public_path($old_image));
            }
            $getImage = $request->file('image');
            $name = Str::random(5).'.'.$getImage->getClientOriginalExtension();
            Image::make($getImage)->save(public_path('front/images/').$name);
            $save_to = 'front/images/'.$name;
        }
        else{
            $save_to = Footer::findOrFail(1)->logo;
        }
        Footer::findOrFail(1)->update([
            'number' => $request->number,
            'whatsapp' => $request->whatsapp,
            'logo' => $save_to,
            'location' => $request->location,
            'updated_at' => Carbon::now()
        ]);
        return back()->with('update', 'update');
    }

}

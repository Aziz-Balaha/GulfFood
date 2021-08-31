<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function links(){
        $links  = [
            [
                'route'=>'index',
                'name'=>'الرئيسية',
            ],
            [
                'route'=>'about',
                'name'=>'من نحن',
            ],
            [
                'route'=>'menu',
                'name'=>'منتجاتنا',
            ],
            [
                'route'=>'contact',
                'name'=>'تواصل معنا',
            ],
        ];
        //$categories = Category::all();
        $categories =[
            ['id' => '1', 'name' => 'سلطات'],
            ['id' => '2', 'name' => 'أجبان'],
            ['id' => '3', 'name' => 'ألبان'],
            ['id' => '5', 'name' => 'حمص']
        ];
        return view('front.includes.header',compact('links','categories'));
    }
    public function products($name){
        if(isset($name)){
            if($name == 'all'){
                $categories = [
                    ['id' => '1', 'name' => 'سلطات'],
                    ['id' => '2', 'name' => 'أجبان'],
                    ['id' => '3', 'name' => 'ألبان'],
                    ['id' => '5', 'name' => 'حمص'],
                ];
                $products = [
                    ['id' => '1', 'name' => 'لبن', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3141.JPG', 'category_id' => '3'],
                    ['id' => '2', 'name' => 'شمينت', 'size' => '110', 'measruing_unit' => 'جرام', 'image' => 'IMG_3137.JPG', 'category_id' => '3'],
                    ['id' => '3', 'name' => 'لبن أب', 'size' => '200', 'measruing_unit' => 'مل', 'image' => 'IMG_3074.JPG', 'category_id' => '3'],
                    ['id' => '4', 'name' => 'لبن أب', 'size' => '330', 'measruing_unit' => 'مل', 'image' => 'IMG_3036.JPG', 'category_id' => '3'],
                    ['id' => '5', 'name' => 'لبن أب', 'size' => '350', 'measruing_unit' => 'مل', 'image' => 'IMG_3049.JPG', 'category_id' => '3'],
                    ['id' => '6', 'name' => 'لبن أب', 'size' => '1', 'measruing_unit' => 'لتر', 'image' => 'IMG_3040.JPG', 'category_id' => '3'],
                    ['id' => '7', 'name' => 'لبن رايب', 'size' => '1', 'measruing_unit' => 'كليو', 'image' => 'IMG_3058.JPG', 'category_id' => '3'],
                    ['id' => '8', 'name' => 'لبن رايب', 'size' => '1.5', 'measruing_unit' => 'كليو', 'image' => 'IMG_3062.JPG', 'category_id' => '3'],
                    ['id' => '9', 'name' => 'لبن مش', 'size' => '1', 'measruing_unit' => 'كليو', 'image' => 'IMG_3068.JPG', 'category_id' => '3'],
                    ['id' => '10', 'name' => 'سلطة تركية', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3082.JPG', 'category_id' => '1'],
                    ['id' => '11', 'name' => 'سلطة باذنجان', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3083.JPG', 'category_id' => '1'],
                    ['id' => '12', 'name' => 'سلطة باذنجان', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3094.JPG', 'category_id' => '1'],
                    ['id' => '13', 'name' => 'سلطة ذرة بالمايونيز', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3087.JPG', 'category_id' => '1'],
                    ['id' => '14', 'name' => 'جبنة فيتا', 'size' => '100', 'measruing_unit' => 'جرام', 'image' => 'IMG_3153.JPG', 'category_id' => '2'],
                    ['id' => '15', 'name' => 'جبنة بيضاء', 'size' => '350', 'measruing_unit' => 'جرام', 'image' => 'IMG_3161.JPG', 'category_id' => '2'],
                    ['id' => '16', 'name' => 'حمص', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3115.JPG', 'category_id' => '5'],
                    ['id' => '17', 'name' => 'حمص', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3100.JPG', 'category_id' => '5'],
                    ['id' => '18', 'name' => 'حمص', 'size' => '400', 'measruing_unit' => 'جرام', 'image' => 'IMG_3111.JPG', 'category_id' => '5'],
                    ['id' => '19', 'name' => 'حمص', 'size' => '700', 'measruing_unit' => 'جرام', 'image' => 'IMG_3103.JPG', 'category_id' => '5'],
                    ['id' => '20', 'name' => 'حمص', 'size' => '1700', 'measruing_unit' => 'جرام', 'image' => 'IMG_3128.JPG', 'category_id' => '5'],
                ];
                return view('front.menu',compact('products','categories'));
            }else{
                if($name == 'سلطات'){
                    $categories = [
                        ['id' => '1', 'name' => 'سلطات'],
                    ];
                    $products = [
                        ['id' => '10', 'name' => 'سلطة تركية', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3082.JPG', 'category_id' => '1'],
                        ['id' => '11', 'name' => 'سلطة باذنجان', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3083.JPG', 'category_id' => '1'],
                        ['id' => '12', 'name' => 'سلطة باذنجان', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3094.JPG', 'category_id' => '1'],
                        ['id' => '13', 'name' => 'سلطة ذرة بالمايونيز', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3087.JPG', 'category_id' => '1'],
                    ];
                    return view('front.menu',compact('products','categories'));
                }
                if($name == 'حمص'){
                    $categories = [
                        ['id' => '5', 'name' => 'حمص'],
                    ];
                    $products = [
                        ['id' => '16', 'name' => 'حمص', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3115.JPG', 'category_id' => '5'],
                        ['id' => '17', 'name' => 'حمص', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3100.JPG', 'category_id' => '5'],
                        ['id' => '18', 'name' => 'حمص', 'size' => '400', 'measruing_unit' => 'جرام', 'image' => 'IMG_3111.JPG', 'category_id' => '5'],
                        ['id' => '19', 'name' => 'حمص', 'size' => '700', 'measruing_unit' => 'جرام', 'image' => 'IMG_3103.JPG', 'category_id' => '5'],
                        ['id' => '20', 'name' => 'حمص', 'size' => '1700', 'measruing_unit' => 'جرام', 'image' => 'IMG_3128.JPG', 'category_id' => '5'],
                    ];
                    return view('front.menu',compact('products','categories'));
                }
                if($name == 'ألبان'){
                    $categories = [
                        ['id' => '3', 'name' => 'ألبان'],
                    ];
                    $products = [
                        ['id' => '1', 'name' => 'لبن', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3141.JPG', 'category_id' => '3'],
                        ['id' => '2', 'name' => 'شمينت', 'size' => '110', 'measruing_unit' => 'جرام', 'image' => 'IMG_3137.JPG', 'category_id' => '3'],
                        ['id' => '3', 'name' => 'لبن أب', 'size' => '200', 'measruing_unit' => 'مل', 'image' => 'IMG_3074.JPG', 'category_id' => '3'],
                        ['id' => '4', 'name' => 'لبن أب', 'size' => '330', 'measruing_unit' => 'مل', 'image' => 'IMG_3036.JPG', 'category_id' => '3'],
                        ['id' => '5', 'name' => 'لبن أب', 'size' => '350', 'measruing_unit' => 'مل', 'image' => 'IMG_3049.JPG', 'category_id' => '3'],
                        ['id' => '6', 'name' => 'لبن أب', 'size' => '1', 'measruing_unit' => 'لتر', 'image' => 'IMG_3040.JPG', 'category_id' => '3'],
                        ['id' => '7', 'name' => 'لبن رايب', 'size' => '1', 'measruing_unit' => 'كليو', 'image' => 'IMG_3058.JPG', 'category_id' => '3'],
                        ['id' => '8', 'name' => 'لبن رايب', 'size' => '1.5', 'measruing_unit' => 'كليو', 'image' => 'IMG_3062.JPG', 'category_id' => '3'],
                        ['id' => '9', 'name' => 'لبن مش', 'size' => '1', 'measruing_unit' => 'كليو', 'image' => 'IMG_3068.JPG', 'category_id' => '3'],
                    ];
                    return view('front.menu',compact('products','categories'));
                }
                if($name == 'أجبان'){
                    $categories = [
                        ['id' => '2', 'name' => 'أجبان'],
                    ];
                    $products = [
                        ['id' => '14', 'name' => 'جبنة فيتا', 'size' => '100', 'measruing_unit' => 'جرام', 'image' => 'IMG_3153.JPG', 'category_id' => '2'],
                        ['id' => '15', 'name' => 'جبنة بيضاء', 'size' => '350', 'measruing_unit' => 'جرام', 'image' => 'IMG_3161.JPG', 'category_id' => '2'],
                    ];
                    return view('front.menu',compact('products','categories'));
                }
            }

        }
    }
    public function product($id){
        if (isset($id)){
            $products = [
                ['id' => '1', 'name' => 'لبن', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3141.JPG', 'category_id' => '3'],
                ['id' => '2', 'name' => 'شمينت', 'size' => '110', 'measruing_unit' => 'جرام', 'image' => 'IMG_3137.JPG', 'category_id' => '3'],
                ['id' => '3', 'name' => 'لبن أب', 'size' => '200', 'measruing_unit' => 'مل', 'image' => 'IMG_3074.JPG', 'category_id' => '3'],
                ['id' => '4', 'name' => 'لبن أب', 'size' => '330', 'measruing_unit' => 'مل', 'image' => 'IMG_3036.JPG', 'category_id' => '3'],
                ['id' => '5', 'name' => 'لبن أب', 'size' => '350', 'measruing_unit' => 'مل', 'image' => 'IMG_3049.JPG', 'category_id' => '3'],
                ['id' => '6', 'name' => 'لبن أب', 'size' => '1', 'measruing_unit' => 'لتر', 'image' => 'IMG_3040.JPG', 'category_id' => '3'],
                ['id' => '7', 'name' => 'لبن رايب', 'size' => '1', 'measruing_unit' => 'كليو', 'image' => 'IMG_3058.JPG', 'category_id' => '3'],
                ['id' => '8', 'name' => 'لبن رايب', 'size' => '1.5', 'measruing_unit' => 'كليو', 'image' => 'IMG_3062.JPG', 'category_id' => '3'],
                ['id' => '9', 'name' => 'لبن مش', 'size' => '1', 'measruing_unit' => 'كليو', 'image' => 'IMG_3068.JPG', 'category_id' => '3'],
                ['id' => '10', 'name' => 'سلطة تركية', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3082.JPG', 'category_id' => '1'],
                ['id' => '11', 'name' => 'سلطة باذنجان', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3083.JPG', 'category_id' => '1'],
                ['id' => '12', 'name' => 'سلطة باذنجان', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3094.JPG', 'category_id' => '1'],
                ['id' => '13', 'name' => 'سلطة ذرة بالمايونيز', 'size' => '90', 'measruing_unit' => 'جرام', 'image' => 'IMG_3087.JPG', 'category_id' => '1'],
                ['id' => '14', 'name' => 'جبنة فيتا', 'size' => '100', 'measruing_unit' => 'جرام', 'image' => 'IMG_3153.JPG', 'category_id' => '2'],
                ['id' => '15', 'name' => 'جبنة بيضاء', 'size' => '350', 'measruing_unit' => 'جرام', 'image' => 'IMG_3161.JPG', 'category_id' => '2'],
                ['id' => '16', 'name' => 'حمص', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3115.JPG', 'category_id' => '5'],
                ['id' => '17', 'name' => 'حمص', 'size' => '200', 'measruing_unit' => 'جرام', 'image' => 'IMG_3100.JPG', 'category_id' => '5'],
                ['id' => '18', 'name' => 'حمص', 'size' => '400', 'measruing_unit' => 'جرام', 'image' => 'IMG_3111.JPG', 'category_id' => '5'],
                ['id' => '19', 'name' => 'حمص', 'size' => '700', 'measruing_unit' => 'جرام', 'image' => 'IMG_3103.JPG', 'category_id' => '5'],
                ['id' => '20', 'name' => 'حمص', 'size' => '1700', 'measruing_unit' => 'جرام', 'image' => 'IMG_3128.JPG', 'category_id' => '5'],
            ];
            foreach ($products as $product){
                if ($product['id'] == $id){
                    return view('front.product',compact('product'));
                }
            }
        }
    }
    public function index(){

        return view('front.index');
    }
    public function contact(){
        return view('front.contact');
    }
    public function about(){
        return view('front.about');
    }
    public function contactSubmit(Request $request) {
        $request->validate([
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $data = $request->except('_token');

        Mail::to('aziz.balaha@gmail.com')->send(new ContactUsMail($data));
        return redirect()->back();

    }
    public function dashboard(){
        return view('admin.layouts.main');
    }
}



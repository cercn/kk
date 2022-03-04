<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;
use App\Models\Faq;
use App\Models\Newsletter;
use App\Models\Page;

use Illuminate\Support\Facades\Validator;


class GuestController extends Controller
{
    public function index(){
        $categories=Categorie::all()->take(12);
        $c_mostselleds = Categorie::Where('libelle','meilleures ventes')->get()->first();
        $c_mostasks = Categorie::Where('libelle','plus demandés')->get()->first();
        $c_bestoffers = Categorie::Where('libelle','meilleures offres')->get()->first();

        if($c_mostasks != null){
            $cmostasks = Product::Where('categorie_id',$c_mostasks->id)->get()->take(6);

        }
        else{
            $cmostasks = [];
        }


        if($c_mostselleds !=null){
            $cmostselleds = Product::Where('categorie_id',$c_mostselleds->id)->get()->take(6);

        }
        else{
            $cmostselleds = [];
        }

        if($c_bestoffers !=null){
            $cbestoffers = Product::Where('categorie_id',$c_bestoffers->id)->get()->take(4);

        }
        else{
            $cbestoffers = [];
        }


        return view('accueil',[
            'categories' => $categories,
            'cmostselleds'=> $cmostselleds,
            'mostasks' => $cmostasks,
            'cbestoffers' => $cbestoffers
        ]);

    }

    public function category($categorie){

        $categories=Categorie::all()->take(7);
        $category = Categorie::Where('libelle',$categorie)->get()->first();
        if($category != null){
            $products = Product::Where('categorie_id',$category->id)->get();

        }
        else{
            $products = [];
        }

        return view('categories.index',[
            'products' => $products,
            'categories' => $categories,
            'categorie' => $categorie
         ]);
    }

    public function infoProduct($id){
        $categories=Categorie::all()->take(7);
        $product = Product::find($id);

        return view('products.index',[
            'product' => $product,
            'categories' => $categories,

         ]);


    }


    public function listcategories(){
        $categories=Categorie::all()->take(7);
        $categoriesall=Categorie::all();
        return view('categories.list',[
            'categories' => $categories,
            'categoriesall' => $categoriesall
         ]);
    }


    public function searchProducts(Request $request){

        $results = Product::search($request->input('product'));

        $word = $request->product;
        return view('recherche',[
            'word' =>$word ,
            'products' => $results
        ]);
    }



    public function  help(){
        $faqs = Faq::all();
        return view('aide',['faqs' => $faqs]);
      }


    public function registerToNewsletter(Request $request){

        $validator = Validator::make($request->all(), Newsletter::$rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors,401);
        }


        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();

        return response()->json('Votre email a été bien enregistré, Nous vous enverrons les derniers arrivages dans votre boîte mail.',200);

    }


    public function afficherPageAdmin($slug){
        $page = Page::where('slug',$slug)->get()->first();

        return view('page',['page'=>$page]);
    }


    public function afficherPage($slug){


        try {

            $page = Page::where('slug',$slug)->get()->first();

            if($page == null){
                $data = "La page demandée est actuellement indisponible";
                return view('errors.404',['data' => $data]);
            }

            return view('page',['page'=>$page]);

          } catch (Exception $exception){
            Log::error($exception->getMessage());
            abort(404);
          }
    }


}

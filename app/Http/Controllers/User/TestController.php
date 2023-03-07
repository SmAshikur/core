<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\{
    Models\Item,
    Models\Wishlist,
    Http\Controllers\Controller
};

use Auth;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{

    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     */
    public function __construct()
    {
        //$this->middleware('auth',['except' => ['store']]);
        //$this->middleware('localize');
    }

    public function index()
    {
        return "ok";
        return view('user.test.index');
    }
    
    public function storeFirst(Request $request){
        
        $data =  $request->except("_token");
        $sum = 0;
        foreach($data as $key => $item){
            $sum = $sum+$item;
        }
        return view('user.test.mark',compact('sum'));
    }
}





















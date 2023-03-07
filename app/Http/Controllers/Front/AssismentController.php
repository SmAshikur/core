<?php

namespace App\Http\Controllers\Front;

use Illuminate\{
    Http\Request,
};

use App\{
    Models\Item,
    Models\Category,
    Http\Controllers\Controller,
};
use App\Helpers\PriceHelper;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Brand;
use App\Models\ChieldCategory;
use App\Models\Setting;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Session;

class AssismentController extends Controller
{
    public function __construct()
    {
        $this->middleware('localize');
    }

	public function childrenSkills()
	{
	    return view('front.assisment.children_skills');
	}
	
	public function childrenSkillsStore(Request $request){
	     
        $data =  $request->except("_token");
       
       if($data){
           return view('front.assisment.result.bkash_payment');
           //return view('front.assisment.result.children_skills',compact('sum'));
       }
        
        
	}
	
	public function resultChildren(){
	    $sum = 25;
	    return view('front.assisment.result.children_skills',compact('sum'));
	}
}























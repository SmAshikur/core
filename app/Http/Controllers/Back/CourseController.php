<?php

namespace App\Http\Controllers\Back;

use App\Models\Course;
use App\Models\CourseOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\ImageHelper;
class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
    }
    
    public function index(){
        
         return view('back.course.index',[
            'datas' => Course::latest()->get(),
        ]);
    }
    public function create(){
        return view('back.course.create');
    }
    public function store(Request $request){
        
        
        
        $input = $request->all();
        $input['image'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        $input['slug']=Str::slug($request->title);
        
        Course::create($input);
        return redirect()->route('back.course.index')->withSuccess(__('New Course Added Successfully.'));
    }
    public function show(){
        
    }
    public function edit($id){
        //return Course::find($id);
        return view('back.course.edit',[
            'data'    => Course::find($id),
        ]);
    }
    public function update(Request $request , $id){
        $course = Course::find($id);
        
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['image'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$course,'/assets/images/','photo');

        }
        $course->update($input);
        return redirect()->route('back.course.index')->withSuccess(__('Course Updated Successfully.'));
    }
    public function destroy($id){
        $course = Course::find($id);
        ImageHelper::handleDeletedImage($course,'photo','assets/images/');
        $course->delete();
        return redirect()->route('back.course.index')->withSuccess(__('Course Deleted Successfully.'));
    }
    
    public function getOrder(){
        return view('back.course.order',[
            'datas' => CourseOrder::all(),
        ]);
    }
    
    public function corseOrderStatus($id,$status){
        CourseOrder::find($id)->update([
           'status' =>$status,
        ]);
        return redirect()->route('back.order.index')->withSuccess(__('Order Status Updated.'));
    }
    
}
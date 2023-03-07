<?php

namespace App\Http\Controllers\Back;

use App\AssessmentCategory;
use Illuminate\Http\Request;
use App\{
    Http\Controllers\Controller,
    Http\Requests\AssessmentCategoryRequest,
    Repositories\Back\AssessmentCategoryRepository
};

class AssessmentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(AssessmentCategoryRepository $repository)
     {
         $this->middleware('auth:admin');
         $this->middleware('adminlocalize');
         $this->repository = $repository;
     }

    public function index()
    {
        return view('back.tests.category.index',[
            'datas' => AssessmentCategory::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tests.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->store($request);
        return redirect()->route('back.assessment_category.index')->withSuccess(__('New Assesment Category Added Successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AssessmentCategory  $assessmentCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AssessmentCategory $assessmentCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AssessmentCategory  $assessmentCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AssessmentCategory $assessmentCategory)
    {
        //dd($assessmentCategory);
        return view('back.tests.category.edit',compact('assessmentCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AssessmentCategory  $assessmentCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssessmentCategory $assessmentCategory)
    {
        $this->repository->update($assessmentCategory, $request);
        return redirect()->route('back.assessment_category.index')->withSuccess(__('Brand Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AssessmentCategory  $assessmentCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssessmentCategory $assessmentCategory)
    {
        $this->repository->delete($assessmentCategory);
        return redirect()->route('back.assessment_category.index')->withSuccess(__('Brand Deleted Successfully.'));
    }
}

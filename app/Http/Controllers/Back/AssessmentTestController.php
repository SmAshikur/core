<?php

namespace App\Http\Controllers\Back;

use App\AssessmentTest;
use Illuminate\Http\Request;
use App\{
    Http\Controllers\Controller,
    Http\Requests\AssessmentRequest,
    Repositories\Back\AssessmentRepository
};

class AssessmentTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(AssessmentRepository $repository)
    {
        $this->middleware('auth:admin');
        $this->middleware('adminlocalize');
        $this->repository = $repository;
    }

    public function index()
    {
        return view('back.tests.assessment.index',
    [ 'datas' => AssessmentTest::with('category')->orderBy('id','desc')->get()]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.tests.assessment.create');
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
        return redirect()->route('back.assessment.index')->withSuccess(__('New Assesment Category Added Successfully.'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AssessmentTest  $assessmentTest
     * @return \Illuminate\Http\Response
     */
    public function show(AssessmentTest $assessmentTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AssessmentTest  $assessmentTest
     * @return \Illuminate\Http\Response
     */
    public function edit(AssessmentTest $assessment)
    {
       // dd($assessment);
        return view('back.tests.assessment.edit',compact('assessment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AssessmentTest  $assessmentTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssessmentTest $assessment)
    {
      //  dd($assessment);
        $this->repository->update($assessment, $request);
        return redirect()->route('back.assessment.index')->withSuccess(__('Assessment Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AssessmentTest  $assessmentTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssessmentTest $assessment)
    {
        $this->repository->delete($assessment);
        return redirect()->route('back.assessment_category.index')->withSuccess(__('Assessment Deleted Successfully.'));
    }
}

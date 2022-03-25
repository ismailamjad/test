<?php

namespace App\Http\Controllers;

use App\Models\PropertyReview;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PropertyReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // dd($id);
        $get_reviews = PropertyReview::where('property_id' , $id)->get();
        return $get_reviews;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        $data = $request->all();
        PropertyReview::create( $data);
        return 'created';

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyReview  $propertyReview
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyReview $propertyReview , $id)
    {
        // // dd('hh');
        // $reviews = PropertyReview::findOrFail($id);
        // return $reviews;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyReview  $propertyReview
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyReview $propertyReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyReview  $propertyReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyReview $propertyReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyReview  $propertyReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyReview $propertyReview)
    {
        //
    }
}

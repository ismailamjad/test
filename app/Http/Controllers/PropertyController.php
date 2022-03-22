<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PropertyController extends Controller
{
    public function index()
    {
        return Inertia::render('Property/property-listing', [
            "property" => Property::get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Property/new-property');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        
        Property::create( $data);

        return redirect()->route('property.index');
    }

    public function uploadImages(Request $request){
        $files = $request->file('image');
        dd($files);
    }
   
    public function show(Property $property)
    {
        //
       
    }

   
    public function edit($id)
    {
        return Inertia::render('Property/edit-property', [
            "property" => Property::findOrFail($id),
            "id" => $id,
        ]);
        
        // return Property::findOrFail($id);
    }

    
    public function update(Request $request ,$id)
    {
        $property = Property::find($id);
        $property->update($request->all());
        return redirect()->route('property.index');
    }

    public function destroy(Request $request, $id)
    {
        Property::find($id)->delete();
        return redirect()->route('property.index');
    }

    public function property_detail($id){
        return Inertia::render('Property/propertydetail', [
            "property" => Property::find($id),
            "id" => $id,
        ]);
        
    }
}

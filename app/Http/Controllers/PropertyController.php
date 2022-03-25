<?php

namespace App\Http\Controllers;

use App\Http\Traits\ImageUpload;
use App\Models\Property;
use App\Models\PropertyReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PropertyController extends Controller
{
    // use ImageUpload;

    public function index()
    {
        $qr_code =  QrCode::size(200)->generate('W3Adda dsLaravel Tutorial');

        // return $qr_code;
        return Inertia::render('Property/property-listing', [
            "properties" => Property::get(),
            // "qr" => $qr_code
        ]);
    }

    public function create()
    {
        return Inertia::render('Property/new-property');
    }

    public function store(Request $request)
    {
/* Code for image
        $files = $request->files;
        // $path = Storage::disk('local2')->put($files, 'public');
        $i_get_image = $this->uploadMany($files , 'properties/');
        dd($i_get_image);

*/
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        Property::create( $data);
        return redirect()->route('property.index');
    }

    public function uploadImages(Request $request){
        
    }
   
    //for detailed property
    public function show(Request $request ,$id)
    {
        return Inertia::render('Property/propertydetail', [
            "property" => Property::find($id),
            "reviews" => PropertyReview::where('property_id' , $id)->get(),
            "id" => $id,
        ]); 
    }

   
    public function edit($id)
    {
        return Inertia::render('Property/edit-property', [
            "property" => Property::findOrFail($id),
            "id" => $id,
        ]);
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

}

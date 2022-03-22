<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Profile/show', [
            "user" => auth()->user()
        ]);
    }
    public function edit($id)
    {
        return Inertia::render('Profile/UpdateProfileInformationForm', [
            "profile" => User::findOrFail($id),
            "id" => $id,
        ]);
    }

    
    public function update(Request $request ,$id)
    {
        $profile = User::find($id);
        $profile->update($request->all());
        return redirect()->route('profile.show');
    }

    public function destroy(Request $request, $id)
    {
        User::find($id)->delete();
        return redirect()->route('register');
    }


}

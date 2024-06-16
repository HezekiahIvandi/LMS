<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
class ProfileController extends Controller
{
    //
    public function index(){
        return view('profile.profile');
    }
    
    public function update(Request $request){
        $userId = Auth::id();
        // Get the currently authenticated user
        $validatedData = $request->validate([
            'name'=> ['nullable', 'string'],
            'email'=> ['email', 'nullable'],
        ]);
          // Filter out null values
        $dataToUpdate = array_filter($validatedData, function($value) {
            return !is_null($value);
        });

        // Update user only if there is data to update
        if (!empty($dataToUpdate)) {
            User::where('id', $userId)->update($dataToUpdate);
        }
        return redirect()->back()->with('success', 'User updated successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        return redirect()->back()->with('success', 'Informasi pengguna berhasil disunting!');
    }

    public function destroy(Request $request){
        $userId = Auth::id();
        // Find the user by ID
        $user = User::findOrFail($userId);

        // Delete the user's account
        $user->delete();

        // Log the user out
        Auth::logout();

        // Redirect to the homepage or login page with a success message
        return redirect('/')->with('success', 'Your account has been deleted successfully.');
    }

    public function editPfp(Request $request){
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $validated = $request->validate([
            'profile_picture_url' => ['image', 'required','mimes:jpeg,png,gif','max:2048'],
        ]);
        
        $imgPath = $request->file('profile_picture_url')->store('profile','public');
        $imgPath = 'storage/'.$imgPath;
        $validated['profile_picture_url']= $imgPath;

        Storage::disk('public')->delete($user->profile_picture_url);

        $user->update($validated);
        

        return redirect()->back()->with('success', 'Foto profil pengguna berhasil disunting!');
    }
}

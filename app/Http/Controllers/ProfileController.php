<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use DB;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Auth::user();
        // $profile = Auth::user();
        

        return view('profile.profile_show', ['profile' => $profile]);
    }

    public function edit(){

        // $commission = Commission::find($id);
        $profile = Auth::user()->find($id);

        return view('profile.edit', ['profile' => $profile]);
    }

    public function update(Request $request)
    {

        $profile = Auth::user()->find();
        $profile->fill($request->all())->save();

        return redirect('profile')->with('flash_message', __('Registered.'));
    }
}

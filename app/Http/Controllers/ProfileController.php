<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;

class ProfileController extends Controller
{
    public function show()
    {

        $profile = Auth::user()->find();

        return view('profile.show', ['profile' => $profile]);
    }

    public function edit(){

        // $commission = Commission::find($id);
        $profile = Auth::user()->find();

        return view('profile.edit', ['profile' => $profile]);
    }

    public function update(Request $request)
    {

        $profile = Auth::user()->find();
        $profile->fill($request->all())->save();

        return redirect('profile')->with('flash_message', __('Registered.'));
    }
}

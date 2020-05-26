<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)
    {

        $profile = User::find($id);

        return view('profile.show', ['profile' => $profile]);
    }

    public function edit($id){

        // $commission = Commission::find($id);
        $profile = Auth::user()->find($id);

        return view('profile.edit', ['profile' => $profile]);
    }

    public function update(Request $request, $id)
    {

        $profile = User::find($id);
        $profile->fill($request->all())->save();

        return redirect('profile')->with('flash_message', __('Registered.'));
    }
}

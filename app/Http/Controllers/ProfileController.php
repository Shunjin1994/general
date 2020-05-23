<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit($id){
        if(!ctype_digit($id)){
            return redirect('/mypage/profile')->with('flash_message', __('Invalid operation was performed.'));
        }

        // $commission = Commission::find($id);
        $user = Auth::user()->users()->find($id);

        return view('mypage.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        if(!ctype_digit($id)){
            return redirect('/mypage/profile')->with('flash_message', __('Invalid operation was performed.'));
        }

        $user = User::find($id);
        $user->fill($request->all())->save();

        return redirect('/mypage/profile')->with('flash_message', __('Registered.'));
    }
}

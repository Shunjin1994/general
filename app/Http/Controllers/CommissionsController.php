<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Commission;
use Illuminate\Support\Facades\Auth;


class CommissionsController extends Controller
{
    public function index(){
        $commissions = Commission::all();
        return view('commissions.index', ['commissions' => $commissions]);     //combine('commissions') は ['commissions' => $commissions] と同じ
    }

    public function mypage(){
        $commissions = Auth::user()->commissions()->get();       //Auth::user()->commissions でも可
        return view('mypage', ['commissions' => $commissions]);
    }

    public function new()
    {
        return view('commissions.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            "title"=> 'required|string|max:255',
            "details"=> 'required|string|max:255',
            "category_id"=> 'required|integer',
            "conditions"=> 'required|string|max:255',
            "rank"=> 'required|integer',
            "price"=> 'integer|integer',
            "delivery_date"=> 'required|integer',
            "supplement"=> 'required|string|max:255'
        ]);

        
        $commission = new Commission;

        // $commission->fill($request->all())->save();
        Auth::user()->commissions()->save($commission->fill($request->all()));

        return redirect('/commissions/new')->with('flash_message', __('Registered'));
    }

    public function show($id)
    {
        // GETパラメータが数字かどうかをチェックする
        if(!ctype_digit($id)){
            return redirect('/commissions/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        $commission = Commission::find($id);

        return view('commissions.show', ['commission' => $commission]);
    }

    public function edit($id){
        if(!ctype_digit($id)){
            return redirect('/commissions/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        // $commission = Commission::find($id);
        $commission = Auth::user()->commissions()->find($id);

        return view('commissions.edit', ['commission' => $commission]);
    }

    public function update(Request $request, $id)
    {
        if(!ctype_digit($id)){
            return redirect('/commissions/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        $commission = Commission::find($id);
        $commission->fill($request->all())->save();

        return redirect('/commissions')->with('flash_message', __('Registered.'));
    }

    public function destroy($id)
    {
        if(!ctype_digit($id)){
            return redirect('/commissions/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        // $commission = Commission::find($id);
        // $commission->delete();

        //こう書いた方がスマート
        // Commission::find($id)->delete();

        $commission = Auth::user()->commissions()->find($id);
        $commission->delete();

        return redirect('/commissions')->with('flash_message', __('Deleted.'));
    }

    // 検索
    public function search(Request $rq)
    {
        //キーワード受け取り
        $keyword = $rq->input('keyword');
        
        //クエリ生成
        $query = \App\Commission::query();
        
        //もしキーワードがあったら
        if(!empty($keyword))
        {
            $query->where('title','like','%'.$keyword.'%')->orWhere('title','like','%'.$keyword.'%');
        }
        
        //ページネーション
        $commissions = $query->orderBy('id','desc')->paginate(5);
        return view('commissions.index')->with('commissions',$commissions)->with('keyword',$keyword);
    }

    // public function initialize(){

    //     $commissions = Commission::all(); // テーブル：commissionsから全件を取得
    //     $commissions = Commission::paginate(5); // 1ページに表示されるデータを5件に設定
    //     return view('commissions', ['commissions' => $commissions]);

    // }
}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ __('Mypage') }}</h2>
        
        <div class="col-sm-2" style="margin-bottom:10px">
            <a href="{{ route('commissions.new') }}" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> 新規登録</a>
        </div>
        
        <div class="row">

            @foreach ($commissions as $commission)

            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $commission->title }}</h3>
                        <a href="{{ route('commissions.show',$commission->id ) }}" class="btn btn-primary">{{ __('Go Commission')  }}</a>
                        <a href="{{ route('commissions.edit',$commission->id ) }}" class="btn btn-warning">{{ __('Go Edit')  }}</a>
                        <form action="{{ route('commissions.delete',$commission->id ) }}" method="post" class="d-inline">
                            @csrf
                            <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>{{ __('Go Delete')  }}</button>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
@endsection
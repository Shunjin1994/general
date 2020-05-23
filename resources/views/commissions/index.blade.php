@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ __('Commission List') }}</h2>
        <div class="row">

            <div class="row" style="margin-bottom: 30px;">
                <div class="col-sm-10" style="margin-bottom: 10px;">
                    <form method="get" action="" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="keyword" class="form-control" value="{{ $keyword }}" placeholder="検索キーワード">
                        </div>
                        <input type="submit" value="検索" class="btn btn-info">
                    </form>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('commissions.new') }}" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> 新規登録</a>
                </div>
            </div>

            @foreach ($commissions as $commission)

            <div class="col-sm-12">
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

        <div>
            {{-- {!! $commissions->render() !!}--}}
            {!! $commissions->appends(['keyword'=>$keyword])->render() !!} 
            <!-- {{ $commissions->links() }} -->
        </div>
    </div>
@endsection

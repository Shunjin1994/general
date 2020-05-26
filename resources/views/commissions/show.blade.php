@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Practice').'「'.$commission->title.'」' }}</div>

                    <div class="card-body text-center">
                        <span>詳細</span><p>{{ $commission->details }}</p>
                        <span>報酬</span><p>{{ $commission->price }}</p>
                        <span>応募条件</span><p>{{ $commission->conditions }}</p>
                        <span>必要ランク</span><p>{{ $commission->rank }}</p>
                        <span>納期</span><p>{{ $commission->delivery_date }}</p>
                        <span>その他補足情報</span><p>{{ $commission->supplement }}</p>
                        <span>発注日</span><p>{{ $commission->created_at }}</p>
                        <p>{{ $commission->status }}</p>


                        <div class="form-group row">
                            <label for="application_message" class="col-md-4 col-form-label text-md-right">{{ __('Application_Message') }}</label>

                            <div class="col-md-6">
                                <input id="application_message" type="text" class="form-control @error('application_message') is-invalid @enderror" name="application_message" value="{{ old('application_message') }}" autocomplete="application_message" autofocus>

                                @error('application_message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Application') }}
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
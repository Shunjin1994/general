@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Practice').'「'.$commission->title.'」' }}</div>

                    <div class="card-body text-center">
                        <p>{{ $commission->details }}</p>
                        <p>{{ $commission->price }}</p>
                        <p>{{ $commission->conditions }}</p>
                        <p>{{ $commission->rank }}</p>
                        <p>{{ $commission->delivery_date }}</p>
                        <p>{{ $commission->supplement }}</p>

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
                            <div class="col-md-6 offset-md-4">
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
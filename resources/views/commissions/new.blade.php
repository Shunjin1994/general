@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Commission Registration') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('commissions.create') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Request Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Request Details') }}</label>

                                <div class="col-md-6">
                                    <input id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" autocomplete="details" autofocus>

                                    @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                                <div class="col-md-6">
                                    <input id="category_id" type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ old('category_id') }}" autocomplete="category_id" autofocus>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="conditions" class="col-md-4 col-form-label text-md-right">{{ __('Conditions') }}</label>

                                <div class="col-md-6">
                                    <input id="conditions" type="text" class="form-control @error('conditions') is-invalid @enderror" name="conditions" value="{{ old('conditions') }}" autocomplete="conditions" autofocus>

                                    @error('conditions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rank" class="col-md-4 col-form-label text-md-right">{{ __('Rank') }}</label>

                                <div class="col-md-6">
                                    <input id="rank" type="text" class="form-control @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" autocomplete="rank" autofocus>

                                    @error('rank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" autocomplete="price" autofocus>円

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="delivery_date" class="col-md-4 col-form-label text-md-right">{{ __('Delivery_date') }}</label>

                                <div class="col-md-6">
                                    <input id="delivery_date" type="text" class="form-control @error('delivery_date') is-invalid @enderror" name="delivery_date" value="{{ old('delivery_date') }}" autocomplete="delivery_date" autofocus>日

                                    @error('delivery_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="supplement" class="col-md-4 col-form-label text-md-right">{{ __('Supplement') }}</label>

                                <div class="col-md-6">
                                    <input id="supplement" type="text" class="form-control @error('supplement') is-invalid @enderror" name="supplement" value="{{ old('supplement') }}" autocomplete="supplement" autofocus>

                                    @error('supplement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Commission') }}
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
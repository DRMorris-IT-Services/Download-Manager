@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Update Software') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($software as $s)
                    <form method="POST" action="{{ route('software.update',['id' => $s->api_key]) }}">
                        @csrf

                        
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Software Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $s->software_name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Software Description') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $s->software_description }}" required autocomplete="description" autofocus>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="version" class="col-md-4 col-form-label text-md-right">{{ __('Software Version') }}</label>

                        <div class="col-md-6">
                            <input id="version" type="text" class="form-control @error('version') is-invalid @enderror" name="version" value="{{ $s->software_version }}" required autocomplete="version" autofocus>

                            @error('version')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('Download URL') }}</label>

                        <div class="col-md-6">
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $s->software_download_url }}" required autocomplete="url" autofocus>

                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @endforeach
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
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

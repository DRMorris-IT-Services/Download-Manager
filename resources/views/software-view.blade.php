@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Software Details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($software as $s)

                    <div class="form-group row">
                        <label for="api_key" class="col-md-4 col-form-label text-md-right">{{ __('Software API') }}</label>

                        <div class="col-md-8">
                            {{$s->api_key}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Software Name') }}</label>

                        <div class="col-md-6">
                            {{$s->software_name}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Software Description') }}</label>

                        <div class="col-md-6">
                           {{$s->software_description}}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="version" class="col-md-4 col-form-label text-md-right">{{ __('Software Version') }}</label>

                        <div class="col-md-6">
                            {{$s->software_version}}
                        </div>
                    </div>

                    

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('Download URL') }}</label>

                        <div class="col-md-6">
                            {{$s->software_download_url}}
                        </div>
                    </div>

                    @endforeach
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <a href="{{ route('software')}}"><button type="button" class="btn btn-primary">
                                {{ __('Close') }}
                            </button></a>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

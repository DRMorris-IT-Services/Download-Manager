@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Your Download') }}</div>

                <div class="card-body">
                    @foreach($software as $ul)
                   <h1>Thank You</h1>
                   <p>Please use the link below to download your software:</p>

                
                   <a href="{{$ul->software_download_url}}"><button class="btn btn-primary">Download</button></a>
                   @endforeach

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

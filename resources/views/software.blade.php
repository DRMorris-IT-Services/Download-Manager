@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Software') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Software</th>
                            <th>Description</th>
                            <th>Version</th>
                            
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($software as $s)
                        <tr>
                            <td>{{$s->software_name}}</td>
                            <td>{{$s->software_description}}</td>
                            <td>{{$s->software_version}}</td>
                        
                            <td><a href="{{route('software.view',['id' => $s->api_key])}}">View</a>
                            <a href="{{route('software.edit',['id' => $s->api_key])}}"> Edit</a></td>
                                
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

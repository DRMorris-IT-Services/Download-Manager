@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Downloads') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Software</th>
                            <th>Version</th>
                            <th>Download Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($downloads as $dn)
                                <tr>
                                    <td>{{$dn->name}}</td>
                                    <td>{{$dn->email}}</td>
                                    <td>{{$dn->software_name}}</td>
                                    <td>{{$dn->software_version}}</td>
                                    <td>{{$dn->created_at}}</td>
                                    <td><a href="{{ route('downloads.delete',['id' => $dn->id])}}">Delete</a></td>
                            @endforeach
                        
                        </tbody>
                    </table>
                    {{ $downloads->links() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

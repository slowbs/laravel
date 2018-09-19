@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
<h1>Test query</h1>
@foreach ($profile as $object)
    {{ $object->email }}
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

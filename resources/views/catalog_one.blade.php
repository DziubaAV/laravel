@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $catalog->name }}</div> 

                <div class="card-body">
                
                <div>{{  $catalog->name  }}</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

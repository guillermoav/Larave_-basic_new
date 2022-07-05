@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ $post->body }}                            
                        </p>
                        <div class="">
                            <em>
                                &ndash;{{ $post->user->name}}                                
                            </em>
                            {{ $post->updated_at->format('d M y H:d:m')}}
                        </div>
                    </div>
                </div>           
        </div>
    </div>
</div>
@endsection

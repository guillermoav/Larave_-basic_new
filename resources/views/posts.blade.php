@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="card">
                    <div class="card-body">
                        @if($post->image)
                            <img src="{{ $post->get_imagen }}" alt="" class="card-img-top">
                        @elseif ($post->iframe)
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $post->iframe !!}
                            </div>                            
                        @endif

                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ $post->get_excerpt }}
                            <a href="{{ route('post', $post)}}">Leer más</a>
                        </p>
                        <div class="">
                            <em>
                                &ndash;{{ $post->user->name}}                                
                            </em>
                            {{ $post->updated_at->format('d M y H:d:m')}}
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $posts->links("pagination::bootstrap-4")}}
            
        </div>
    </div>
</div>
@endsection

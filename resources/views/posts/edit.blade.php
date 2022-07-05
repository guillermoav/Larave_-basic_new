@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar post</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif


                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Título*</label>
                            <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Image*</label>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label for="">Contenido*</label>
                            <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Contenido emebebido</label>
                            <textarea name="iframe" rows="6" class="form-control" >{{ old('iframe', $post->iframe) }}</textarea>
                        </div>

                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar" class="btn btn-sm btn-primary">
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
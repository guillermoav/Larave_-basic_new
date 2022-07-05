@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear post</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif


                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Título*</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Image*</label>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label for="">Contenido*</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Contenido emebebido</label>
                            <textarea name="iframe" rows="6" class="form-control" ></textarea>
                        </div>

                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

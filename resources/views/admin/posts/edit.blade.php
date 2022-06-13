@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ old('title',$post->title)}}"
            placeholder="Inserire il titolo del Post">
        </div>    
        <div class="form-group">
            <label for="title">Contenuto del Post</label>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="Inserisci il contenuto del Post">
                {{ old('content',$post->content) }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="title">Immagine del Post</label>
            <input name="image" type="url" class="form-control" id="image" 
            placeholder="Inserire Url dell'immagine" value="{{ old('image',$post->image) }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>
    </form>
</div>
@endsection
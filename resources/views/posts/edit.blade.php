@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редактировать пост</div>
                    <div class="card-body" ></div>
                    <form method="post" action="{{route('post.update', ['post'=> $post])}}" enctype="multipart/form-data">
                        @csrf
                        <p>Заголовок: <br><input type="text" name="title" value="{{ $posts->title }}" class="form-control"></p>
                        <p>Фотография: <br><input type="text" name="image" value="{{ $posts->image }}" class="form-control"></p>
                        <p>Описание: <br><input type="text" name="content" value="{{ $posts->content }}" class="form-control"></p>
                        <p>Пользователь: <br><input type="text" name="user_id" value="{{ $posts->user_id }}" class="form-control"></p>
                        <br><hr>
                        <button type="submit" class="btn btn-success">Применить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

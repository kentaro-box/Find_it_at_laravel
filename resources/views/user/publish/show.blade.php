@extends('layouts.app')

@section('content')
<div class="container ">
   
    @if($posts->isEmpty())
        <h2>has no records</h2>
    @endif

    @foreach ($posts as $post)

        <h3>{{ $post->title }}</h3>
        <p>{{ $post->body }}</p>   
        <p><img src="/storage/images/{{$post->image}}" width="300px"></p>
        <p>{{ $post->deadline }}</p>
        <p>{{ $post->material }}</p>
        <p>{{ $post->amount }}</p>
        <p>{{ $post->frequency }}</p>
        <p>{{ $post->asking_price }}</p>
        <p>{{ $post->first_delivery_date }}</p>
        <p>{{ $post->finished_use }}</p>
        <p>{{ $post->created_at }}</p>
        <div class="d-flex">
            <form action="">
            <a href="{{ route('publish.delete', ['post_id' => $post->id]) }}" class="btn btn-danger">削除</a>
            </form>
           
            <a href="{{ route('publish.edit', ['post_id' => $post->id]) }}" class="btn btn-warning">編集</a>
            

        </div>
        
    @endforeach
    {{-- 削除および編集ボタンつける --}}
        
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container ">
    
                <a href="">全件取得</a>
                @foreach ($posts as $post)
                <p>{{ $post->tittle }}</p>
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
                @endforeach
                {{-- 削除および編集ボタンつける --}}
        
</div>
@endsection

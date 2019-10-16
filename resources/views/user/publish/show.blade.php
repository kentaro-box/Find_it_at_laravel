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
        <form action="">

        </form>

        <form action="">
            
        </form>
    @endforeach
    {{-- 削除および編集ボタンつける --}}
        
</div>
@endsection

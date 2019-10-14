@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="d-flex flex-wrap">
        <div class="m-auto w-50">
            <div class="m-auto">
                <a href="{{ route('publish.create') }}">新規掲載</a>
            </div>
        </div>
        <div class="m-auto w-50">
            <div class="m-auto">
                <a href="{{ route('publish.show', ['id' => $user->id]) }}">自社掲載閲覧</a>
            </div>
        </div>
        <div class="m-auto w-50">
            <div>
                <a href="">掲載削除</a>
            </div>
        </div>
        <div class="m-auto w-50">
            <div>
                <a href="">掲載削除</a>
            </div>
        </div>
    </div>
</div>
@endsection

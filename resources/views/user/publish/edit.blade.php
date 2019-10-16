@extends('layouts.contractor')

@section('content')
<div class="container" style="max-width: 800px;">
    <h3 class="text-danger mb-0">※変更画面</h3>

<form class="mt-5" method="POST" action="{{ route('publish.update',['post_id' => $post->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-12 mb-4">
            <label for="input_title">タイトル</label>
            <input type="title" name="title" value="{{ old('title', $post->title) }}" class="form-control" id="input_title" placeholder="鶏肉の加工をお願いしたいです。">
            </div>
            <div class="form-group col-md-12 mb-4">
            <label for="input_body">概要説明</label>
            <textarea type="text" name="body" class="form-control" id="input_body" placeholder="鶏もも肉を３０gカットで.....">{{ old('body', $post->body) }}</textarea>
            </div>
        </div>
        <div class="form-group mb-4">
            <label for="input_image">イメージ画像又は実物の画像</label>
        <input type="file" name="image" value="{{ old('image', $post->image) }}" class="form-control" id="input_image" placeholder="画像があれば添付">
        </div>
        @if($post->image)
            <label for="before-img" class="col-md-4 col-form-label text-md-right">現登録画像</label>
            <img src="/storage/images/{{ $post->image }}" width="300px" >
        @endif
        <div class="form-row">
            <div class="form-group col-md-6 mb-4">
                <label for="input_material">原料の手配</label>
                <select name="material" id="input_material" class="form-control">
                    <option value="相談希望" @if(old('material', $post->material)=='相談希望') @endif>相談希望</option>
                    <option value="原料こちらから送ります" @if(old('material', $post->material)=='原料こちらから送ります') selected  @endif>原料こちらから送ります</option>
                    <option value="そちらで調達願います" @if(old('material', $post->material)=='そちらで調達願います') selected  @endif>そちらで調達願います</option>
                </select>
            </div>
        
            <div class="form-group col-md-6 mb-4">
                <label for="input_deadline">掲載締め切り日</label>
            <input type="date" name="deadline" value="{{ old('deadline', $post->deadline) }}" class="form-control" id="input_deadline">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4 mb-4">
                <label for="input_amount">ロット</label>
            <input type="text" name="amount" value="{{ old('amount', $post->amount) }}" class="form-control" id="input_amount" placeholder="120kg前後">
            </div>

            <div class="form-group col-md-4 mb-4">
                <label for="input_asking_price">希望価格</label>
            <input type="text" name="asking_price" value="{{ old('asking_price', $post->asking_price) }}" class="form-control" id="input_asking_price" placeholder="１kgあたり50円">
            </div>

            <div class="form-group col-md-4 mb-4">
                <label for="input_frequency">使用頻度</label>
            <input type="text" name="frequency" value="{{ old('frequency', $post->frequency) }}" class="form-control" id="input_frequency" placeholder="１月に2〜３回程度">
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="form-group col-md-6 mb-4">
                <label for="input_first_delivery_date">希望初回納品日</label>
            <input type="date" name="first_delivery_date" value="{{ old('first_delivery_date',$post->first_delivery_date) }}" class="form-control" id="input_first_delivery_date">
            </div>

            <div class="form-group col-md-6 mb-4">
                <label for="input_finished_use">使用終了予定日</label>
            <input type="text" class="form-control" name="finished_use" value="{{ old('finished_use', $post->finished_use) }}" id="input_finished_use" placeholder="2019年10月頃">
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
</div>
@endsection

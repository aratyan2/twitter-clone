

@extends('layouts.app')
@section('content')
<div class="container mt-3">
    
{{--formタグ開始タグ(routeがtimeline、HTTPメソッドはPOST)を書く--}}
  {!! Form::open(['route' => 'timeline', 'method' => 'POST']) !!}

<div class="row mb-4">
    <div class="col-sm-4">
    @if (isset($image_url))
    <img src={{ $image_url }} width=30% height=auto><br>
    @else
    <img src="https://thumb.ac-illust.com/e2/e2cb85acf732de018702298367234d84_t.jpeg" width=30% height=auto><br>
    @endif
        <strong>{{$name}}</strong>
        <br><br>
{{--        //input type=textでtweetを送信する
        //input type=fileでimage_urlを送信する
        //submitボタン｢ツイート｣を書く--}}
        {{ Form::text('tweet', null, ['class' => 'form-control mr-auto']) }}
        {{ Form::file('image_url', ['id'=>'image_url','class' => 'form-control mr-auto']) }}
        {{ Form::submit('ツイート', ['class' => 'btn btn-primary']) }}

        </div>
{{--        //formタグの閉じタグを書く--}}
        {!! Form::close() !!}

        </div>
        @endsection
        


@php
$title = 'お問い合わせ';
@endphp

@extends('layout')

@section('content')
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
        {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">※</span></p>
                <div class="col-sm-8">
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">※</span></p>
                <div class="col-sm-8">
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
                </div>
            </div>
            @if ($errors->has('gender'))
                <p class="alert alert-danger">{{ $errors->first('gender') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">※</span></p>
                <div class="col-sm-8">
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">※</span></p>
                <div class="col-sm-8">
                    {{ Form::text('postcode', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('postcode'))
                <p class="alert alert-danger">{{ $errors->first('postcode') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">※</span></p>
                <div class="col-sm-8">
                    {{ Form::text('adress', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('adress'))
                <p class="alert alert-danger">{{ $errors->first('adress') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">建物名</p>
                <div class="col-sm-8">
                    {{ Form::text('building', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('building'))
                <p class="alert alert-danger">{{ $errors->first('building') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">ご意見<span class="badge badge-danger ml-1">※</span></p>
                <div class="col-sm-8">
                    {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('contents'))
                <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
            @endif
            <div class="text-center">
                {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

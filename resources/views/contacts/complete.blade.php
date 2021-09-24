@php
$title = 'お問い合わせ - 確認';
@endphp

@extends('layout')

@section('content')
    <div class="text-center">
        <h1 class="text-center mt-2 mb-5">ご意見いただきありがとうございました。</h1>
        <a href="{{ route('contact') }}" class="btn btn-primary">トップページへ</a>
    </div>
@endsection
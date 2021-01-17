@extends('layouts.app')

@section('content')
    @if (Auth::check())
        Result Top
    
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>TrainingApp</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn btn-block btn-dark']) !!}
                {{-- ログインページへのリンク --}}
                {!! link_to_route('login', 'Login', [], ['class' => 'btn btn-block btn-dark']) !!}
            </div>
        </div>
    @endif
    
    {!! link_to_route('menu1.get', '今日のトレーニング実績の入力', [], ['class' => 'btn btn-dark btn-block']) !!}
    
    {!! link_to_route('condition.get', 'メニュー通り完了', [], ['class' => 'btn btn-dark btn-block']) !!}
    
@endsection

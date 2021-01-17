@extends('layouts.app')

@section('content')
    @if (Auth::check())
        Conditon入力画面
    
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
    <div class="btn btn-block btn-secondary">BMI</div>
    <div class="btn btn-block btn-secondary">体脂肪</div>
    <div class="btn btn-block btn-secondary">体重</div>
    
     {!! link_to_route('outcome.get', '更新', [], ['class' => 'btn btn-dark btn-block']) !!}
    
    
@endsection

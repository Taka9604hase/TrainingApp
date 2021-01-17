@extends('layouts.app')

@section('content')
    @if (Auth::check())
        Menu1
        Menu2
        Menu3
        Menu4
        Menu5
    
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
    
    {!! link_to_route('condition.get', 'Condition入力画面へ', [], ['class' => 'btn btn-dark btn-block']) !!}
    
@endsection

@extends('layouts.app')

@section('content')
    @if (Auth::check())
        Arm Chest選択画面
        
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
    <div class="btn btn-block btn-dark">Chest, Arm</div>
     {!! link_to_route('confirmation.get', 'トレーニング内容確認', [], ['class' => 'btn btn-block btn-secondary']) !!}
    
    
@endsection
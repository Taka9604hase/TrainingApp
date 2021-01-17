@extends('layouts.app')

@section('content')
    @if (Auth::check())
        TrainingMenu Create or UPdate画面

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
    
    
    {!! link_to_route('selecttype.get', 'Create trainingmenu', [], ['class' => 'btn btn-block btn-dark']) !!}
    {!! link_to_route('selecttype.get', 'Update trainingmenu', [], ['class' => 'btn btn-block btn-dark']) !!}
    
@endsection

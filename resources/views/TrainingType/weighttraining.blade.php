@extends('layouts.app')

@section('content')
    @if (Auth::check())
        WeightTraining選択画面
        
    @include('commons.footer')
    
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
    <div class="btn btn-block btn-dark">Weight Training</div>
    {!! link_to_route('arm_chest.get', 'Chest, Arm', [], ['class' => 'btn btn-block btn-secondary']) !!}
    {!! link_to_route('back_shoulder.get', 'Back, Shoulder', [], ['class' => 'btn btn-block btn-secondary']) !!}
    {!! link_to_route('foot.get', 'Foot', [], ['class' => 'btn btn-block btn-secondary']) !!}
    
@endsection
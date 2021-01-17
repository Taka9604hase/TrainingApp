<footer class="fixed-bottom">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div  class="text-right">
            {{--TrainingMenusの初期ページに--}}
            
            {!! link_to_route('Trainingmenus.index', 'TrainingMenus', [], ['class' => 'btn btn-light']) !!}
            {!! link_to_route('Result.index', 'Result', [], ['class' => 'btn btn-light']) !!}
        </div>
    </nav>
</footer>

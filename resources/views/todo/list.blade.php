
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row" style="margin: 0;">
            <h1>ToDo</h1>
        </div>

        <div class="row" style="margin: 0;">
            <form action="/todo/add" method="post" class="">
                <div class="form-group" style="width:1200px;">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" value="" name="title" placeholder="Add doto" style="width:1000px; margin-right:20px; float:left;" />
                    <input type="submit" class="btn btn-secondary" value="Add" />
                </div>
            </form>
        </div>

        <div class="row" style="margin: 0;">
            <?php foreach($todos as $todo): ?>
                <div class="col-md-9"><?=$todo->title?></div>
                <div class="col-md-2 text-right"><?=date('d/m/Y H:i', $todo->created_at)?></div>
                <div class="col-md-1 text-right"><a href="/todo/del/<?=$todo->id?>" onclick="return confirm('Delete ?');">Del</a></div>
            <?php endforeach; ?>
        </div>
    </div>

@endsection
<html>
    <head>
        <title>Новости</title>
    </head>
    <body>
        <div class="container">
            <a href="{{Request::path()}}/add">Добавить новость</a>
            @foreach($news as $new)
                <h3>{{$new->header}}</h3>
                <p>{{$new->article}}</p>
                <a href="{{Request::path()}}/{{$new->id}}">Подробнее</a>
                <br><br>
            @endforeach
        </div>
    </body>
</html>

<html>
    <head>
        <title>Новости №{{$new->id}}</title>
    </head>
    <body>
        <h1>Новости №{{$new->id}}</h1>
        <div class="container">
            <h3>{{$new->header}}</h3>
            <a href="edit/{{$new->id}}">Редактировать новость</a>
            <p>{{$new->article}}</p>
            <img src="{{\Illuminate\Support\Facades\Storage::url('app/images/'.$new->image)}}" alt="image">
        </div>
    </body>
</html>

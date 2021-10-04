<html>
    <head>
        <title>Добавить новость</title>
    </head>
    <body>
        <h1>Добавить новость</h1>
        <div class="container">
            <form enctype="multipart/form-data" action="add" method="post">
                @csrf
                <label for="header">Заголовок</label>
                <input id="header" type="text" name="header"><br><br>
                <label for="article">Статья</label>
                <input id="article" type="text" name="article">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000000" /><br><br>
                файл: <input name="userfile" type="file" /><br><br>
                <input type="submit" value="Готово" />
            </form>
        </div>
    </body>
</html>

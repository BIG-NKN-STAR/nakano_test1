<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
       <h1>Blog Name</h1>
       <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
       <div class='post'>
           <h2 class='title'>{{ $post->title }}</h2>
           <p class='body'>{{ $post->body }}</p>
           <p class='updated_at'>{{ $post->updated_at }}</p>
       </div>
       <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>

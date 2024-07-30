<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all posts</title>
</head>
<body>
    <a href="{{url('posts/create')}}">add post</a>
    <hr>
   @foreach ($posts as $post )
<h3>
    <a href="{{url("posts/show/$post->id")}}">
    {{$post->id}}-{{$post->title}}</a>
</h3>
<p>{{$post->content}}</p>
<a href="{{url("posts/edit/$post->id")}}">edit </a>
<a href="{{url("posts/destroy/$post->id")}}">destroy </a>
<hr>

   @endforeach
    
</body>
</html>
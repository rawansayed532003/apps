<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all posts</title>
</head>
<body>
 
<h3>{{$posts->id}}-{{$posts->title}}</h3>

<p>{{$posts->content}}</p>
<a href="{{url('posts')}}">Back</a>


    
</body>
</html>
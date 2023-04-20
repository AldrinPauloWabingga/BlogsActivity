

<form action="{{ route('blogs.index') }}" method="POST">

    @foreach($index as $user) 

    <div class="">
    <h3>Author: {{$user['author']}}</h3>
    <h3>Title: {{$user['title']}} </h3>
        <h3>Summary:</h3>
        <text>{{$user['summary']}}</text>
        <h3>Content:</h3>
         <text>{{$user['context']}}</text><br>
         ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    </div>
    <div class ""=>
    <a href="{{ route('blogs.create') }}">Create Another Author</a>
    </div>
    @endforeach 
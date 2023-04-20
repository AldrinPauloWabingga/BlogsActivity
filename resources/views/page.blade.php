<!DOCTYPE html>
<head>
    <h1> Welcome to Dashboard</h1>

    <body>
        <form action="{{ route('blogs.create') }}" method="GET|HEAD">
            @csrf
        <button type="submit" class="Submit">Add/Create</button>
        </form>
        
        <form action="{{ route('blogs.index') }}" method="GET|HEAD">
            @csrf
        <button type="submit" class="Submit">List</button>
        </form>

        
    </body>
</head>
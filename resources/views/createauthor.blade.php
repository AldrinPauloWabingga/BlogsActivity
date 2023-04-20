<HTML>
    <form action="{{ route('author.store') }}" method="POST">
    @csrf
    @method('POST')
    <label for="authorname"><b>Author Name:</b></label>
                <input type="text" placeholder="Enter author name" name="author_name" ><br>
                    @error('author_name')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
    
    <label for="password"><b>Password: </b></label>
                <input type="text" placeholder="Enter password" name="author_password" ><br>
                    @error('author_password')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
    
                    <div class="clearfix">
    <br>
    <br>
                <input type="submit" value="ADD"><br>
    
            </form>
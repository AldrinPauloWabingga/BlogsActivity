<!DOCTYPE html>
<html>
<body>
    <h1> Edit Blog</h1>

                <form action="{{ route('blogs.edit') }}" method="GET|HEAD">
                  @csrf
                  <div class="form-group">
                    <label for="">Author:</label><br>
                    <input type="text" name="author" class="form-control">
                  </div>
                @error('author')
                <div style="color:red;">{{ $message }}</div>
                @enderror
                    <div class="form-group"><br>
                        <label for="">Title:</label><br>
                        <input type="text" name="title" class="form-control">
                    </div>
                    @error('author')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror
                    <div class="form-group">

                      <br> <label for="">Summary:</label><br>
                        <textarea name="summary" id="" cols="50" rows="20" class="form-control"></textarea>
                    </div>
                    @error('summary')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror

                    <div class="form-group">

                      <br> <label for="">Context:</label><br>
                        <textarea name="context" id="" cols="50" rows="20" class="form-control"></textarea>
                    </div>
                    @error('context')
                    <div style="color:red;">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <br><label for="">Publish At:</label>
                        <input type="date" name="published_at" class="form-control">
                        
                    </div>
                    <div> 
                    <div class="clearfix">
                        <br><button type="submit" class="Submit">Save</button>
                    </div>
                  </form>
</body>

    

@extends('template')
@section('content')

    <form class="" action="" method="">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection

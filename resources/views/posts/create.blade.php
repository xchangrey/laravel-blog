@extends('layouts.app')

@section('content')
<h2>Create A Post</h2>
<hr>
<form method="POST" action="/posts" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
      </div>
    </div>
    <div class="form-group row">
      <label for="body" class="col-sm-2 col-form-label">Body</label>
      <div class="col-sm-10">
        <textarea name="body" type="text" class="form-control" id="article-ckeditor" placeholder="Body" ></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="cover_image" class="col-sm-2 col-form-label">Upload Photo</label>
      <div class="col-sm-10">
        <input type="file" class="form-control-file" name="cover_image" id="exampleInputFile" aria-describedby="fileHelp">
        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
        <br>
        <button type="submit" class="btn btn-primary float-left">Submit</button>
      </div>
    </div>
</form>

@endsection
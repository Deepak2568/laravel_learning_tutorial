@extends('layouts.app')
@yield('content')
@if(Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>
@endif
<form action="{{route('upload.save')}}" method="post" enctype="multipart/form-data">
    @csrf 
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    @if($errors->has('fileToUpload'))
    <span>{{$errors->first('fileToUpload')}}</span>
    @endif
</form>
<img src="images/{{Session::get('image_name')}}" alt="">
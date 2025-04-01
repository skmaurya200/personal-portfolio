@extends('layout.admin-layout')
@section('content')
<div class="row">
    <h3>Add Latest Blog</h3>
    <hr>
    <div class="col-sm-6 p-4 shadow-lg m-auto">
        <form action="{{route('addLatestBlog')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Enter title<span class="text-danger">*</span></label>
                <input type="text" name="title" placeholder="Enter Title *" class="form-control rounded-0 mt-1">
            </div>
            <div class="mt-2">
                <label for="desc">Enter Description<span class="text-danger">*</span></label>
                <textarea name="description" placeholder="Enter Description *" class="form-control rounded-0 mt-1"></textarea>
            </div>
            <div class="mt-2">
                <label for="btn">Select Date<span class="text-danger">*</span></label>
                <input type="date" name="date" placeholder="Enter date *" class="form-control rounded-0 mt-1">
            </div>
            <div class="mt-2">
                <label for="file">Select Image<span class="text-danger">*</span></label>
                <input type="file" name="image" class="form-control rounded-0 mt-1">
            </div>
            <div class="mt-2">
                <button class="btn btn-primary rounded-0">Add</button>
            </div>
        </form>
    </div>
   
</div>
@endsection
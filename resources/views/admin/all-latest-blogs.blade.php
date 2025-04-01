@extends('layout.admin-layout')
@section('content')
<div class="row">
    <h3>All Portfolio Manage</h3>
    <hr>
    <table class="table table-bordered text-center">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Descriptio</th>
            <th>Button Name</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        @if (count($data) > 0 )
            @foreach ($data as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->date}}</td>
                    <td>
                        <img src="{{asset($item->image)}}" height="50" width="50" alt="">
                    </td>
                    <td>
                        <a href="{{route('deleteBlogs',$item->id)}}" onclick="return confirm('Are You Sure')" class="btn btn-danger rounded-0">Delete</a>
                    </td>
                </tr>
            @endforeach
        @else
        <tr>
            <td colspan="6">No Record Found</td>
        </tr>
        @endif
    </table>
</div>
@endsection
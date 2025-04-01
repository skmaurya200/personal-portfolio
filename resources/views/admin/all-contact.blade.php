@extends('layout.admin-layout')
@section('content')
<div class="row">
    <h3>Contact Managment</h3>
    <hr>
    <table class="table table-bordered text-center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Msg</th>
            <th>Delete</th>
        </tr>
        @if (count($data) > 0 )
            @foreach ($data as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->msg}}</td>
                    <td>
                        <a href="{{route('deleteCon',$item->id)}}" onclick="return confirm('Are You Sure')" class="btn btn-danger rounded-0">Delete</a>
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
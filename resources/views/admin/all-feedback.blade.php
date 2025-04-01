@extends('layout.admin-layout')
@section('content')
    <div class="row">
        <h3>Feedback Managment</h3>
        <hr>
        <table class="table table-bordered text-center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>rating</th>
                <th>approve</th>
                <th>Image</th>
                <th>Show On UI</th>
                <th>Delete</th>
            </tr>
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->rating}}</td>
                        <td>{{$item->aprove}}</td>
                        <td>
                            <img src="{{asset($item->image)}}" height="50px" width="50" alt="">
                        </td>
                        <td>
                            <form id="apform-{{$item->id}}" action="{{route('approve', $item->id)}}" method="post">
                                @csrf
                                <select name="aprove" id="ap-{{$item->id}}" class="btn btn-success rounded-0">
                                    <option value="Approve" {{($item->aprove == 'Approve') ? 'selected' : ''}}>Approve</option>
                                    <option value="null" {{($item->aprove == 'null') ? 'selected' : ''}}>Null</option>
                                </select>
                            </form>
                            <script>
                                document.getElementById('ap-{{$item->id}}').addEventListener('change', function () {
                                    document.getElementById('apform-{{$item->id}}').submit();
                                    setTimeout(() => {
                                        location.reload();
                                    }, 2000);
                                });

                            </script>
                        </td>
                        <td>
                            <a href="{{route('deleteFeed', $item->id)}}" onclick="return confirm('Are You Sure')"
                                class="btn btn-danger rounded-0">Delete</a>
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
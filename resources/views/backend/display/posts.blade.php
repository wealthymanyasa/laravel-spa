@extends('backend.master')
@section('content')
    <div class="col-sm-12 table-responsive">
        <p style="text-align: center"><strong>View All Posts</strong></p>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Featured Image</th>
                <tr>Category</tr>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $cpost)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{url('public/contents')}}/{{ $post->image }}" alt=""></td>
                        <td>{{ $post->category }}</td>
                        <td>{{ $post->status }}</td>
                        <td>
                            <a href="{{ url('editPost') }}/{{ $post->conid }}" class="btn btn-sm btn-success">
                                <i class="fa fa-edit"></i> 
                            </a>
                            <a href="{{ url('deletePost') }}/{{ $post->conid }}" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@extends('welcome')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trashBlogs as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>
                        <a href="{{ route('blogs.restore', $blog->id) }}" class="btn btn-primary">Restore</a>
                    </td>
                    <td>
                        <a href="{{ route('blogs.delete', $blog->id) }}" class="btn btn-primary">Permanent Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

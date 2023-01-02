@extends('welcome')

@section('content')
    <form method="POST" action="{{ route('blogs.store') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="blog title">
        </div>

        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" id="content" name="content" placeholder="blog content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

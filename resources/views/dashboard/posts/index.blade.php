@extends('dashboard.layouts.main')

@section('container')
@include('sweetalert::alert')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts </h1>
    </div>
    {{-- @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif --}}
    <div class="table-responsive col-lg-12">
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post->slug) }}" class="badge bg-info">
                                <span data-feather="eye"></span></a>
                            <a href="{{ route('posts.edit', $post->slug) }}" class="badge bg-warning">
                                <span data-feather="edit"></span></a>
                            <form action="{{ route('posts.destroy', $post->slug) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick=" return confirm('are you sure')">
                                <span data-feather="trash"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- <script>
    $('delete').click ( function(){
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
    })
</script> --}}
@endsection


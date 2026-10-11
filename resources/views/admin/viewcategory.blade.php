@extends('admin.maindesign')

@section('viewcategory')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Category List</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <div class="mt-3">
                        {{ $categories->links() }}
                    </div>
                    <table class="table table-bordered table-hover table-striped align-middle text-center">
                        <thead class="table-dark">
                            @if(session('category_delete_message'))
                                <div id="delete-alert" class="alert alert-success fade show d-flex align-items-center" role="alert">
                                    <i class="bi bi-trash"></i>
                                    <div class="mx-4">
                                        {{ session('category_delete_message')}}
                                    </div>
                                    
                                </div>
                            
                            @endif

                            @if(session('category_message'))
                                <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div class="mx-4">
                                        {{ session('category_message')}}
                                    </div>
                                    
                                </div>
                            
                            @endif

                            @if(session('category_update_message'))
                                <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div class="mx-4">
                                        {{ session('category_update_message')}}
                                    </div>
                                    
                                </div>
                            
                            @endif
                            <tr>
                                <th width="20%">Category ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td>
                                        <a class="btn btn-success " href="{{ route('admin.updatecategory',$category->id)}}">Update</a>
                                        <a class="btn btn-danger " href="{{ route('admin.deletecategory',$category->id)}}" onclick="return confirm('are you Delete ?')">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-danger">
                                        No Categories Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
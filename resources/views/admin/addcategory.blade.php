@extends('admin.maindesign')

@section('add_category')

    <div class="container-fluid">
        <form action="{{ route('admin.postaddcategory')}}" method="post">
            @csrf
            <input type="text" name="category" class="form-control" id="" placeholder="Enter category name" >
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <input type="submit" class="btn btn-primary" value="Add Category" name="submit">
        </form>
    </div>
@endsection
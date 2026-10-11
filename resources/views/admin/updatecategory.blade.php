@extends('admin.maindesign')

<base href="/public"/> @section('update_category')

    <div class="container-fluid">
        <form action="{{ route('admin.postupdatecategory',$category->id) }}" method="post">
            @csrf
            <input type="text" name="category" class="form-control" id="" value="{{$category->category}}" >
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <input type="submit" class="btn btn-primary" value="Update Category" name="submit">
        </form>
    </div>
@endsection
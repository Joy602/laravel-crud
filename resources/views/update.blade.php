@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning ">Update View</h2>
    <form action="" method="get">
        <div class="mb-2">
            <label for="">Product Name</label>
            <input type="text" value={{$pname}} class="form-control">
        </div>

        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" value={{$pprice}} class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-warning">Update</button>
    </form>
</div>
@endsection
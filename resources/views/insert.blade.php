@extends('welcome')
@section('content')


<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success fs-6" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Product name input -->
            <div class="mb-2">
                <input type="text" placeholder="Enter Product Name" class="form-control" name="pname" id="">
            </div>

            <!-- price input -->
            <div class="mb-2">
                <input type="text" placeholder="Enter Product Price" class="form-control" name="pprice" id="">
            </div>

            <!-- image input -->
            <div class="mb-2">
                <input type="file" name="image" class="form-control" >
            </div>

            <button type="submit" class="btn btn-outline-success fs-6">Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>

@endsection
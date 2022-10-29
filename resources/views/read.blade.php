@extends('welcome')
@section('content')
<h1>data read page</h1>

<div class="container">
    <table class="table mt-5">
        <thead class="bg-danger text-white fw-bold">
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>

        <tbody class="text-danger bg-light fs-4">
            @foreach($data as $item)
            <tr>
                <form action="updateDelete" method="get">
                    <td class="pt-5"> <input type="hidden" name="id" value="{{$item['Id']}}">  {{$item['Id']}}</td>

                    <td class="pt-5"> <input type="hidden" name="name" value="{{$item['PName']}}"> {{$item['PName']}}</td>

                    <td class="pt-5"> <input type="hidden" name="price" value="{{$item['PPrice']}}"> {{$item['PPrice']}}</td>

                    <td class="pt-5"><img src="images/{{$item['PImage']}}" width="100px" height="100px" alt="not found">
                    </td>

                    <td class="pt-5"><input type="submit" name="update" class="btn btn-outline-danger" value="Update"></td>

                    <td class="pt-5"><input type="submit" class="btn btn-outline-danger" value="Delete"></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
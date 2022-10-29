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
        </thead>

        <tbody class="text-danger bg-light fs-4">
            @foreach($data as $item)
            <tr>
                <td class="pt-5">{{$item['Id']}}</td>
                <td class="pt-5">{{$item['PName']}}</td>
                <td class="pt-5">{{$item['PPrice']}}</td>
                <td class="pt-5"><img src="images/{{$item['PImage']}}" width="100px" height="100px" alt="not found"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('main')

@section('base')

<center><h1>Products</h1></center>
    <table>
        <div>

                <a style="margin: 19px;" href="{{ route('products.create')}}" class="waves-effect waves-light btn orange">New Product</a>
        </div>
        <thead>
        <tr>
            <th>S/n</th>
            <th>Name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->first_name }}  {{ $product->last_name }}</td>
                    <td>{{$product->email}}</td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->price}}</td>
                    <td><a href="{{ route('products.edit', $product->id) }}" class="waves-effect waves-light btn teal">Edit</a></td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="waves-effect waves-light btn red" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

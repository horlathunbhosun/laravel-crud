@extends('main')

@section('base')
    <h1>Create Products</h1>
    <div class="row">
        <form class="col s12" method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="First Name" type="text" name="first_name" class="validate" value="{{$product->first_name}}" required>
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Last Name" type="text" name="last_name" value="{{$product->last_name}}" class="validate" required>
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Enter email"  type="email" name="email" value="{{$product->email}}" class="validate" required>
                    <label for="email">Email </label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="type" value="{{$product->type}}">
                        <option value="{{$product->type}}" selected>Choose your option</option>
                        <option value="sandal">Sandal</option>
                        <option value="snikkers">Snikkers</option>
                        <option value="shoe">Shoes</option>
                    </select>
                    <label>Type of Product </label>
                </div>
                <div class="input-field col s6">
                    <input type="text" value="{{$product->price}}" name="price" placeholder="Price" class="validate">
                    <label for="price">Price</label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" >Submit
                <i class="material-icons right">send</i>
            </button>

        </form>
    </div>
@endsection

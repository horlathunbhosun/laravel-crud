@extends('main')

@section('base')
    <h1>Create Products</h1>
    <div class="row">
        <form class="col s12" method="post" action="{{ route('products.store') }}">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="First Name" type="text" name="first_name" class="validate" required>
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Last Name" type="text" name="last_name" class="validate" required>
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Enter email"  type="email" name="email" class="validate" required>
                    <label for="email">Email </label>
                </div>

            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="type">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="sandal">Sandal</option>
                        <option value="snikkers">Snikkers</option>
                        <option value="shoe">Shoes</option>
                    </select>
                    <label>Type of Product </label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="price" placeholder="Price" class="validate">
                    <label for="price">Price</label>
                </div>
            </div>
           <button class="btn waves-effect waves-light" type="submit" >Submit
            <i class="material-icons right">send</i>
            </button>

        </form>
    </div>
@endsection

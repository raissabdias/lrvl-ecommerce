@extends('layout')
@section('content') 
    <div class="col-12 d-flex justify-content-center">
        <form action="{{ route('register_client') }}" method="POST" class="w-50">
            @csrf
            <h4 class="text-center mb-3">Register Client</h4>  
            <div class="form-group my-3">
                <label for="name">Name</label>
                <input type="text" class="form-control mt-1" id="name" name="name">
            </div>
            <div class="form-group my-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control mt-1" id="cpf" name="cpf">
            </div>
            <div class="form-group my-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control mt-1" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group my-3">
                <label for="password">Password</label>
                <input type="password" class="form-control mt-1" name="password" id="password">
            </div>
            <div class="form-group my-3">
                <label for="public_place">Address</label>
                <input type="text" class="form-control mt-1" id="address" name="address">
            </div>
            <div class="form-group my-3">
                <label for="number">Number</label>
                <input type="text" class="form-control mt-1" id="number" name="number">
            </div>
            <div class="form-group my-3">
                <label for="complement">Complement</label>
                <input type="text" class="form-control mt-1" id="complement" name="complement">
            </div>
            <div class="form-group my-3">
                <label for="city">City</label>
                <input type="text" class="form-control mt-1" id="city" name="city">
            </div>
            <div class="form-group my-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control mt-1" id="cep" name="cep">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
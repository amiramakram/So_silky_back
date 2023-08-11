@extends('layouts.app')


@section('content')
<div class="container d-flex mt-5 justify-content-center bg-white containBoxEdit"> 
    <div class="row w-75">
 
<p class="mb-3 Editclients"> Edit client</p>

<form method="post" action="{{  route('client.update', $client)  }}" >
    @csrf
    @method('put')

    <div class="form-group mt-3">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" 
        value="{{ $client->name }}"
        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>
    @error('name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">email</label>
    <input type="email" class="form-control" name="email" 
    value="{{ $client->email }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @error('email')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">phone number</label>
    <input type="text" class="form-control" name="phone_number" 
    value="{{ $client->phone_number }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter phone_number">
  </div>
  @error('phone_number')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">emirate</label>
    <input type="text" class="form-control" name="emirate" 
    value="{{ $client->emirate }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter emirate">
  </div>
  @error('emirate')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">zone</label>
    <input type="text" class="form-control" name="zone" 
    value="{{ $client->zone }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter zone">
  </div>
  @error('zone')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">color White</label>
    <input type="text" class="form-control" name="color_White" 
    value="{{ $client->color_White }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter color_White">
  </div>
  @error('color_White')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">color black</label>
    <input type="text" class="form-control" name="color_black" 
    value="{{ $client->color_black }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter color_black">
  </div>
  @error('color_black')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">color gray</label>
    <input type="text" class="form-control" name="color_gray" 
    value="{{ $client->color_gray }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter color_gray">
  </div>
  @error('color_gray')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  <div class="form-group mt-3">
    <label for="exampleInputEmail">color pink</label>
    <input type="text" class="form-control" name="color_pink" 
    value="{{ $client->color_pink }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter color_pink">
  </div>
  @error('color_pink')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  

  <div class="form-group mt-3">
    <label for="exampleInputEmail">color beige</label>
    <input type="text" class="form-control" name="color_beige" 
    value="{{ $client->color_beige }}"
    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter color_beige">
  </div>
  @error('color_beige')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror

  
 

    <button type="submit" class="addButton mt-3">Edit</button>
</form>
    </div>
</div>
@endsection


   
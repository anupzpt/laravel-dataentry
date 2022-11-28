@extends('layout.app')
@section('content')
<div class="container mt-3">
    <h2 >DataEntry Edit</h2>
        <form action="{{route('updateData')}}" method="post">
        @csrf
        <div class="form-group  p-2">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1"   name="name" value={{$data->name}}>
          </div>
          <div class="form-group  p-2">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control p-2" id="exampleInputPassword1"  value={{$data->address}} name="address">
          </div>
          <div class="form-group  p-2">
            <label for="exampleInputPassword1">Contact</label>
            <input type="text" class="form-control p-2" id="exampleInputPassword1"  value={{$data->contact}} name="contact">
          </div>
            <div>
                <input type="hidden" name="id" value={{$data->id}}>

            </div>
            <div>
            <button class="btn btn-primary" style="margin-top: 15px" type="submit">Update</button>
            </div>
        </form>
  </div>
@endsection

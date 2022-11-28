@extends('layout.app')
@section('content')
<div class="container mt-3 p-3">
    <h2 >Data Entry</h2>
        <form action="{{route('saveData')}}" method="post">
            @csrf
            <div class="form-group  p-2">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name"  name="name">
              </div>
              <div class="form-group  p-2">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control p-2" id="exampleInputPassword1" placeholder="Enter Address"  name="address">
              </div>
              <div class="form-group  p-2">
                <label for="exampleInputPassword1">Contact</label>
                <input type="text" class="form-control p-2" id="exampleInputPassword1" placeholder="Enter Contact"  name="contact">
              </div>

            <button class="btn btn-primary" style="margin-top: 15px" type="submit">Save</button>
            </div>
        </form>
        <table class="table table-bordered mt-3 text-center py-5">
            <thead>
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
                {{-- @int{ $sn=0}; --}}
                @php
                    $SN=1;
                @endphp
                @foreach($list as $value)
                <tr>
                    <td>{{$SN++}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->contact}}</td>
                    <td>
                        <button class="btn btn-primary"><a href="{{url('/edit/'.$value->id)}}" class="text-white"><span class="fas fa-pencil ml-3"></a></button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><a href="{{url ('/delete/'.$value->id)}}" class="text-white"><span class="fas fa-trash ml-3"></a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

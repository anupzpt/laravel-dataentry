@extends('layout.app')
@section('content')
{{-- <section>

<style>
    .background{
        height: 300%;
        width: 100%;
        background-color: rebeccapurple;
    }
</style>
</section> --}}
{{-- <body class="background img img-responsive vh-100" style="background-image: url('image/dataentry.jpg'); background-position: center; background-repeat: no-repeat; background-size:cover;"> --}}
    <div class="background " style="margin-top:150px; text-align:center">
        <h1>Welcome to Dataentry</h1>
        <div class="sub-container margin-top:80px">
            @guest
            <form action="{{route('login')}}" >
                <button type="submit" class="btn btn-outline-secondary">Show More >></button>
                </div>
            </form>
            @endguest
            @auth
            <form action="{{route('entry')}}" >
                <button type="submit" class="btn btn-outline-secondary ">Show More >></button>
                </div>
            </form>
            @endauth
        </div>
    </div>
</body>
@endsection

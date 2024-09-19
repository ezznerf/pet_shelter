@extends('layouts.base')

@section('page.title', 'Enter Page')


@section('content')

    <h3 class="pt-5 pb-3" style="margin-top: 1.5rem">LOGIN</h3>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <li>{{$error}}
                    @endforeach
                @endif
                <form onsubmit="{{route("login.store")}}" method="POST">
                    @csrf
                <div class="row card justify-content-center align-items-center pt-3" >
                    <div class="col-7 pb-3">
                            <label class="form-label ">E-mail</label>
                            <input type="email" name="email" class="form-control" >
                    </div>
                    <div class="col-7 pb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                    </div>

                    <div class="col-7 pt-3 pb-5">
                        <input type="submit" class="btn btn-success w-100" value="LOGIN">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

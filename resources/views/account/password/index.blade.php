@extends('account.layouts.default')

@section('account.content')

    <div class="card">

        <div class="card-header">
            <h4 class="card-title">Change Password</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('account.password.store')}}">
                @csrf
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password"
                           class="form-control @error('current_password') border-danger @enderror"
                           name="current_password" id="" aria-describedby="helpId" placeholder="">

                    @error('current_password')
                    <small id="helpId" class="form-text text-danger">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input type="password"
                           class="form-control" name="password" id="password" aria-describedby="helpId"
                           placeholder="">

                    @error('password')
                    <small id="helpId" class="form-text text-muted">{{$message}}</small>

                    @enderror
                </div>
                <div class="form-group mt-3">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password"
                           class="form-control" name="password_confirmation" id="password_confirmation"
                           aria-describedby="helpId" placeholder="">

                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>

@endsection


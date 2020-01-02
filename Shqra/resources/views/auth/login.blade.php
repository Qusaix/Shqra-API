@extends('dashboard.layouts.styleMaster')

@section('section')
<div class="card-block" style="width:50%;">
    <form class="form-horizontal m-t-xs" action="{{route('login_now')}}" method="post" >
        @csrf
        <div class="form-group">
            <label class="col-xs-12" for="login1-username">Email</label>
            <div class="col-xs-12">
                <input class="form-control" type="text" id="login1-username" name="email" placeholder="Enter email..." />
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12" for="login1-password">Password</label>
            <div class="col-xs-12">
                <input class="form-control" type="password" id="login1-password" name="password" placeholder="Enter password..." />
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <label class="css-input switch switch-sm switch-default">
<input type="checkbox" id="login1-remember-me" name="login1-remember-me"><span></span> Remember Me?
</label>
<div class="form-group m-b-0">
    <div class="col-xs-12">
        <button class="btn btn-app" type="submit">Log in</button>
    </div>

</form>
</div>
@endsection

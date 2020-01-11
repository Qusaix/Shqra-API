@extends('dashboard.layouts.styleMaster')

@section('section')
<div class="card-block" style="width:50%;">
      <!-- Material registration -->
      <div class="card">
        <div class="card-header bg-green bg-inverse">
            <h4>Material</h4>
            <ul class="card-actions">
                <li>
                    <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                </li>
                <li>
                    <button type="button" data-toggle="card-action" data-action="content_toggle"></button>
                </li>
            </ul>
        </div>
        <div class="card-block">
            <form class="form-horizontal m-t-sm" action="base_forms_samples.html" method="post" onsubmit="return false;">
                <div class="form-group">
                    <div class="col-xs-6">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register5-firstname" name="register5-firstname" placeholder="Your first name" />
                            <label for="register5-firstname">First name</label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-material">
                            <input class="form-control" type="text" id="register5-lastname" name="register5-lastname" placeholder="Your last name" />
                            <label for="register5-lastname">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input class="form-control" type="text" id="register5-account" name="register5-account" placeholder="Company's name..." />
                            <label for="register5-account">Company</label>
                            <span class="input-group-addon">.example.com</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input class="form-control" type="email" id="register5-email" name="register5-email" placeholder="Enter email..." />
                            <label for="register5-email">Email</label>
                            <span class="input-group-addon"><i class="ion-ios-email"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input class="form-control" type="password" id="register5-password" name="register5-password" placeholder="Enter password..." />
                            <label for="register5-password">Password</label>
                            <span class="input-group-addon"><i class="ion-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input class="form-control" type="password" id="register5-password2" name="register5-password2" placeholder="Confirm password..." />
                            <label for="register5-password2">Confirm Password</label>
                            <span class="input-group-addon"><i class="ion-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label class="css-input css-checkbox css-checkbox-default">
        <input type="checkbox" id="register5-terms" name="register5-terms"><span></span> I agree with terms
    </label>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-xs-12">
                        <button class="btn btn-app" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- .card-block -->
    </div>
    <!-- .card -->
    <!-- End Material registration -->
</div>
@endsection

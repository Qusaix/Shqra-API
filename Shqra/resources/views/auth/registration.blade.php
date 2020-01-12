@extends('dashboard.layouts.styleMaster')
 
@section('section')
<div class="card-block" style="width:50%;">
      <!-- Material registration -->
      <div class="card">
        <div class="card-header bg-green bg-inverse">
            <h4>Register</h4>
            <ul class="card-actions">
                <li>
                    {{-- <input type="checkbox" class="hide_company" name="company_conf" /><span></span>Company? --}}

                </li>
                <li>
                </li>
            </ul>
        </div>
        <div class="card-block">
            @if($errors->any())
            <div class="alert alert-danger" role="alert"> There is Someting Wrong
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </div>

                @endif
            <form class="form-horizontal m-t-sm" action="{{route('rigster.user')}}" method="post">
                @csrf
                {{-- <input type="checkbox" class="hide_company" name="company_conf" /><span></span>Company? --}}
                <label>Company ?</label><br/>
                    <input type="checkbox" name="company_conf" class="switch_1 hide_company">
            <hr/>

                <div class="form-group">
                    <div class="col-xs-6">
                        <div class="form-material">
                            <input  value='{{old('first_name')}}' class="form-control" type="text" id="register5-firstname" name="first_name" placeholder="Your first name" />
                            <label for="register5-firstname">First name</label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-material">
                            <input value='{{old('last_name')}}' class="form-control" type="text" id="register5-lastname" name="last_name" placeholder="Your last name" />
                            <label for="register5-lastname">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group hide-company-input">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            {{-- <input name="companyConf" class="for_conf" value="true" /> --}}

                            <input  value='{{old('company_name')}}' class="form-control" type="text" id="register5-account" name="company_name" placeholder="Company's name..." />
                            <label for="register5-account">Company</label>
                            <span class="input-group-addon">.example.com</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input value='{{old('email')}}' class="form-control" type="email" id="register5-email" name="email" placeholder="Enter email..." />
                            <label for="register5-email">Email</label>
                            <span class="input-group-addon"><i class="ion-ios-email"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input value='{{old('zip_code')}}' class="form-control" type="text" id="register25-email" name="zip_code" placeholder="Enter zip code..." />
                            <label for="register5-email">Zip Code</label>
                            <span class="input-group-addon"><i class="ion-ios-home"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input value='{{old('phone')}}' class="form-control" type="tel" id="register35-email" name="phone" placeholder="Enter phone number..." />
                            <label for="register5-email">Phone Number</label>
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input class="form-control" type="password" id="register5-password" name="password" placeholder="Enter password..." />
                            <label for="register5-password">Password</label>
                            <span class="input-group-addon"><i class="ion-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="form-material input-group">
                            <input class="form-control" type="password" id="register5-password2" name="conform-password" placeholder="Confirm password..." />
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
<script>
$(document).ready(function(){
    $('.hide-company-input').hide()
    $('.for_conf').hide()

    // Logic To Show and Hide the Company Input
    $(".hide_company").click(function(){
        if( $(this).prop('checked') == true ){
            return $('.hide-company-input').show()
        }
        else if( $(this).prop('checked') == false ){
           return $('.hide-company-input').hide()
        }
    })    


})
</script>

@endsection

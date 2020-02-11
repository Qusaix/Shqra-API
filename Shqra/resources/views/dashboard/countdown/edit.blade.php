@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Update Countdown</h2>
<div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
        <div class="card">
           <div class="btn-group">
            
  
</div>
             <div class="card-content">
                <div class="card">
                    <div class="card-header">
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert"> There is Someting Wrong
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
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
                        <form class="form-horizontal m-t-sm" action="{{route('dashboard.countdown.update',$countdown->id)}}" method="post" >
                            @csrf
                            <div class="row">
                               
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Product</label>

                                            <select name="product" class="form-control" id="sel1">
                                                @foreach($products as $product)
                                                <option value='{{$product->id}}' > {{$product->Title}} </option>
                                                @endforeach
                                              </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Month</label>

                                            <select name="month" class="form-control" id="sel1">
                                                <option value="{{$countdown->month}}">The Chosen Month: {{$countdown->month}} </option>
                                                <option value="January" >January</option>
                                                <option value="February" >February</option>
                                                <option value="March" >March</option>
                                                <option value="April" >April</option>
                                                <option value="May" >May</option>
                                                <option value="June" >June</option>
                                                <option value="July" >July</option>
                                                <option value="Aguset" >Aguset</option>
                                                <option value="September" >September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option> 


                                              </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">New Price</label>
                                            <input value="{{(old('new_price')) ? old('new_price') : $countdown->new_price}}" class="form-control input-lg" type="text" id="mega-username" name="new_price" placeholder="Enter The New Price"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Until Whate Day ?</label>
                                            <input value="{{(old('day')) ? old('day') : $countdown->day}}" class="form-control input-lg" type="text" id="mega-username" name="day" placeholder="Enter The Day the Deal Will End"  />
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                            
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i>Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .card -->
                <!-- End Mega Form -->
            </div>
            <!-- .container-fluid -->
            <!-- End Page Content -->

        </main>

    </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
        
    });
</script>




@endsection
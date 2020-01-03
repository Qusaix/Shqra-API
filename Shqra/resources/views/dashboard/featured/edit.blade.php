@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Update Product</h2>
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
                        <form class="form-horizontal m-t-sm" action="{{route('dashboard.featured.update',$featured->id)}}" method="post" enctype="multipart/form-data" >
                            @csrf 
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mega-firstname">Product Name</label>
                                            <input class="form-control input-lg" type="text" id="mega-firstname" name="product_name" placeholder="incert The Product Name" value={{$featured->product_name}} />
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="mega-lastname">New Price</label>
                                            <input class="form-control input-lg" type="text" id="mega-lastname" name="new_price" placeholder="Incert The Price" value={{$featured->new_price}} />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Old Price</label>
                                            <input class="form-control input-lg" type="text" id="mega-username" name="old_price" placeholder="Enter Your Old Price..." value={{$featured->old_price}} />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <label class="file-upload btn btn-primary">
                                                        Browse for file ... <input name="image" type="file" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                
                                  
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Update</button>
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
@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Create New Product</h2>
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
                                {{-- <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>  --}}
                            </li>
                            <li>
                                {{-- <button type="button" data-toggle="card-action" data-action="content_toggle"></button> --}}
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <form class="form-horizontal m-t-sm" action="{{route('dashboard.products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                               
                                {{-- <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Product</label>

                                            <select name="product" class="form-control" id="sel1">
                                                @foreach($products as $product)
                                                <option value='{{$product->id}}' > {{$product->Title}}:${{$product->price}} </option>
                                                @endforeach
                                              </select>
                                        </div>
                                    </div>
                                </div> --}}


                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Categores</label>

                                            <select name="categore" class="form-control" id="sel1">
                                                <option value="{{$product->categore->id}}" > Product Current Categore : {{$product->categore->Title}}</option>
                                                @foreach($categores as $categore)
                                                <option value="{{$categore->id}}" >{{$categore->Title}}</option>
                                                @endforeach
                                                


                                              </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Title</label>
                                            <input value="{{(old('title') ? old('title') : $product->Title)}}" class="form-control input-lg" type="text" id="mega-username" name="title" placeholder="Enter The Title"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Description</label>
                                            <input value="{{(old('description') ? old('description') : $product->description)}}" class="form-control input-lg" type="text" id="mega-username" name="description" placeholder="Enter The Description"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Price</label>
                                            <input value="{{(old('price') ? old('price') : $product->price)}}" class="form-control input-lg" type="text" id="mega-username" name="price" placeholder="Enter The Price"  />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Image</label>

                                            <div class="form-group">
                                                <div class="col-sm-10">
                                                    <label class="file-upload btn btn-primary">
                                                       Add The Product Image ... <input name="image" type="file" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            
                        </div>
                            
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i>Create</button>
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
@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Products</h2>
<h3 class="section-title">Amount of Products:{{$products->total()}}</h3>
<div class="card">
    <div class="card-content">

        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-borderless table-vcenter">
                    <thead>
                        <tr>
                            <th style="width:10%;">id</th>
                            <th class="text-center w-10"><i class="ion-person"></i></th>
                            <th>Tilte</th>
                            <th style="width: 20%;">Description</th>
                            <th style="width: 20%;">Price</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $products as $index=>$product )
                            
                        <tr>
                            <td>{{$index+1}}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar-48" src="{{$product->image}}" alt="">
                            </td>
                            <td class="font-500">{{$product->Title}}</td>
                            <td>{{$product->description}}</td>
                            <td>${{$product->price}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="ion-edit"></i></button>
                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="ion-close"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                     
                       
                    </tbody>
                </table>
                {{$products->links()}}
               {{-- {{$users->total()}} 	 --}}

            </div>
        </div>

        </div>
        


    </div>


</div>

  
@endsection
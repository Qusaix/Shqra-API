@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Featured Products</h2>
<h3 class="section-title">Amount of Featured Products:{{$featureds->total()}}</h3>
<div class="card">
    <div class="card-content">

        <div class="container">
          <a type="button" href="{{route('dashboard.featured.create')}}" class="btn btn-primary float-right" style="margin-top:3%; float:right;">Add New Product </a>
            <div class="table-responsive" style="width:100%;">
                <table class="table table-striped table-borderless table-vcenter">
                    <thead>
                        <tr>
                            <th style="width:10%;">id</th>
                            <th class="text-center w-10"><i class="ion-person"></i></th>
                            <th>Name</th>
                            <th style="width: 30%;">Old Price</th> 
                            <th style="width: 20%;">New Price</th>
                            <th style="width: 20%;"><i class="ion-star"></th>
                            <th style="width: 20%;">Featured</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $featureds as $index=>$featured )
                            
                        <tr>
                            <td>{{$index+1}}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar-48" src="{{$featured->image}}" alt="">
                            </td>
                            <td class="font-500">{{$featured->product_name}}</td>
                            <td>{{$featured->old_price}}</td>
                            <td>{{$featured->new_price}}</td>
                            <td>
                              @if($featured->product->rating->avg('rating') == 0)
                              <a style="background:#337ab7; border-radius:3px; padding:5px; color:#fff;" >No Review Yet</a>
                              @else
                              {{$featured->product->rating->avg('rating')}}/5
                              @endif

                            </td>
                            <td>
                              @if($featured->featured == 1)
                              <a style="background:green; border-radius:3px; padding:5px; color:#fff; font-size:9px;" >Featured</a>
                              @else
                              <a style="background:red; border-radius:3px; padding:5px; color:#fff; font-size:9px;" >Not Featured</a>

                              @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a class="btn btn-xs btn-default" href="{{route('dashboard.featured.edit',$featured->id)}}" type="button" data-toggle="tooltip" title="Edit Product"><i class="ion-edit"></i></a>
                                    <form action="{{route('dashboard.featured.delete',$featured->id)}}" method="POST">
                                      @csrf
                                     <button class="btn btn-xs btn-default" href="{{route('dashboard.featured.delete',$featured->id)}}" type="submit" data-toggle="tooltip" title="Remove Product"><i class="ion-close"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                     
                       
                    </tbody>
                </table>
                {{$featureds->links()}}

            </div>
        </div>

        </div>
        


    </div>


</div>

<script>
    $(document).ready(function() {

      SetRatingStar()

    });



</script>

@endsection
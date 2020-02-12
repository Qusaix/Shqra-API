@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Deals</h2>
<h3 class="section-title">Amount of Deals:{{$countdowns->total()}}</h3>
<div class="card">
    <div class="card-content">
      <a type="button" href="{{route('dashboard.countdown.create')}}" class="btn btn-primary" style="margin-top:3%; margin-left: 3%;">Add New Deal </a>

        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-borderless table-vcenter">
                    <thead>
                        <tr>
                            <th style="width:10%;">id</th>
                            <th class="text-center w-10"><i class="ion-person"></i></th>
                            <th>Product Name</th>
                            <th style="width: 30%;">Date</th>
                            <th style="width: 20%;">Old Price</th>
                            <th style="width: 20%;">New Price</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $countdowns as $index=>$deal )
                            
                        <tr>
                            <td>{{$index+1}}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar-48" src="{{asset($deal->products->image)}}" alt="">
                            </td>
                            <td class="font-500">{{$deal->products->Title}}</td>
                            <td>{{$deal->day}}/{{$deal->month}}</td>
                            <td>${{$deal->old_price}}</td>
                            <td>${{$deal->new_price}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('dashboard.countdown.edit',$deal->id)}}" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="ion-edit"></i></a>
                                    <form method="POST" action="{{route('dashboard.countdown.delete',$deal->id)}}">
                                    @csrf
                                    <button class="btn btn-xs btn-default" type="submit" data-toggle="tooltip" title="Remove Client"><i class="ion-close"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                     
                       
                    </tbody>
                </table>
                {{$countdowns->links()}}
               {{-- {{$users->total()}} 	 --}}

            </div>
        </div>

        </div>
        


    </div>


</div>

  
@endsection
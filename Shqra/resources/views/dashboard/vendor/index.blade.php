@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Vendors</h2>
<h3 class="section-title">Amount of Vendors:{{$vendors->total()}}</h3>
<div class="card">
    <div class="card-content">

        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-borderless table-vcenter">
                    <thead>
                        <tr>
                            <th style="width:10%;">id</th>
                            <th class="text-center w-10"><i class="ion-person"></i></th>
                            <th>Name</th>
                            <th style="width: 30%;">Email</th>
                            <th style="width: 20%;">Phone</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $vendors as $index=>$vendor )
                            
                        <tr>
                            <td>{{$index+1}}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar-48" src="{{asset('assets_d/img/avatars/avatar2.jpg')}}" alt="">
                            </td>
                            <td class="font-500">{{$vendor->first_name}}</td>
                            <td>{{$vendor->email}}</td>
                            <td>{{$vendor->phone}}</td>
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
                {{$vendors->links()}}

            </div>
        </div>

        </div>
        


    </div>


</div>
  
@endsection
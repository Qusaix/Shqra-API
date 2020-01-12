@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Users</h2>
<h3 class="section-title">Amount of Users:{{$users->total()}}</h3>
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
                        @foreach ( $users as $index=>$user )
                            
                        <tr>
                            <td>{{$index+1}}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar-48" src="{{asset('assets_d/img/avatars/avatar2.jpg')}}" alt="">
                            </td>
                            <td class="font-500">{{$user->first_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
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
                {{$users->links()}}
               {{-- {{$users->total()}} 	 --}}

            </div>
        </div>

        </div>
        


    </div>


</div>

{{-- <script type="text/javascript">
     $(function() {
                $('#roles').on('draw.dt', function() {
                    $('[data-toggle="tooltip"]').tooltip();
                })
                $('#roles').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{route('dashboard.users.datatable')}}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'first_name', name: 'first_name' },
                        { data: 'actions', name: 'actions' },
                        
                    ],
                    initComplete: function () {
                        $(".activation").change(function(event) {
                            let id = $(this).data("id");
                            let url = $(this).data("url");
                            $.ajax({
                                type: "POST",
                                url: url,
                                headers: {
                                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                                },
                                data: { id: id },
                                success: function(data) {
                                    if(data.success){
                                    toastr.success(data.msg)
                                    }
        
                                }
                            });
                        });
                    } 
                });
            });
  </script> --}}
  
@endsection
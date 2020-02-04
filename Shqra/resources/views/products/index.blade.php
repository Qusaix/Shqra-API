@extends('layouts.ecommers')
@section('content')
<div class="single_product">
    <div class="container">
        <div class="row">

            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="images/single_4.jpg"><img src="images/single_4.jpg" alt=""></li>
                    <li data-image="images/single_2.jpg"><img src="images/single_2.jpg" alt=""></li>
                    <li data-image="images/single_3.jpg"><img src="images/single_3.jpg" alt=""></li>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="{{$product->image}}" alt=""></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">
                    <div class="product_category">{{$product_categore->Title}}</div>
                    <div class="product_name">{{$product->Title}}</div>
                    @if($rating > 0 )
                    <div class="star-rating">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value" value="{{$rating}}">
                      </div>
                    
                      @if($true != "0")
                      <h3>Your Review is {{$true}}/5</h3>
                      @endif

                                            <!-- Modal -->
                        <div class="modal fade" id="add_rating" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Rating</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                
                                    <input id="user_rating" class="form-control" style="width: 10%;" name="user-rating" />/5

                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="send_rating" type="button" class="btn btn-primary" data-dismiss="modal" >Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                      @else
                      No Rating Yet<br/>

                      {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_rating" style="margin-top:1%;">
                        Add Your Rating
                      </button> --}}

                      @if($true == "0")
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_rating" style="margin-top:1%;">
                        Add Your Rating
                      </button>
                      @endif

                      <div class="modal fade" id="add_rating" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Rating</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            
                                <input id="user_rating" class="form-control" style="width: 10%;" name="user-rating" />/5

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="send_rating" type="button" class="btn btn-primary" data-dismiss="modal" >Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                      @endif
                                          <div class="product_text"><p>{{$product->description}}</p></div>
                    <div class="order_info d-flex flex-row">
                        <form action="{{route('add_product_cart',$product->id)}}" method="post">
                            @csrf
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Quantity: </span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>

                                <!-- Product Color -->
                                <ul class="product_color">
                                    <li>
                                        <span>Color: </span>
                                        <div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                        <ul class="color_list">
                                            <li><div class="color_mark" style="background: #999999;"></div></li>
                                            <li><div class="color_mark" style="background: #b19c83;"></div></li>
                                            <li><div class="color_mark" style="background: #000000;"></div></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="product_price">${{$product->price}}</div>
                            <div class="button_container">
                                <button type="submit" class="button cart_button">Add to Cart</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $('#add_rating').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

$('#send_rating').on('click' , function(){
    var user_rating = $('#user_rating').val();
    var product_id = '{!!json_encode($product->id)!!}'

  //  alert(product_id);

     $.ajax({
        type:'POST',
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },
        url:'{{route('dashboard.rating.store')}}',
        data:{
            "_token": "{{ csrf_token() }}",
            rating:user_rating,
            product_id:product_id,
        },
        success:function(data){
            console.log("Success: "+data)
            return location.reload();
        },
        error:function(data){
            Swal.fire({
            title: 'Error!',
            text: 'You Allready Have Added a Review',
            icon: 'error',
            confirmButtonText: 'Close',
            toast:true,
            animation:true,
            position:'top-end',
            })

        }    
    })

   


})

var $star_rating = $('.star-rating .fa');
  

$star_rating.on('click', function(e) {
        $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        
       var rating =  $("#rating").val();
       

   

 $.ajax({

    type:'POST',
           headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            },
           url:'{{route('dashboard.rating.store')}}',

           data:{rating:rating,},

           success:function(data){
            // return console.log(data);
            //   alert(data.success);

           },

           error:function(error){
               console.log(error);
           }


 })

})


</script>



@endsection
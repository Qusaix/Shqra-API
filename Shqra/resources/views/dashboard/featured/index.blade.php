@extends('dashboard.layouts.layout')
@section('section')
{{-- <div class="card-content">

  <div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
        <div class="card">
         
             <div class="card-content">
                <div class="card">
                   
                    <div class="row">
                        <div class="col-sm-4">.col-sm-4</div>
                        <div class="col-sm-4">.col-sm-4</div>
                        <div class="col-sm-4">.col-sm-4</div>
                      </div>
                           
                                
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
</div> --}}
<h2 class="section-title">Featured Products </h2>

<div class="card">
<div class="container" id="tourpackages-carousel">

    <div class="row">
      <div class="col-lg-12"><h1>Products <a class="btn icon-btn btn-primary pull-right" href="{{route('dashboard.featured.create')}}"><span class="fa btn-fa fa-plus img-circle"></span> Add New Product</a></h1></div>
      @foreach ($featured as $f )
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="thumbnail">
            <div class="caption">
              <div class='col-lg-12'>
                  <form action='{{route('dashboard.featured.delete',$f->id)}}' method="POST">
                    @csrf
                    <span class="fa fa-shopping-cart"></span>

                  <button style="background:none; border:0;" type="submit" ><span class="fa fa-trash pull-right text-primary"></span></button>
                  </form>
              </div>
              <div class='col-lg-12 well well-add-card'>
                  <h4>{{$f->product_name}}</h4>
              </div>
              <div class='col-lg-12'>
                  <p>New Price:{{$f->new_price}}$</p>
                  <p class"text-muted">Old Price:{{$f->old_price}}$</p>
              </div>
              <div class="star-rating">
                <span class="fa fa-star-o" data-rating="1"></span>
                <span class="fa fa-star-o" data-rating="2"></span>
                <span class="fa fa-star-o" data-rating="3"></span>
                <span class="fa fa-star-o" data-rating="4"></span>
                <span class="fa fa-star-o" data-rating="5"></span>
                <input type="hidden" name="whatever1" class="rating-value" value="2.56">
              </div>
            </div>
              <form action="{{route('dashboard.featured.edit',$f->id)}}" method="get">
              <button type="submit" class="btn btn-primary btn-xs btn-update btn-add-card">Update</button>
              {{-- <button type="submit" class="btn btn-danger btn-xs btn-update btn-add-card">Vrify Now</button> --}}

              </form>
              <span class='fa fa-exclamation-sign text-danger pull-right icon-style'></span>

          </div>
        </div>
      </div>
      @endforeach
     
     
    


  </div><!-- End container -->
</div>
@endsection
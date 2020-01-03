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
                  <span class="fa fa-shopping-cart"></span>
                  <span class="fa fa-trash pull-right text-primary"></span>
              </div>
              <div class='col-lg-12 well well-add-card'>
                  <h4>{{$f->product_name}}</h4>
              </div>
              <div class='col-lg-12'>
                  <p>New Price:{{$f->new_price}}$</p>
                  <p class"text-muted">Old Price:{{$f->old_price}}$</p>
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
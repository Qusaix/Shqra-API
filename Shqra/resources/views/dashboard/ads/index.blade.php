@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Ads</h2>
<div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
        <div class="card">
           <div style="margin:1%;" class="btn-group">
  <button  type="button" class="btn btn-primary"  aria-expanded="false">
      @if($Ad)
      <a  class="text-light" href="{{route('dashboard.ads.edit',1)}}"> Update </a>
    @else
      <a class="text-light" href="{{route('dashboard.ads.create')}}"> Create </a>

      @endif
  </button>
  
</div>
             <div class="card-content">
                <div id="circle-shape-example" >
                    <img style="margin:3%;" src="{{$Ad->image}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                    <h1>{{$Ad->title}}</h1>
                    <p style="margin-bottom:10%;">{{$Ad->description}}</p>
                    <h1>New Price:${{$Ad->price}} <hr/>Old Price:${{$Ad->old_price}}</h1>

                  </div>
            </div>
        </div>
    </div>
</div>

@endsection
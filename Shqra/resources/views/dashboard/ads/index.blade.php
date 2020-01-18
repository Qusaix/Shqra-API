@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Ads</h2>

{{-- Main Card --}}
<div class="card">
  
  {{-- Row 1 Buttons  --}}
  <div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
      <div style="margin:1%;" class="btn-group">
        <button  type="button" class="btn btn-primary"  aria-expanded="false">
        @if($Ad)
        <a  class="text-light" href="{{route('dashboard.ads.edit',1)}}"> Update </a>
        @else
        <a class="text-light" href="{{route('dashboard.ads.create')}}"> Create </a>

        @endif
        </button>

       </div>
  </div>
  
  {{-- Row 2 Banners  --}}
  <div class="row">
{{-- Title  --}}
<h1 style="widht:100; margin-left:5%;"><i class="fa fa-picture-o" aria-hidden="true"></i> Banners</h1>
 

     {{-- Content  --}}
    <div class="col-md-6">

      {{-- AD  --}}
        <div class="card-content">

          @if($Ad)

          <img style="width:45%; float:left;" src='{{asset('uploads/'.$Ad->image)}}' alt="A photograph of sliced kiwifruit on a while plate" class="curve">

          <div id="text" style="margin-left:9%">
            <label style="float:right; width:100%;"><hr/>Name: {{$Ad->title}}</label>
            <label style="float:right; width:100%;"><hr/>New Price:${{$Ad->price}} <hr/>Old Price:${{$Ad->old_price}}<hr/></label>
            <p style="margin-bottom:10%; float:right; width:100%;"><label>Description</label><br/>{{$Ad->description}} and piojaipj joiahs;podih ;uahsd;push hoisahdaosud[h aoisdha;spo</p>

            </div>
              @endif


        </div>



    </div>

     {{-- Content  --}}
     <div class="col-md-6">

      {{-- AD  --}}
        <div class="card-content">

          @if($Ad)

          <img style="width:45%; float:left;" src='{{asset('uploads/'.$Ad->image)}}' alt="A photograph of sliced kiwifruit on a while plate" class="curve">

          <div id="text" style="margin-left:9%">
            <label style="float:right; width:100%;"><hr/>Name: {{$Ad->title}}</label>
            <label style="float:right; width:100%;"><hr/>New Price:${{$Ad->price}} <hr/>Old Price:${{$Ad->old_price}}<hr/></label>
            <p style="margin-bottom:10%; float:right; width:100%;"><label>Description</label><br/>{{$Ad->description}} and piojaipj joiahs;podih ;uahsd;push hoisahdaosud[h aoisdha;spo</p>

            </div>
              @endif


        </div>



    </div>

  </div>

{{-- Row 3 Contdowns  --}}

<div class="row">

{{-- Title  --}}
  <h1 style="widht:100; margin-left:5%;"><i class="fa fa-clock-o"></i> Contdowns</h1>
 
 
 

  {{-- Content  --}}
 <div class="col">

   {{-- AD  --}}
     <div class="card-content">
        <button  type="button" class="btn btn-primary"  aria-expanded="false">

          <a  class="text-light" href="{{route('dashboard.countdown.create')}}"> Create </a> 
        
  
          </button>
        @if($Ad)

       <img style="width:45%; float:left;" src='{{asset('uploads/'.$Ad->image)}}' alt="A photograph of sliced kiwifruit on a while plate" class="curve">

       <div id="text" style="margin-left:9%">
         <label style="float:right; width:100%;"><hr/>Name: {{$Ad->title}}</label>
         <label style="float:right; width:100%;"><hr/>Countdown:<div class="your-clock"></div></label>
         </div>
           @endif


     </div>
     


 </div>


</div>






















{{-- <div class="card">
  <div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
           <div style="margin:1%;" class="btn-group">
  <button  type="button" class="btn btn-primary"  aria-expanded="false">
      @if($Ad)
      <a  class="text-light" href="{{route('dashboard.ads.edit',1)}}"> Update </a>
    @else
      <a class="text-light" href="{{route('dashboard.ads.create')}}"> Create </a>

      @endif
  </button>
  
      </div>
    </div>
  </div>

      <div class="row">
        <div class="col-md-6">
                  <div class="card-content">
                        @if($Ad)

                          <img style="width:45%; float:left;" src='{{asset('uploads/'.$Ad->image)}}' alt="A photograph of sliced kiwifruit on a while plate" class="curve">

                          <div id="text" style="margin-left:9%">
                          <label style="float:right; width:100%;"><hr/>Name: {{$Ad->title}}</label>
                          <label style="float:right; width:100%;"><hr/>New Price:${{$Ad->price}} <hr/>Old Price:${{$Ad->old_price}}<hr/></label>
                          <p style="margin-bottom:10%; float:right; width:100%;"><label>Description</label><br/>{{$Ad->description}} and piojaipj joiahs;podih ;uahsd;push hoisahdaosud[h aoisdha;spo</p>

                          </div>
                        @endif
                        </div>
                        
                  
              </div>

              <div class="col-md-6">
                <div class="card-content">
                    @if($Ad)

                      <img style="width:45%; float:left;" src='{{asset('uploads/'.$Ad->image)}}' alt="A photograph of sliced kiwifruit on a while plate" class="curve">

                      <div id="text" style="margin-left:9%">
                      <label style="float:right; width:100%;"><hr/>Name: {{$Ad->title}}</label>
                      <label style="float:right; width:100%;"><hr/>New Price:${{$Ad->price}} <hr/>Old Price:${{$Ad->old_price}}<hr/></label>
                      <p style="margin-bottom:10%; float:right; width:100%;"><label>Description</label><br/>{{$Ad->description}} and piojaipj joiahs;podih ;uahsd;push hoisahdaosud[h aoisdha;spo</p>

                      </div>
                    @endif
                    </div>
                    
              
          </div>

          
          

          </div>
        </div>

      </div>





</div> --}}

<script>

$(document).ready(function() {
  console.log({!! json_encode($Ad->id) !!})
        var huh  = new Date(Date.UTC(2020,2,{!! json_encode($Ad->id) !!}));
        var duh  = new Date();
        var wha  = huh.getTime()/1000 - duh.getTime()/1000;
        console.log(huh);


        var clock = $('.your-clock').FlipClock(wha,{
            clockFace: 'DailyCounter',
            countdown: true
        });
})
 



   

</script>

@endsection
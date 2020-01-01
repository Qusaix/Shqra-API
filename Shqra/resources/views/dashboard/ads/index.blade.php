@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Ads</h2>
<div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
        <div class="card">
           <div class="btn-group">
  <button type="button" class="btn btn-primary"  aria-expanded="false">
    Create 
  </button>
  
</div>
             <div class="card-content">
                <div id="circle-shape-example" >
                    <img style="margin:3%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                    <h1>KiwiFruit</h1>
                    <p style="margin-bottom:10%;">This is kiwifruit: originally called “yang tao”, “melonette” or Chinese gooseberry. Cultivated in its fuzzy variety from Chinese imports, the fruit proved popular with American military servicemen stationed in New Zealand during World War II, with commercial export to the United States starting after the end of the war. In California, the fruit was rebranded as “kiwifruit” due to its resemblance to New Zealand’s national bird. However, it is not a “kiwi”, which is also the demonym for native New Zealanders. 
                        Saying “I’m going to eat a kiwi” 
                        implies that you are either a 
                        cannibal or planning to dine on an endangered flightless bird.</p>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection
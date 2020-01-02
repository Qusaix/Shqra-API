@extends('dashboard.layouts.layout')
@section('section')
<h2 class="section-title">Update Ads</h2>
<div class="row">
    <div class="col-12" style="margin-left:3%; margin-right:3%;">
        <div class="card">
           <div class="btn-group">
            
  
</div>
             <div class="card-content">
                <div class="card">
                    <div class="card-header">
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert"> There is Someting Wrong
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
                        <ul class="card-actions">
                            <li>
                                <button type="button" data-toggle="card-action" data-action="refresh_toggle" data-action-mode="demo"><i class="ion-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="card-action" data-action="content_toggle"></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-block">
                        <form class="form-horizontal m-t-sm" action="{{route('dashboard.ads.update',$Ad->id)}}" method="post" enctype="multipart/form-data" >
                            @csrf 
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mega-firstname">Title</label>
                                            <input class="form-control input-lg" type="text" id="mega-firstname" name="title" placeholder="incert The Title" value={{$Ad->title}} />
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="mega-lastname">New Price</label>
                                            <input class="form-control input-lg" type="text" id="mega-lastname" name="price" placeholder="Incert The Price" value={{$Ad->price}} />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-lastname">Old Price</label>
                                            <input class="form-control input-lg" type="text" id="mega-username" name="old_price" placeholder="Enter Your Old Price..." value={{$Ad->old_price}} />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-bio">Description</label>
                                            <textarea class="form-control input-lg" id="description" name="description" rows="22" placeholder="Enter a few details about your Ad...">{{$Ad->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <label class="file-upload btn btn-primary">
                                                        Browse for file ... <input name="image" type="file" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="mega-skills">Skills</label>
                                            <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                            <option value="1">HTML</option>
                            <option value="2">CSS</option>
                            <option value="3">JavaScript</option>
                            <option value="4">PHP</option>
                            <option value="5">Ruby</option>
                            <option value="6">Photoshop</option>
                            <option value="7">Illustrator</option>
                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="mega-age">Age</label>
                                            <input class="form-control input-lg" type="text" id="mega-age" name="mega-age" placeholder="Enter age.." />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12">Gender</label>
                                        <div class="col-xs-12">
                                            <label class="css-input css-radio css-radio-success m-r-sm">
                            <input type="radio" name="mega-gender-group"><span></span> Female
                        </label>
                                            <label class="css-input css-radio css-radio-success">
                            <input type="radio" name="mega-gender-group"><span></span> Male
                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button class="btn btn-app" type="submit"><i class="ion-checkmark m-r-xs"></i> Update</button>
                                </div>
                            </div>
                        </form>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.file-upload').file_upload();
    });
</script>




@endsection
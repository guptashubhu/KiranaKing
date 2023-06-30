@extends('admin.main.mianFile')

@section('title')
    Admin|Profile
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('public/admin-assets/css/customprofile.css')}}">
@endsection

@section('contant')

    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Profile</h1>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline admin_edit_profile_image">
                <div class="card-body box-profile">
                  <form method="post" action="" id="upload-image-form" enctype="multipart/form-data">
                    @csrf
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' name="image" id="adminimageUpload" accept=".png, .jpg, .jpeg, .gif, .webp" 
                            onchange="readURL(this);"/>
                            <label for="adminimageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                              <img  src="{{ asset('public/admin-assets/img/laravel.png') }}">
                        </div>
                    </div>
                  </form>
                  <h3 class="profile-username text-center">Penjoman</h3>
                  <p class="text-muted text-center">Administrator</p>
                </div>
              </div>
              <!-- /.Profile Image -->
            </div>

            <div class="col-md-9">
              <div class="card">
                <!------Tab-------->
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <h1>Profile Information</h1>
                  </ul>
                </div>
                <!-----/.Tab----->

                <!------Tab Content-------->
                <div class="card-body">
                  <div class="tab-content">
                        <form class="form-horizontal" action="javascript:void(0)" method="POST" id="admininfo" id="profile_info">
                           @csrf
                            <input type="hidden" name="admin_id" id="admin_id" value="{{$data->id}}">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">UserName</label>
                                <div class="col-sm-10">
                                @error('username')
                                    <div class="form-valid-error text-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{$data->name}}">
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                @error('email')
                                  <div class="form-valid-error text-danger">{{ $message }}</div>
                                @enderror
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$data->email}}">
                              </div>
                            </div>

                            <div class="form-group row mt-4">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                              <div class="col-sm-10">
                                  @error('mobile')
                                    <div class="form-valid-error text-danger">{{ $message }}</div>
                                  @enderror
                                  <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$data->phone}}">
                              </div>
                            </div>

                            <div class="form-group row mt-2">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" id="submit" class="btn btn-success btn-block">Submit</button>
                            </div>
                            </div>
                        </form>

                        <hr>

                        <form class="form-horizontal" action="{{url('admin/password-change')}}" method="post" id="profile_info">
                          @csrf

                          <div class="form-group row mt-5">
                              <label for="inputName" class="col-sm-2 col-form-label">Current Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password">
                                @error('current_password')
                                  <div class="form-valid-error text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>

                          <div class="form-group row mt-4">
                              <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                                @error('password')
                                  <div class="form-valid-error text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                          </div>

                            <div class="form-group row mt-4">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Confirm Password</label>
                              <div class="col-sm-10">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                @error('confirm_password')
                                  <div class="form-valid-error text-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group row mt-2">
                              <div class="offset-sm-2 col-sm-10">
                                  <button type="submit" class="btn btn-success btn-block">Submit</button>
                              </div>
                            </div>
                        </form>
                      </div>
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!------/. Tab Content-------->
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#adminimageUpload').change(function(e){
            e.preventDefault();
            $('#upload-image-form').submit();
        });
    </script>
@endsection

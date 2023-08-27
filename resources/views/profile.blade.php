
@extends('layouts.theme.main')
@section('title','Profile')
@section('page_title','Profile')
@section('page_sub_title','User Profile')
@section('content')

   <div class="card">
      <div class="card-body">
        {!! Form::model($data, array('route' => array('profile.update', $data->id))) !!}
         <!-- <div class="profile-set">
            <div class="profile-head"></div>
            <div class="profile-top">
               <div class="profile-content">
                  <div class="profile-contentimg">
                     <img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
                     <div class="profileupload">
                        <input type="file" id="imgInp">
                        <a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg" alt="img"></a>
                     </div>
                  </div>
                  <div class="profile-contentname">
                     <h2>William Castillo</h2>
                     <h4>Updates Your Photo and Personal Details.</h4>
                  </div>
               </div>
               <div class="ms-auto">
                  <a href="javascript:void(0);" class="btn btn-submit me-2">Save</a>
                  <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
               </div>
            </div>
         </div> -->
         <div class="row">
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>First Name</label>
                  {!! Form::text('name', null, array('placeholder' => 'First Name')) !!}

               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>Last Name</label>
                  {!! Form::text('l_name', null, array('placeholder' => 'Last Name')) !!}
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>Email</label>
                  {!! Form::text('email', null, array('placeholder' => 'Email','readonly'=>true)) !!}
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>Phone</label>
                  {!! Form::text('mobile', null, array('placeholder' => 'Phone',"class"=>"form-control is-invalid")) !!}
                  @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>
            </div>
            <!-- <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>User Name</label>
                  <input type="text" placeholder="+1452 876 5432">
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>Password</label>
                  <div class="pass-group">
                     <input type="password" class=" pass-input">
                     <span class="fas toggle-password fa-eye-slash"></span>
                  </div>
               </div>
            </div> -->
            <div class="col-12">
               <input type="submit" class="btn btn-submit me-2" value="Submit" />
               <!-- <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a> -->
            </div>
         </div>
         {!! Form::close() !!}
      </div>
   </div>
@endsection

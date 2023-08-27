
@extends('layouts.theme.main')
@section('title','Setting')
@section('page_title','Setting')
@section('page_sub_title','User Setting')
@section('content')

   <div class="card">
      <div class="card-body">
        {!! Form::model($data, array('route' => array('setting.update', $data->id))) !!}
         
         <div class="row">
            <div class="col-lg-12 col-sm-12">
               <div class="form-group">
                  <label>Address</label>
                  {!! Form::textarea('address', null, array('placeholder' => 'Address',"class"=>"form-control")) !!}

               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>logo</label>
                  <input type="file" id="imgInp" accept='image/png, image/gif, image/jpeg' name="logo">
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>City</label>
                  {!! Form::text('city', null, array('placeholder' => 'city',"class"=>"form-control")) !!}
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>State</label>
                  {!! Form::text('state', null, array('placeholder' => 'state',"class"=>"form-control")) !!}
                 
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>pincode</label>
                  {!! Form::text('pincode', null, array('placeholder' => 'pincode',"class"=>"form-control")) !!}
                 
               </div>
            </div>

            <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                  <label>gst</label>
                  {!! Form::text('gst_no', null, array('placeholder' => 'gst',"class"=>"form-control")) !!}
                 
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

@extends('cityadmin.layout.app')

@section('content')
<div class="container-fluid">
 @if (count($errors) > 0)
   @if($errors->any())
    <div class="alert alert-primary" role="alert">
      {{$errors->first()}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
   @endif
 @endif
    <form action="{{route('cityad-send_note2user')}}" method="post" enctype="multipart/form-data">   
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputName1">{{ __('keywords.Send Notification to Users')}}<sup>*</sup></label>
          <input type="text" class="form-control" id="exampleInputName1" name="notification_title">
        </div>
        
        <div class="form-group">
          <label for="exampleInputName1">{{ __('keywords.Message')}}<sup>*</sup></label>
          <textarea class="form-control" id="exampleInputName1" placeholder="{{ __('keywords.Text not more than 25 words')}}" name="notification_text"></textarea>
        </div>
        <div class="form-group">
         <label>{{ __('keywords.Notification Image')}}</label>  
         
         <div class="input-group col-xs-12">
         <input type="file" name="category_image"  class="file-upload-default">                        
           </div>
         </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success mr-2">{{ __('keywords.Send Notification')}}</button>
        </div>
    </form>
@endsection
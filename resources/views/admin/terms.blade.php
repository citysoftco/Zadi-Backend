@extends('admin.layout.app')

@section ('content')

 <div class="container-fluid">
          <div class="row">
             <div class="col-lg-12">
                @if (session()->has('success'))
               <div class="alert alert-success">
                @if(is_array(session()->get('success')))
                        <ul>
                            @foreach (session()->get('success') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @else
                            {{ session()->get('success') }}
                        @endif
                    </div>
                @endif
                 @if (count($errors) > 0)
                  @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                      {{$errors->first()}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                @endif
                </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Terms & Conditions')}}</h4>
                  <form class="forms-sample" action="{{route('updateterms')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ __('keywords.Terms & Conditions')}}</label><br>
                          <textarea class="form-control" id="summary-ckeditor" name="description">@if($check){{$check->description}} @endif</textarea>
                          <script src="{{ url('assets/ckeditor/ckeditor.js') }}"></script>
                          <script>
                              CKEDITOR.replace( 'summary-ckeditor' );
                          </script>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>   
            
@endsection

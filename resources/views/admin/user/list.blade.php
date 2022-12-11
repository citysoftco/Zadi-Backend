@extends('admin.layout.app')

@section('preload-section')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection

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
<div class="col-lg-12">
<div class="card">    
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('keywords.App Users')}}</h4>
    </div>

    <div class="card-header card-header-secondary">
    <form class="forms-sample" action="{{route('daywise_reg')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                     <div class="row">
                    
                       <div class="col-md-4">
                        <div class="form-group">
                          <label>{{ __('keywords.From Date')}}</label><br>
                          <input type="date" name="sel_date" class="form-control">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label>{{ __('keywords.To Date')}}</label><br>
                          <input type="date" name="to_date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4"><br>
                        <div class="form-group">
                            <label></label><br>
                          <button type="submit" value="SUBMIT" class="btn btn-primary">{{ __('keywords.Show Users')}}</button>
                        </div>
                      </div>
                    </div>  
            </form>
       </div><hr>
<div class="container"><br>    
<table id="datatableDefault" class="table table-striped text-nowrap w-100">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>{{ __('keywords.User')}} {{ __('keywords.Name')}}</th>
            <th>{{ __('keywords.User Phone')}}</th>
            <th>{{ __('keywords.User Email')}}</th>
            <th>{{ __('keywords.Registration Date')}}</th>
            <th>{{ __('keywords.Is Verified')}}</th>
            <th>{{ __('keywords.Active/Block')}}</th>
            <th>{{ __('keywords.Actions')}}</th>
             <th>{{ __('keywords.Details')}}</th>
        </tr>
    </thead>
   <tbody>
           @if(count($users)>0)
          @php $i=1; @endphp
          @foreach($users as $user)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->user_phone}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->reg_date}}</td>
            @if($user->is_verified==0)
            <td class="td-actions text-center" style="color:red"><i class="fa fa-times-circle" style="color:red"></i></td>
            @else
            <td class="td-actions text-center" style="color:green"><i class="fa fa-check-circle" style="color:green"></i></td>
            @endif
              
            <td class="td-actions text-center">
                 @if($user->block==1)
               <a href="{{route('userunblock',$user->id)}}" rel="tooltip">
                    <i class="fa fa-ban" style="color:red;font-size:20px;"></i>
                </a>
                @else
                <a href="{{route('userblock',$user->id)}}" rel="tooltip">
                  <i class="fa fa-check-circle" style="color:green;font-size:20px;"></i>
                </a>
                @endif
                
               
            </td>
            <td> <button type="button" data-toggle="modal" data-target="#exampleModal1{{$user->id}}"><i class="fa fa-credit-card" style="color:green;"></i></button>&nbsp;
            <a href="{{route('ed_user',$user->id)}}" rel="tooltip" >
                  <i class="fa fa-edit" style="color:orange;"></i>
                </a>&nbsp;
                 <a href="{{route('del_userfromlist',$user->id)}}" rel="tooltip" onclick="return confirm('Are You sure! It will remove all the addresses & orders related to this User.')">
                    <i class="fa fa-trash" style="color:red;"></i>
                </a></td>
            <td>  <a href="{{route('mem_list',$user->id)}}" rel="tooltip" class="btn btn-primary">
                    {{ __('keywords.Details')}}
                </a></td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i < 9; $i++)
                        <td style="display:none"></td>    
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
<div class="pull-right mb-1" style="float: right;">
  {{ $users->links("pagination::bootstrap-4") }}
</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div>
    </div>
 
  @foreach($users as $user)
        <div class="modal fade" id="exampleModal1{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>{{$user->name}}</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <br>
              <!--//form-->
              <form class="forms-sample" action="{{route('usr_recharge', $user->id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
              <div class="row">
                  
                <div class="col-md-3" align="center"></div>  
                      <div class="col-md-6" align="center">
                        <div class="form-group">
                        <h3><b>Current Wallet Amount: </b>{{$user->wallet}} </h3>  <br> 
                        <label>{{ __('keywords.Enter Amount')}}</label>        
                  <input class="form-control" type="number" min="10" step="0.01" value="0" step ="0.01" name="amt"/>
              </div>
              <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
              </div>
              </div>
                    <div class="clearfix"></div>
              </form>
              <!--//form-->
            </div>
          </div>
        </div>
     @endforeach    
 
</div>
    @endsection

@section('postload-section')
{{-- You must include files that have no direct efect on the load of the page and can be loaded meanwhile other tasks can be performed by user--}}
<script>
     $('#datatableDefault').DataTable({
        dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-right'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'mr-auto'i><'mb-0'p>>",
        responsive: true,
        lengthMenu: false,
        autoWidth:true,
        select: true,
        scrollX: true,
        processing:true,
        ordering:true,
        paging:false,
        buttons: [
          { extend: 'print', className: 'btn btn-default' },
          { extend: 'csv', className: 'btn btn-default' }
        ]
    });
</script>

@endsection


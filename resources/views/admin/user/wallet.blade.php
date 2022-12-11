@extends('admin.layout.app')

@section('preload-section')


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
      <h4 class="card-title ">{{ __('keywords.Wallet Rechage History')}}</h4>
    </div>
   
<div class="container"> <br> 
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>{{ __('keywords.User')}} {{ __('keywords.Name')}}</th>
            <th>{{ __('keywords.User Phone')}}</th>
            <th>{{ __('keywords.Recharge Amount')}}</th>
            <th>{{ __('keywords.Recharge Date')}}</th>
            <th>{{ __('keywords.Status')}}</th>
            <th>{{ __('keywords.Medium')}}</th>
            <th>{{ __('keywords.Current Amount')}}</th>
            <th>{{ __('keywords.Recharge')}}</th>
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
            <td>{{$user->amount}}</td>
            <td>{{$user->date_of_recharge}}</td>
             @if($user->recharge_status=="success")
            <td><p style="color:green"><b>Success</b></p></td>
            @else
            @if($user->recharge_status=="refunded")
            <td><p style="color:orange"><b>Refunded</b></p></td>
            @else
            <td><p style="color:red"><b>Failed</b></p></td>
            @endif
            @endif
          <td>{{$user->payment_gateway}}</td>
          <td>{{$user->wallet}}</td>
             <td>  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1{{$user->user_id}}">{{ __('keywords.Recharge')}}</button></td>
               
           
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
  {{ $users->render("pagination::bootstrap-4") }}
</div>
</div>  
</div>
</div>
</div>
</div>
<div>
    </div>

  @foreach($users as $user)
        <div class="modal fade" id="exampleModal1{{$user->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form class="forms-sample" action="{{route('usr_recharge', $user->user_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
              <div class="row">
                  
                <div class="col-md-3" align="center"></div>  
                      <div class="col-md-6" align="center">
                        <div class="form-group">
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


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
</div>
<div class="col-lg-12">
  <div class="card">    
    <div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('keywords.Store Payout Request')}}</h4>
    </div>
  <div class="container"> <br> 
    <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
      <thead class="thead-light">
        <tr>
          <th class="text-center">#</th>
          <th>{{ __('keywords.Store')}}</th>
          <th>{{ __('keywords.Address')}}</th>
          <th>{{ __('keywords.Total Revenue')}}</th>
          <th>{{ __('keywords.Bank Account Details')}}</th>
          <th>{{ __('keywords.Already Paid')}}</th>
          <th>{{ __('keywords.Pending Balance')}}</th>
          <th>{{ __('keywords.Amount')}}</th>
          <th>{{ __('keywords.Action')}}</th>
        </tr>
      </thead>
      <tbody>
      @if(count($total_earnings)>0)
        @php $i=1; @endphp

        @foreach($total_earnings as $total_earning)
        <tr>
          <td class="text-center">{{$i}}</td>
          <td>{{$total_earning->store_name}} <p style="font-size:14px">({{$total_earning->phone_number}})</p></td>
          <td>{{$total_earning->address}}</td>
          <td>{{$total_earning->sumprice}}</td>
          <td style="font-size:10px !important"><b>Bank- </b>{{$total_earning->bank_name}}<br>
            <b>Ac Holder- </b>{{$total_earning->holder_name}}<br>
            <b>Ac No.- </b>{{$total_earning->ac_no}}<br>
            <b>IFSC- </b>{{$total_earning->ifsc}}<br>
            UPI - {{$total_earning->upi}}</td>
         
         @if($total_earning->paid != NULL)
          <td>{{$total_earning->paid}}</td>
         @else
          <td>0</td>
         @endif
         
         @if($total_earning->paid != NULL)
          <td>{{$total_earning->sumprice - $total_earning->paid }}</td>
         @else
          <td>{{$total_earning->sumprice}}</td>
         @endif
                                
          <td>{{$total_earning->payout_amt}}</td>
          <td class="td-actions text-center">
            @if($total_earning->sumprice <= $total_earning->paid )
              <span style="color:green">Paid</span>
            @else
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1{{$total_earning->id}}">{{ __('keywords.Pay')}}</button>
            @endif
          </td>
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
    {{ $total_earnings->render("pagination::bootstrap-4") }}
  </div>
</div>
</div>
</div>
</div>
</div>
<div>
  </div>
    @foreach($total_earnings as $total_earning)
        <div class="modal fade" id="exampleModal1{{$total_earning->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>{{$total_earning->store_name}}</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div><br>
              
              <form class="forms-sample" action="{{route('com_payout', $total_earning->req_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                <div class="row">  
                  <div class="col-md-3" align="center"></div>  
                  <div class="col-md-6" align="center">
                    <div class="form-group">
                      <label>{{ __('keywords.Enter Amount')}}</label>        
                      <input class="form-control" name="amt" type="number" min="10" step="0.01" value="{{$total_earning->payout_amt}}" step ="0.01" 
                        @if($total_earning->paid != NULL)
                          max="{{$total_earning->sumprice - $total_earning->paid }}"
                        @else
                          max="{{$total_earning->sumprice}}"
                        @endif  
                      />
                    </div>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                  </div>
                </div>
                    <div class="clearfix"></div>
                </form>
            </div>
          </div>
        </div>    
</div>
      @endforeach

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
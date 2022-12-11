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
    <div class="col-lg-12">
      <div class="card">    
        <div class="card-header card-header-primary">
          <div class="row">
            <div class="col-md-6">
              <h1 class="card-title"><b>{{ __('keywords.Reason')}} {{ __('keywords.List')}}</b></h1>
            </div>
            <div class="col-md-6">
              <a href="{{route('can_res_add')}}" class="btn btn-primary p-1 ml-auto" style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add')}}</a>
            </div>
          </div>
        </div><br>
        <div class="container">   
          <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th>{{ __('keywords.Reason')}}</th>
                <th>{{ __('keywords.Actions')}}</th>
            </thead>
            <tbody>
             @if(count($reason)>0)
              @php $i=1; @endphp
              @foreach($reason as $reasons)
              <tr>
                <td class="text-center">{{$i}}</td>
                <td>{{$reasons->reason}}</td>
                <td>
                  <a href="{{route('can_res_edit', $reasons->res_id)}}" button type="button" class="btn btn-success">
                    <i class="material-icons">edit</i>
                  </button></a>
                  <a href="{{route('can_res_del', $reasons->res_id)}}" button type="button" class="btn btn-danger">
                    <i class="material-icons">close</i>
                  </button></a>
                </td> 
              </tr>      
             @php $i++; @endphp
             @endforeach
            @else
              <tr>
                <td>{{ __('keywords.No data found')}}</td>
                @for ($i = 1; $i < 3; $i++)
                  <td style="display:none"></td>    
                @endfor
              </tr>
            @endif  
            </tbody>
          </table><br />
        </div> 
      </div>
    </div>
  </div>
</div>
<div></div></div>
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

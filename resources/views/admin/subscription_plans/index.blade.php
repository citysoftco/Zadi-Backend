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
    
    <br>
   </div> 
<div class="col-lg-12">
<div class="card">    
<div class="card-header card-header-primary">
    <div class="row">
    <div class="col-md-6">
      <h1 class="card-title"><b>{{ __('keywords.Subscription Plans')}}</b></h1>
      </div>
       <div class="col-md-6">
      <a href="{{route('subscription-plans.create')}}" class="btn btn-primary p-1 ml-auto" style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add')}}</a>
      </div>
       </div>
    </div>
<div class="container"> <br>     
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th>{{ __('keywords.Image')}}</th>
            <th>{{ __('keywords.Plan Name')}}</th>
            <th>{{ __('keywords.Plan Days')}}</th>
            <th>{{ __('keywords.Plan Price')}}</th>
            <th>{{ __('keywords.Description')}}</th>
            <th class="text-right">{{ __('keywords.Actions')}}</th>
        </tr>
    </thead>
    <tbody>
           @if(count($subscriptions)>0)
          @php $i=1; @endphp
          @foreach($subscriptions as $subscription)
        <tr>
            <td class="text-center">{{$i}}</td>
             <td><img src="{{asset('storage/'.$subscription->image)}}" alt="no image" style="width:70px;"></td>
            <td>{{$subscription->name}}</td>
             <td>{{$subscription->days}}</td>
             <td>{{$subscription->price}}</td>          
             <td>{!!$subscription->description!!}</td>
            <td class="td-actions text-right">
                <a href="{{route('subscription-plans.edit',$subscription->id)}}" rel="tooltip" class="btn btn-success">
                    <i class="fa fa-edit"></i>
                </a>
               <form style="display: inline;" method="post" action="{{route('subscription-plans.destroy',$subscription->id)}}" onsubmit="return confirm('Are you sure you want to permanently remove this Plan.')" rel="tooltip">
                @csrf
                @method("delete")
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
               </form>
            </td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i < 10; $i++)
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
<div>
</div>
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
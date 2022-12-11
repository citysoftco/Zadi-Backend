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
      <h1 class="card-title"><b>{{ __('keywords.Sub Category')}} {{ __('keywords.List')}}</b></h1>
      </div>
       <div class="col-md-6">
      <a href="{{route('AddsubCategory')}}" class="btn btn-primary p-1 ml-auto" style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add')}}</a>
      </div>
       </div>
</div> 
<div class="container"> <br>     
<table id="datatableDefault" class="table table-striped text-nowrap w-100">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th>{{ __('keywords.Title')}}</th>
            <th>{{ __('keywords.Parent Category')}}</th>
            <th>{{ __('keywords.Category image')}}</th>
            <th>{{ __('keywords.Cat Id')}}</th>
            <th>{{ __('keywords.App Homepage')}}</th>
            <th class="text-right">{{ __('keywords.Actions')}}</th>
        </tr>
    </thead>
    <tbody>
           @if(count($category)>0)
          @php $i=1; @endphp
          @foreach($category as $cat)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$cat->title}}</td>
            @if($cat->parent == 0)
            <td>-------</td>
            @endif
            @if($cat->parent != 0)
            <td>{{$cat->tttt}}</td>
            @endif
            <td><img src="{{$url_aws.$cat->image}}" alt="category image" style="width:50px; height:50px; border-radius:50%;"/></td>
            <td>{{$cat->cat_id}}</td>
             <td>@if ($cat->status == 1)
                            
            <a href="{{route('add2home', [$cat->cat_id])}}" class="btn btn-primary">add</a>
            @else
            <a href="{{route('delfromhome', [$cat->cat_id])}}" class="btn btn-danger">delete</a>
            @endif
            </td>
            <td class="td-actions text-right">
                <a href="{{route('EditsubCategory',$cat->cat_id)}}" rel="tooltip" class="btn btn-success">
                    <i class="fa fa-edit"></i>
                </a>
               <a href="{{route('DeleteCategory',$cat->cat_id)}}" onClick="return confirm('Are you sure you want to permanently remove this Category.')" rel="tooltip" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i<7; $i++)
                        <td style="display:none"></td>
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
<div class="pull-right mb-1" style="float: right;">
  {{ $category->render("pagination::bootstrap-4") }}
</div>
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
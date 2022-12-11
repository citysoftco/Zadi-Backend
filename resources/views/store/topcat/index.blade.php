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
     <a href="{{route('adminAddTopCat')}}" class="btn btn-primary ml-auto" style="width:16%;float:right;padding: 3px 0px 3px 0px;"><i class="material-icons">add</i>Add Category</a>
    <br>
   </div> 
<div class="col-lg-12">
<div class="card">    
<div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('keywords.Category')}} {{ __('keywords.List')}}</h4>
    </div>
<div class="container"><br>
<table class="display" id="myTable">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>{{ __('keywords.Name')}}</th>
            <th>Cat Rank</th>
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
            <td>{{$cat->cat_rank}}</td>
            
            <td class="td-actions text-right">
                <a href="{{route('adminEditTopCat',$cat->id)}}" rel="tooltip" class="btn btn-success">
                    <i class="material-icons">edit</i>
                </a>
               <a href="{{route('adminTopCatDelete',$cat->id)}}" onClick="return confirm('Are you sure you want to permanently remove this Category from top category.')" rel="tooltip" class="btn btn-danger">
                    <i class="material-icons">close</i>
                </a>
            </td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
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
    $(document).ready( function () {
      $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
      });
    });
</script>

@endsection

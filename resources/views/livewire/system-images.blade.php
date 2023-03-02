<div>
   
    <input wire:model="name" type="text" name="name" placeholder="{{__('keywords.image name')}}" class="form-control" >
    <br>
                         <div class="d-flex gap-2 flex-wrap">
                                 @if ($images->count() > 0)                                
                                            @foreach ( $images as $image )                                                
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="gallary" style="width: 70px;height: 70px;"  src="{{Storage::disk("public")->url($image->path)}}" alt="image">
<div class="gallary-image-title">{{$image->name}}</div>
                                            </div>
                                           @endforeach
                                  @else
                                  <h1 class="text-center">لاتوجد صور</h1>
                                  @endif

                        </div>
                                          {{ $images->links() }}
                                          <style>
                                            .gallary{
                                                border: 1px solid rgb(206, 206, 206);
                                                border-radius: 5px;
                                                cursor: pointer;
                                            }
                                            .gallary-image-title{
                                                font-size: 10px
                                            }
                                          </style>


</div>

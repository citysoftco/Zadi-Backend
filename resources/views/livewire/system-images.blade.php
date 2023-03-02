<div>
    <input hidden  type="text" name="image_id" value="{{$imageId}}" class="form-control">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectPhotoModal">
  {{__("keywords.select photo")}}
</button>      
<br>
<br>
@if($selectedImage)
   <img class="gallary" style="width: 70px;height: 70px;" src="{{Storage::disk("public")->url($selectedImage->path)}}" alt="">
@endif

                <div wire:ignore.self class="modal fade" id="selectPhotoModal" tabindex="-1" role="dialog"
                aria-labelledby="selectPhotoModal" aria-hidden="true">
                <div class="container">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="selectPhotoModal">{{ __('keywords.Available Images') }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                             <div class="modal-body">
    <input wire:model="name" type="text" name="name" placeholder="{{__('keywords.image name')}}" class="form-control" >
    <br>
                         <div class="d-flex gap-2 flex-wrap">
                                 @if ($images->count() > 0)                                
                                            @foreach ( $images as $image )                                                
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img data-dismiss="modal" aria-label="Close" wire:click="getImage({{$image->id}})" class="gallary" style="width: 70px;height: 70px;"  src="{{Storage::disk("public")->url($image->path)}}" alt="image">
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
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">{{ __('keywords.Close') }}</button>
    </div>
    </div>

    <!-- end content-->
    </div>
    </div>
    <!--  end card  -->

    </div>


</div>

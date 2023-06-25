<x-control-modal id="modal-banner" method="patch" :action="route('banner.update', $projectsBanner)" title="Edit banner" errorBag="banner">

  <div class="form-floating has-validation mb-3">
    <input type="text" class="form-control @error('title', 'banner') is-invalid @enderror" id="banner-edit-title" name="title" placeholder="{{__('Title')}}" required maxlength="32" value="{{$errors->banner->isNotEmpty() ? old('title', $projectsBanner->title) : $projectsBanner->title}}" />
    <label for="banner-edit-title">{{__('Title')}}</label>
    @error('title', 'banner')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="has-validation mb-3">
    <label for="banner-edit-image" class="form-label">{{__('Image')}}</label>
    <input class="form-control @error('image', 'banner') is-invalid @enderror" type="file" name="image" id="banner-edit-image" accept="image/*" />
    @error('image', 'banner')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

</x-control-modal>

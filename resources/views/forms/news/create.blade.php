<x-control-modal id="modal-create" method="post" :action="route('news.store')" :title="__('Create :entity', ['entity' => __('news')])" errorBag="create">

  <div class="form-floating has-validation mb-3">
    <input type="text" class="form-control @error('title', 'create') is-invalid @enderror" id="create-title" name="title" placeholder="{{__('Title')}}" required maxlength="32" value="{{$errors->create->isNotEmpty() ? old('title') : ''}}" />
    <label for="create-title">{{__('Title')}}</label>
    @error('title', 'create')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating has-validation mb-3">
    <input type="text" class="form-control @error('description', 'create') is-invalid @enderror" id="create-description" name="description" placeholder="{{__('Description')}}" required maxlength="256" value="{{$errors->create->isNotEmpty() ? old('description') : ''}}" />
    <label for="create-description">{{__('Description')}}</label>
    @error('description', 'create')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="has-validation mb-3">
    <label for="create-image" class="form-label">Image</label>
    <input class="form-control @error('image', 'create') is-invalid @enderror" type="file" name="image" id="create-image" accept="image/*" required />
    @error('image', 'create')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

</x-control-modal>

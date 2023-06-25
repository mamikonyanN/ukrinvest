<x-control-modal id="modal-create" method="post" :action="route('press.store')" :title="__('Create :entity', ['entity' => __('press')])" errorBag="create">

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
    <input type="text" class="form-control @error('description', 'create') is-invalid @enderror" id="create-description" name="description" placeholder="{{__('Description')}}" required maxlength="128" value="{{$errors->create->isNotEmpty() ? old('description') : ''}}" />
    <label for="create-description">{{__('Description')}}</label>
    @error('description', 'create')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

</x-control-modal>

<x-control-modal id="modal-edit-{{$item->id}}" method="patch" :action="route('service.update', $item)" :title="__('Edit :entity #:number', ['entity' => __('service'), 'number' => $item->id])" errorBag="edit_{{$item->id}}">

  <div class="form-floating has-validation mb-3">
    <input type="text" class="form-control @error('title', 'edit_'.$item->id) is-invalid @enderror" id="edit-title" name="title" placeholder="{{__('Title')}}" required maxlength="32" value="{{$errors->{'edit_'.$item->id}->isNotEmpty() ? old('title', $item->title) : $item->title}}" />
    <label for="edit-title">{{__('Title')}}</label>
    @error('title', 'edit_'.$item->id)
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="has-validation mb-3">
    <label for="edit-image" class="form-label">{{__('Image')}}</label>
    <input class="form-control @error('image', 'edit_'.$item->id) is-invalid @enderror" type="file" name="image" id="edit-image" accept="image/*" />
    @error('image', 'edit_'.$item->id)
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="has-validation mb-3">
    <label for="edit-icon" class="form-label">{{__('Icon')}}</label>
    <input class="form-control @error('icon', 'edit_'.$item->id) is-invalid @enderror" type="file" name="icon" id="edit-icon" accept="image/*" />
    @error('icon', 'edit_'.$item->id)
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

</x-control-modal>

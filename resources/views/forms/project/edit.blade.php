<x-control-modal id="modal-edit-{{$item->id}}" method="patch" :action="route('project.update', $item)" :title="__('Edit :entity #:number', ['entity' => __('project'), 'number' => $item->id])" errorBag="edit_{{$item->id}}">

  <div class="form-floating has-validation mb-3">
    <input type="text" class="form-control @error('title', 'edit_'.$item->id) is-invalid @enderror" id="project-edit-title" name="title" placeholder="{{__('Title')}}" required maxlength="32" value="{{$errors->{'edit_'.$item->id}->isNotEmpty() ? old('title', $item->title) : $item->title}}" />
    <label for="project-edit-title">{{__('Title')}}</label>
    @error('title', 'edit_'.$item->id)
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating has-validation mb-3">
    <input type="text" class="form-control @error('description', 'edit_'.$item->id) is-invalid @enderror" id="project-edit-description" name="description" placeholder="{{__('Description')}}" required maxlength="256" value="{{$errors->{'edit_'.$item->id}->isNotEmpty() ? old('description', $item->description) : $item->description}}" />
    <label for="project-edit-description">{{__('Description')}}</label>
    @error('description', 'edit_'.$item->id)
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="has-validation mb-3">
    <label for="project-edit-image" class="form-label">{{__('Image')}}</label>
    <input class="form-control @error('image', 'edit_'.$item->id) is-invalid @enderror" type="file" name="image" id="project-edit-image" accept="image/*" />
    @error('image', 'edit_'.$item->id)
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

</x-control-modal>

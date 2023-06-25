<x-control-modal id="modal-project-description" method="patch" :action="route('projectDescription.update', $projectDescription)" title="Edit description" errorBag="projectDescription">

  <div class="modal-body">
    <div class="form-floating">
      <input class="form-control @error('title', 'projectDescription') is-invalid @enderror" id="project-description-title" placeholder="{{__('Title')}}" name="title" maxlength="32" required value="{{$errors->projectDescription->isNotEmpty() ? old('title', $projectDescription->title) : $projectDescription->title}}" />
      <label for="project-description-title">{{__('Title')}}</label>
      @error('title', 'projectDescription')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

</x-control-modal>

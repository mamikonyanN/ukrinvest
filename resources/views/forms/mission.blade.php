<x-control-modal id="modal-mission" method="patch" :action="route('mission.update', $mission)" title="Edit mission" errorBag="mission">

  <div class="modal-body">
    <div class="form-floating">
      <textarea class="form-control @error('text', 'mission') is-invalid @enderror" id="mission-text" name="text" style="height: 100px" required maxlength="1024">{{$errors->mission->isNotEmpty() ? old('text', $mission->text) : $mission->text}}</textarea>
      <label for="mission-text">{{__('Text')}}</label>
      @error('text', 'mission')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

</x-control-modal>

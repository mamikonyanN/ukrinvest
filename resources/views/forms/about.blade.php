<x-control-modal id="modal-about" method="patch" :action="route('about.update', $about)" title="Edit about" errorBag="about">

  <div class="modal-body">
    <div class="form-floating">
      <textarea class="form-control @error('text', 'about') is-invalid @enderror" id="about-text" name="text" style="height: 100px" required maxlength="1024">{{$errors->about->isNotEmpty() ? old('text', $about->text) : $about->text}}</textarea>
      <label for="about-text">{{__('Text')}}</label>
      @error('text', 'about')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>

</x-control-modal>

<div class="modal fade" id="about-edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit about</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('about.update', $about)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="form-floating">
            <textarea class="form-control @error('text', 'about') is-invalid @enderror" id="about-text" name="text" style="height: 100px" required maxlength="1024">{{$errors->about->isNotEmpty() ? old('text', $about->text) : $about->text}}</textarea>
            <label for="about-text" class="col-form-label">Text</label>
            @error('text', 'about')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@if($errors->about->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#about-edit-modal')).show();</script>
@endpush
@endif

<div class="modal fade" id="mission-edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit mission</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('mission.update', $mission)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="form-floating">
            <textarea class="form-control @error('text', 'mission') is-invalid @enderror" id="mission-text" name="text" style="height: 100px" required maxlength="1024">{{$errors->mission->isNotEmpty() ? old('text', $mission->text) : $mission->text}}</textarea>
            <label for="mission-text" class="col-form-label">Text</label>
            @error('text', 'mission')
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

@if($errors->mission->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#mission-edit-modal')).show();</script>
@endpush
@endif

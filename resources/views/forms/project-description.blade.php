<div class="modal fade" id="project-description-edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit project description</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('projectDescription.update', $projectDescription)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">
          <div class="form-floating">
            <input class="form-control @error('title', 'projectDescription') is-invalid @enderror" id="project-description-title" name="title" maxlength="32" required value="{{$errors->projectDescription->isNotEmpty() ? old('title', $projectDescription->title) : $projectDescription->title}}" />
            <label for="project-description-title" class="col-form-label">Title</label>
            @error('title', 'projectDescription')
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

@if($errors->projectDescription->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#project-description-edit-modal')).show();</script>
@endpush
@endif

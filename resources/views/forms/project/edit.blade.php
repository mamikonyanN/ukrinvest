<div class="modal fa" id="project-edit-modal-{{$project->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit project #{{$project->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('project.update', $project)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'edit_'.$project->id) is-invalid @enderror" id="project-edit-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->{'edit_'.$project->id}->isNotEmpty() ? old('title', $project->title) : $project->title}}" />
            <label for="project-edit-title">Title</label>
            @error('title', 'edit_'.$project->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('description', 'edit_'.$project->id) is-invalid @enderror" id="project-edit-description" name="description" placeholder="Description" required maxlength="256" value="{{$errors->{'edit_'.$project->id}->isNotEmpty() ? old('description', $project->description) : $project->description}}" />
            <label for="project-edit-description">Description</label>
            @error('description', 'edit_'.$project->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="project-edit-image" class="form-label">Image</label>
            <input class="form-control @error('image', 'edit_'.$project->id) is-invalid @enderror" type="file" name="image" id="project-edit-image" accept="image/*" />
            @error('image', 'edit_'.$project->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="reset" class="btn btn-warning">Clear</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@if($errors->{'edit_'.$project->id}->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#project-edit-modal-{{$project->id}}')).show();</script>
@endpush
@endif

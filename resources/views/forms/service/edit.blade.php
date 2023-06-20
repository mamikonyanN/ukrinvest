<div class="modal fa" id="service-edit-modal-{{$service->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit service #{{$service->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('service.update', $service)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'edit_'.$service->id) is-invalid @enderror" id="service-edit-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->{'edit_'.$service->id}->isNotEmpty() ? old('title', $service->title) : $service->title}}" />
            <label for="service-edit-title">Title</label>
            @error('title', 'edit_'.$service->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="service-edit-image" class="form-label">Image</label>
            <input class="form-control @error('image', 'edit_'.$service->id) is-invalid @enderror" type="file" name="image" id="service-edit-image" accept="image/*" />
            @error('image', 'edit_'.$service->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="service-edit-icon" class="form-label">Icon</label>
            <input class="form-control @error('icon', 'edit_'.$service->id) is-invalid @enderror" type="file" name="icon" id="service-edit-icon" accept="image/*" />
            @error('icon', 'edit_'.$service->id)
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

@if($errors->{'edit_'.$service->id}->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#service-edit-modal-{{$service->id}}')).show();</script>
@endpush
@endif

<div class="modal fade" id="service-create-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Create service</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'create') is-invalid @enderror" id="service-create-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->create->isNotEmpty() ? old('title') : ''}}" />
            <label for="service-create-title">Title</label>
            @error('title', 'create')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="service-create-image" class="form-label">Image</label>
            <input class="form-control @error('image', 'create') is-invalid @enderror" type="file" name="image" id="service-create-image" accept="image/*" required />
            @error('image', 'create')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="service-create-icon" class="form-label">Icon</label>
            <input class="form-control @error('icon', 'create') is-invalid @enderror" type="file" name="icon" id="service-create-icon" accept="image/*" required />
            @error('icon', 'create')
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


@if($errors->create->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#service-create-modal')).show();</script>
@endpush
@endif

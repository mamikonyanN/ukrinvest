<div class="modal fade" id="press-create-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Create press</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('press.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'create') is-invalid @enderror" id="press-create-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->create->isNotEmpty() ? old('title') : ''}}" />
            <label for="press-create-title">Title</label>
            @error('title', 'create')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('description', 'create') is-invalid @enderror" id="press-create-description" name="description" placeholder="Description" required maxlength="128" value="{{$errors->create->isNotEmpty() ? old('description') : ''}}" />
            <label for="press-create-description">Description</label>
            @error('description', 'create')
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
<script type="module">(new bootstrap.Modal('#press-create-modal')).show();</script>
@endpush
@endif

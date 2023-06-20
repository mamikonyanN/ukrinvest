<div class="modal fade" id="banner-edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit banner</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('banner.update', $projectsBanner)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'banner') is-invalid @enderror" id="banner-edit-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->banner->isNotEmpty() ? old('title', $projectsBanner->title) : $projectsBanner->title}}" />
            <label for="banner-edit-title">Title</label>
            @error('title', 'banner')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="banner-edit-image" class="form-label">Image</label>
            <input class="form-control @error('image', 'banner') is-invalid @enderror" type="file" name="image" id="banner-edit-image" accept="image/*" />
            @error('image', 'banner')
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


@if($errors->banner->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#banner-edit-modal')).show();</script>
@endpush
@endif

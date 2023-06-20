<div class="modal fa" id="news-edit-modal-{{$item->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit news #{{$item->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('news.update', $item)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'edit_'.$item->id) is-invalid @enderror" id="news-edit-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->{'edit_'.$item->id}->isNotEmpty() ? old('title', $item->title) : $item->title}}" />
            <label for="news-edit-title">Title</label>
            @error('title', 'edit_'.$item->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('description', 'edit_'.$item->id) is-invalid @enderror" id="news-edit-description" name="description" placeholder="Description" required maxlength="256" value="{{$errors->{'edit_'.$item->id}->isNotEmpty() ? old('description', $item->description) : $item->description}}" />
            <label for="news-edit-description">Description</label>
            @error('description', 'edit_'.$item->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="news-edit-image" class="form-label">Image</label>
            <input class="form-control @error('image', 'edit_'.$item->id) is-invalid @enderror" type="file" name="image" id="news-edit-image" accept="image/*" />
            @error('image', 'edit_'.$item->id)
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

@if($errors->{'edit_'.$item->id}->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#news-edit-modal-{{$item->id}}')).show();</script>
@endpush
@endif

<div class="modal fade" id="carousel-element-edit-modal-{{$carouselElement->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit carousel element #{{$carouselElement->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('carouselElement.update', $carouselElement)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="modal-body">

          <div class="form-floating has-validation mb-3">
            <input type="text" class="form-control @error('title', 'edit_'.$carouselElement->id) is-invalid @enderror" id="carousel-element-create-title" name="title" placeholder="Title" required maxlength="32" value="{{$errors->{'edit_'.$carouselElement->id}->isNotEmpty() ? old('title', $carouselElement->title) : $carouselElement->title}}">
            <label for="carousel-element-create-title">Title</label>
            @error('title', 'edit_'.$carouselElement->id)
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="has-validation mb-3">
            <label for="carousel-element-create-image" class="form-label">Image</label>
            <input class="form-control @error('image', 'edit_'.$carouselElement->id) is-invalid @enderror" type="file" name="image" id="carousel-element-create-image" accept="image/*">
            @error('image', 'edit_'.$carouselElement->id)
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

@if($errors->{'edit_'.$carouselElement->id}->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#carousel-element-edit-modal-{{$carouselElement->id}}')).show();</script>
@endpush
@endif

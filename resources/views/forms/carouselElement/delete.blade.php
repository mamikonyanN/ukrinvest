<div class="modal fade" id="carousel-element-delete-modal-{{$carouselElement->id}}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Delete carousel element #{{$carouselElement->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('carouselElement.destroy', $carouselElement)}}" method="POST">
        @method('delete')
        @csrf
        <div class="modal-body">
          <h1>Are you sure?</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
@props(['item'])

<div {{$attributes->class('')}}>
  <div class="card bg-secondary border-0 display-flex flex-row position-relative h-100">

    <div class="ratio ratio-1x1 rounded min-h-100 w-auto bg-primary d-flex justify-content-center align-items-center text-center text-uppercase h3 p-2 m-0">
      {{ $item->created_at->format('d M, Y') }}
    </div>

    <div class="card-body text-start me-2">
      <h5 class="card-title">{{$item->title}}</h5>
      <p class="card-text text-secondary-emphasis">{{$item->description}}</p>
    </div>

    <div class="position-absolute top-50 start-100 translate-middle dropend z-3">
      <button type="button" class="btn btn-sm btn-icon bg-dark bg-opacity-75 rounded-circle p-2" data-bs-toggle="dropdown" data-bs-offset="-50,5">
        <span class="icon icon-share icon-center"></span>
      </button>
      <div class="dropdown-menu bg-secondary p-2 rounded" style="min-width: auto">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <a href="#" target="_blank"><span class="icon icon-lg icon-telegram"></span></a>
          <a href="#" target="_blank"><span class="icon icon-lg icon-facebook-black"></span></a>
          <a href="#" target="_blank"><span class="icon icon-lg icon-mail"></span></a>
        </div>
      </div>
    </div>
  </div>
</div>

@props(['item'])

<div {{ $attributes->class('') }}>
  <div class="card bg-secondary border-0 position-relative h-100 mb-2">
    <img src="{{asset('/storage/images/' . $item->image_name)}}" class="card-img-top ratio ratio-1x1" alt="{{$item->title}}">
    <div class="card-body">
      <p class="card-text fw-bold"><small>{{$item->created_at->translatedFormat('d M, Y')}}</small></p>
      <p class="card-title h5 m-0 font-monospace">{{$item->title}}</p>
      <p class="card-text text-secondary-emphasis">{{$item->description}}</p>
    </div>

    <button role="button" class="btn btn-link position-absolute top-100 start-50 translate-middle">
      <span class="icon icon-xl icon-more-green icon-center"></span>
    </button>
  </div>
</div>

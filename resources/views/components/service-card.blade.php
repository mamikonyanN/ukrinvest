@props(['service'])

<div {{$attributes->class('p-2')}}>
  <div class="position-relative">
    <img class="img-fluid" src="{{asset('/storage/images/' . $service->image_name)}}" alt="{{$service->title}}">
    <div class="position-absolute top-0 bottom-0 h-100 w-100">
      <img class="position-absolute top-50 start-50 translate-middle h-50 w-50 object-fit-contain" src="{{asset('/storage/images/' . $service->icon_name)}}" alt="{{$service->title}}">
    </div>
  </div>
  <div class="font-monospace fs-3 text-uppercase">{{$service->title}}</div>
</div>

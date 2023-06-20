@props(['element'])

<div {{$attributes->class('carousel-item')}}>
  <img class="bg-secondary object-fit-cover vw-100 vh-100" src="{{asset('/storage/images/' . $element->image_name)}}" alt="{{$element->title}}">

  <div class="carousel-caption relative-unset top-50 start-50 translate-middle p-0">
    <span class="display-3">{{$element->title}}</span>
  </div>
</div>

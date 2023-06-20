@props(['imgPath', 'title'])

<div {{$attributes->class('position-relative')}} {{$attributes->style('')}}>
  <img src="{{asset('/storage/images/' . $imgPath)}}" class="img-fluid" alt="{{$title}}">
  <h1 class="display-3 text-light text-center position-absolute top-50 translate-middle" style="left: 75%; width: 25%">{{$title}}</р>
</div>

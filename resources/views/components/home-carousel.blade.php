@props(['elements'])
<div id="carousel-home" class="carousel slide" data-bs-interval="3000" data-bs-ride="carousel">

  <div class="carousel-indicators">
    @foreach($elements as $element)
    <button @class(['rounded-circle', 'active'=> $loop->first]) type="button" data-bs-target="#carousel-home" data-bs-slide-to="{{$loop->index}}"></button>
    @endforeach
  </div>

  <div class="carousel-inner position-relative vh-100">
    @foreach($elements as $element)
    <x-home-carousel-item @class(['active'=>$loop->first]) :element="$element"></x-home-carousel-item>
    @endforeach
  </div>

</div>

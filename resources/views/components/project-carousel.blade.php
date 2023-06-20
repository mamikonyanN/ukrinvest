@props(['chunks' => [], 'suffix' => 'default', 'colClass' => 'col-12'])

<div id="carousel-projects-{{$suffix}}" {{ $attributes->class('carousel slide') }}>

  <div class="px-5">
    <div class="carousel-inner">
      @foreach($chunks as $chunk)
      <div @class(['carousel-item', 'active'=> $loop->first])>
        <div class="row justify-content-center">
          @foreach($chunk as $project)
          <x-project-card class="{{$colClass}} mb-5" :project="$project" />
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <button class="carousel-control-prev w-auto mb-5" type="button" data-bs-target="#carousel-projects-{{$suffix}}" data-bs-slide="prev">
    <span class="icon icon-lg icon-arrow-left" aria-hidden="true"></span>
  </button>

  <button class="carousel-control-next w-auto mb-5" type="button" data-bs-target="#carousel-projects-{{$suffix}}" data-bs-slide="next">
    <span class="icon icon-lg icon-arrow-right" aria-hidden="true"></span>
  </button>

</div>

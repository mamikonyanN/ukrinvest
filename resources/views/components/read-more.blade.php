@props(['uid' => Str::random(10), 'text' => '', 'length' => 256])

<div {{$attributes->class('read-more')}}>
  @if(strlen($text) > 256)
  <span class="multiline">{{substr($text,0, $length)}}</span><span class="collapse" id="{{$uid}}-readmore">{{substr($text, $length)}}</span><span class="read-more-ellipsis">...</span>

  <br>
  <button class="btn-read-more btn btn-link p-0 text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#{{$uid}}-readmore" aria-expanded="false">
    <span class="icon icon-green-arrow-right algin-center"></span>
  </button>
  @else
  <span class="multiline">{{$text}}</span>
  @endif
</div>

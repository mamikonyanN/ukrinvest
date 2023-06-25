@props(['title' => 'Edit', 'modal' => null, 'href' => null])

@if(isset($modal))
<button type="button" {{$attributes->class('btn btn-sm btn-success')}} data-bs-toggle="modal" data-bs-target="#{{$modal}}">{{__($title)}}</button>
@elseif(isset($href))
<a {{$attributes->class('btn btn-sm btn-success')}} href="{{$href}}">{{__($title)}}</a>
@endif

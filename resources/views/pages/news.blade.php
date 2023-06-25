@extends('layouts/app')

@section('title', __('News') . ' | UktrInvest')

@section('content')
<section class="container py-5 d-flex flex-column">

  <div class="row">
    <div class="col col-md-8 offset-md-2 col-lg-6 offset-lg-3">

      @foreach($news as $item)
      <div class="flex-fill">
        <div class="fw-bold text-uppercase">{{ $item->created_at->translatedFormat('d M, Y') }}</div>
        <h3 class="font-monospace">{{ $item->title }}</h3>
        <img class="w-100" src="{{asset('/storage/images/' . $item->image_name)}}" alt="{{$item->title}}">
        <p>{{ $item->description }}</p>

        <div class="text-center">
          <button role="button" class="btn btn-link">
            <span class="icon icon-xl icon-more-green icon-center"></span>
          </button>
        </div>

      </div>
      @endforeach


      {{ $news->links('layouts.pagination') }}

    </div>
  </div>
</section>
@endsection

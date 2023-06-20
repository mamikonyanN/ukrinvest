@extends('layouts.app')

@section('title', 'Admin: Carousel elements | Ukrinvest')

@section('content')
<div class="container-fluid my-3">
  <section class="d-flex justify-content-between">
    <a class="btn btn-link" href="{{route('main')}}">Go back</a>
    <x-button-action title='Create' modal='carousel-element-create-modal' class="btn-primary" />
  </section>

  <table class="table table-hover caption-top">
    <caption>Carousel elements</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($carouselElements as $carouselElement)
      <tr>
        <th scope="row">{{$carouselElement->id}}</th>
        <td>{{$carouselElement->title}}</td>
        <td style="max-width: 150px">
          <img src="{{asset('/storage/images/' . $carouselElement->image_name)}}" class="img-fluid" alt="{{$carouselElement->title}}">
        </td>
        <td>
          <x-button-action title='Edit' modal='carousel-element-edit-modal-{{$carouselElement->id}}' class="btn-success" />
          <x-button-action title='Delete' modal='carousel-element-delete-modal-{{$carouselElement->id}}' class="btn-danger" />
          @include('forms.carouselElement.edit')
          @include('forms.carouselElement.delete')
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $carouselElements->links() }}

</div>

@include('forms.carouselElement.create')
@endsection

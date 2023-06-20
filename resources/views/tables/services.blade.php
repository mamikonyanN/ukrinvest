@extends('layouts.app')

@section('title', 'Admin: Services | Ukrinvest')

@section('content')
<div class="container-fluid my-3">
  <section class="d-flex justify-content-between">
    <a class="btn btn-link" href="{{route('main')}}">Go back</a>
    <x-button-action title='Create' modal='service-create-modal' class="btn-primary" />
  </section>

  <table class="table table-hover caption-top">
    <caption>Services</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Icon</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($services as $service)
      <tr>
        <th scope="row">{{$service->id}}</th>
        <td>{{$service->title}}</td>
        <td style="max-width: 150px">
          <img src="{{asset('/storage/images/' . $service->image_name)}}" class="img-fluid" alt="{{$service->title}}">
        </td>
        <td style="max-width: 50px">
          <img src="{{asset('/storage/images/' . $service->icon_name)}}" class="img-fluid" alt="{{$service->title}}">
        </td>
        <td>
          <x-button-action title='Edit' modal='service-edit-modal-{{$service->id}}' class="btn-success" />
          <x-button-action title='Delete' modal='service-delete-modal-{{$service->id}}' class="btn-danger" />
          @include('forms.service.edit')
          @include('forms.service.delete')
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $services->links() }}

</div>

@include('forms.service.create')
@endsection

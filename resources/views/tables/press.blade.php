@extends('layouts.app')

@section('title', 'Admin: Press | Ukrinvest')

@section('content')
<div class="container-fluid my-3">
  <section class="d-flex justify-content-between">
    <a class="btn btn-link" href="{{route('main')}}">Go back</a>
    <x-button-action title='Create' modal='press-create-modal' class="btn-primary" />
  </section>

  <table class="table table-hover caption-top">
    <caption>Services</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Create</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($press as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->created_at->format('d.m.Y')}}</td>
        <td>
          <x-button-action title='Edit' modal='press-edit-modal-{{$item->id}}' class="btn-success" />
          <x-button-action title='Delete' modal='press-delete-modal-{{$item->id}}' class="btn-danger" />
          @include('forms.press.edit')
          @include('forms.press.delete')
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $press->links() }}

</div>

@include('forms.press.create')
@endsection

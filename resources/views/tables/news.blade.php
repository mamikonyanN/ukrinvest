@extends('layouts.app')

@section('title', 'Admin: News | Ukrinvest')

@section('content')
<div class="container-fluid my-3">
  <section class="d-flex justify-content-between">
    <a class="btn btn-link" href="{{route('main')}}">Go back</a>
    <x-button-action title='Create' modal='news-create-modal' class="btn-primary" />
  </section>

  <table class="table table-hover caption-top">
    <caption>News</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($news as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td style="max-width: 150px">
          <img src="{{asset('/storage/images/' . $item->image_name)}}" class="img-fluid" alt="{{$item->title}}">
        </td>
        <td>
          <x-button-action title='Edit' modal='news-edit-modal-{{$item->id}}' class="btn-success" />
          <x-button-action title='Delete' modal='news-delete-modal-{{$item->id}}' class="btn-danger" />
          @include('forms.news.edit')
          @include('forms.news.delete')
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $news->links() }}

</div>

@include('forms.news.create')
@endsection

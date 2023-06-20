@extends('layouts.app')

@section('title', 'Admin: Projects | Ukrinvest')

@section('content')
<div class="container-fluid my-3">
  <section class="d-flex justify-content-between">
    <a class="btn btn-link" href="{{route('main')}}">Go back</a>
    <x-button-action title='Create' modal='project-create-modal' class="btn-primary" />
  </section>

  <table class="table table-hover caption-top">
    <caption>Projects</caption>
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
      @foreach ($projects as $project)
      <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->title}}</td>
        <td>{{$project->description}}</td>
        <td style="max-width: 150px">
          <img src="{{asset('/storage/images/' . $project->image_name)}}" class="img-fluid" alt="{{$project->title}}">
        </td>
        <td>
          <x-button-action title='Edit' modal='project-edit-modal-{{$project->id}}' class="btn-success" />
          <x-button-action title='Delete' modal='project-delete-modal-{{$project->id}}' class="btn-danger" />
          @include('forms.project.edit')
          @include('forms.project.delete')
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $projects->links() }}

</div>

@include('forms.project.create')
@endsection

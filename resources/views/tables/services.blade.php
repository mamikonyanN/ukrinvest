@extends('layouts.app')

@section('title', __('List of services') . ' | Ukrinvest')

@section('content')
<div class="container-fluid my-3">
  <section class="d-flex justify-content-between">
    <a href="{{url()->previous()}}">{{__('Back')}}</a>
    <x-button-action title='Create' modal='modal-create' class="btn-primary" />
  </section>

  <table class="table table-hover caption-top">
    <caption>{{__('Services')}}</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">{{__('Title')}}</th>
        <th scope="col">{{__('Image')}}</th>
        <th scope="col">{{__('Icon')}}</th>
        <th scope="col" class="text-end">{{__('Actions')}}</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td style="max-width: 150px">
          <img src="{{asset('/storage/images/' . $item->image_name)}}" class="img-fluid" alt="{{$item->title}}">
        </td>
        <td style="max-width: 50px">
          <img src="{{asset('/storage/images/' . $item->icon_name)}}" class="img-fluid" alt="{{$item->title}}">
        </td>
        <td class="text-end">
          <x-button-action title='Edit' modal='modal-edit-{{$item->id}}' class="btn-success" />
          <x-button-action title='Delete' modal='modal-delete-{{$item->id}}' class="btn-danger" />

          @push('modals')
          @include('forms.service.edit')
          @include('forms.service.delete')
          @endpush
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $items->links() }}

</div>
@endsection

@push('modals')
@include('forms.service.create')
@endpush

<section id="contacts" class="py-5 bg-contacts">
  <div class="container">

    <h1 class="text-center">{{__('Contacts')}}</h1>

    @auth
    <div class="text-center">
      <x-button-action modal='modal-contacts' />
    </div>
    @endauth

    <div class="text-center gap-3 mb-3">
      <p class="mb-0">{{$contacts->phone}}</p>
      <p class="mb-0">{{$contacts->email}}</p>
      <p class="mb-0">{{$contacts->building_number}} {{$contacts->street}}</p>
      <p class="mb-0">{{$contacts->city}} {{$contacts->postal_code}},</p>
      <p class="mb-0">{{$contacts->country}}</p>
    </div>

    @push('modals')
    @include('forms.contacts')
    @endpush

    @include('forms.appeal')

  </div>
</section>

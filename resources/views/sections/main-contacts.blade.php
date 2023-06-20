<section id="contacts" class="py-5 bg-contacts">
  <div class="container">

    <h1 class="text-center">
      Contacts
    </h1>

    @auth
    <div class="text-center">
      <x-button-action modal='contacts-edit-modal' />
    </div>
    @endauth



    <div class="text-center gap-3 mb-3">
      <p class="mb-0">{{$contacts->phone_number}}</p>
      <p class="mb-0">{{$contacts->email}}</p>
      <p class="mb-0">{{$contacts->building_number}} {{$contacts->street_name}}</p>
      <p class="mb-0">{{$contacts->city}} {{$contacts->postcode}},</p>
      <p class="mb-0">{{$contacts->country}}</p>
    </div>

    @include('forms.contacts')

    @include('forms.appeal')

  </div>
</section>

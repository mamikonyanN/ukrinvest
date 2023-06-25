<x-control-modal id="modal-contacts" method="patch" :action="route('contacts.update', $contacts)" title="Edit contacts" errorBag="contacts">

  <div class="form-floating mb-3">
    <input class="form-control @error('phone', 'contacts') is-invalid @enderror" placeholder="{{__('Phone')}}" id="contacts-phone" name="phone" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('phone', $contacts->phone) : $contacts->phone}}" />
    <label for="contacts-phone">{{__('Phone')}}</label>
    @error('phone', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <input type="email" class="form-control @error('email', 'contacts') is-invalid @enderror" placeholder="{{__('Email')}}" id="contacts-email" name="email" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('email', $contacts->email) : $contacts->email}}" />
    <label for="contacts-email">{{__('Email')}}</label>
    @error('email', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <input class="form-control @error('building_number', 'contacts') is-invalid @enderror" placeholder="{{__('Building number')}}" id="contacts-building_number" name="building_number" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('building_number', $contacts->building_number) : $contacts->building_number}}" />
    <label for="contacts-building_number">{{__('Building number')}}</label>
    @error('building_number', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <input class="form-control @error('street', 'contacts') is-invalid @enderror" placeholder="{{__('Street')}}" id="contacts-street" name="street" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('street', $contacts->street) : $contacts->street}}" />
    <label for="contacts-street">{{__('Street')}}</label>
    @error('street', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <input class="form-control @error('postal_code', 'contacts') is-invalid @enderror" placeholder="postal_code" id="contacts-postal_code" name="postal_code" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('postal_code', $contacts->postal_code) : $contacts->postal_code}}" />
    <label for="contacts-postal_code">{{__('Postal code')}}</label>
    @error('postal_code', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating mb-3">
    <input class="form-control @error('city', 'contacts') is-invalid @enderror" placeholder="{{__('City')}}" id="contacts-city" name="city" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('city', $contacts->city) : $contacts->city}}" />
    <label for="contacts-city">{{__('City')}}</label>
    @error('city', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-floating">
    <input class="form-control @error('country', 'contacts') is-invalid @enderror" placeholder="{{__('Country')}}" id="contacts-country" name="country" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('country', $contacts->country) : $contacts->country}}" />
    <label for="contacts-country">{{__('Country')}}</label>
    @error('country', 'contacts')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>


</x-control-modal>

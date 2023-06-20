<div class="modal fade" id="contacts-edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit contacts</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('contacts.update', $contacts)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">

          <div class="form-floating mb-3">
            <input class="form-control @error('phone_number', 'contacts') is-invalid @enderror" placeholder="Phone number" id="contacts-phone_number" name="phone_number" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('phone_number', $contacts->phone_number) : $contacts->phone_number}}" />
            <label for="contacts-phone_number" class="col-form-label">Phone Number</label>
            @error('phone_number', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email', 'contacts') is-invalid @enderror" placeholder="Email" id="contacts-email" name="email" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('email', $contacts->email) : $contacts->email}}" />
            <label for="contacts-email" class="col-form-label">Email</label>
            @error('email', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input class="form-control @error('building_number', 'contacts') is-invalid @enderror" placeholder="Building number" id="contacts-building_number" name="building_number" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('building_number', $contacts->building_number) : $contacts->building_number}}" />
            <label for="contacts-building_number" class="col-form-label">Building number</label>
            @error('building_number', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input class="form-control @error('street_name', 'contacts') is-invalid @enderror" placeholder="Street name" id="contacts-street_name" name="street_name" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('street_name', $contacts->street_name) : $contacts->street_name}}" />
            <label for="contacts-street_name" class="col-form-label">Street name</label>
            @error('street_name', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input class="form-control @error('postcode', 'contacts') is-invalid @enderror" placeholder="Postcode" id="contacts-postcode" name="postcode" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('postcode', $contacts->postcode) : $contacts->postcode}}" />
            <label for="contacts-postcode" class="col-form-label">Postcode</label>
            @error('postcode', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating mb-3">
            <input class="form-control @error('city', 'contacts') is-invalid @enderror" placeholder="City" id="contacts-city" name="city" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('city', $contacts->city) : $contacts->city}}" />
            <label for="contacts-city" class="col-form-label">City</label>
            @error('city', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="form-floating">
            <input class="form-control @error('country', 'contacts') is-invalid @enderror" placeholder="Country" id="contacts-country" name="country" maxlength="32" required value="{{$errors->contacts->isNotEmpty() ? old('country', $contacts->country) : $contacts->country}}" />
            <label for="contacts-country" class="col-form-label">Country</label>
            @error('country', 'contacts')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@if($errors->contacts->isNotEmpty())
@push('head')
<script type="module">(new bootstrap.Modal('#contacts-edit-modal')).show();</script>
@endpush
@endif

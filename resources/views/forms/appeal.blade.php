<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<form id="contacts-form" method="post" action="{{route('appeal')}}">
  @csrf
  <div class="row mb-3">
    <div class="col-12 col-lg-4 g-2">
      <input type="text" class="form-control shadow-sm @error('name', 'appeal') is-invalid @enderror" value="{{ $errors->appeal->isNotEmpty() ? old('name') : '' }}" name="name" placeholder="Name*" required maxlength="32">
      @error('name', 'appeal')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12 col-lg-4 g-2">
      <input type="email" class="form-control shadow-sm @error('email', 'appeal') is-invalid @enderror" value="{{ $errors->appeal->isNotEmpty() ? old('email') : '' }}" name="email" placeholder="Email*" required maxlength="32">
      @error('email', 'appeal')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12 col-lg-4 g-2">
      <input type="text" class="form-control shadow-sm @error('subject', 'appeal') is-invalid @enderror" value="{{ $errors->appeal->isNotEmpty() ? old('subject') : '' }}" name="subject" placeholder="Subject*" required maxlength="32">
      @error('subject', 'appeal')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="col-12 g-2">
      <textarea class="form-control resize-none shadow-sm @error('message', 'appeal') is-invalid @enderror" value="{{ $errors->appeal->isNotEmpty() ? old('message') : '' }}" name="message" cols="30" rows="10" required></textarea>
      @error('message', 'appeal')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>

  <div class="text-center">
    <div id="recaptcha-wrapper" class="g-recaptcha d-inline-block" data-sitekey="6LeuJo8mAAAAAPkXp_PQDN69m6nsccTW-I6NS-K9"></div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary text-light rounded-pill px-5 py-3">Send</button>
  </div>
</form>

<script>
  window.onload = function() {
    var recaptcha = document.forms["contacts-form"]["g-recaptcha-response"];
    var recaptchaWrapper = document.getElementById('recaptcha-wrapper');
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
      recaptchaWrapper.classList.add('border');
      recaptchaWrapper.classList.add('border-danger');
      recaptchaWrapper.classList.add('border-3');
    }
  }

</script>

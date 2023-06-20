<section id="about" class="container py-5 my-5">
  <div class="row">
    <div class="col col-md-8 offset-md-2 col-lg-6 offset-lg-3">
      <h1 class="text-center">
        About system
        @auth
        <x-button-action modal="about-edit-modal" />
        @endauth
      </h1>
      <x-read-more uid="mission" :text="$about->text" />
    </div>
  </div>
</section>

@include('forms.about')

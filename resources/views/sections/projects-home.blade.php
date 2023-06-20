<section id="home" style="margin-top: -74px">
  <x-about-banner img-path="{{$projectsBanner->image_name}}" title="{{$projectsBanner->title}}" />

  @auth
  <x-button-action class="position-absolute bottom-0 end-0 m-3" modal="banner-edit-modal" />
  @endauth
</section>

@include('forms.banner')

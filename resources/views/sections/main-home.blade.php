<section id="home" class="p-relative w-100 h-100" style="margin-top: -74px">
  <x-home-carousel :elements="$carouselElements" />

  <div class="position-absolute top-50 start-0 translate-middle-y d-flex flex-column gap-3 ps-3">
    <a href="#" target="_blank"><span class="icon icon-lg icon-facebook-white"></span></a>
    <a href="#" target="_blank"><span class="icon icon-lg icon-instagram"></span></a>
    <a href="#" target="_blank"><span class="icon icon-lg icon-youtube"></span></a>
  </div>

  <div class="position-absolute bottom-0 start-50 translate-middle-x pb-5">
    <a href="#mission"><span class="icon icon-xl icon-scroll-down"></span></a>
  </div>

  @auth
  <x-button-action class="position-absolute bottom-0 end-0 m-3" :href="route('carouselElement.index')" />
  @endauth
</section>

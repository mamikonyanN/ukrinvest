<section id="services" class="py-5 text-center bg-secondary">
  <div class="container">
    <h1>
      Services
      @auth
      <x-button-action :href="route('service.index')" />
      @endauth
    </h1>
    <div class="row text-center d-flex justify-content-center">
      @foreach($services as $service)
      <x-service-card class="col-12 col-md-6" :service="$service" />
      @endforeach
    </div>
  </div>
</section>

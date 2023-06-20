<section id="gallery" class="bg-secondary py-5">
  <div class="container">
    <div class="text-center">
      <h1>
        Gallery

        @auth
        <div class="text-center">
          <x-button-action title="Edit descriptioin" modal="project-description-edit-modal" />
        </div>
        @endauth

      </h1>
      <p>{{$projectDescription->title}}</p>
    </div>

    <x-project-carousel class="d-block d-md-none" :chunks="$projects->chunk(1)" suffix="sm" col-class="col-12" />
    <x-project-carousel class="d-none d-md-block d-lg-none" :chunks="$projects->chunk(2)" suffix="md" col-class="col-6" />
    <x-project-carousel class="d-none d-lg-block" :chunks="$projects->chunk(4)" suffix="lg" col-class="col-3" />

    @auth
    <div class="text-center">
      <x-button-action :href="route('project.index')" />
    </div>
    @endauth

  </div>
</section>

@include('forms.project-description')

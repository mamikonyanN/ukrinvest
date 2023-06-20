<section id="projects" class="my-5 py-5">

  <div class="container">
    <div class="text-center">
      <h1>
        Projects
        @auth
        <div class="text-center">
          <x-button-action title="Edit descriptioin" modal="project-description-edit-modal" />
        </div>
        @endauth
      </h1>
      <p>{{$projectDescription->title}}</p>
      @include('forms.project-description')
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

  <div class="container">

    <div class="text-center py-3">
      <h1>News & Press</h1>
    </div>

    <div class="row d-flex justify-content-center mb-4">
      @foreach($press as $item)
      <x-press-card :item="$item" class="col-12 col-lg-6 mb-2" />
      @endforeach
    </div>

    @auth
    <div class="text-center mb-3">
      <x-button-action title="Edit press" href="{{route('press.index')}}" />
    </div>
    @endauth

    <div class="row g-3 d-flex justify-content-center">
      @foreach($news as $item)
      <x-news-card :item="$item" class="col-12 col-lg-4 mb-2" />
      @endforeach
    </div>

    @auth
    <div class="text-center mt-3">
      <x-button-action title="Edit news" href="{{route('news.index')}}" />
    </div>
    @endauth

  </div>
</section>

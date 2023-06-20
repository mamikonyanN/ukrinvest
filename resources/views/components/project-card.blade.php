@props(['project'])

<div {{ $attributes->class(['position-relative']) }}>

  <div class="ratio ratio-1x1">
    <img src="{{asset('/storage/images/' . $project->image_name)}}" class="w-100 object-fit-cover rounded" alt="{{$project->title}}">
  </div>

  <div class="position-absolute start-50 translate-middle-x text-center" style="width: 75%; bottom: -1rem;">
    <div class="mt-4 shadow bg-white opacity-75 rounded-5 p-3">

      <h6 class="text-uppercase m-0">{{$project->title}}</h6>

      <div class="collapse lh-1 py-1" id="project-collapse-{{$project->id}}">
        <small>{{$project->description}}</small>
      </div>

      <span class="px-1" type="button" data-bs-toggle="collapse" data-bs-target="#project-collapse-{{$project->id}}">
        <span class="icon icon-md icon-more"></span>
      </span>

    </div>
  </div>

</div>

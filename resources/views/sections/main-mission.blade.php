<section id="mission" class="container py-5 my-5">
  <div class="row">
    <div class="col col-md-8 offset-md-2 col-lg-6 offset-lg-3">
      <h1>
        <img src="{{asset('/img/logo_mission.png')}}" alt="UkrInvest" height="64">
        <span class="align-bottom">{{__('Our Mission')}}</span>
      </h1>
      <x-read-more uid="mission" :text="$mission->text" />
      @auth
      <x-button-action modal="modal-mission" />
      @endauth
    </div>
  </div>
</section>

@auth
@push('modals')
@include('forms.mission')
@endpush
@endauth

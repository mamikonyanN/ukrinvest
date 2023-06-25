@extends('layouts/app')

@section('title', __('Projects') . ' | UktrInvest')

@section('nav-segments')
<li class="nav-item"><a class="nav-link active" href="#home">{{__('Home')}}</a></li>
<li class="nav-item"><a class="nav-link" href="#about">{{__('About system')}}</a></li>
<li class="nav-item"><a class="nav-link" href="#gallery">{{__('Gallery')}}</a></li>
@endsection

@section('content')
@include('sections.projects-home')
@include('sections.projects-about')
@include('sections.projects-gallery')
@endsection

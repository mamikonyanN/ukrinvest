@extends('layouts.app')

@section('title', 'Ukrinvest')

@section('nav-segments')
<li class="nav-item"><a class="nav-link active" href="#home">{{__('Home')}}</a></li>
<li class="nav-item"><a class="nav-link" href="#mission">{{__('Mission')}}</a></li>
<li class="nav-item"><a class="nav-link" href="#services">{{__('Services')}}</a></li>
<li class="nav-item"><a class="nav-link" href="#projects">{{__('Projects')}}</a></li>
<li class="nav-item"><a class="nav-link" href="#contacts">{{__('Contacts')}}</a></li>
@endsection

@section('content')
@include('sections.main-home')
@include('sections.main-mission')
@include('sections.main-services')
@include('sections.main-projects')
@include('sections.main-contacts')
@endsection

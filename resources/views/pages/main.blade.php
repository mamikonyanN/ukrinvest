@extends('layouts.app')

@section('title', 'Ukrinvest')

@section('nav-segments')
<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
<li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
<li class="nav-item"><a class="nav-link" href="#contacts">Contacts</a></li>
@endsection

@section('content')
@include('sections.main-home')
@include('sections.main-mission')
@include('sections.main-services')
@include('sections.main-projects')
@include('sections.main-contacts')
@endsection

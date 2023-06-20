@extends('layouts/app')

@section('title', 'Projects | UktrInvest')

@section('nav-segments')
<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
<li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
@endsection

@section('content')
@include('sections.projects-home')
@include('sections.projects-about')
@include('sections.projects-gallery')
@endsection

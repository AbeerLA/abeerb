@extends('layouts.app')

@section('title', 'Abeer — Full-Stack Developer Portfolio')

@section('content')
    @include('sections.hero')
    @include('sections.about', ['metrics' => $metrics])
    @include('sections.skills', ['skills' => $skills])
    @include('sections.projects', ['projects' => $projects])
    @include('sections.journal', ['journal' => $journal])
    @include('sections.contact')
@endsection

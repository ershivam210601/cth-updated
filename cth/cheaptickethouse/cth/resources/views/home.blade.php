@extends('layout')
@section('content')
    <x-mobmenu-card />
    <x-topbar-card />
    <x-search-card :title="$title" :subtitle="$subtitle" :subject="$subject" :airports="$airports" />
    <x-packages-card />
    <x-tour-card />
    <x-cities-card />
    <x-sight-card />
    <x-footer-card />
@endsection
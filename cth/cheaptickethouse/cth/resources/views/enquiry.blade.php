@extends('layout')
@section('content')
    <x-mobmenu-card />
    <x-topbar-card />
    <x-enquiryform-card :subtitle="$subtitle" />
    <x-cities-card />
    <x-sight-card />
    <x-footer-card />
@endsection
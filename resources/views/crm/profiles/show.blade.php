@extends('layouts.crm')
@section('title')
Employ Profile
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Profile/</span>Show</h4>

    @livewire('profiles.show',['authUser'=>$user])

@endsection

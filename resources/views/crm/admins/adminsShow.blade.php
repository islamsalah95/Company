@extends('layouts.crm')
@section('title')
Admins
@endsection
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Users/</span>Admins</h4>
<x-alert />


<div class="card">
    @livewire('show-admins')
</div>


@endsection

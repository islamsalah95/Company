@extends('layouts.crm')
@section('title')
create employs
@endsection
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Users/Employ/</span>Create</h4>
<x-alert />

<div class="card">
    @livewire('employs.create-employs')
</div>

@endsection




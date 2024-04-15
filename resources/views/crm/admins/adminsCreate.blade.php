@extends('layouts.crm')
@section('title')
Admins
@endsection
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Users/Admin/</span>Create</h4>


<div class="card">
    @livewire('create-admins')
</div>

@endsection




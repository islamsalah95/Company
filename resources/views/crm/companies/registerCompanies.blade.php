@extends('layouts.crm')
@section('title')
Company Register
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Companies/Register</span>Show</h4>
<div class="card">
    @livewire('company.show',['is_valid'=>'0','status'=>'0'])
</div>
@endsection




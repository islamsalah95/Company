@extends('layouts.crm')
@section('title')
Not Working
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Companies/Not Working</span>Show</h4>
<div class="card">
    @livewire('company.show',['is_valid'=>'0','status'=>'1'])
</div>
@endsection




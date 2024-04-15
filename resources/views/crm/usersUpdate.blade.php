@extends('layouts.crm')
@section('title')
update User
@endsection
@section('Content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Users/Admin/</span>Update</h4>
<x-alert />

<div class="card">
    @if ($user['department']==1)
    @livewire('update-admins', ['user' => $user])
    @else
    @livewire('employs.update-employs', ['user' => $user])
    @endif
</div>

@endsection




{{--  @section('Scripts')
@livewireScripts
@endsection  --}}
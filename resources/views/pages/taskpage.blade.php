@extends('layouts.app')

@section('content')
<@livewire('tasks', ['user' => $user], key($user->id))
@endsection

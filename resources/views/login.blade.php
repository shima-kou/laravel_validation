@extends('layouts.base')

@section('title', 'Dashboard')


@section('menu-title', $id)

@section('menu')
<div class="py-1" >
  <form method="POST">
    @csrf
    <button type="submit" class="text-gray-700 block w-full text-left px-4 py-2 text-sm" name="submit" value="logout">
      Logout
    </button>
  </form>
</div>
@endsection

@section('content')
<div class="content-box">
  <h2 class="content-box__title">Dashboard</h2>
  <div class="content-box__inner-box">
    <p>You are logged in !</p>
  </div>
</div>
@endsection

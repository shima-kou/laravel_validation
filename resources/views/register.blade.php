@extends('layouts.base')

@section('title', 'Register')

@section('menu-title', 'Menu')

@section('menu')
<a href="{{ url('/register') }}" class="text-gray-700 block px-4 py-2 text-sm">Register</a>
@endsection

@section('content')
<div class="content-box">
  <h2 class="content-box__title">Resister</h2>
  <div class="content-box__inner-box">
    <form method="post">
      @csrf
      <table class="form-table">
        <tr>
          <th>Name</th>
          <td><input type="text" class="text-input" name="name" value="{{ old('name') }}" /></td>
        </tr>
        @error('name')
        <tr>
          <th></th>
          <td class="text-red-700 text-center">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
          <th>E-Mail Address</th>
          <td><input type="text" class="text-input" name="email" value="{{ old('email') }}" /></td>
        </tr>
        @error('email')
        <tr>
          <th></th>
          <td class="text-red-700 text-center">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
          <th>Password</th>
          <td>
            <input type="text" class="text-input" name="password" value="{{ old('password') }}" />
          </td>
        </tr>
        <tr>
          <th>Confirm Password</th>
          <td>
            <input type="text" class="text-input" name="password_confirmation" value="" />
          </td>
        </tr>
        @error('password')
        <tr>
          <th></th>
          <td class="text-red-700 text-center">{{ $message }}</td>
        </tr>
        @enderror
        <tr>
          <th></th>
          <td>
            <button type="submit" value="Resister" class="link-button">Resister</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
@endsection

@section('script')

@endsection

@extends('layouts.app')

@section('header')
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route('adminpage') }}">Admin</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}">Log Out</a>
        
      </div>
    </div>
  </header>
@endsection
@section('title-page')
  AddUSer
@endsection
@section('navbar')
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="{{ route('addUser') }}">Add User</a>
      <a class="p-2 text-muted" href="#">Add a product</a>
      <a class="p-2 text-muted" href="#">Show Users</a>
      <a class="p-2 text-muted" href="#">See all Users</a>
      <a class="p-2 text-muted" href="#">See all Admin</a>
      <a class="p-2 text-muted" href="#">Trotinete</a>
      <a class="p-2 text-muted" href="#">Roboti</a>
      <a class="p-2 text-muted" href="#">Audio</a>
      <a class="p-2 text-muted" href="#">Apple</a>
      <a class="p-2 text-muted" href="#">Samsung</a>
      <a class="p-2 text-muted" href="#">Sport</a>
      <a class="p-2 text-muted" href="#">TV</a>
    </nav>
  </div>
@endsection
@section('erorrs')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
@section('admin-add-User')
<h2>Adaugarea unui user</h2>
    <form action="{{ route('AddminAddUser') }}" method="post">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        
        <p>Email: <input type="text" name="email"></p>
        
        <p>Password: <input type="password" name="password"></p>

        <input type="submit" name="submit">
    </form>
@endsection
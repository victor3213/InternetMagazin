@extends('layouts.app')

@section('header')
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route('home') }}">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">SigIn</a>
        <a class="btn btn-sm btn-outline-secondary" href="{{ route('registrare') }}">Registration</a>
      </div>
    </div>
  </header>
@endsection

@section('navbar')
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.telefoane') }}">Telefoane</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.tablete') }}">Tablete</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.laptopuri') }}">Laptopuri</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.calculatoare') }}">Calculatoare</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.electrocasnice') }}">Electrocasnice</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.trotinete') }}">Trotinete</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.roboti') }}">Roboti</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.audio') }}">Audio</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.apple') }}">Apple</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.samsung') }}">Samsung</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.sport') }}">Sport</a>
      <a class="p-2 text-muted" href="{{ route('all-links-navbar.tv') }}">TV</a>
    </nav>
  </div>
@endsection

@section('title-page')
  Telefoane
@endsection

@section('show-tel')
    @isset($paths)
      @foreach ($paths as $path)
       
        <img src="{{asset('/storage/uploads/'.$path->image)}}" width="200" height="200" class="img" alt="image post">
     
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>{{ $path->category }}</li>
              <li>{{ $path->nameProd }}</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>


    @endforeach
    @endisset
@endsection



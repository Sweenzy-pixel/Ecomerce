@extends('layouts.app')
@section('content')
    <main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="my-account container">
      <h2 class="page-title">My Account</h2>
      <div class="row">
        <div class="col-lg-3">
            @include('user.account-nav')
          
        </div>
        <div class="col-lg-9">
          <div class="page-content my-account__dashboard">
           <p></p>
            <h3 class="mb-4">Welcome, {{ Auth::user()->name }}!</h3>
            <p>Here you can manage your account settings, view your orders, and more.</p>
            <p>Feel free to explore the options available in the sidebar.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
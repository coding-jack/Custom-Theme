{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
    <div class="row py-5 bg-primary text-white">
      <div class="col">
        HEY!
      </div>
    </div>
    <div class="row py-5 bg-warning text-white">
      <div class="col">
        HEY!
      </div>
    </div>
    <div class="row py-5 bg-danger text-white">
      <div class="col">
        HEY!
      </div>
    </div>
    <div class="row py-5 bg-inverse text-white">
      <div class="col">
        HEY!
      </div>
    </div>
  @endwhile
@endsection

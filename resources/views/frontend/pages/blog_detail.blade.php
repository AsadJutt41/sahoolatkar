@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || BLOG DETAIL')

@push('style')
<style>
  
</style>
@endpush
@section('main-content')

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
    <img src="{{asset('backend/blog')}}/{{$post->photo}}" alt="{{$post->photo}}" style="width: 90%;">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
    <h2>{{$post->title}}</h2>
    <span>

    {{date('d-m-Y', strtotime($post->updated_at))}}
    </span>
    <p>{{strip_tags($post->description)}}</p>
    </div>
  </div>
</div>

@endsection

@push('script')
@endpush
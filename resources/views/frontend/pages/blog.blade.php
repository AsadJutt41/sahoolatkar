
@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || ABOUT US')
@push('style')
<style>
    .blog_image{
        width: 220px;
        height: 220px;
    }
</style>
@endpush
@section('main-content')
    <!-- Start Title -->
    <div class="container blog">
        <div class="row mt-4">
            <div class="col-12">
                <h3 class="">Blog</h3>
                <hr>
            </div>
        </div>
        <!-- Blog Section -->
        <div class="row" style="margin-top: 4rem;">
        @foreach($posts as $post)
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="box-shadow">
                    <div class="blog-img">
                    @if($post->photo)
                        <img src="{{asset('backend/blog')}}/{{$post->photo}}" alt="{{$post->photo}}" class="blog_image" style="width: 90%;">
                    @else
                    <img src="{{asset('backend/img/thumbnail-default.jpg')}}" alt="{{$post->photo}}"  class="blog_image" style="width: 90%;">
                    @endif
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        {{date('m/d/Y h:i A', strtotime($post->updated_at))}};
                        | <i class="fa fa-comments-o" aria-hidden="true"></i> 0 Comments
                    </div>
                    <div class="blog-title">
                        <h4>{{$post->title}}</h4>
                    </div>
                    <div class="blog-btn">
                        <a type="button"  class="btn btn-outline-dark btn-lg" href="{{route('blog.detail',[$post->id])}}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection


@extends('website.layout.app')
@section('title', 'Blog Details - APL GLOBAL LOGISTICS')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title">Blog Details</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item">Blog Details</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->
    <!-- Blog Single Details -->
    <section class="site_content blog-details">
        <div class="container">
            <div class="row">
                @include('website.components.blogs.details')
                @include('website.components.blogs.sidebar')

            </div>
        </div>
    </section>




@endsection
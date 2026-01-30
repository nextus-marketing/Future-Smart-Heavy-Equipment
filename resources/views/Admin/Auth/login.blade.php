@extends('layouts.frontend')

@section('title')
    404 Not Found | Future Smart Heavy Equipment Trading LLC
@endsection

@section('content')

<div class="page-wraper"> 
        <!-- CONTENT START -->
        <div class="page-content">
            <!-- Error SECTION START -->
            <div class="error-full-page bg-cover overlay-wraper" style="background-image:url(/frontend/images/background/bg-3.jpg)">
				<div class="overlay-main bg-black opacity-07"></div>
                    <div class="error-full-page-inner">
                    	<div class="error-full-page-inner-info">
                            	<div class="error-media">
                                	<img src="/frontend/images/error/404.png" alt="">
                                </div>
                                <h3 class="title-style-2">Error</h3>
                                <strong>404</strong>
                                <h4 class="title-style-2">
                                	<img src="/frontend/images/error/404-sep.png" alt="" class="e-left-img" >
                                    Oops! Looks like the page is gone.
                                    <img src="/frontend/images/error/404-sep.png" alt="" class="e-right-img" >
                                </h4>
                                <p>We’re sorry but we can’t seem to find the page you requested. This might be because you have typed the web address incorrectly.</p>
                                <a href="/" class="site-button site-btn-effect">GO TO HOME</a>
                        </div>
                    </div>
                </div>   
            <!-- Error  SECTION END --> 
        </div>
        <!-- CONTENT END -->

        
    </div>
@endsection

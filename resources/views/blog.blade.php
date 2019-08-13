@extends('layouts.core')
@section('title', 'blog')
@section('content')
  <body class=" pi">
@section('nav')
    @parent

    <html>

    		<div class="container">
    			<header class="pi-header">
    				<div class="col-md-5 text-left">
    					<h1 class="h1">World changing insights, one story at a time</h1>
    				</div>
    			<div class="container">
    			</header>

    			<!-- Blog navigation starts -->
    	        <div class="blogNavSection">
    	            <div class="blogNavSectionInner" >
    	                <ul class="blogNavList" id="navContainer">
    	                    <li class="nav-list active"><a href="#">All</a></li>
    	                    <li id='test' class="nav-list"><a href="#">Intern Stories</a></li>
    	                    <li class="nav-list"><a href="#">Design</a></li>
    	                    <li class="nav-list"><a href="#">Frontend</a></li>
    	                    <li class="nav-list"><a href="#">Backend</a></li>
    	                    <li class="nav-list"><a href="#">Machine Learning</a></li>
    	                    <li class="nav-list"><a href="#">Digital Marketing</a></li>
    	                </ul>
    	            </div>
    	        </div>
            	<!-- Blog navigation ends -->
    	  <div class="row">

          <!-- Post Aricle Column -->
          	<div class="col-xs-12 col-md-8">

    	        <div class="row">
    	        	<div class="touch">
    	            <div class="col-md-4">
    	            	<img src="{{ asset('img/interns/anakle.png')}}" class="img-responsive	" alt="Article's image" width="410" height="407">
    	            </div>

    	            <div class="col-md-7">
    	            	<div class="articleDetails">
    	                    <span class="articleCategory text-uppercase"><h6>design</h6></span>
    	                    <h5 class="articleTitle text-capitalize">20 relative eesign trends from 2018</h5>
    	                    <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
    	                    <div class="articleInfo">
    	                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar" srcset="">
    	                        <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
    	                    </div>
    	                </div>
    	            </div>
    	        	</div>
    	        </div>
    	        <div class="row">
    	       		<div class="touch">
    	            <div class="col-md-4">
    	            	<img src="{{ asset('img/interns/flutterwave.png')}}" class="img-responsive	" alt="Article's image" width="410" height="407">
    	            </div>
    	            <div class="col-md-7">
    	            	<div class="articleDetails">
    	                    <span class="articleCategory text-uppercase"><h6>design</h6></span>
    	                    <h5 class="articleTitle text-capitalize">20 relative eesign trends from 2018</h5>
    	                    <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
    	                    <div class="articleInfo">
    	                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar" srcset="">
    	                        <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
    	                    </div>
    	                </div>
    	            </div>
    	        	</div>
    	      	</div>

    	      	<div class="row">
    	       		<div class="touch">
    	            <div class="col-md-4">
    	            	<img src="{{ asset('img/interns/anakle.png')}}" class="img-responsive	" alt="Article's image" width="410" height="407">
    	            </div>
    	            <div class="col-md-7">
    	            	<div class="articleDetails">
    	                    <span class="articleCategory text-uppercase"><h6>design</h6></span>
    	                    <h5 class="articleTitle text-capitalize">20 relative eesign trends from 2018</h5>
    	                    <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
    	                    <div class="articleInfo">
    	                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar" srcset="">
    	                        <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
    	                    </div>
    	                </div>
    	            </div>
    	        	</div>
    	      	</div>

    	      	<div class="row">
    	       		<div class="touch">
    	            <div class="col-md-4">
    	            	<img src="{{ asset('img/interns/flutterwave.png')}}" class="img-responsive	" alt="Article's image" width="410" height="407">
    	            </div>
    	            <div class="col-md-7">
    	            	<div class="articleDetails">
    	                    <span class="articleCategory text-uppercase"><h6>design</h6></span>
    	                    <h5 class="articleTitle text-capitalize">20 relative eesign trends from 2018</h5>
    	                    <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
    	                    <div class="articleInfo">
    	                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar" srcset="">
    	                        <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
    	                    </div>
    	                </div>
    	            </div>
    	        	</div>
    	      	</div>

    	      	<div class="row">
    	        	<div class="touch">
    	            <div class="col-sm-4">
    	            	<img src="{{ asset('img/interns/anakle.png')}}" class="img-responsive	" alt="Article's image" width="410" height="407">
    	            </div>
    	            <div class="col-sm-7">
    	            	<div class="articleDetails">
    	                    <span class="articleCategory text-uppercase"><h6>design</h6></span>
    	                    <h5 class="articleTitle text-capitalize">20 relative eesign trends from 2018</h5>
    	                    <p class="articleSummary">They're late. My experiment worked. They're all exactly twenty-five minutes slow. My insurance, it's your car, your insurance should pay for it. Hey, I wanna know ...</p>
    	                    <div class="articleInfo">
    	                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar" srcset="">
    	                        <span>by <span class="articleAuthorName"><a href="#">Design Walker</a> </span> | 4 days ago</span>
    	                    </div>
    	                </div>
    	            </div>
    	        	</div>
    	        </div>
          	</div>
          	<!-- end of post aticle column -->

          	<!-- Top post column -->
          	<div class="col-xs-12 col-md-4">

    			<div>
    	            <h3 class="topPostsHeader">Top Posts</h3>
    	        </div>
    	        <div class="topPostsBody">
                    <div class="topPostsArticle">
                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar">
                        <div class="topPostInfo">
                            <h5>20 Relevant Design Trends from 2018</h5>
                            <div class="moreBlogInfo">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a></span></span>
                                <span>2 days ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="topPostsArticle">
                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar">
                        <div class="topPostInfo">
                            <h5>20 Relevant Design Trends from 2018</h5>
                            <div class="moreBlogInfo">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a></span></span>
                                <span>2 days ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="topPostsArticle">
                        <img src="{{ asset('img/interns/friday.jpg')}}" alt="Author's Avatar">
                        <div class="topPostInfo">
                            <h5>20 Relevant Design Trends from 2018</h5>
                            <div class="moreBlogInfo">
                                <span>by <span class="articleAuthorName"><a href="#">Design Walker</a></span></span>
                                <span>2 days ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          	</div>
          	<!-- end of top post column -->

          	<!-- blog pagination -->
    		<div class="pagination-link blog-link">
                <a class="intern-link" href="#">&larr;</a>
                <a class="intern-link active" href="#">1</a>
                <a class="intern-link" href="#">2</a>
                <a class="intern-link" href="#">3</a>
                <a class="intern-link" href="#">4</a>
                <a class="intern-link" href="#">5</a>
                <a class="intern-link" href="#">&rarr;</a>
            </div>
            <!-- end -->
          </div>
       </div>
       		<script>
       			let btnContainer = document.getElementById("navContainer");

       			let btns = btnContainer.getElementsByClassName("nav-list");

       			for (const i in btns ) {
    			  btns[i].addEventListener("click", function() {
    			    let currentBtn = document.getElementsByClassName("active");
    			    currentBtn[0].className = currentBtn[0].className.replace(" active", "");
    			    this.className += " active";
    			  });
    			}


       		</script>


@endsection


@endsection

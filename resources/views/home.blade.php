@extends('layouts.app')

@section('content')

    <!-- add styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

    <div id="mainimage">
      <img src="img/homepage_mainimage.jpg">
      <div>Blog z holistycznym spojrzeniem na życie</div>
    </div>    

    <div class="container">
      <div id="socialmedias" class="row">
        <div class="offset-3"></div>
          <div class="col-2">
            <a id="facebook" class="nav-link" href="https://www.facebook.com/OZDROWO" target="_blank">
              <i class="fa fa-facebook" style="color: #3b5998;"></i>
            </a>
          </div>
          <div class="col-2">
            <a id="instagram" class="nav-link" href="https://www.instagram.com/ozdrowo_blog/" target="_blank">
              <i class="fa fa-instagram" style="color: #fd1d1d;"></i>
            </a>
          </div>
          <div class="col-2">
            <a id="facebook" class="nav-link" href="https://www.facebook.com/OZDROWO" target="_blank">
              <i class="fa fa-twitter" style="color: #1da1f2;"></i>
            </a>
          </div>
        <div class="offset-3"></div>
      </div>

      <!-- Health post section -->
      <hr>
      <div class="heading">
        <a href="/health" target="_blank">Zdrowie</a>
      </div>
      <div class="row">
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Mind post section -->
      <hr>
      <div class="heading">
        <a href="/mind" target="_blank">Umysł</a>
      </div>
      <div class="row">
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Beauty post section -->
      <hr>
      <div class="heading">
        <a href="/beauty" target="_blank">Uroda</a>
      </div>
      <div class="row">
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="post col-12 col-md-4">
          <div class="content">
            <img src="img/post.jpg">
            <div class="header">
              Dapibus diam sed nisi nulla quis sem
            </div>
            <div class="category">
              <i class="fa fa-folder-open-o" aria-hidden="true" style="color: grey;"></i>
              Lifestyle
            </div>
            <div class="text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.…
            </div>
            <div class="cta-btn">
              <button>
                Kontynuuj czytanie 
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="padding-bottom: 6rem;"></div>
    
@endsection
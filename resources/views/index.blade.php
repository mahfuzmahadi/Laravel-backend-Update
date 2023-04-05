@extends('layouts.master')

@section('seo_title'){{($page->getSlug->seo_title==null) ? '' : $page->getSlug->seo_title}}@endsection
@section('seo_description'){!!($page->getSlug->seo_description==null) ? '' : $page->getSlug->seo_description!!}@endsection
@section('no_index'){{$page->getSlug->no_index ? 'noindex' : 'index'}}@endsection
@section('no_follow'){{$page->getSlug->no_follow ? 'nofollow' : 'follow'}}@endsection
@section('image'){{ $page->getMedia->getUrl() ?? '' }}@endsection
@section('class')home @endsection
@section('header')

@endsection

@section('content')

<style>
    .header {
        background-color: #F9F9F9;
        padding: 80px 0;
    }

    .infos {
        text-align: center;
        margin-bottom: 40px;
    }

    .subtitle {
        font-size: 18px;
        color: #8E8E8E;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 5px;
    }

    .title {
        font-size: 56px;
        color: #222222;
        margin-bottom: 15px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    p {
        font-size: 18px;
        color: #8E8E8E;
        margin-bottom: 40px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .btn {
        padding: 12px 36px;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        margin-right: 20px;
        border-radius: 30px;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary {
        background-color: #ED8C72;
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #CB645C;
    }

    .btn-dark {
        background-color: #222222;
        border: none;
        color: #fff;
    }

    .btn-dark:hover {
        background-color: #1E1E1E;
    }

    .socials {
        display: flex;
        justify-content: center;
    }

    .social-item {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        background-color: #F5F5F5;
        margin-right: 10px;
        border-radius: 50%;
        transition: all 0.3s ease-in-out;
    }

    .social-item:hover {
        background-color: #ED8C72;
    }

    .social-item i {
        font-size: 18px;
        color: #222222;
    }

    .img-holder {
        text-align: center;
    }

    .widget {
        display: flex;
        justify-content: center;
    }

    .widget-item {
        text-align: center;
        margin-right: 40px;
    }

    .widget-item:last-child {
        margin-right: 0;
    }

    .widget-item h2 {
        font-size: 36px;
        color: #222222;
        margin-bottom: 10px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .widget-item p {
        font-size: 18px;
        color: #8E8E8E;
        margin-bottom: 0;
    }
    .contact {
  position: relative;
  border-radius: 0.3rem;
  border: 1px solid 1px;
  box-shadow: 1px 2px 6px rgba(173, 181, 189, 0.5);
  padding: 0 30px 0 25px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  max-width: 1000px;
  margin: 0 auto 150px;
  z-index: 99;
  background: #fff;
}

.contact .form {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  border-right: 1px solid #dee2e6;
  padding: 35px 30px 35px 0;
}

.contact .form form {
  margin-top: 30px;
}

.contact .contact-infos {
  -webkit-align-self: center;
      -ms-flex-item-align: center;
          align-self: center;
  margin-left: 30px;
  min-width: 350px;
}

.contact .contact-infos .item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
}

.contact .contact-infos .item i {
  display: block;
  width: 40px;
  font-size: 16px;
  color: primary;
  width: 37px;
  height: 37px;
  border-radius: 50%;
  border: 1px solid #ff7a57;
  line-height: 34px;
  text-align: center;
  padding: 0 !important;
  color: #ff7a57;
  margin-right: 15px;
}

.contact .contact-infos .item div {
  border-bottom: 1px solid #dee2e6;
  margin-bottom: 25px;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

.contact .contact-infos .item div h5 {
  margin-bottom: 10px;
  opacity: .9;
}

.contact .contact-infos .item div p {
  opacity: .7;
  font-size: 15px;
  margin-bottom: 4px;
}

@media (max-width: 991.98px) {
  .contact {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
        -ms-flex-direction: column;
            flex-direction: column;
    padding: 20px;
  }
  .contact .form {
    margin: 0 0 20px 0;
    padding: 0;
    border-right: 0;
  }
  .contact .contact-infos {
    display: none;
  }
}



    
</style>

<header class="header" id="home" style="background-image: url('https://i.ibb.co/0qX9vpz/quinton-coetzee-xcwe-Ygakb-Ro-unsplash.jpg'); background-size: cover;
background-position: center;">
    <div class="container">
        <div class="infos">
            <h6 class="subtitle text-white">Hello, I'm</h6>
            <h1 class="title text-white mb-4">Mahfuzur Rahman</h1>
            <p class="text-white mb-4">Laravel Developer</p>

            <div class="buttons pt-3">
                <button class="btn btn-primary rounded mr-3">HIRE ME</button>
                <button class="btn btn-dark rounded">DOWNLOAD CV</button>
            </div>      

            <div class="socials mt-4">
                <a class="social-item" href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a class="social-item" href="javascript:void(0)"><i class="ti-google"></i></a>
                <a class="social-item" href="javascript:void(0)"><i class="ti-github"></i></a>
                <a class="social-item" href="javascript:void(0)"><i class="ti-twitter"></i></a>
            </div>
        </div>              
        <div class="img-holder">
            <img src="assets/imgs/man.svg" alt="">
        </div>      
    </div>  


</header>


<section id="contact" class="mt-5 position-relative section">
    <div class="container text-center">
        <h3 class="subtitle" style="font-size: 1.5rem">Contact</h3>
        <h3 class="section-title mb-4">Get In Touch With Me</h3>

        <div class="contact text-left">
            <div class="form">
                <h6 class="subtitle">Available 24/7</h6>
                <h6 class="section-title mb-4">Get In Touch</h6>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact-message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                </form>
            </div>
            <div class="contact-infos">
                <div class="item">
                    <i class="ti-location-pin"></i>
                    <div class="">
                        <h5>Location</h5>
                        <p> 12345 Fake ST NoWhere AB Country</p>
                    </div>                          
                </div>
                <div class="item">
                    <i class="ti-mobile"></i>
                    <div>
                        <h5>Phone Number</h5>
                        <p>(123) 456-7890</p>
                    </div>                          
                </div>
                <div class="item">
                    <i class="ti-email"></i>
                    <div class="mb-0">
                        <h5>Email Address</h5>
                        <p>info@website.com</p>
                    </div>
                </div>
            </div>                  
        </div>
    </div>  
      
</section>

@endsection

@section('script')

@endsection

@extends('layouts.master')

@section('seo_title')
    {{ $page->getSlug->seo_title == null ? '' : $page->getSlug->seo_title }}
@endsection
@section('seo_description')
    {!! $page->getSlug->seo_description == null ? '' : $page->getSlug->seo_description !!}
@endsection
@section('no_index')
    {{ $page->getSlug->no_index ? 'noindex' : 'index' }}
@endsection
@section('no_follow')
    {{ $page->getSlug->no_follow ? 'nofollow' : 'follow' }}
@endsection
@section('image')
    {{ $page->getMedia->getUrl() ?? '' }}
@endsection
@section('class')
    home
@endsection
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
        
            margin-right: 10px;
            border-radius: 50%;
            transition: all 0.3s ease-in-out;
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

        .icons-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .icons-container a {
            margin: 10px;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }

        .icons-container a:hover {
            transform: scale(1.2);
        }

        .icons-container img {
            display: block;
            margin: 0 auto;
        }    .stats {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .stats p {
        margin: 10px;
    }



    </style>

    <header class="header" id="home"
        style="background-image: url('https://i.ibb.co/0qX9vpz/quinton-coetzee-xcwe-Ygakb-Ro-unsplash.jpg'); background-size: cover;
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

                    <a class="social-item" href="javascript:void(0)" href="https://dev.to/https://mahfuzrahman.netlify.app/"
                        target="blank"><img align="center"
                            src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/devto.svg"
                            alt="https://mahfuzrahman.netlify.app/" height="30" width="40" /></a>
                    {{-- <a class="social-item" href="javascript:void(0)" href="https://twitter.com/mahfuzmahadi"
                        target="blank"><img align="center"
                            src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/twitter.svg"
                            alt="mahfuzmahadi" height="30" width="40" /></a> --}}
                    <a class="social-item" href="javascript:void(0)"
                        href="https://linkedin.com/in/https://www.linkedin.com/in/mahfuzur-rahman-7524b1232/"
                        target="blank"><img align="center"
                            src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg"
                            alt="https://www.linkedin.com/in/mahfuzur-rahman-7524b1232/" height="30"
                            width="40" /></a>
                    <a class="social-item" href="javascript:void(0)"
                        href="https://fb.com/https://www.facebook.com/mahadimahfuz/" target="blank"><img align="center"
                            src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/facebook.svg"
                            alt="https://www.facebook.com/mahadimahfuz/" height="30" width="40" /></a>

                </div>
                <br>
                <p class="social-text">Follow me on Twitter:</p>
                <a href="https://twitter.com/mahfuzmahadi" target="_blank" rel="noopener noreferrer">
                    <img class="social-icon" src="https://img.shields.io/twitter/follow/mahfuzmahadi?logo=twitter&style=for-the-badge" alt="mahfuzmahadi Twitter">
                </a>
            </div>
            <div class="img-holder">
                <img src="assets/imgs/man.svg" alt="">
            </div>
        </div>


    </header>

    <section>

        
        <br>
        

        <h3 align="center">Languages and Tools:</h3>
        <p align="left">
        <div class="icons-container">
            <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg"
                    alt="html5" width="40" height="40" />
            </a>
            <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg"
                    alt="css3" width="40" height="40" />
            </a>
           

            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg"
                    alt="javascript" width="40" height="40" />
            </a>
            <a href="https://laravel.com/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg"
                    alt="laravel" width="40" height="40" />
            </a>
            <a href="https://www.php.net" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg"
                    alt="php" width="40" height="40" />
            </a>
            <a href="https://www.mysql.com/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg"
                    alt="mysql" width="40" height="40" />
            </a>
            <a href="https://www.oracle.com/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/oracle/oracle-original.svg"
                    alt="oracle" width="40" height="40" />
            </a>
            <a href="https://materializecss.com/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/prplx/svg-logos/5585531d45d294869c4eaab4d7cf2e9c167710a9/svg/materialize.svg"
                    alt="materialize" width="40" height="40" />
            </a>

            <a href="https://www.cprogramming.com/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/c/c-original.svg" alt="c"
                    width="40" height="40" />
            </a>
            <a href="https://www.w3schools.com/cpp/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/cplusplus/cplusplus-original.svg"
                    alt="cplusplus" width="40" height="40" />
            </a>

            <a href="https://reactjs.org/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg"
                    alt="react" width="40" height="40" />
            </a>
            <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer">
                <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind"
                    width="40" height="40" />
            </a>
            <a href="https://firebase.google.com/" target="_blank" rel="noreferrer">
                <img src="https://www.vectorlogo.zone/logos/firebase/firebase-icon.svg" alt="firebase" width="40"
                    height="40" />
            </a>

            <a href="https://www.linux.org/" target="_blank" rel="noreferrer">
                <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/linux/linux-original.svg"
                    alt="linux" width="40" height="40" />
            </a>
        </div>
            </p>

            <br>
            <h3 align="center">My Stats:</h3>
           <div class="stats">
    

            <p><img align="center"
                    src="https://github-readme-stats.vercel.app/api/top-langs?username=mahfuzmahadi&show_icons=true&locale=en&layout=compact"
                    alt="mahfuzmahadi" /></p>
            <p>&nbsp;<img align="center"
                    src="https://github-readme-stats.vercel.app/api?username=mahfuzmahadi&show_icons=true&locale=en"
                    alt="mahfuzmahadi" /></p>
            <p><img align="center" src="https://github-readme-streak-stats.herokuapp.com/?user=mahfuzmahadi&"
                    alt="mahfuzmahadi" /></p>


           </div>
    </section>
    <section id="contact" class="mt-5 position-relative section">
        <div class="container text-center">
            <h3 class="subtitle" style="font-size: 1.5rem">Contact</h3>
            <h3 class="section-title mb-4">Get In Touch With Me</h3>

            <div class="contact text-left">
                <div class="form">
                    <h6 class="subtitle">Available 24/7</h6>
                    <h6 class="section-title mb-4">Get In Touch</h6>
                    <form method="POST" action="{{ route('sendEmail') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" id="exampleInputPassword1"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                    </form>
                </div>
                <div class="contact-infos">
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>Location</h5>
                            <p> Dakhinkhan, Uttara, Dhaka </p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>Phone Number</h5>
                            <p>01913644880
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email Address</h5>
                            <p>mahfuzurmahadi@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
@endsection

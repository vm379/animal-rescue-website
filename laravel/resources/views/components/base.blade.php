<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.min.css') }}" />
</head>

<body class="body">

    <!-- classList: scroll; -->
    <div class="website">
        <header class="header">
            <div class="container">
                <div class="header-columns">
                    <div class="col-1">
                        <a href="/" class="header-logo-link">Animal Rescue</a>
                    </div>

                    <div class="col-2">
                        <nav class="main-nav">
                            <ul class="main-menu">
                                <li class="item {{request()->is('/')?'active':''}}">
                                    <a href="/" class="link">Home</a>
                                </li>

                                <li class="item {{request()->is('about')?'active':''}}">
                                    <a href="/about" class="link">About Us</a>
                                </li>

                                <li class="item {{request()->is('services')?'active':''}}">
                                    <a href="/services" class="link">Services</a>
                                </li>

                                <li class="item {{request()->is('help')?'active':''}}">
                                    <a href="/help" class="link">Help</a>
                                </li>

                                <li class="item {{request()->is('contacts')?'active':''}}">
                                    <a href="/contacts" class="link">Contacts</a>
                                </li>

                                <li class="item {{request()->is('blog')?'active':''}}">
                                    <a href="/blog" class="link">Blog</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="mobile-nav-btn">
                            <button class="btn">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </button>
                        </div>
                    </div>

                    <div class="col-3">
                        <a href="./donate" class="donate-link">
                            <div class="donate {{request()->is('donate')?'active':''}}">DONATE</div>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="main">

            {{ $slot }}

        </div>

        <footer class=" footer">
            <div class="container columns">
                <div class="footer-columns">
                    <div class="col-1">
                        <div class="footer-logo">Animal Rescue</div>
                    </div>

                    <div class="col-2">
                        <div class="footer-titles">
                            <p class="title">Animal Rescue Group</p>
                            <p class="description">Rescue groups with adopters and foster</p>
                        </div>
                    </div>

                    <div class="col-3">
                        <nav class="footer-nav">
                            <ul class="footer-menu">
                                <li class="item">
                                    <a href="" class="link">Privacy Policy</a>
                                </li>

                                <li class="item">
                                    <a href="" class="link">Terms of Use</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container copyright">
                <div class="footer-copyright">© 2023 All Rights Reserved</div>
            </div>
        </footer>
    </div>

    <!-- classList: d a | open mobile menu-->
    <!-- d: display: block; -->
    <!-- a: opacity: 1 -->
    <div class="main-menu-mobile">
        <div class="container">

            <!-- classList: open -->
            <div class="mobile-nav-panel">
                <div class="top">
                    <button class="close">Close</button>
                </div>

                <nav class="nav">
                    <ul class="mobile-main-nav">
                        <li class="item {{request()->is('/')?'active':''}}">
                            <a href="/" class="link">Home</a>
                        </li>

                        <li class="item {{request()->is('about')?'active':''}}">
                            <a href="/about" class="link">About Us</a>
                        </li>

                        <li class="item {{request()->is('services')?'active':''}}">
                            <a href="/services" class="link">Services</a>
                        </li>

                        <li class="item {{request()->is('help')?'active':''}}">
                            <a href="/help" class="link">Help</a>
                        </li>

                        <li class="item {{request()->is('contacts')?'active':''}}">
                            <a href="/contacts" class="link">Contacts</a>
                        </li>

                        <li class="item {{request()->is('blog')?'active':''}}">
                            <a href="/blog" class="link">Blog</a>
                        </li>

                        <li class="item mobileDonateLink {{request()->is('donate')?'active':''}}">
                            <a href="/donate" class="link">Donate</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- end main-mobile-menu -->

    <!-- classList: d a | open callback modal-->
    <!-- d: display: block; -->
    <!-- a: opacity: 1 -->
    <div class="callback-modal">
        <div class="container">
            <div class="callback-modal-form">
                <div class="container">
                    <div class="callback-modal--titles">
                        <div class="col-1"><span class="title">CALLBACK REQUEST</span></div>
                        <div class="col-2"><button class="btn">CLOSE</button></div>
                    </div>

                    <form action="" id="" class="callback-modal--form">
                        <div class="callback-form-field name">
                            <div class="row-1">
                                <div class="col-1">
                                    <label class="label" for="name">Name:</label>
                                </div>

                                <div class="col-2 error">error</div>
                            </div>

                            <div class="row-2">
                                <input class="input" type="text" placeholder="Your Name">
                            </div>

                            <div class="row-3 error-message">message error</div>
                        </div>

                        <div class="callback-form-field phone">
                            <div class="row-1">
                                <div class="col-1">
                                    <label class="label" for="name">Phone:</label>
                                </div>

                                <div class="col-2 error">error</div>
                            </div>

                            <div class="row-2">
                                <input class="input" name="" type="text" placeholder="Your Phone">
                            </div>

                            <div class="row-3 error-message">message error</div>
                        </div>

                        <div class="submit">
                            <button class="btn">Submit</button>
                        </div>
                    </form>

                    <!-- preloader -->
                    <!-- classList: d a -->
                    <!-- d: display: block -->
                    <!-- a: opacity: 1 -->
                    <div class="preloader">
                        <div class="preloader-block">
                            <ul class="form-preloader-modes">

                                <!-- classList: on for li.mode-->
                                <!-- on: display: block -->
                                <li class="mode send-mode on">
                                    <div class="form-preloader-mode">
                                        <div class="form-preloader--send">
                                            <div class="loadingio-spinner-spinner-go6ip63iaz">
                                                <div class="ldio-m9d4numlatn">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mode success-mode">
                                    <div class="form-preloader-mode">
                                        <div class="message">
                                            <div class="form-preloader--message">
                                                <span class="t">Your request has sent successfully</span>
                                            </div>
                                        </div>

                                        <div class="close">
                                            <div class="form-preloader--close">
                                                <button class="btn">close</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mode error-mode">
                                    <div class="form-preloader-mode">
                                        <div class="message">
                                            <div class="form-preloader--message">
                                                <span class="t">server error</span>
                                            </div>
                                        </div>

                                        <div class="link">
                                            <div class="form-preloader--error-link">
                                                <div class="row-1">
                                                    <span class="t">Follow the link for more information</span>
                                                </div>

                                                <div class="row-2">
                                                    <a href="./contacts" class="error-link">contacts</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="close">
                                            <div class="form-preloader--close">
                                                <button class="btn">close</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end preloader -->

                </div>
            </div>
        </div>
    </div>
    <!-- end callback-modal -->

    <script src="{{ URL::asset('js/script.js') }}">
    </script>
</body>

</html>
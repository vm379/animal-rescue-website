<x-base :title="$title">
    <section class="landing-block first">
        <div class="container">
            <div class="col-1">
                <h1>Animal Rescue Group</h1>

                <p>
                    <span>Far far away</span> — Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean. A small river named Duden flows
                    by their place and supplies it with the necessary regelialia. It is a paradisematic country,
                    in which roasted parts of sentences fly into your mouth.
                </p>

                <button class="call-back-btn">Call Back</button>
            </div>

            <div class="col-2">
                <img src="{{asset('img/first/photo-1.jpg')}}" alt="photo">
            </div>
        </div>
    </section>

    <section class="landing-block about-us">
        <div class="container">
            <h2 class="title">About Us</h2>

            <p class="description">Far far away, behind the word mountains</p>

            <div class="content">
                <div class="about-us-columns">
                    <div class="col-1">
                        <article class="about-us-article">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                right at the coast of the Semantics, a large language ocean.</p>

                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences
                                fly into your mouth. </p>
                        </article>
                    </div>

                    <div class="col-2">
                        <img src="{{asset('img/first/photo-1.jpg')}}" alt="photo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-block services">
        <div class="container">
            <h2 class="title">Services</h2>

            <p class="description">Far far away, behind the word mountains</p>

            <div class="content">
                <div class="services-cards">
                    <div class="service-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>

    <section class="landing-block help">
        <div class="container">
            <div class="help-columns">
                <div class="col-1">
                    <h2 class="title">Help Us</h2>

                    <article class="article">
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                            into your mouth.</p>
                    </article>
                </div>

                <div class="col-2">
                    <a href="./help" class="link">More about help</a>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-block landing-contact-form">
        <div class="container">
            <h2 class="title">Contact Form</h2>

            <p class="description">Far far away, behind the word mountains</p>

            <div class="content">
                <form action="" id="cf1" class="form">
                    <div class="form-field name">
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

                    <div class="form-field phone">
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

                    <div class="form-field email">
                        <div class="row-1">
                            <div class="col-1">
                                <label class="label" for="name">Email:</label>
                            </div>

                            <div class="col-2 error">error</div>
                        </div>

                        <div class="row-2">
                            <input class="input" name="" type="text" placeholder="Your Email">
                        </div>

                        <div class="row-3 error-message">message error</div>
                    </div>

                    <div class="form-field message">
                        <div class="row-1">
                            <div class="col-1">
                                <label class="label" for="">Message:</label>
                            </div>

                            <div class="col-2 error">error</div>
                        </div>

                        <div class="row-2">
                            <textarea name="" id="" class="textarea" cols="30" rows="10" placeholder="Text Your Message"></textarea>
                        </div>

                        <div class="row-3 error-message">message error</div>
                    </div>

                    <div class="submit">
                        <div class="form-submit-columns">
                            <div class="col-1">
                                <p>By clicking on the button, you consent to processing your personal data and
                                    agree to the <a href="" class="link">Privacy Policy</a></p>
                            </div>

                            <div class="col-2">
                                <button class="btn">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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

    </section>

    <section class="landing-block faq">
        <div class="container">
            <h2 class="title">FAQ</h2>

            <p class="description">Frequently asked Questions</p>

            <div class="content">
                <div class="faq-block">
                    <div class="faq-item">
                        <div class="c">
                            <h4 class="faq-title">
                                Far far away, behind the word mountains
                            </h4>

                            <div class="text">
                                <article class="faq-article">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.
                                    </p>

                                    <p>A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country, in which roasted
                                        parts of sentences fly into your mouth. </p>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="c">
                            <h4 class="faq-title">
                                Far far away, behind the word mountains
                            </h4>

                            <div class="text">
                                <article class="faq-article">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="c">
                            <h4 class="faq-title">
                                Far far away, behind the word mountains
                            </h4>

                            <div class="text">
                                <article class="faq-article">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.
                                    </p>

                                    <p>A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country, in which roasted
                                        parts of sentences fly into your mouth. </p>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="c">
                            <h4 class="faq-title">
                                Far far away, behind the word mountains
                            </h4>

                            <div class="text">
                                <article class="faq-article">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.
                                    </p>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="c">
                            <h4 class="faq-title">
                                Far far away, behind the word mountains
                            </h4>

                            <div class="text">
                                <article class="faq-article">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia
                                        and Consonantia, there live the blind texts. Separated they live in
                                        Bookmarksgrove right at the coast of the Semantics, a large language
                                        ocean.
                                    </p>

                                    <p>A small river named Duden flows by their place and supplies it with the
                                        necessary regelialia. It is a paradisematic country, in which roasted
                                        parts of sentences fly into your mouth. </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-block last-blog-posts">
        <div class="container">
            <h2 class="title">Last Blog Posts</h2>

            <p class="description">Far far away, behind the word mountains</p>

            <div class="content">
                <div class="blogpost-cards">
                    <div class="blogpost-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="blogpost-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="blogpost-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="blogpost-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>

                    <div class="blogpost-card">
                        <div class="img">
                            <img src="{{asset('img/services/img-1.png')}}" alt="">
                        </div>

                        <div class="delimiter">
                            <div class="i"></div>
                        </div>

                        <div class="text">
                            <h3>Vet Hospital</h3>

                            <p>
                                A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-base>
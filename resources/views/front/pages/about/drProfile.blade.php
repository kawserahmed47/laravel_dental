
@extends('front.master')

@section('title','Contact')


@push('css')

@endpush

@section('content')

    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Doctor Details</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="about.html">About Us</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="team-details.html">Marry Joe</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="doctor-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="doctor-two__image">
                        <img src="{{asset('/')}}public/front/images/resources/doctor-2-1.jpg" alt="Awesome Image"/>
                    </div><!-- /.doctor-two__image -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="doctor-two__content">
                        <h2 class="doctor-two__title">Merry Joe</h2><!-- /.doctor-two__title -->
                        <p class="doctor-two__tag-line">18 years experience in Dentistry</p><!-- /.doctor-two__tag-line -->
                        <p class="doctor-two__text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p><!-- /.doctor-two__text -->
                        <h2 class="doctor-two__sub-title">Working Experience in Govt. Hospital</h2><!-- /.doctor-two__sub-title -->
                        <p class="doctor-two__text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magnidit aut fugit, sed quia consequuntur magni quia </p><!-- /.doctor-two__text -->
                        <a href="#" class="doctor-two__btn">
                            <img src="{{asset('/')}}public/front/images/resources/pdf-icon.png" alt="Awesome Image" class="doctor-two__btn-icon-one" />
                            <span class="doctor-two__btn-title">Download PDF file</span>
                            <span class="doctor-two__btn-tag">Document size : 47 kb</span>
                            <img src="{{asset('/')}}public/front/images/resources/download-icon-1-1.png" alt="Awesome Image" class="doctor-two__btn-icon-two"/>
                        </a>
                    </div><!-- /.doctor-two__content -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.doctor-two -->
    <section class="history-one">
        <div class="container">
            <div class="block-title text-left">
                <h2 class="block-title__title">Professional Education</h2><!-- /.block-title__title -->
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="history-one__single">
                        <div class="history-one__time">1990</div><!-- /.history-one__time -->
                        <div class="history-one__content">
                            <h3 class="history-one__title">Diploma in Dental</h3><!-- /.history-one__title -->
                            <p class="history-one__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p><!-- /.history-one__text -->
                        </div><!-- /.history-one__content -->
                    </div><!-- /.history-one__single -->
                    <div class="history-one__single">
                        <div class="history-one__time">1992</div><!-- /.history-one__time -->
                        <div class="history-one__content">
                            <h3 class="history-one__title">Master Degree in Dental</h3><!-- /.history-one__title -->
                            <p class="history-one__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p><!-- /.history-one__text -->
                        </div><!-- /.history-one__content -->
                    </div><!-- /.history-one__single -->
                    <div class="history-one__single">
                        <div class="history-one__time">2004</div><!-- /.history-one__time -->
                        <div class="history-one__content">
                            <h3 class="history-one__title">Practise Area in Australia</h3><!-- /.history-one__title -->
                            <p class="history-one__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p><!-- /.history-one__text -->
                        </div><!-- /.history-one__content -->
                    </div><!-- /.history-one__single -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="history-one__single">
                        <div class="history-one__time">2009</div><!-- /.history-one__time -->
                        <div class="history-one__content">
                            <h3 class="history-one__title">A Professiona Course in Root Canal</h3><!-- /.history-one__title -->
                            <p class="history-one__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p><!-- /.history-one__text -->
                        </div><!-- /.history-one__content -->
                    </div><!-- /.history-one__single -->
                    <div class="history-one__single">
                        <div class="history-one__time">2014</div><!-- /.history-one__time -->
                        <div class="history-one__content">
                            <h3 class="history-one__title">Professional Training in Big Surgery</h3><!-- /.history-one__title -->
                            <p class="history-one__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day.</p><!-- /.history-one__text -->
                        </div><!-- /.history-one__content -->
                    </div><!-- /.history-one__single -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.history-one -->
    <section class="about-four">
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <div class="col-lg-6">
                    <div class="about-four__content">
                        <h2 class="about-four__title">Professional Practise</h2><!-- /.about-four__title -->
                        <p class="about-four__tag-line">Practise in Australia for Two Years</p><!-- /.about-four__tag-line -->
                        <p class="about-four__text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Or- ganically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p><!-- /.about-four__text -->
                        <h3 class="about-four__sub-title">Professional Training in Big Surgery</h3><!-- /.about-four__sub-title -->
                        <p class="about-four__text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional click- throughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p><!-- /.about-four__text -->
                    </div><!-- /.about-four__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-four__images">
                        <img src="{{asset('/')}}public/front/images/resources/about-4-1.jpg" alt="Awesome Image"/>
                        <img src="{{asset('/')}}public/front/images/resources/about-4-2.jpg" alt="Awesome Image"/>
                    </div><!-- /.about-four__images -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-four -->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form action="http://ashik.templatepath.net/dentallox-html-files/inc/sendemail.php" class="contact-one__form contact-form-validated">
                        <h2 class="contact-one__title">Do You Have Any Question</h2><!-- /.contact-one__title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" placeholder="Full Name">
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <input type="text" name="email" placeholder="Email Address">
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <input type="text" name="phone" placeholder="Phone">
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <textarea placeholder="Message" name="message"></textarea>
                            </div><!-- /.col-lg-12 -->
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn">Submit Now</button>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div><!-- /.col-lg-7 -->
                <div class="col-lg-5 d-flex">
                    <div class="contact-one__content my-auto">
                        <div class="contact-one__widget">
                            <h3 class="contact-one__widget-title">Addres :</h3>
                            <p class="contact-one__widget-text">568 Anthum Tower Suite, Los Angeles, <br> California CA 90056, USA</p><!-- /.contact-one__widget-text -->
                        </div><!-- /.contact-one__widget -->
                        <div class="contact-one__widget">
                            <h3 class="contact-one__widget-title">Docor : Merry Joe</h3>
                            <p class="contact-one__widget-text"><a href="mailto:info@dentallox.com">info@dentallox.com</a> <br> <a href="#">http://dentallox.com</a></p><!-- /.contact-one__widget-text -->
                        </div><!-- /.contact-one__widget -->
                        <div class="contact-one__widget">
                            <h2 class="contact-one__phone"><a href="tel:1800-123-4567">1800 (123) 4567</a></h2><!-- /.contact-one__phone -->
                            <p class="contact-one__time">Available Time : 09.00am to 5.00pm</p>
                        </div><!-- /.contact-one__widget -->
                    </div><!-- /.contact-one__content -->
                </div><!-- /.col-lg-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->
    {{-- <section class="cta-two">
        <div class="container">
            <h2 class="cta-two__title">Have Dental Problem : Call us at <a href="tel:1800-685-4321" class="cta-two__highlight">1800 456
                    7890</a> or make an <a href="contact.html"
                                           class="cta-two__highlight cta-two__link">Appointment</a></h2><!-- /.cta-two__title -->
        </div><!-- /.container -->
    </section><!-- /.cta-two --> --}}

    @include('front.layouts.cat_two')

@endsection

@push('js')

@endpush

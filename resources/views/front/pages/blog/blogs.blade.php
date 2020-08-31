@extends('front.master')
@section('content')
<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title">Blog</h2><!-- /.inner-banner__title -->
        <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="blog.html">Blog</a></li>
        </ul><!-- /.thm-breadcrumb -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="blog-two blog-two__two-col">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-1.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">Fractured or Broken Tooth can be saved </a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-2.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">How we can fix Dental Whitening issue</a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-3.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">When is tooth whitening indicated?</a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-4.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">How we can fix Dental Whitening issue</a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-5.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">Fractured or Broken Tooth can be saved </a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-6.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">How we can fix Dental Whitening issue</a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-7.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">How we can fix Dental Whitening issue</a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="blog-two__single">
                            <div class="blog-two__image">
                                <img src="images/blog/blog-3-8.jpg" alt="Awesome Image" />
                                <div class="blog-two__date">
                                    <span class="blog-two__date-number">27</span>
                                    June
                                </div><!-- /.blog-two__date -->
                                <div class="blog-two__image-hover">
                                    <a href="{{url('/blogDetails')}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.blog-two__image-hover -->
                            </div><!-- /.blog-two__image -->
                            <ul class="blog-two__meta">
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By : Admin</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening / dental</a>
                                </li>
                                <li class="blog-two__meta-item">
                                    <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                                </li>
                            </ul><!-- /.blog-two__meta -->
                            <h2 class="blog-two__title"><a href="{{url('/blogDetails')}}">How we can fix Dental Whitening issue</a></h2><!-- /.blog-two__title -->
                            <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domina tion. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time.</p><!-- /.blog-two__text -->
                            <a href="{{url('/blogDetails')}}" class="blog-two__btn">Read More</a>
                        </div><!-- /.blog-two__single -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="post-pagination">
                    <a href="#" class="post-pagination__link current">1</a>
                    <a href="#" class="post-pagination__link">2</a>
                    <a href="#" class="post-pagination__link"><i class="fa fa-angle-right"></i></a>
                </div><!-- /.post-pagination -->
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-two -->




    
@endsection
@extends('front.master')
@section('content')

<section class="inner-banner">
    <div class="container">
        <h2 class="inner-banner__title">Blog</h2>
        <ul class="thm-breadcrumb">
        <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="{{url('/')}}">Home</a></li>
        <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="{{url('/blogs')}}">Blog</a></li>
            <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="blog-details.html">Blog Details</a></li>
        </ul>
    </div>
</section>


<section class="blog-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-two__single">
                    <div class="blog-two__image">
                        <img src="images/blog/blog-2-1.jpg" alt="Awesome Image" />
                        <div class="blog-two__date">
                            <span class="blog-two__date-number">27</span>
                            June
                        </div><!-- /.blog-two__date -->
                    </div><!-- /.blog-two__image -->
                    <ul class="blog-two__meta">
                        <li class="blog-two__meta-item">
                            <a href="#" class="blog-two__meta-link"><i class="fa fa-user"></i>By :  Admin</a>                                    
                        </li>
                        <li class="blog-two__meta-item">
                            <a href="#" class="blog-two__meta-link"><i class="fa fa-tag"></i>teeth whitening  /  dental</a>                                    
                        </li>
                        <li class="blog-two__meta-item">
                            <a href="#" class="blog-two__meta-link"><i class="fa fa-comments-o"></i>Comments: 8</a>
                        </li>
                    </ul><!-- /.blog-two__meta -->
                    <h2 class="blog-two__title">Fractured or Broken Tooth can be saved </h2><!-- /.blog-two__title -->
                    <p class="blog-two__text">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring. Nanotechnology immersion along the information highway will close the loop ...</p><!-- /.blog-two__text -->
                    <br>
                    <h3 class="blog-two__sub-title">Two Column Text Sample</h3><!-- /.blog-two__sub-title -->
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="blog-two__text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod max ime placeat facere possimus, omnis voluptas assumenda est.</p>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <p class="blog-two__text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod max ime placeat facere possimus, omnis voluptas assumenda est.</p>
                            <br>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <p class="blog-two__text">Here is main text quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat here is link cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><!-- /.blog-two__text -->
                </div>
           

                <div class="comments-one">
                    <h3 class="blog-two__sub-title">Comments 4</h3><!-- /.blog-two__sub-title -->
                    <div class="comments-one__wrap">
                        <div class="comments-one__single">
                            <div class="comments-one__image">
                                <img src="images/blog/comment-1-1.jpg" alt="Awesome Image"/>
                            </div><!-- /.comments-one__image -->
                            <div class="comments-one__content">
                                <h3 class="comments-one__title">Rocco Balley</h3><!-- /.comments-one__title -->
                                <p class="comments-one__text">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </p>
                                <div class="comments-one__meta">
                                    <a href="#" class="comments-one__link">24 Jan. 2019</a>
                                    <span class="comments-one__sep">|</span>
                                    <a href="#" class="comments-one__link comments-one__link-reply">Reply</a>
                                </div><!-- /.comments-one__meta -->
                            </div><!-- /.comments-one__content -->
                        </div><!-- /.comments-one__single -->
                        <div class="comments-one__single">
                            <div class="comments-one__image">
                                <img src="images/blog/comment-1-1.jpg" alt="Awesome Image"/>
                            </div><!-- /.comments-one__image -->
                            <div class="comments-one__content">
                                <h3 class="comments-one__title">Leoma Antinoro</h3><!-- /.comments-one__title -->
                                <p class="comments-one__text">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </p>
                                <div class="comments-one__meta">
                                    <a href="#" class="comments-one__link">24 Jan. 2019</a>
                                    <span class="comments-one__sep">|</span>
                                    <a href="#" class="comments-one__link comments-one__link-reply">Reply</a>
                                </div><!-- /.comments-one__meta -->
                            </div><!-- /.comments-one__content -->
                        </div><!-- /.comments-one__single -->
                        <div class="comments-one__single">
                            <div class="comments-one__image">
                                <img src="images/blog/comment-1-1.jpg" alt="Awesome Image"/>
                            </div><!-- /.comments-one__image -->
                            <div class="comments-one__content">
                                <h3 class="comments-one__title">Mike Dymond</h3><!-- /.comments-one__title -->
                                <p class="comments-one__text">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment. </p>
                                <div class="comments-one__meta">
                                    <a href="#" class="comments-one__link">24 Jan. 2019</a>
                                    <span class="comments-one__sep">|</span>
                                    <a href="#" class="comments-one__link comments-one__link-reply">Reply</a>
                                </div><!-- /.comments-one__meta -->
                            </div><!-- /.comments-one__content -->
                        </div><!-- /.comments-one__single -->
                    </div><!-- /.comments-one__wrap -->
                </div>

                {{-- Done From Up --}}
               
            </div>


            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="text" name="search" placeholder="Enter Search Keywords">
                            <button type="submit"><i class="icon icon-Search"></i></button>
                        </form>
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__category-list">
                            <li class="sidebar__category-list-item"><a href="#">Dental Implant</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Teeth Whitening</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Technology</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Dental Health</a></li>
                            <li class="sidebar__category-list-item"><a href="#">General Dentistry</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Dental Clinic</a></li>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Recent Tips</h3><!-- /.sidebar__title -->
                        <div class="sidebar__post-wrap">
                            <div class="sidebar__post-single">
                                <h4 class="sidebar__post-title"><a href="#">Objectively innovate empowered manufactured products wher...</a></h4><!-- /.sidebar__post-title -->
                                <span class="sidebar__post-date">02 March 2019</span>
                            </div><!-- /.sidebar__post-single -->
                            <div class="sidebar__post-single">
                                <h4 class="sidebar__post-title"><a href="#">Iorem Ipsum generators on the Internet tend to repeat ...</a></h4><!-- /.sidebar__post-title -->
                                <span class="sidebar__post-date">02 March 2019</span>
                            </div><!-- /.sidebar__post-single -->
                            <div class="sidebar__post-single">
                                <h4 class="sidebar__post-title"><a href="#">Interactively coordinate proactive ecommerce via process ...</a></h4><!-- /.sidebar__post-title -->
                                <span class="sidebar__post-date">02 March 2019</span>
                            </div><!-- /.sidebar__post-single -->
                            <div class="sidebar__post-single">
                                <h4 class="sidebar__post-title"><a href="#">Interactively coordinate proactive ecommerce via process ...</a></h4><!-- /.sidebar__post-title -->
                                <span class="sidebar__post-date">02 March 2019</span>
                            </div><!-- /.sidebar__post-single -->
                        </div><!-- /.sidebar__post-wrap -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__tags-list">
                            <li class="sidebar__tags-list-item"><a href="#">Medical</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Treatment</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Dental</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Healthcare</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Dentist</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Clinic</a></li>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-3 -->
        </div>
    </div>
</section>




@endsection
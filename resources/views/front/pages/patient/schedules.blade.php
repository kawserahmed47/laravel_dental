@extends('front.master')
@push('css')

@endpush

@section('content')
    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Scheduling</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="new_patient.blade.php">Patient</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="new_patient.blade.php">Scheduling</a></li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-sidebar">
                        <div class="service-sidebar__single">
                            <ul class="service-sidebar__list">
                                <li class="service-sidebar__list-item ">
                                    <a href="new_patient.blade.php" class="service-sidebar__list-link">New Patient</a>
                                </li><!-- /.service-sidebar__list-item -->
                                <li class="service-sidebar__list-item current">
                                    <a href="scheduling.blade.php" class="service-sidebar__list-link">Scheduling</a>
                                </li><!-- /.service-sidebar__list-item -->
                                <li class="service-sidebar__list-item">
                                    <a href="first_visit.blade.php" class="service-sidebar__list-link">First Visit</a>
                                </li><!-- /.service-sidebar__list-item -->
                                <li class="service-sidebar__list-item">
                                    <a href="insurance.html" class="service-sidebar__list-link">Insurance Information</a>
                                </li><!-- /.service-sidebar__list-item -->
                                <li class="service-sidebar__list-item">
                                    <a href="home-instructions.html" class="service-sidebar__list-link">Home Instructions</a>
                                </li><!-- /.service-sidebar__list-item -->
                            </ul><!-- /.service-sidebar__list -->
                        </div><!-- /.service-sidebar__single -->
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__cta">
                                <h3 class="service-sidebar__cta-title">Teeth Whitening</h3><!-- /.service-sidebar__cta-title -->
                                <p class="service-sidebar__cta-text">Offer Availaable for Whitening Teeth only at <span class="highlighted">$49</span></p><!-- /.service-sidebar__cta-text -->
                                <a href="contact.html" class="thm-btn">Contact Us</a>
                            </div><!-- /.service-sidebar__cta -->
                        </div><!-- /.service-sidebar__single -->
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__contact">
                                <p class="service-sidebar__contact-text"><i class="fa fa-phone"></i><a href="teL:1800-456-7890" class="service-sidebar__contact-highlight">1800 456 7890</a></p><!-- /.service-sidebar__contact-text -->
                                <p class="service-sidebar__contact-text"><i class="fa fa-paper-plane"></i><a href="mailto:info@dentallox.com">info@dentallox.com</a></p><!-- /.service-sidebar__contact-text -->
                            </div><!-- /.service-sidebar__contact -->
                        </div><!-- /.service-sidebar__single -->
                    </div><!-- /.service-sidebar -->
                </div><!-- /.col-lg-3 -->
                <div class="col-lg-9">
                    <div class="patient-content">
                        <p class="patient-text">We will schedule your appointment as promptly as possible. If you have pain or an emergency situation, every attempt will be made to see you in a timely manner during regular office hours.</p><!-- /.patient-text -->
                        <br>
                        <p class="patient-text">We try our best to stay on schedule to minimize your waiting.  However, some dental procedures may take more time than initially expected and emergency cases can also arise causing delays. We appreciate your understanding and patience.</p><!-- /.patient-text -->
                        <br>
                        <p class="patient-tag-line colored">Please call us at Dentalllox Office Phone Number 1800 456 7890 with any questions or to schedule <br> an appointment.</p><!-- /.patient-tag-line -->

                        <br>
                        <h3 class="patient-title">Contact Us Today</h3><!-- /.patient-title -->
                        <br>
                        <p class="patient-text">The first step towards a beautiful, healthy smile is to schedule an appointment. Please contact our office by phone or complete the appointment request form below. Our scheduling coordinator will contact you to confirm your appointment. If you are an existing patient, this contact form should not be utilized for communicating private health information.</p><!-- /.patient-text -->
                        <br>
                        <form action="http://ashik.templatepath.net/dentallox-html-files/inc/sendemail.php" class="patient__form contact-form-validated">
                            <div class="patient__form-field">
                                <p class="patient__label">Your Name*</p><!-- /.patient__label -->
                                <input type="text" name="name">
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Your E-mail Address*</p><!-- /.patient__label -->
                                <input type="text" name="name">
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Your Phone Number</p><!-- /.patient__label -->
                                <input type="text" name="name">
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">I am interested in</p><!-- /.patient__label -->
                                <ul class="patient__form-checklist">
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Scheduling Appointment</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Dentures</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Partials</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Dental Implants</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Extractions</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Follow Up/ Adjustments</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                </ul><!-- /.patient__form-checklist -->
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Best Time for Appointment</p><!-- /.patient__label -->
                                <ul class="patient__form-checklist patient__form-checklist-inline">
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Morning</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">Afternoon</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                </ul><!-- /.patient__form-checklist -->
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Preferred Day of Week</p><!-- /.patient__label -->
                                <ul class="patient__form-checklist patient__form-checklist-inline">
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">M</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">T</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">W</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">TH</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox" >
                                        <p class="patient__form-checklist__label">F</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                </ul><!-- /.patient__form-checklist -->
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">How did you hear about us?</p><!-- /.patient__label -->
                                <select class="selectpicker">
                                    <option>&nbsp;</option>
                                    <option>Google Search</option>
                                    <option>Offline Paper Advertisement</option>
                                    <option>Social Media</option>
                                    <option>Friend's Recommendations</option>
                                </select>
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Comments/Questions</p><!-- /.patient__label -->
                                <textarea></textarea>
                            </div><!-- /.patient__form-field -->
                            <button type="submit" class="thm-btn">Submit Now</button>
                        </form>
                    </div><!-- /.patient-content -->
                </div><!-- /.col-lg-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details -->
    <section class="cta-two">
        <div class="container">
            <h2 class="cta-two__title">Have Dental Problem : Call us at <a href="tel:1800-685-4321" class="cta-two__highlight">1800 456
                    7890</a> or make an <a href="contact.html"
                                           class="cta-two__highlight cta-two__link">Appointment</a></h2><!-- /.cta-two__title -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->

@endsection

@push('js')

@endpush







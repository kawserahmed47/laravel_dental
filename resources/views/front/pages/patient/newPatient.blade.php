
@extends('front.master')


@section('title','Contact')


@push('css')

@endpush

@section('content')
    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">New Patient</h2><!-- /.inner-banner__title -->
            <ul class="thm-breadcrumb">
                <li class="thm-breadcrumb__item"><a class="thm-breadcrumb__link" href="index.html">Home</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="new_patient.blade.php">Patient</a></li>
                <li class="thm-breadcrumb__item current"><a class="thm-breadcrumb__link" href="new_patient.blade.php">New Patient</a></li>
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
                                <li class="service-sidebar__list-item current">
                                    <a href="new_patient.blade.php" class="service-sidebar__list-link">New Patient</a>
                                </li><!-- /.service-sidebar__list-item -->
                                <li class="service-sidebar__list-item ">
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
                        <p class="patient-tag-line">Dentist Accepting New Patients</p><!-- /.patient-tag-line -->
                        <br>
                        <p class="patient-text">We want to thank you for visiting the Dentallox Dental Care website! Our goal is to address your personal dental needs within your budget.</p><!-- /.patient-text -->
                        <br>
                        <p class="patient-text">We will take the required time to properly diagnose your immediate dental concerns, review your past medical and dental history, and create a treatment plan within your budget. </p><!-- /.patient-text -->
                        <br>
                        <p class="patient-text">Interested? Complete the form below and we will contact you within 24 hours! Or feel free to call us at Dentallox Office Phone Number 1800 456 7890</p><!-- /.patient-text -->
                        <br><br>
                        <h3 class="patient-title">Contact Us Today</h3><!-- /.patient-title -->
                        <br>
                        <p class="patient-text">The first step towards a beautiful, healthy smile is to schedule an appointment. Please contact our office by phone or complete the appointment request form below. Our scheduling coordinator will contact you to confirm your appointment. If you are an existing patient, this contact form should not be utilized for communicating private health information.</p><!-- /.patient-text -->
                        <br><br>
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
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Scheduling Appointment</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Dentures</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Partials</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Dental Implants</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Extractions</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Follow Up/ Adjustments</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                </ul><!-- /.patient__form-checklist -->
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Best Time for Appointment</p><!-- /.patient__label -->
                                <ul class="patient__form-checklist patient__form-checklist-inline">
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Morning</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">Afternoon</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                </ul><!-- /.patient__form-checklist -->
                            </div><!-- /.patient__form-field -->
                            <div class="patient__form-field">
                                <p class="patient__label">Preferred Day of Week</p><!-- /.patient__label -->
                                <ul class="patient__form-checklist patient__form-checklist-inline">
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">M</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">T</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">W</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
                                        <p class="patient__form-checklist__label">TH</p><!-- /.patient__form-checklist__label -->
                                    </li>
                                    <li class="patient__form-checklist-item">
                                        <input type="checkbox">
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

    @include('front.layouts.cat_two')


@endsection

@push('js')

@endpush









<x-layouts.main>
    <!-- Slider content start-->
    <div class="slider-sec">
        <div id="map"></div>
    </div>
    <!--- Slider end-->

    <!--Services content start-->
    <div class="contact-us-sec contact-page pb-0">
        <div class="container">
            <div class="row contact-details pb-3 text-center">
                <div class="col-12">
                    <p class="sub-heading text-center"><span></span>{{__('words.page')}}</p>
                    <!--                                    <span class="contact-sub-heading">Lorem ipsum dolor sit amet consectetur</span>-->
                    <h4 class="main-heading">{{__('words.touch')}}</h4>
                    <!--                                    <p class="contact-address">123 Street New York City , United States Of America.</p>-->
                    <ul class="contact-list">
                        <li><span>{{__('words.office_phone')}}:</span> 001 01085379709</li>
                        <li><span>{{__('words.mobile')}}:</span> 001 63165370895</li>
                        <li><span>Email :</span> admin@website.com</li>
                        <li><span>{{__('words.inquiries')}}:</span> email@website.com</li>
                        <li><span>{{__('words.work')}}:</span>{{__('words.time')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Services content start-->

    <div class="contact-us-form">
        <div class="container">
            <div class="row services-details text-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <p class="sub-heading text-center"><span></span>Contact Form</p>
                    <h4 class="main-heading">{{__('words.questions')}}</h4>
                    <form class="contact-form" id="contact-form-data">
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12 mb-1">
                                <div id="result"></div>
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" class="form-control" id="candidate_name" name="userName"
                                    placeholder="{{__('words.name')}}" required="required">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" class="form-control" id="user_email" name="userEmail"
                                    placeholder="{{__('words.f_email')}}" required="required">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" class="form-control" id="user_subject" name="userSubject"
                                    placeholder="{{__('words.subject')}}" required="required">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="user_message" name="userMessage" placeholder="{{__('words.message')}}" rows="7"
                                    required="required"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn our-btn rounded-pill user-contact contact_btn mt-5"
                                    type="button">{{__('words.btn')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Contact us content start-->
    <div id="contact-us-sec" class="contact-us-sec cursor-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 contact-details text-center">
                    <div class="row no-gutters">
                        <div class="col-10 offset-1">
                            <p class="contact-address">{{__('words.address')}}</p>
                            <ul class="slider-social contact-s-media page-footer">
                                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                            class="fab fa-facebook-f"></i> </a> </li>
                                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                            class="fab fa-twitter"></i> </a> </li>
                                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                            class="fab fa-google-plus-g"></i> </a> </li>
                                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                            class="fab fa-linkedin-in"></i> </a> </li>
                                <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i
                                            class="fab fa-instagram"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="aimated-cursor">
        <div class="cursor">
            <div class="cursor-loader"></div>
        </div>
    </div>
    <!--Contact us content end-->
</x-layouts.main>

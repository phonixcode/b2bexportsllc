<section class="contact-area pt-70 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="quick-contact">
                    <h3>Quick Contact </h3>
                    <ul>
                        <li> <a href="javascript:void(0)">
                            <i class="flaticon-maps-and-flags"></i> US Office: <span>{{ $settings->site_address }}</span> </a></li>
                        <li> <i class="flaticon-call"></i> US No. : <a href="tel:{{ $settings->site_phone_number }}"> {{ $settings->site_phone_number }}</a> </li>

                        <li> <i class="flaticon-envelope"></i> Email Us: <a
                                href="mailto:{{ $settings->site_email }}">
                                {{ $settings->site_email }}</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-wrap">
                    <div class="contact-form">
                        <div class="section-title">
                            <h2>Let’s Connect</h2>
                        </div>
                        <form novalidate action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            @include('partials.alert')
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required
                                                data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control"
                                                required data-error="Please enter your email"
                                                placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required
                                                data-error="Please enter your number" class="form-control"
                                                placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="msg_subject"
                                                class="form-control" required data-error="Please enter your subject"
                                                placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="company_name" id="company_name"
                                                class="form-control" required
                                                data-error="Please enter your company name"
                                                placeholder="Company Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea name="company_address" id="company_address"
                                                class="form-control" cols="30" rows="6" required
                                                data-error="Write your Company Address"
                                                placeholder="Company Address"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30"
                                            rows="7" required data-error="Write your message"
                                            placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn disabled"
                                        style="pointer-events: all; cursor: pointer;"> Send Message </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

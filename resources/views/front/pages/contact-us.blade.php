@extends('front.layouts.app')
@section('content')
<style>

       .btnsend {
	background: #002147;
	border: none;
	border-radius: 30px;
	box-shadow: none;
	color: #fff;
	font-size: 16px;
	font-weight: normal;
	padding: 8px 24px;
}

            .contact-us-info1{
                padding-bottom: 20px;
            }
.contact-us-info1 a {
	font-size: 14px;
	line-height: 22px;
	color: #000;
}

.contact-us-info1 h3 {
	font-size: 18px;
	color: #002147;
	font-weight: 600;
	font-family: 'montserratbold';
}

.contact-us-info1 ul li {
	position: relative;
	padding: 0 0 0 30px;
}

.contact-us-info1 ul li i {
	position: absolute;
	left: 0;
	top: 6px;
	font-size: 15px;
}

.contact-us-info1 ul li ul.contact-social {
	display: flex;
	align-items: center;
	margin: 0 -10px;
    margin-top: 20px;
}

.contact-us-info1 ul li ul.contact-social li {
	margin: 0 10px;
	padding: 0px;
}

.contact-us-info1 ul li ul.contact-social li a {
	background: #002147;
	width: 40px;
	height: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 50%;
	color: #fff;
}

.contact-us-info1 ul li ul.contact-social li i {
	position: inherit;
}
.borderLight {
  border: 1px solid #6ec647;
  padding: 7px;
  margin-bottom: 5px;
}
</style>
<section class="innerheader">
        <div class="container">
            <h2><span>Contact Us</span></h2>
        </div>
</section>

<div class="contact-us-page1-area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xs-6">
                <div class="contact-us-info1 borderLight">
                    <h3>Subhash Education Society</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Helpline No</h3>
                            <p><a href="Tel: +91 74250 64174">+91 74250 64174</a><br>
<a href="Tel: +91 81043 48272">+91 81043 48272</a><br>
<a href="Tel: +91 77339 45525">+91 77339 45525</a>
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Address</h3>
                            <p>
                                <a href="javascript:void(0)" target="_blank">
                                    Mukundgarh Mandi , Jhunjhunu (Raj.)<br />
                                </a>
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>E-mail</h3>
                            <p><a href="mailto: subhasheducationsociety@gmail.com">subhasheducationsociety@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
                
                <div class="contact-us-info1">
                    <ul>
                        <li>
                            <h3>Follow Us</h3>
                            <ul class="contact-social">
                                <li>
                                    <a href="https://www.facebook.com/matrixsikar" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/matrixSikar" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/matrix_sikar/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/c/MatrixAcademy" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://matrixjeeacademy.blogspot.com/" target="_blank"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xs-6">
                <div class="row">
                    <div class="col-12">
                    @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                        <form id="contact-form2" action="{{ route('contact_store') }} " enctype="multipart/form-data" method="post">
                            @csrf
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Name*" name="name" class="form-control" id="form-name" value="{{ old('name') }}" />
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Email*" name="email" class="form-control" id="form-name" data-error="Email field is required" value="{{ old('email') }}" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Mobile No*" name="phone" class="form-control" id="contactmobile" data-error="Mobile No field is required" value="{{ old('phone') }}" />
                                    <span style="color: red;" id="contactmobileerrormsg"></span>
                                    <div class="help-block with-errors"></div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <textarea maxlength="360" placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8"   value="{{ old('description') }}"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-12 py-4">
                                    <button type="submit" class="default-big-btn btnsend" name="save">Send Message</button>
                                </div>
                        </form>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                        <div class="form-response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="google-map-area w-100">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14140.355884679268!2d75.155725!3d27.621761!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8e830c5e24c4d4f4!2sMatrix%20JEE%20Academy!5e0!3m2!1sen!2sin!4v1574936822497!5m2!1sen!2sin"
            width="100%"
            height="450"
            frameborder="0"
            style="border: 0;"
            allowfullscreen=""
        ></iframe>
    </div>
</div>


@stop
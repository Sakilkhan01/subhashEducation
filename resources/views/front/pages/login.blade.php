@extends('front.layouts.app')
@section('content')

<section class="innerheader">
        <div class="container">
            <h2><span>Student Login</span></h2>
        </div>
</section>

<section class="breadcrumbs-nav mb-60">
    <div class="container">
        <ul class="">
            <ul>
                <li><a href="https://www.matrixedu.in/">Home</a></li>
                <li><span>Student Login</span></li>
            </ul>
        </ul>
    </div>
</section>

<div class="container">
    <div class="pagetitle text-center">
        <form class="my-form1" name="login" method="post" action="">
            <div class="form-group has-feedback">
                <input type="text" name="roll_no" class="form-control" placeholder="Enter Roll No." />

                <span class="form-control-feedback"><i class="fa fa-user"></i></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" />

                <span class="form-control-feedback"><i class="fa fa-key"></i></span>
            </div>

            <!--<div class="forgot-password"> <a href="#"> Forgot password? </a> </div>-->

            <input name="type" value="student" type="hidden" checked="checked" />

            <button class="btn btn-success btn-block" type="submit">Login Now</button>
        </form>
        <div class="clr">&nbsp;</div>
    </div>
</div>


@include('front.pages.matrix_form')
@stop

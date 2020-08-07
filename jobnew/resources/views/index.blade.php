@extends('layouts.main')

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Make Events More Beautiful With Us.</h1>
                    <h4>Contact us for more information about our services</h4>
                    <br>
                    <a href="tel:7907020226" class="btn btn-success btn-raised btn-lg">
                        <i class="material-icons">phone_in_talk</i> Call us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">

            {{--services--}}
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Our Services</h2>
                        <h5 class="description">We provide many services like event managment , job registration and interview traning programs.</h5>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">event</i>
                                </div>
                                <h4 class="info-title">Event Managment</h4>
                                <p>Manage your programs and all arrangments</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Job Registration</h4>
                                <p>Find out the latest job vacancies through us.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">book</i>
                                </div>
                                <h4 class="info-title">Training</h4>
                                <p>Get training from experts to crack interviews.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--portfolio--}}

            <h2 class="text-center">Portfolio</h2><br>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#events" role="tab" data-toggle="tab">
                                    <i class="material-icons">camera</i> Events
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#people" role="tab" data-toggle="tab">
                                    <i class="material-icons">palette</i> People
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="tab-content tab-space">
                <div class="tab-pane active text-center gallery" id="events">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/events/1.jpg')}}" class="rounded img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/events/2.jpg')}}" class="rounded img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/events/3.jpg')}}" class="rounded img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/events/4.jpg')}}" class="rounded img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/events/5.jpg')}}" class="rounded img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center gallery" id="people">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/people/1.jpg')}}" class="rounded img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/people/2.jpg')}}" class="rounded img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/people/3.jpg')}}" class="rounded img-fluid">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/people/4.jpg')}}" class="rounded img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('assets/img/people/5.jpg')}}" class="rounded img-fluid">
                        </div>
                    </div>
                </div>
            </div>


            {{--contact us section--}}

            <div class="section section-contacts">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center title">Contact us</h2>
                        <h4 class="text-center description">The event planner platform</h4>
                        <form>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Your Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Your Mobile</label>
                                        <input type="tel" pattern="[0-9]{10}" name="mobile" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                                <textarea name="message" class="form-control" rows="4" id="exampleMessage" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <button  class="btn btn-primary btn-raised">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
@stop
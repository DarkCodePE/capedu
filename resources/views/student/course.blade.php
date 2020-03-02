@extends('layouts.student')

@section('content')
<div class="page ">

    <div class="container page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="fixed-student-dashboard.html">Home</a></li>
            <li class="breadcrumb-item"><a href="fixed-student-browse-courses.html">Courses</a></li>
            <li class="breadcrumb-item active">The MVC architectural pattern</li>
        </ol>
        <h1 class="h2">The MVC architectural pattern</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta eius enim inventoreus optio ratione veritatis. Beatae deserunt illum ipsam magniima mollitia officiis quia tempora!
                    </div>
                </div>

                <!-- Lessons -->
                <ul class="card list-group list-group-fit">
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted">1.</div>
                            </div>
                            <div class="media-body">
                                <a href="#">Installation</a>
                            </div>
                            <div class="media-right">
                                <small class="text-muted-light">2:03</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item active">
                        <div class="media">
                            <div class="media-left">2.</div>
                            <div class="media-body">
                                <a class="text-white" href="#">The MVC architectural pattern</a>
                            </div>
                            <div class="media-right">
                                <small>25:01</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted">3.</div>
                            </div>
                            <div class="media-body">
                                <a href="#">Database Models</a>
                            </div>
                            <div class="media-right">
                                <small class="text-muted-light">12:10</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted">4.</div>
                            </div>
                            <div class="media-body">
                                <div class="text-muted-light">Database Access</div>
                            </div>
                            <div class="media-right">
                                <small class="badge badge-primary ">PRO</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted">5.</div>
                            </div>
                            <div class="media-body">
                                <div class="text-muted-light">Eloquent Basics</div>
                            </div>
                            <div class="media-right">
                                <small class="badge badge-primary ">PRO</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div class="media-left">
                                <div class="text-muted">6.</div>
                            </div>
                            <div class="media-body">
                                <div class="text-muted-light">Take Quiz</div>
                            </div>
                            <div class="media-right">
                                <small class="badge badge-primary ">PRO</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <p>
                            <a href="fixed-student-cart.html" class="btn btn-success btn-block flex-column">
                                Get All Courses
                                <strong>&dollar;9 / month</strong>
                            </a>
                        </p>
                        <div class="page-separator">
                            <div class="page-separator__text">or</div>
                        </div>
                        <a href="fixed-student-cart.html" class="btn btn-white btn-block flex-column">
                            Purchase Course
                            <strong>&dollar;25 USD</strong>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="media align-items-center">
                            <div class="media-left">
                                <img src="assets/images/people/110/guy-6.jpg" alt="About Adrian" width="50" class="rounded-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="card-title"><a href="fixed-student-profile.html">Adrian Demian</a></h4>
                                <p class="card-subtitle">Instructor</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p>
                        <a href="#" class="btn btn-light"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="btn btn-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-light"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="card">
                    <ul class="list-group list-group-fit">
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <i class="material-icons text-muted-light">assessment</i>
                                </div>
                                <div class="media-body">
                                    Beginner
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-left">
                                    <i class="material-icons text-muted-light">schedule</i>
                                </div>
                                <div class="media-body">
                                    2 <small class="text-muted">hrs</small> &nbsp; 26 <small class="text-muted">min</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ratings</h4>
                    </div>
                    <div class="card-body">
                        <div class="rating">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_border</i>
                        </div>
                        <small class="text-muted">20 ratings</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
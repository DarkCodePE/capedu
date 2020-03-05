@extends('layouts.instructor')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="fixed-instructor-dashboard.html">Home</a></li>
    <li class="breadcrumb-item"><a href="fixed-instructor-courses.html">Courses</a></li>
    <li class="breadcrumb-item active">{{ isset($title) ? 'Editar' : 'Crear' }}</li>
</ol>
<div class="media align-items-center mb-headings">
    <div class="media-body">
        <h1 class="h2">{{ isset($title) ? 'Editar' : 'Crear' }}</h1>
    </div>
    <div class="media-right">
        <a href="#" class="btn btn-success" onclick="formCourse(event)">{{ isset($title) ? 'Editar' : 'Guardar' }}</a>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informacion Basica</h4>
            </div>
            <div class="card-body">
               
                    <div class="form-group">
                        <label class="form-label" for="name">Logo</label>
                        <div class="media align-items-center">
                            <div class="d-flex mr-3 align-self-center">
                                <span class="avatar avatar-lg">
                                    <img class="img-fluid img-logo-curso" src="{{asset('images/default-image.jpg')}}" alt="logo-curso" style="border: 2px solid #f5f6f7;">
                                </span>
                            </div>
                            <div class="media-body">
                                <div class="custom-file b-form-file">
                                    <input type="file" id="url_image" name="url_image" aria-describedby="label-avatar-control" class="custom-file-input" onchange="previewfile('url_image','img-logo-curso')">
                                    <label id="label-avatar-control" class="custom-file-label label-curso">Logo del curso</label>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa nombre del curso" value="{{ isset($name) ? $name : '' }}">
                    </div>

                    <div class="form-group mb-0">
                        <label class="form-label">Descripcion</label>
                        <div class="editor-course">
                            <p>{{ isset($description) ? $description : '' }}</p>
                        </div>
                    </div>
                
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sesiones</h4>
            </div>
            <div class="card-body">
                <p><a href="fixed-instructor-lesson-add.html" class="btn btn-primary">Agregar Session<i class="material-icons">add</i></a></p>
                <div class="nestable" id="nestable-handles-primary">
                    <ul class="nestable-list">
                        <li class="nestable-item nestable-item-handle" data-id="2">
                            <div class="nestable-handle"><i class="material-icons">menu</i></div>
                            <div class="nestable-content">
                                <div class="media align-items-center">
                                    <div class="media-left">
                                        <img src="{{asset('images/vuejs.png')}}" alt="" width="100" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="card-title h6 mb-0">
                                            <a href="fixed-instructor-lesson-add.html">Awesome Vue.js with SASS Processing</a>
                                        </h5>
                                        <small class="text-muted">updated 1 month ago</small>
                                    </div>
                                    <div class="media-right">
                                        <a href="fixed-instructor-lesson-add.html" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nestable-item nestable-item-handle" data-id="1">
                            <div class="nestable-handle"><i class="material-icons">menu</i></div>
                            <div class="nestable-content">
                                <div class="media align-items-center">
                                    <div class="media-left">
                                        <img src="{{asset('images/nodejs.png')}}" alt="" width="100" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="card-title h6 mb-0">
                                            <a href="fixed-instructor-lesson-add.html">Github Webhooks for Beginners</a>
                                        </h4>
                                        <small class="text-muted">updated 1 month ago</small>
                                    </div>
                                    <div class="media-right">
                                        <a href="fixed-instructor-lesson-add.html" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nestable-item nestable-item-handle" data-id="2">
                            <div class="nestable-handle"><i class="material-icons">menu</i></div>
                            <div class="nestable-content">
                                <div class="media align-items-center">
                                    <div class="media-left">
                                        <img src="{{asset('images/gulp.png')}}" alt="" width="100" class="rounded">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="card-title h6 mb-0">
                                            <a href="fixed-instructor-lesson-add.html">Browserify: Writing Modular JavaScript</a>
                                        </h4>
                                        <small class="text-muted">updated 1 month ago</small>
                                    </div>
                                    <div class="media-right">
                                        <a href="fixed-instructor-lesson-add.html" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
            </div>
            <div class="card-body">
                <input type="text" class="form-control" value="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"  onchange="YouTubeGetID(event)"/>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detalle</h4>
                <p class="card-subtitle">Opciones extra</p>
            </div>

            <form class="card-body" action="#" onsubmit="">
                <div class="form-group">
                    <label class="form-label" for="category">Categoria</label>
                    <select id="category" class="custom-select form-control">
                        <option value="0">Negocios</option>
                        <option value="1">Finanzas</option>
                        <option value="2" selected>Tecnologia</option>
                        <option value="3">Administracion</option>
                        <option value="4">Contabilidad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="duration">Duracion</label>
                    <input type="text" id="duration" class="form-control" placeholder="No. of Days" value="10">
                </div>
                <div class="form-group">
                    <label class="form-label" for="start">Fecha de apertura</label>
                    <input id="start" type="text" class="form-control" placeholder="Start Date" data-toggle="flatpickr" value="01/28/2016">
                </div>
                <div class="form-group">
                    <label class="form-label" for="end">Fecha de cierre</label>
                    <input id="end" type="text" class="form-control" placeholder="Start Date" data-toggle="flatpickr" value="01/28/2016">
                </div>

                <div class="form-group mb-0">
                    <label class="form-label" for="option1">Insignia de finalización</label>
                    <div>
                        <div data-toggle="buttons">
                            <label class="btn btn-primary btn-circle active">
                                <input type="radio" class="d-none" name="options" id="option1" checked>
                                <i class="material-icons">person</i>
                            </label>
                            <label class="btn btn-danger btn-circle">
                                <input type="radio" class="d-none" name="options" id="option2">
                                <i class="material-icons">star</i>
                            </label>
                            <label class="btn btn-success btn-circle">
                                <input type="radio" class="d-none" name="options" id="option3">
                                <i class="material-icons">shop</i>
                            </label>
                            <label class="btn btn-warning btn-circle">
                                <input type="radio" class="d-none" name="options" id="option4">
                                <i class="material-icons">monetization_on</i>
                            </label>
                            <label class="btn btn-info btn-circle">
                                <input type="radio" class="d-none" name="options" id="option5">
                                <i class="material-icons">enhanced_encryption</i>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.instructor')
@section('scripts')
<script src="{{ asset('js/form-course.js') }}" defer></script>
@endsection
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
        <a href="#" class="btn btn-success" data-operation ="{{ isset($course->id) ? 'update' : 'insert' }}" onclick="formCourse(event)">{{ isset($course->id) ? 'Editar' : 'Guardar' }}</a>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informacion Basica</h4>
            </div>
            <div class="card-body">
                <form action="" class="form-course-basic">
                <input type="hidden" name="instructor_id" value="{!! $instructor_id !!}
                "/>
                <input type="hidden" name="course_id" value="{{ isset($course->id) ? $course->id : '' }}"/>    
                    <div class="form-group">
                        <label class="form-label" for="name">Logo</label>
                        <div class="media align-items-center">
                            <div class="d-flex mr-3 align-self-center">
                                <span class="avatar avatar-lg">
                                    @isset($course->url_image)
                                        <img class="img-fluid img-logo-curso" src="{{asset('uploads/cursos/'.$course->url_image)}}" alt="logo-curso" style="border: 2px solid #f5f6f7;">
                                    @else
                                        <img class="img-fluid img-logo-curso" src="{{asset('images/default-image.jpg')}}" alt="logo-curso" style="border: 2px solid #f5f6f7;">
                                    @endisset
                                </span>
                            </div> 
                            <div class="media-body">
                                <div class="custom-file b-form-file">
                                <input type="file" id="url_image" name="url_image" aria-describedby="label-avatar-control" data-content="{{ isset($course->url_image) ? $course->url_image : '' }}" class="custom-file-input" onchange="previewfile('url_image','img-logo-curso')" required />
                                    <label id="label-avatar-control" class="custom-file-label label-curso">{{ isset($course->url_image) ? $course->url_image : '' }}</label>
                                    <div class="invalid-feedback">Sube un logo para este curso</div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="category">Categoria</label>
                        <select id="category" name="category" class="custom-select form-control" required>
                            <option value="" selected>--Selecciona--</option>
                            @isset($course->category)
                                <option value="0" {{ $course->category == 0 ? 'selected' : '' }}>Negocios</option>
                                <option value="1" {{ $course->category == 1 ? 'selected' : '' }}>Finanzas</option>
                                <option value="2"  {{ $course->category == 2 ? 'selected' : '' }}>Tecnologia</option>
                                <option value="3" {{ $course->category == 3 ? 'selected' : '' }}>Administracion</option>
                                <option value="4"{{( $course->category == 4) ? 'selected' : '' }}>Contabilidad</option>
                            @else
                                <option value="0">Negocios</option>
                                <option value="1">Finanzas</option>
                                <option value="2">Tecnologia</option>
                                <option value="3">Administracion</option>
                                <option value="4">Contabilidad</option>
                            @endisset
                        
                        </select>
                        <div class="invalid-feedback">Selecciona una categoria</div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa nombre del curso" value="{{ isset($course->name) ? $course->name : '' }}" required />
                        <div class="invalid-feedback">Nombre no valido</div>
                        <div class="valid-feedback">Nombre valido</div>
                    </div>
                    
                    <div class="form-group mb-0">
                        <label class="form-label">Descripcion</label>
                        <div class="editor-course">
                            {{ isset($course->description) ? $course->description : '' }} 
                        </div> 
                    </div> 
                </form>
            </div>
        </div>
        @isset($course->id)
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sesiones</h4>
            </div>
            <div class="card-body">
                <p><a href="fixed-instructor-lesson-add.html" class="btn btn-primary" data-toggle="modal" data-target="#sessions">Agregar Session<i class="material-icons">add</i></a></p>
                <div class="nestable" id="nestable-handles-primary">
                    <ul class="nestable-list" id="session-list">
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
        @endisset
    </div>
    <div class="col-md-4">
        <form action="" class="form-course-video">
        <div class="card">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item embed-course" src="https://www.youtube.com/embed/yZevGkXmgq8" allowfullscreen=""></iframe>
            </div>
            <div class="card-body">
                <label class="form-label" for="url_video">Video de introduccion</label>
                <input type="text" name="url_video" data-id="" class="form-control" placeholder="https://www.youtube.com/watch?v=yZevGkXmgq8" value="{{ isset($course->url_video) ? $course->url_video : '' }}" onchange="YouTubeGetID(event,'embed-course')" required /> 
                <div class="invalid-feedback">URL no valida.</div>
                <div class="valid-feedback">URL valida</div> 
            </div>
        </div>
        </form>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detalle</h4>
                <p class="card-subtitle">Opciones extra</p>
            </div>

            <form class="card-body form-course-detalle" action="#">
                <div class="form-group">
                    <label class="form-label" for="category">Nivel</label>
                    <select id="category" name="level" class="custom-select form-control" required>
                        <option value="" selected>--Selecciona--</option>
                        <option value="0">Basico</option>
                        <option value="1">Intermedio</option>
                        <option value="2" >Avanzado</option>
                    </select>
                    <div class="invalid-feedback">Selecciona una categoria</div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="duration">Duracion</label>
                    <input type="text" id="duration" name="duration" class="form-control" placeholder="Cantidad de Sessiones" value="{{ isset($course->duration) ? $course->duration : '' }}" required>
                    <div class="invalid-feedback">Cantidad no valida.</div>
                    <div class="valid-feedback">Cantidad valida</div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="start">Fecha de apertura</label>
                    <input id="start" type="text" name="start_date" class="form-control" placeholder="Fecha de apertura" data-toggle="flatpickr" value="{{ isset($course->start_date) ? $course->start_date : '' }}" required>
                    <div class="invalid-feedback">Fecha no valida.</div>
                    <div class="valid-feedback">Fecha valida</div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="end">Fecha de cierre</label>
                    <input id="end" type="text" name="end_date" class="form-control" placeholder="Fecha de cierre" data-toggle="flatpickr" value="{{ isset($course->end_date) ? $course->end_date : '' }}" required>
                    <div class="invalid-feedback">Fecha no valida.</div>
                    <div class="valid-feedback">Fecha valida</div>
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
@section('modals')
<!-- Modal -->
@isset($course->id)
<div class="modal fade" id="sessions" tabindex="-1" role="dialog" aria-labelledby="sessionsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Agregar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="#" class="form-course-modal">
                <div class="form-group row">
                    <label for="title" class="col-md-3 col-form-label form-label">Titulo</label>
                    <div class="col-md-9">
                        <input id="title" type="text" name="name-session" class="form-control" placeholder="Titulo de la clase">
                        <div class="invalid-feedback">Titulo no valido</div>
                        <div class="valid-feedback">Titulo valido</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label form-label">URL del video</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="url_video_session" data-id="" value="" placeholder="https://www.youtube.com/watch?v=yZevGkXmgq8" onchange="YouTubeGetID(event,'embed-modal-course')" required/> 
                                    <small class="form-text text-muted d-flex align-items-center">
                                        <i class="material-icons font-size-16pt mr-1">ondemand_video</i>
                                        <span class="icon-text">Pega el link del video</span>
                                    </small>
                                    <div class="invalid-feedback">URL no valida.</div>
                                    <div class="valid-feedback">URL valida</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item embed-modal-course" src="https://www.youtube.com/embed/yZevGkXmgq8" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <label for="title" class="col-md-3 col-form-label form-label">Descripcion</label>
                    <div class="col-md-9 modal-description" style="height: 100%;">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="formModal(event)">Guardar</button>
        </div> 
      </div>
    </div>
</div>
@endisset
@endsection
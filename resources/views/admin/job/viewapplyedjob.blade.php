@extends('admin.partails.master')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('applyed-job') }}">{{ __('globle.Action.Back') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('globle.apply') }} {{ __('sidebar.Job') }}</li>
        </ol>
    </nav>




    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('globle.apply') }} {{ __('sidebar.Job') }}</li>
                        </ol>
                    </h4>

                   

                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <center>

                                        <br>
                                        <button type="button" class="btn btn-second" data-toggle="modal"
                                            data-target="#exampleModal">

                                            <img src="{{ asset('Media') }}/doc_default.jpg" alt="My Profile" id="output"
                                                style="width: 220px; height: 150px; object-fit: cover; border-radius: 15px;" />

                                            <br>


                                            <p>View Documents</p>
                                        </button>
                                    </center>

                                </div>
                            </div>



                            <!--Bootstrap modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!-- Modal heading -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Documentation
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">
                                                    ×
                                                </span>
                                            </button>
                                        </div>

                                        <!-- Modal body with image -->
                                        <div class="modal-body">

                                            @foreach ($files as $file)
                                                @if ($file->id_job == $viewapplyedjob->id)
                                                    <div class="col-lg-4 col-sm-4">
                                                        <a href="{{ asset('Media/File_Apply_Job') }}/{{ $file->filename }}"
                                                            download="{{ $file->filename }}">
                                                            <img src="{{ asset('Media/File_Apply_Job') }}/{{ $file->filename }}"
                                                                alt="My Profile" id="output"
                                                                style="width: 150px; height: 150px; object-fit: cover; border-radius: 15px; box-shadow: 5px 5px 25px gray" />
                                                        </a>

                                                    </div>

                                                    <br>
                                                @endif
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-sm-8">
                                <div class="row">
                                    <div class="col-lg-6">

                                        {{-- ====== First Name ======= --}}
                                        <div class="form-group">
                                            <label for="name">{{ __('globle.form.name') }}</label>
                                            <input disabled class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ $viewapplyedjob->name }}" required="" type="text">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>



                                    <div class="col-lg-6">


                                        <div class="form-group">
                                            <label for="position">{{ __('globle.form.gender') }}</label>
                                            <input disabled class="form-control @error('position') is-invalid @enderror"
                                                name="position"
                                                value="{{ $viewapplyedjob->genderapplyedjob->{'title_' . app()->getLocale()} }}"
                                                required="" type="text">

                                            @error('position')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Jobs ======= --}}
                                        <div class="form-group">
                                            <label for="job">{{ __('globle.apply') }}
                                                {{ __('globle.form.position') }}</label>
                                            <input disabled class="form-control @error('job') is-invalid @enderror"
                                                name="job"
                                                value="{{ $viewapplyedjob->applyedjob->{'title_' . app()->getLocale()} }}"
                                                name="job" type="text">

                                            @error('job')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Other Jobs ======= --}}
                                        <div class="form-group">
                                            <label for="other_job">{{ __('globle.form.position') }}
                                                {{ __('globle.form.other') }}</label>
                                            <input disabled class="form-control @error('other_job') is-invalid @enderror"
                                                value="{{ $viewapplyedjob->other_job }}" name="other_job"
                                                type="other_job">

                                            @error('other_job')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== dob ======= --}}
                                        <div class="form-group">
                                            <label>{{ __('globle.form.date') }}</label>
                                            <input disabled class="form-control @error('dob') is-invalid @enderror"
                                                value="{{ $viewapplyedjob->dob }}" name="dob" type="date">
                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== pob ======= --}}
                                        <div class="form-group">
                                            <label for="pob">{{ __('globle.Address') }}</label>
                                            <input disabled class="form-control @error('pob') is-invalid @enderror"
                                                value="{{ $viewapplyedjob->province }}" name="pob" type="text">

                                            @error('pob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- ====== Role ======= --}}
                                        <div class="form-group">
                                            <label>{{ __('globle.form.email') }}</label>
                                            <input disabled class="form-control @error('email') is-invalid @enderror"
                                                value="{{ $viewapplyedjob->email }}" name="email" type="text">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                {{-- ====== E-mail ======= --}}
                                <div class="form-group">
                                    <label for="designation">{{ __('globle.form.message') }}</label>
                                    <textarea disabled class="form-control" name="message" cols="30" rows="10">
                                                                {{ $viewapplyedjob->remark }}
                                                               </textarea>

                                    @error('mesaage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-sm-6 d-flex flex-row">

                                <div class="form-group">

                                    @if ($viewapplyedjob->status == null)
                                        {{-- ====== Aprovel ===== --}}

                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal{{ $viewapplyedjob->id }}"
                                            data-whatever="@mdo">Aprove</button>


                                        <div class="modal fade" id="exampleModal{{ $viewapplyedjob->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Aprovel With Message
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('aprove-apply-job.aprove', [$viewapplyedjob->id]) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PATCH') }}

                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Message:</label>
                                                                <input type="number" name="status" id="status" value="1"
                                                                    hidden>
                                                                <textarea class="form-control" name="message"
                                                                    id="message-text" rows="10"></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Aprove</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        {{-- ====== Reject ===== --}}

                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#rejectModal{{ $viewapplyedjob->id }}"
                                            data-whatever="@mdo">Reject</button>


                                        <div class="modal fade" id="rejectModal{{ $viewapplyedjob->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Reject With Message
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('aprove-apply-job.aprove', [$viewapplyedjob->id]) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            {{ method_field('PATCH') }}

                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Message:</label>
                                                                <input type="number" name="status" id="status" value="2"
                                                                    hidden>
                                                                <textarea class="form-control" name="message"
                                                                    id="message-text" rows="10"></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-danger">Reject</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    @elseif ($viewapplyedjob->status == 1)
                                        <button disabled type="button" class="btn btn-success">

                                            <span class="link-title">Aproved</span>

                                        </button>


                                        <button type="button" class="btn btn-second" data-toggle="modal"
                                            data-target="#exampleModal{{ $viewapplyedjob->id }}" data-whatever="@mdo"> <i
                                                class="link-icon" data-feather="mail"></i></button>


                                        <div class="modal fade" id="exampleModal{{ $viewapplyedjob->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Aproved Message</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>

                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Message:</label>
                                                                <textarea disabled class="form-control" name="message"
                                                                    id="message-text"
                                                                    rows="10">{{ $viewapplyedjob->message }}</textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @elseif ($viewapplyedjob->status == 2)
                                        <button disabled type="button" class="btn btn-danger">

                                            <span class="link-title">Rejected</span>

                                        </button>
                                        <button type="button" class="btn btn-second" data-toggle="modal"
                                            data-target="#exampleModal{{ $viewapplyedjob->id }}" data-whatever="@mdo"> <i
                                                class="link-icon" data-feather="mail"></i></button>


                                        <div class="modal fade" id="exampleModal{{ $viewapplyedjob->id }}"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Rejected Message</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>

                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Message:</label>
                                                                <textarea disabled class="form-control" name="message"
                                                                    id="message-text"
                                                                    rows="10">{{ $viewapplyedjob->message }}</textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6  d-flex flex-row-reverse">
                                <div class="form-group">
                                    <label for="name">{{ __('globle.Action.Print') }}</label> <br>
                                    <fieldset>


                                        <input class="btn btn-primary" value="Print">
                                    </fieldset>

                                </div>

                            </div>
                        </div>


                        <script>
                            function print_this(elem) {
                                document.body.classList.add('print-element')
                                elem.classList.add('print')
                                window.print()
                                document.body.classList.remove('print-element')
                                elem.classList.remove('print')
                            }

                            document.querySelectorAll('fieldset').forEach(elem =>
                                elem.onclick = () => print_this(elem))
                        </script>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">

        </div>
    </div>
@endsection

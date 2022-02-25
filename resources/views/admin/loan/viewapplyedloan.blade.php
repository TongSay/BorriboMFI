@extends('admin.partails.master')

@section('content')

@if (Session::has('message'))
<div class="alert alert-success">
    {{Session::get('message')}}
</div>

@endif
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('applyed-loan')}}">{{__('globle.Action.Back')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{__('globle.apply')}} {{__('globle.Loans')}}</li>
    </ol>
</nav>




<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{__('globle.apply')}} {{__('globle.Loans')}}</li>
                    </ol>
                </h4>

              

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <center>

                                    <br>

                                    <img src="{{asset ('Media/National_Card')}}/{{$viewapplyedloan->national_card}}" alt="My Profile"
                                        id="output"
                                        style="width: 220px; height: 150px; object-fit: cover; border-radius: 15px;" />

                                    <br>


                                    <a href="{{ asset('Media/National_Card')}}/{{$viewapplyedloan->national_card}}"
                                        download="{{$viewapplyedloan->national_card}}">
                                        <p>Download Identify</p>
                                    </a>

                                </center>

                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">

                                    {{-- ====== First Name ======= --}}
                                    <div class="form-group">
                                        <label for="name">{{__('globle.form.name')}}</label>
                                        <input disabled class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{$viewapplyedloan->name}}" required="" type="text">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>



                                <div class="col-lg-6">


                                    <div class="form-group">
                                        <label for="gender">{{__('globle.form.gender')}}</label>
                                        <input disabled class="form-control @error('position') is-invalid @enderror"
                                            name="position" value="{{$viewapplyedloan->genderapplyedloan->name}}"
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
                                    {{-- ====== Loan ======= --}}
                                    <div class="form-group">
                                        <label for="loan">{{__('globle.form.amount')}}</label>
                                        <input disabled class="form-control @error('loan') is-invalid @enderror"
                                            name="loan" value="{{ $viewapplyedloan->amount }}" name="loan" type="text">

                                        @error('loan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- ====== Loan ======= --}}
                                    <div class="form-group">
                                        <label for="loan">{{__('globle.apply')}} {{__('globle.Loans')}}</label>
                                        <input disabled class="form-control @error('loan') is-invalid @enderror"
                                            name="loan"
                                            value="{{ $viewapplyedloan->applyedloan->{'title_'.app()->getLocale()} }}"
                                            name="loan" type="text">

                                        @error('loan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{-- ====== LoanPurpose ======= --}}
                                    <div class="form-group">
                                        <label for="other_job">{{__('globle.form.LoanPurpose')}}
                                            {{__('globle.form.other')}}</label>
                                        <input disabled class="form-control @error('other_job') is-invalid @enderror"
                                            value="{{$viewapplyedloan->loan_purpose}}" name="other_job"
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
                                        <label>{{__('globle.form.phone')}}</label>
                                        <input disabled class="form-control @error('dob') is-invalid @enderror"
                                            value="0{{$viewapplyedloan->phone}}" name="dob" type="text">
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
                                        <label for="pob">{{__('globle.Address')}}</label>
                                        <input disabled class="form-control @error('pob') is-invalid @enderror"
                                            value="{{$viewapplyedloan->province}}" name="pob" type="text">

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
                                        <label>{{__('globle.form.email')}}</label>
                                        <input disabled class="form-control @error('email') is-invalid @enderror"
                                            value="{{$viewapplyedloan->email}}" name="email" type="text">
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
                                <label for="designation">{{__('globle.form.message')}}</label>
                                <textarea disabled class="form-control" name="message" cols="30" rows="10">
                                                        {{$viewapplyedloan->message}}
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
                                <label for="name">{{ __('globle.Action.Situation') }}</label> <br>


                                @if ($viewapplyedloan->status == null)

                                {{-- ====== Aprovel ===== --}}

                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal{{ $viewapplyedloan->id }}"
                                    data-whatever="@mdo">Aprove</button>


                                <div class="modal fade" id="exampleModal{{ $viewapplyedloan->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Aprovel With
                                                    Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('aprove-apply-loan.aprove',[$viewapplyedloan->id]) }}"
                                                    method="POST" enctype="multipart/form-data">@csrf
                                                    {{method_field('PATCH')}}

                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Message:</label>
                                                        <input type="number" name="status" id="status" value="1" hidden>
                                                        <textarea class="form-control" name="comments" id="message-text"
                                                            rows="10"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary">Aprove</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                {{-- ====== Reject ===== --}}

                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#rejectModal{{ $viewapplyedloan->id }}"
                                    data-whatever="@mdo">Reject</button>


                                <div class="modal fade" id="rejectModal{{ $viewapplyedloan->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Reject With
                                                    Message</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ route('aprove-apply-loan.aprove',[$viewapplyedloan->id]) }}"
                                                    method="POST" enctype="multipart/form-data">@csrf
                                                    {{method_field('PATCH')}}

                                                    <div class="form-group">
                                                        <label for="message-text"
                                                            class="col-form-label">Message:</label>
                                                        <input type="number" name="status" id="status" value="2" hidden>
                                                        <textarea class="form-control" name="comments" id="message-text"
                                                            rows="10"></textarea>
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


                                @elseif ($viewapplyedloan->status == 1)
                                <button disabled type="button" class="btn btn-success">

                                    <span class="link-title">Aproved</span>

                                </button>


                                <button type="button" class="btn btn-second" data-toggle="modal"
                                    data-target="#exampleModal{{ $viewapplyedloan->id }}" data-whatever="@mdo">
                                    <i class="link-icon" data-feather="mail"></i></button>


                                <div class="modal fade" id="exampleModal{{ $viewapplyedloan->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Aproved With
                                                    Message</h5>
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
                                                            rows="10">{{ $viewapplyedloan->comments }}</textarea>
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
                                @elseif ($viewapplyedloan->status == 2)
                                <button disabled type="button" class="btn btn-danger">

                                    <span class="link-title">Rejected</span>

                                </button>
                                <button type="button" class="btn btn-second" data-toggle="modal"
                                    data-target="#exampleModal{{ $viewapplyedloan->id }}" data-whatever="@mdo">
                                    <i class="link-icon" data-feather="mail"></i></button>


                                <div class="modal fade" id="exampleModal{{ $viewapplyedloan->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Rejected With
                                                    Message</h5>
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
                                                            rows="10">{{ $viewapplyedloan->message }}</textarea>
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
                                </td>

                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6  d-flex flex-row-reverse">
                            <div class="form-group">
                                <label for="name">{{ __('globle.Action.Print') }}</label> <br>
                                <fieldset>


                                    <input class="btn btn-primary" type="button" value="Print">
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
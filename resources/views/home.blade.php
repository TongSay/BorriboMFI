@extends('admin.partails.master')

@section('content')

<main id="content" class="bg-gray-01">
  <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h4 class="mb-3 mb-md-0"> {{__('globle.Welcome_to')}} {{__('globle.Dashboard')}} </h4>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
          id="dashboardDate">
          <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
          <input type="text" class="form-control">
        </div>
        <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
          <i class="btn-icon-prepend" data-feather="download"></i>
          Import
        </button>
        <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="printer"></i>
          Print
        </button>
        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
          <i class="btn-icon-prepend" data-feather="download-cloud"></i>
          Download Report
        </button>
      </div>
    </div>



    <div class="row">
      <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0"> {{__('globle.News')}} {{__('globle.Post')}}</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                          class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                          class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                          class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                          class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                          class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2">{{ $newsCount->count() }}</h3>
                    <div class="d-flex align-items-baseline">
                      <p class="text-success">
                        <span>+3.3%</span>
                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">{{__('sidebar.Job')}} {{__('globle.Post')}}</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                          class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                          class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                          class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                          class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                          class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2">{{ $jobCount->count() }}</h3>
                    <div class="d-flex align-items-baseline">
                      <p class="text-danger">
                        <span>-2.8%</span>
                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0"> {{__('globle.Loans')}} {{__('globle.Post')}} </h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                          class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                          class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                          class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                          class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                          class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    <h3 class="mb-2">{{ $loanCount->count() }}</h3>
                    <div class="d-flex align-items-baseline">
                      <p class="text-success">
                        <span>+2.8%</span>
                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- row -->

    <div class="row">
      <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0"> {{__('globle.compliant')}} </h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                          class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                          class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                          class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                          class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                          class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-md-12 col-xl-5">
                    
                    <h4 class="mb-2 text-danger">{{__('globle.new')}}: {{  $compliantCountNew->count()}}</h4>
                    <div class="d-flex align-items-baseline">
                      <h5 class="text-primary">{{__('globle.total')}}: {{ $compliantCount->count() }}</h5>
                      
                    </div>
                  </div>
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">{{__('globle.apply')}} {{__('sidebar.Job')}}</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                          class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                          class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                          class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                          class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                          class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>

                
                <div class="row">

                  <div class="col-6 col-md-12 col-xl-5">
                    
                    <h4 class="mb-2 text-danger">{{__('globle.new')}}: {{   $applyjobCountNew->count()}}</h4>
                    <div class="d-flex align-items-baseline">
                      <h5 class="text-primary">{{__('globle.total')}}: {{ $applyjobCount->count() }} </h5>
                      
                    </div>
                  </div>

                  
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">{{__('globle.apply')}} {{__('sidebar.loan')}} </h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                          class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                          class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                          class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                          class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                          class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div class="row">


                  <div class="col-6 col-md-12 col-xl-5">
                    
                    <h4 class="mb-2 text-danger">{{__('globle.new')}}: {{   $applyloanCountNew->count()}}</h4>
                    <div class="d-flex align-items-baseline">
                      <h5 class="text-primary">{{__('globle.total')}}: {{ $applyloanCount->count() }} </h5>
                      
                    </div>
                  </div>

                  
                  <div class="col-6 col-md-12 col-xl-7">
                    <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- row -->

    {{-- =============== Apply Loans =============== --}}
    @if (isset(auth()->user()->role->permission['name']['applyloan']['can-list']))
    <div class="row">
      <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">{{__('globle.apply')}} {{__('sidebar.loan')}}</h6>
              <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                      class="icon-sm mr-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                      class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                      class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                      class="icon-sm mr-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                      class="icon-sm mr-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>


            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th class="py-6">{{ __('globle.No') }}.</th>
                    <th class="py-6">{{ __('globle.Name') }} {{ __('sidebar.loan') }}</th>

                    <th class="py-6">{{ __('globle.Name') }}</th>
                    <th class="py-6">{{ __('globle.Email') }}</th>
                    <th class="py-6">{{ __('globle.Phone') }}</th>
                    {{-- <th class="py-6">{{__('globle.Description')}}</th> --}}
                    <th class="no-sort py-6">{{ __('globle.Action.Situation') }}</th>
                    <th class="no-sort py-6">{{ __('globle.Action.Action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($applyloan) > 0)
                  @foreach ($applyloan as $key => $applyloan)
                  @if ($applyloan->read_at == null)
                  <tr style="background: rgba(170, 170, 170, 0.658);">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $applyloan->applyedloan->{'title_' . app()->getLocale()} }}</td>
                    <td>{{ $applyloan->name }}</td>
                    <td>
                      @if ($applyloan->email == null)
                      No Email to Disply

                      @else
                      {{ $applyloan->email }}
                      @endif
                    </td>
                    <td>0{{ $applyloan->phone }}</td>

                    <td>
                      @if ($applyloan->status == null)

                      {{-- ====== Aprovel ===== --}}

                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal{{ $applyloan->id }}" data-whatever="@mdo">Aprove</button>


                      <div class="modal fade" id="exampleModal{{ $applyloan->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Aprovel With Message
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('aprove-apply-loan.aprove', [$applyloan->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <input type="number" name="status" id="status" value="1" hidden>
                                  <textarea class="form-control" name="comments" id="message-text" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-primary">Aprove</button>
                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>


                      {{-- ====== Reject ===== --}}

                      <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#rejectModal{{ $applyloan->id }}" data-whatever="@mdo">Reject</button>


                      <div class="modal fade" id="rejectModal{{ $applyloan->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Reject With Message
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('aprove-apply-loan.aprove', [$applyloan->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <input type="number" name="status" id="status" value="2" hidden>
                                  <textarea class="form-control" name="comments" id="message-text" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-danger">Reject</button>
                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>


                      @elseif ($applyloan->status == 1)
                      <button disabled type="button" class="btn btn-success">

                        <span class="link-title">Aproved</span>

                      </button>


                      <button type="button" class="btn btn-second" data-toggle="modal"
                        data-target="#exampleModal{{ $applyloan->id }}" data-whatever="@mdo"> <i class="link-icon"
                          data-feather="mail"></i></button>


                      <div class="modal fade" id="exampleModal{{ $applyloan->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Aproved Message</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea disabled class="form-control" name="comments" id="message-text"
                                    rows="10">{{ $applyloan->comments }}</textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>
                      @elseif ($applyloan->status == 2)
                      <button disabled type="button" class="btn btn-danger">

                        <span class="link-title">Rejected</span>

                      </button>
                      <button type="button" class="btn btn-second" data-toggle="modal"
                        data-target="#exampleModal{{ $applyloan->id }}" data-whatever="@mdo"> <i class="link-icon"
                          data-feather="mail"></i></button>


                      <div class="modal fade" id="exampleModal{{ $applyloan->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Rejected Message</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea disabled class="form-control" name="comments" id="message-text"
                                    rows="10">{{ $applyloan->comments }}</textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>
                      @endif
                    </td>
                    <td>
                      @if (isset(auth()->user()->role->permission['name']['applyloan']['can-view']))
                      <a href="{{ route('applyed-loan.viewapplyedloan', [$applyloan->id]) }}">
                        <i class="link-icon" data-feather="eye"></i>
                      </a>

                      @endif

                    </td>

                  </tr>


                  @endif

                  @endforeach
                  @else

                  <div>No Table to Display</div>

                  @endif

                </tbody>
              </table>
            </div>


          </div>
        </div>
      </div>
      {{-- <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">Cloud storage</h6>
              <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                      class="icon-sm mr-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                      class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                      class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                      class="icon-sm mr-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                      class="icon-sm mr-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>
            <div id="progressbar1" class="mx-auto"></div>
            <div class="row mt-4 mb-3">
              <div class="col-6 d-flex justify-content-end">
                <div>
                  <label
                    class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total
                    storage <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
                  <h5 class="font-weight-bold mb-0 text-right">8TB</h5>
                </div>
              </div>
              <div class="col-6">
                <div>
                  <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span
                      class="p-1 mr-1 rounded-circle bg-primary"></span> Used storage</label>
                  <h5 class="font-weight-bold mb-0">6TB</h5>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block">Upgrade storage</button>
          </div>
        </div>
      </div> --}}
    </div> <!-- row -->
    @endif

    {{-- =============== Apply Jobs =============== --}}
    @if (isset(auth()->user()->role->permission['name']['applyjob']['can-list']))
    <div class="row">
      <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">{{__('globle.apply')}} {{__('sidebar.Job')}}</h6>
              <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                      class="icon-sm mr-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                      class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                      class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                      class="icon-sm mr-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                      class="icon-sm mr-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>


            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th class="py-6">{{ __('globle.No') }}.</th>
                    <th class="py-6">{{ __('globle.Name') }} {{ __('sidebar.Job') }}</th>

                    <th class="py-6">{{ __('globle.Name') }}</th>
                    <th class="py-6">{{ __('globle.Email') }}</th>
                    <th class="py-6">{{ __('globle.Phone') }}</th>
                    {{-- <th class="py-6">{{__('globle.Description')}}</th> --}}
                    <th class="no-sort py-6">{{ __('globle.Action.Situation') }}</th>
                    <th class="no-sort py-6">{{ __('globle.Action.Action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($applyjobs) > 0)
                  @foreach ($applyjobs as $key => $applyjob)

                  @if ($applyjob->read_at == null)
                  <tr style="background: rgba(170, 170, 170, 0.658);">
                    <td>{{ $key + 1 }}</td>
                    <td>{{ Str::limit($applyjob->applyedjob->{'title_' . app()->getLocale()}, 50) }}</td>
                    <td>{{ $applyjob->name }}</td>
                    <td>
                      @if ($applyjob->email == null)
                      No Email to Disply

                      @else
                      {{ $applyjob->email }}
                      @endif
                    </td>
                    <td>0{{ $applyjob->phone }}</td>

                    <td>
                      @if ($applyjob->status == null)

                      {{-- ====== Aprovel ===== --}}

                      <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal{{ $applyjob->id }}" data-whatever="@mdo">Aprove</button>


                      <div class="modal fade" id="exampleModal{{ $applyjob->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Aprovel With Message
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('aprove-apply-job.aprove', [$applyjob->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <input type="number" name="status" id="status" value="1" hidden>
                                  <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-primary">Aprove</button>
                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>


                      {{-- ====== Reject ===== --}}

                      <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#rejectModal{{ $applyjob->id }}" data-whatever="@mdo">Reject</button>


                      <div class="modal fade" id="rejectModal{{ $applyjob->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Reject With Message
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('aprove-apply-job.aprove', [$applyjob->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <input type="number" name="status" id="status" value="2" hidden>
                                  <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submit" class="btn btn-danger">Reject</button>
                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>


                      @elseif ($applyjob->status == 1)
                      <button disabled type="button" class="btn btn-success">

                        <span class="link-title">Aproved</span>

                      </button>


                      <button type="button" class="btn btn-second" data-toggle="modal"
                        data-target="#exampleModal{{ $applyjob->id }}" data-whatever="@mdo"> <i class="link-icon"
                          data-feather="mail"></i></button>


                      <div class="modal fade" id="exampleModal{{ $applyjob->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Aproved Message</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea disabled class="form-control" name="message" id="message-text"
                                    rows="10">{{ $applyjob->message }}</textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>
                      @elseif ($applyjob->status == 2)
                      <button disabled type="button" class="btn btn-danger">

                        <span class="link-title">Rejected</span>

                      </button>
                      <button type="button" class="btn btn-second" data-toggle="modal"
                        data-target="#exampleModal{{ $applyjob->id }}" data-whatever="@mdo"> <i class="link-icon"
                          data-feather="mail"></i></button>


                      <div class="modal fade" id="exampleModal{{ $applyjob->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Rejected Message</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>

                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea disabled class="form-control" name="message" id="message-text"
                                    rows="10">{{ $applyjob->message }}</textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                              </form>
                            </div>

                          </div>
                        </div>
                      </div>
                      @endif
                    </td>


                    <td>

                      @if (isset(auth()->user()->role->permission['name']['applyjob']['can-view']))
                      <a href="{{ route('applyed-job.viewapplyedjob', [$applyjob->id]) }}">
                        <i class="link-icon" data-feather="eye"></i>
                      </a>
                      @endif

                    </td>

                  </tr>
                  
                  @endif



                  @endforeach
                  @else

                  <div>No Table to Display</div>

                  @endif

                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
     
    </div> <!-- row -->
    @endif
    {{-- =============== Apply Compliant =============== --}}
    @if (isset(auth()->user()->role->permission['name']['compliant']['can-list']))
    <div class="row">
      <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-2">
              <h6 class="card-title mb-0">{{__('globle.apply')}} {{__('globle.compliant')}}</h6>
              <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                      class="icon-sm mr-2"></i> <span class="">View</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                      class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                      class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                      class="icon-sm mr-2"></i> <span class="">Print</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                      class="icon-sm mr-2"></i> <span class="">Download</span></a>
                </div>
              </div>
            </div>
            
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                  <thead>
                      <tr>
                          <th class="py-6">{{ __('globle.No') }}.</th>
                          <th class="py-6">{{ __('globle.Types') }} {{ __('sidebar.loan') }}</th>

                          <th class="py-6">{{ __('globle.Name') }}</th>
                          <th class="py-6">{{ __('globle.Email') }}</th>
                          <th class="py-6">{{ __('globle.Phone') }}</th>
                          {{-- <th class="py-6">{{__('globle.Description')}}</th> --}}

                          <th class="no-sort py-6">{{ __('globle.Action.Situation') }}</th>
                          <th class="no-sort py-6">{{ __('globle.Action.Action') }}</th>
                      </tr>
                  </thead>
                  <tbody>
                      @if (count($applycompliants) > 0)
                          @foreach ($applycompliants as $key => $applycompliant)

                              @if ($applycompliant->read_at == null)
                                  <tr style="background: rgba(170, 170, 170, 0.658);">
                                      <td>{{ $key + 1 }}</td>
                                      <td>

                                        @if ($applycompliant->loantype) {{ $applycompliant->loantype->{'title_' . app()->getLocale()} }}
                                          @else
                                            Unknow @endif 
                                      </td>
                                      <td>{{ $applycompliant->name }}</td>
                                      <td>
                                        @if ($applycompliant->email == null)
                                          No Email to Disply

                                          @else
                                          {{ $applycompliant->email }}
                                        @endif
                                        </td>
                                      <td>0{{ $applycompliant->phone }}</td>

                                      <td>
                                          @if ($applycompliant->status == null)

                                        {{-- ====== Aprovel ===== --}}
                                          
                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo">Aprove</button>
                                          
                                          
                                          <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Aprovel With Message</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="{{ route('aprove-compliant.aprove',[$applycompliant->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                                    {{method_field('PATCH')}}
                                                    
                                                    <div class="form-group">
                                                      <label for="message-text" class="col-form-label">Message:</label>
                                                      <input type="number"  name="status" id="status" value="1" hidden>
                                                      <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      <button type="submit" class="btn btn-primary">Aprove</button>
                                                    </div>
                                                  </form>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>


                                          {{-- ====== Reject ===== --}}
                                          
                                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#rejectModal{{ $applycompliant->id }}" data-whatever="@mdo">Reject</button>
                                          
                                          
                                          <div class="modal fade" id="rejectModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Reject With Message</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form action="{{ route('aprove-compliant.aprove',[$applycompliant->id]) }}" method="POST" enctype="multipart/form-data">@csrf
                                                    {{method_field('PATCH')}}
                                                    
                                                    <div class="form-group">
                                                      <label for="message-text" class="col-form-label">Message:</label>
                                                      <input type="number"  name="status" id="status" value="2" hidden>
                                                      <textarea class="form-control" name="message" id="message-text" rows="10"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      <button type="submit" class="btn btn-danger">Reject</button>
                                                    </div>
                                                  </form>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>


                                          @elseif ($applycompliant->status == 1)
                                              <button  disabled type="button" class="btn btn-success">

                                                  <span class="link-title">Aproved</span>

                                              </button>

                                                
                                          <button type="button" class="btn btn-second" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo"> <i class="link-icon" data-feather="mail"></i></button>
                                          
                                          
                                          <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Aproved With Message</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form>
                                                    
                                                    <div class="form-group">
                                                      <label for="message-text" class="col-form-label">Message:</label>
                                                      <textarea disabled class="form-control" name="message" id="message-text" rows="10">{{ $applycompliant->message }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      
                                                    </div>
                                                  </form>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                              @elseif ($applycompliant->status == 2)
                                              <button disabled type="button" class="btn btn-danger">

                                                  <span class="link-title">Rejected</span>

                                              </button>
                                              <button type="button" class="btn btn-second" data-toggle="modal" data-target="#exampleModal{{ $applycompliant->id }}" data-whatever="@mdo"> <i class="link-icon" data-feather="mail"></i></button>
                                          
                                          
                                          <div class="modal fade" id="exampleModal{{ $applycompliant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel"> Rejected With Message</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form >
                                                   
                                                    <div class="form-group">
                                                      <label for="message-text" class="col-form-label">Message:</label>
                                                      <textarea disabled class="form-control" name="message" id="message-text" rows="10">{{ $applycompliant->message }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                     
                                                    </div>
                                                  </form>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          @endif
                                      </td>

                                      <td>

                                          @if (isset(auth()->user()->role->permission['name']['compliant']['can-view']))

                                              <a
                                                  href="{{ route('applyed-compliant.viewapplyedcompliant', [$applycompliant->id]) }}">
                                                  <i class="link-icon" data-feather="eye"></i>
                                              </a>

                                          @endif

                                      </td>

                                  </tr>
                              
                              @endif



                          @endforeach
                      @else

                          <div>No Table to Display</div>

                      @endif

                  </tbody>
              </table>
          </div>


          </div>
        </div>
      </div>
      
    </div> <!-- row -->
    @endif




  </div>
</main>

@endsection
@extends('admin.partails.master')

@section('content')


            @if (Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
                
            @endif
            <nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{route('jobtypes.index')}}">{{__('globle.Action.Back')}}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{__('globle.Action.Create')}} {{__('globle.Types')}} {{__('sidebar.Job')}}</li>
					</ol>
			</nav>

				<div class="row">
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">{{__('globle.Action.Create')}} {{__('globle.Types')}}  {{__('sidebar.Job')}}</li>
                                </ol></h4>
								
								<form class="cmxform"  action="{{route('jobtypes.store')}}" method="POST">@csrf
									<fieldset>
										
                                        @foreach(config('app.available_locales') as $locale)
                      
                        

										<div class="form-group">
											<label for="title_{{ $locale }}">Title ({{ strtoupper($locale) }})</label>
											<input class="form-control" type="text" name="title_{{ $locale }}" id="title_{{ $locale }}"
                                   value="{{ old('title_' . $locale) }}"
                                    required autofocus />

										</div>

										<div class="form-group">
											<label for="description{{ $locale }}"> {{__("globle.Description")}} ({{ strtoupper($locale) }})</label>
									

                                            <textarea class="form-control" name="description_{{ $locale }}" id="description_{{ $locale }}" rows="5" >{{ old('description_' . $locale) }}</textarea>
										</div>
										@endforeach
										
										
										<input class="btn btn-primary" type="submit" value="{{__('globle.Action.Create')}}">
									</fieldset>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-6 grid-margin stretch-card">
						
					</div>
				</div>


@endsection

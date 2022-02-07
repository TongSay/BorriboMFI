

@extends('layouts.master')

@section('content')
<title>{{$title}}</title>
<!-- page title -->
<div class="page-title">
    <div class="container-fluid">
        <div class="row">
            <div class="inner-title">
                <div class="overlay-image"></div>
                <div class="banner-title">
                    <div class="page-title-heading">
                        {{__('menu.product')}}
                    </div>
                    <div class="page-title-content link-style6">
                        <span>
                            <a class="home" href="{{ url("/") }}">
                                {{__('menu.home')}}
                            </a>
                        </span>
                        <span class="page-title-content-inner">
                            <a class="home" href="{{ route('product') }}">
                                {{__('menu.product')}}
                            </a>
                        </span>
                        <span class="page-title-content-inner">
                            
                            {{__('globle.apply')}} {{__('menu.product')}}
                            
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /.page-title -->

    <!-- Contact -->
    <section class="flat-contact-page">
        <div class="container">
            <div class="row">
                

                @if (Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                    
                @endif
                <div class="col-md-12">
                    <div class="contact-right">
                        <form action="{{ route('applyotherloanid.storeapplyotherloan')}}" method="POST" enctype="multipart/form-data" class="form-contact-right"> @csrf
                            <div class="input-row">
                                <div class="input-name">
                                    <label for="message" class="heading-features"> {{__('globle.form.choose')}} {{__('sidebar.loan')}} <strong
                                            style="color: red;">*</strong></label>
                                            <select class="input-contact input-select" name="id_loan" id="services" required="">

                                                <option>{{__('globle.form.choose')}} {{__('sidebar.loan')}}</option>
        
                                                @foreach(App\Models\Loan::all() as $loan)
                                                    <option value="{{$loan->id}}">{{ $loan->{'title_'.app()->getLocale()} }}</option>
                                                @endforeach
                                                
        
                                               
        
                                            </select>
                                </div>
                                
                                <div class="input-services">
                                    <label for="message" class="heading-features"> {{__('globle.form.LoanPurpose')}} </label>
                                    <input type="text" name="loan_purpose" class="input-contact"
                                      >
                                </div>

                            </div>

                            <div class="input-row">
                                <div class="input-name">
                                    <label for="message" class="heading-features"> {{__('globle.form.amount')}} <strong
                                            style="color: red;">*</strong></label>
                                            <input type="number"​  name="amount" class="input-contact" required>
                                </div>
                                <div class="input-services">
                                    
                                </div>

                            </div>

                            <div class="input-row">
                                <div class="input-name">
                                    <label for="name" class="heading-features"> {{__('globle.form.name')}} <strong
                                            style="color: red;">*</strong></label>
                                    <input id="name" name="name" class="input-contact" type="text" required>
                                </div>
                                <div class="input-services">
                                    <label for="services" class="heading-features"> {{__('globle.form.gender')}} <strong
                                            style="color: red;">*</strong></label>
                                    <select class="input-contact input-select" name="gender" id="services">

                                        <option>Choose</option>

                                        @foreach(App\Models\Gender::all() as $gender)
                                            <option value="{{$gender->id}}">{{ $gender->name }}</option>
                                        @endforeach
                                        

                                       

                                    </select>
                                </div>

                            </div>

                            <div class="input-row">

                                <div class="input-email">
                                    <label id="email" class="heading-features"> {{__('globle.form.email')}}</label>
                                    <input type="email" name="email" class="input-contact">
                                </div>
                                <div class="input-services">
                                    <label for="services" class="heading-features"> {{__('globle.form.phone')}} <strong
                                            style="color: red;">*</strong></label>
                                    <input type="number" name="phone" class="input-contact" required maxlength="10">
                                </div>
                            </div>

                            <div class="input-message">
                                <label for="message" class="heading-features"> {{__('globle.form.current_address')}} <strong
                                        style="color: red;">*</strong></label>
                                <input type="text" name="pob" class="input-contact" placeholder="#123, St.123,..."
                                    required>
                            </div>

                            <div class="input-message">
                                <label for="message" class="heading-features"> {{__('globle.form.message')}} </label>
                                <textarea name="message" class="input-contact-message" id="message"></textarea>
                            </div>

                            <div class="input-row">

                                <div class="input-email">
                                    <label id="email" class="heading-features">{{__('globle.form.upload')}} {{__('globle.form.nidc')}} <strong
                                        style="color: red;">*</strong>
                                    </label>
                                    <input type="file" name="national_card" class="input-contact form-control" required>
                                </div>

                            </div>
                            <div class="button">
                                <button type="submit" class=" btn btn-left">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="col-md-5">
                    <div class="contact-right">
                        <form method="post" class="form-contact-right" id="contactform"
                            action="./contact/contact-process.php" accept-charset="utf-8" novalidate="novalidate">


                            <h2 class="section-title mg-bottom-15">Loan Calculator</h2>

                            <div class="input-message">
                                <label for="message" class="heading-features"> Loan Amount <strong
                                        style="color: red;">(USD)</strong></label>
                                <input type="text" name="number" class="input-contact" required>
                            </div>
                            <div class="input-message">
                                <label for="message" class="heading-features"> Loan Term <strong
                                        style="color: red;">(Month)</strong></label>
                                <input type="text" name="number" class="input-contact" required>
                            </div>

                            <div class="input-message">
                                <label for="message" class="heading-features"> Monthly Interest Rate <strong
                                        style="color: red;">(%)</strong></label>
                                <input type="text" name="number" class="input-contact" required>
                            </div>

                            <div class="input-message">
                                <label for="message" class="heading-features"> Monthly Repayment Amount <strong
                                        style="color: red;">(USD)</strong></label>
                                <input type="text" name="number" class="input-contact" required>
                            </div>





                            <div class="button">
                                <button type="submit" class=" btn btn-left">Calculate</button>
                            </div>
                        </form>
                    </div>
                </div> --}}


            </div>

        </div>
    </section>

@endsection
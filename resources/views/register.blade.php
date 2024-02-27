@extends('home')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="" class="align-content-*-center justify-content-center text-center section-bg">
    <div class="container"> <!-- Wrap the content in a container to center it -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-2xl">Where would you like to see leads from?</h1>
                <p>Tell us the area you cover so we can show you leads for your location</p>
                <form action="forms/contact.php" method="post" role="form" class="php-register-form mt-4 text-left bg-white p-4 ">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            I serve customers nationwide
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            I serve customers within
                        </label>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="col-5">
                            <select name="" id="" class="form-control">
                                <option value="">2 miles</option>
                                <option value="">5 miles</option>
                                <option value="">10 miles</option>
                                <option value="">20 miles</option>
                                <option value="">30 miles</option>
                                <option value="" selected>50 miles</option>
                            </select>
                        </div>
                        <div class="col-2 text-center">
                            <label class="form-check-label" for="flexRadioDefault1">
                               From
                            </label>
                        </div>
                        <div class="col-5">
                            <input name="autocomplete" id="autocomplete" aria-label="autocomplete" type="text" class="form-control" autocomplete="off" role="combobox" placeholder="Enter your postcode" >
                        </div>
                       
                    </div>
                    
                        <div class="text-right">
                            <a  href="{{route('professional.create')}}" >
                            <button type="button" class="btn btn-primary bg-primary mt-4" data-dismiss="modal">
                        Next
                    </button>
                </a>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->



@endsection
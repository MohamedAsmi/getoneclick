@extends('home')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="" class="align-content-*-center justify-content-center text-center section-bg">
    <div class="container"> <!-- Wrap the content in a container to center it -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="text-2xl">Some details about you</h1>
                <p>You’re just a few steps away from viewing our Web Design leads</p>
                <form action="{{route('users.store')}}" method="post" role="form" class="php-register-form mt-4 text-left bg-white p-4 ">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Join As</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="join_as" value="0" ="inlineRadio1" value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Professional</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="join_as" value="1" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Professional-Pro</label>
                              </div>
                        </div>
                        
                        
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your name</label>
                        <input type="text"  name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="cname" class="form-label">Company name</label>
                        <input type="text" name="cname" class="form-control" id="cname" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text" style="font-size: 15px !important;">If you aren't a business or don't have this information, you can leave this blank</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone number</label>
                        <input type="text"  name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Does your company have a website?</label>
                        <div>
                            <input type="radio" class="btn-check" name="website" id="option1" autocomplete="off" checked>
                            <label class="btn btn-secondary " for="option1">YES</label>
                            
                           
                            <input type="radio" class="btn-check" name="website" id="option4" autocomplete="off">
                            <label class="btn btn-secondary " for="option4">NO</label>
                        </div>
                        
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="employee" class="form-label">Company size, employees</label>
                        <div>
                            <input type="radio" class="btn-check" value="1" name="employee" id="employee1" autocomplete="off" checked>
                            <label class="btn btn-secondary" for="employee1">1</label>
                        
                            <input type="radio" class="btn-check" value="2-10" name="employee" id="employee2" autocomplete="off">
                            <label class="btn btn-secondary" for="employee2">2-10</label>
                        
                            <input type="radio" class="btn-check" value="11-50" name="employee" id="employee3" autocomplete="off">
                            <label class="btn btn-secondary" for="employee3">11-50</label>
                        
                            <input type="radio" class="btn-check" value="51-200" name="employee" id="employee4" autocomplete="off">
                            <label class="btn btn-secondary" for="employee4">51-200</label>
                        </div>
                        
                    </div> --}}
                      
                   <div class="d-flex row">
                    <div class="col-6 text-left">
                        <a  href="{{route('professional.create')}}" >
                        <button type="button" class="btn btn-primary bg-dark mt-4" data-dismiss="modal">
                            Back
                        </button>
                        </a>
                    </div>
                    <div class="col-6 text-right">
                            <a  href="{{route('professional.create')}}" >
                            <button type="submit" class="btn btn-primary bg-primary mt-4" data-dismiss="modal">
                        Next
                        </button>
                            </a>
                    </div>
                   </div>
                   
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->



@endsection
@extends('layouts.app')

@section('content')
<style>
    .step-content {
      display: none;
    }
    .step-content.active {
      display: block;
    }

    .multiStep{
        background: white; padding:20px; 
    }
    .text-large{
        font-size: 18px;
        font-weight: 600;
    }
  </style>
<div class="container">
    <div class="row justify-content-center " >
      <div class="col-md-8" >
        <h1 class="text-center">Where would you like to see leads from?</h1>
        <p class="text-center">Tell us the area you cover so we can show you leads for your location</p>
        <form  class="form-horizontal multiStep" id="ajax-form2" method="POST" action="{{route('users.store')}}"
        data-table="category_table" enctype="multipart/form-data" data-file="true" class="multiStep">
          <!-- Step 1 -->
          @csrf
          <div id="message-area"></div>

          <div class="step-content active" id="step1" >
            <div class="form-check">
                <input class="form-check-input text-large" type="radio" name="service_id" id="service_id" 
                value="1"  checked>
                <label class="form-check-label text-large" for="service_id">
                    I serve customers nationwide
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input text-large" type="radio" name="service_id" id="service_id" value="1">
                <label class="form-check-label text-large" for="service_id" >
                    I serve customers within
                </label>
            </div>
           <div class="d-flex mt-4 mb-4">
                <div class="col-5">
                    <select name="miles" id="miles" class="form-control">
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
                    <input name="postcode" id="autocomplete" aria-label="autocomplete" type="text" class="form-control" autocomplete="off" role="combobox" placeholder="Enter your postcode" >
                </div>
               
            </div> 
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <label> <span> <i class="fa fa-info-circle"></i></span>  You can change your location at any time</label>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary next" type="button">Next</button>
                    </div>
                </div>
            </div>
          </div>
  
          <!-- Step 2 -->
          <div class="step-content" id="step2">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Join As</label>
              <div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="join_id" value="0" value="option1" checked>
                      <label class="form-check-label" for="inlineRadio1">Professional</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="join_id" value="1" id="inlineRadio2" value="option2">
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
          <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-6 text-end">
                  <button class="btn btn-secondary prev" type="button">Previous</button>
                  <button type="submit" class="btn btn-dark" data-loading-text="Saving...">save</button>
                </div>
            </div>
        </div>
          
          </div>
  
          <!-- Step 3 -->
          {{-- <div class="step-content" id="step3">
            <h2>Step 3</h2>
            <div class="mb-3">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message"></textarea>
            </div>
            <button class="btn btn-secondary prev" type="button">Previous</button>
            <button class="btn btn-primary" type="submit">Submit</button>
          </div> --}}
        </form>
      </div>
    </div>
  </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const form = document.getElementById("ajax-form2");
      const steps = form.querySelectorAll(".step-content");
      const prevBtns = form.querySelectorAll(".prev");
      const nextBtns = form.querySelectorAll(".next");
  
      let currentStep = 0;
  
      function showStep(stepIndex) {
        steps.forEach((step, index) => {
          if (index === stepIndex) {
            step.classList.add("active");
          } else {
            step.classList.remove("active");
          }
        });
      }
  
      function goToStep(stepIndex) {
        if (stepIndex >= 0 && stepIndex < steps.length) {
          currentStep = stepIndex;
          showStep(currentStep);
        }
      }
  
      nextBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          currentStep++;
          showStep(currentStep);
        });
      });
  
      prevBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          currentStep--;
          showStep(currentStep);
        });
      });
  
      
    });
  </script>
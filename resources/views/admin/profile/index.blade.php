@extends('admin.layouts.app')
@section('content')

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="{{route('profile.index')}}" >Profile</a>
        {{-- <a class="nav-link active ms-0" href="{{route('profile.index')}}" >Change Password</a> --}}
       
    </nav>
    <hr class="mt-0 mb-4">
    <form class="form-horizontal" id="ajax-form" method="POST" action="{{route('profile.update',['profile'=>$user])}}"
    data-table="video_table" enctype="multipart/form-data" data-file="true" data-reload="true">
    @csrf
    @method('PUT') 
    <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="{{asset('assets/admin/profile/'.($user->userDetail ? $user->userDetail->url : ''))}}" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                    
                        <input type="file" class="form-control btn btn-dark" value="Upload new image" name="path">
                        <input type="hidden" class="form-control btn btn-dark"  value="{{$user->id}}" name="id">
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                      
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{$user->name}}" name="name">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{$user->userDetail->f_name ?? ''}}" name="f_name">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="{{$user->userDetail->l_name ?? ''}}" name="l_name">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-12">
                                    <label class="small mb-1" for="inputFirstName">Address</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your Address" value="{{$user->userDetail->address ?? ''}}" name="address">
                                </div>
                              
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="{{$user->userDetail->mobile ?? ''}}" name="mobile">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{$user->email ?? ''}}" name="email" readonly>
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Skype</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your skype" value="{{$user->userDetail->skype ?? ''}}" name="skype">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Facebook</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your facebook" value="{{$user->userDetail->facebook ?? ''}}" name="facebook">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Instagram</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your instagram" value="{{$user->userDetail->instagram ?? ''}}" name="instagram">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Linkdin</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your linkdin" value="{{$user->userDetail->linkdin ?? ''}}" name="linkdin">
                                </div>
                            </div>
                            
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                            
                            </div>
                            <!-- Form Row-->
                            
                            <!-- Save changes button-->
                            <button class="btn btn-dark" type="submit">Save</button>
                       
                    </div>
                </div>
            </div>
    </div>
</form>

</div>
@endsection

@push('js')
{{-- <script src="{{ asset('assets/admin/project.js') }}"></script> --}}
@endpush
@extends('user_main')
@section('section')
<style>
    /* h4{
        color: white;
    } */
    /* body{
            overflow: hidden;
    } */
    .lead-list-item {
        border-left: 4px solid transparent;
        padding: 1rem;
        background-color: #fff;
        margin-bottom: 8px;
        cursor: pointer;
    }

    .text-success {
        color: #47bf9dff;
    }

    .text-black {
        color: black;
    }

    .lead-list-header {
        display: flex;
        background-color: #111738ff;
        padding: 8px;
        color: #fff;
        height: 80px;
    }

    .lead-list-header h4 {
        margin: 2px;
        font-size: 20px;
        text-align: justify;
    }

    .lead-list-header .edit-btn {
        background-color: #0056b3;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 3px;

    }

    .lead-list-header .edit-btn svg {
        margin-left: 5px;
    }

    .filter-section {
        background-color: #f4f5f7;
        padding: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 50px;
    }

    .filter-text {
        color: #6c757d;
        margin-right: 10px;
    }

    .filter-btn {
        border-left: 1px;
        display: flex;
        align-items: center;
        color: #2e7df2ff;
    }

    .filter-btn svg {
        fill: #2e7df2ff;
    }

    .sidebar {
        background-color: #fff;
        padding: 0;
        /* overflow-y: auto; */
    }

    .lead-list-item {
        border-left: 4px solid transparent;
        /* padding: 1rem; */
        background-color: #fff;
        margin-bottom: 8px;
        cursor: pointer;
    }

    .lead-list-item p {
        margin-bottom: 10px;
        color: #72728d;
    }

    .lead-list-item h5 {
        font-weight: bold;
        color: black;
    }

    .lead-list-item.selected {
        border-left-color: #007bff;
        background-color: #e9ecef;
    }

    .lead-detail {
        border: 1px solid #dee2e6;
        background-color: #fff;
        padding: 1rem;
    }

    .lead-detail h5 {
        font-weight: 600;
    }


    .lead-list-item.selected {
        border-left-color: #007bff;
        background-color: #e9ecef;
    }

    .lead-list-item.active {
        border-left-color: #007bff;
        background-color: #e9ecef;
    }

    .lead-list-item:hover {
        background-color: #e9ecef;
    }

    .lead-list-item .time-ago {
        font-size: 0.8rem;
        color: #fff;
    }

    .lead-time {
        background-color: #47bf9dff;
        color: #0F5132;
        border-radius: 16px;
        padding: 4px 12px;
        font-size: 14px;
        font-weight: 500;
    }

    .sidebar {
        background-color: #fff;
        /* padding: 1rem; */
        height: 100vh;
        /* overflow-y: auto; */
    }

    .mgt-4 {
        margin-top: 4px;
    }

    .mgt-1 {
        margin-top: 1px;
        margin-right: 2px;
    }

    .filter-line-grey {
        height: 20px;
        width: 1px;
        background-color: grey;
        margin-right: 10px;
    }

    .filter-line-yellow {
        height: 40px;
        width: 1px;
        background-color: yellow;
        margin-right: 10px;
    }

    .card {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .card-header {
        background-color: #fff;
        border-bottom: 0;
        color: #000;
        font-size: 16px;
        font-weight: 600;
    }

    .card-body {
        color: #000;
    }

    .text-secondary {
        color: #6c757d !important;
    }

    .badge {
        font-size: 12px;
        margin-right: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .verified {
        color: #28a745;
        font-size: 14px;
    }

    .credits {
        background-color: #fff9edff;
        border-left: 4px solid #ffeeba;
        font-size: 14px;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .guarantee {
        font-size: 12px;
        color: black;
    }

    .details {
        font-weight: 600;
        margin-top: 20px;
        margin-bottom: 5px;
    }

    .requirement {
        font-size: 14px;
        color: #000;
    }
</style>
<div class="container-fluid">
    <div class="row col-md-12">
        <div class="col-md-4 sidebar rounded-top">
            <!-- Updated Header Part -->
        <div>
            <div class="row rounded-top" style="background: #111738ff; padding:10px;color:white;">
                <h4>620 matching leads</h4>
                <div class="col-md-4"><span class="fa fa-tasks pr-4"></span>  12 services</div>
                <div class="col-md-4"><span class="fa fa-map-marker pr-4"></span>  1 location</div>
                <div class="col-md-4 text-end"><button class="btn btn-primary"><span class="fa fa-edit"></span>Edit</button></div>
            </div>
           

            <!-- Filter Section -->
            <div class="filter-section">
                <div class="filter-text">List items are shown by:</div>
                <div class="filter-line-grey"></div>
                <button class="filter-btn flex" onclick="showFilterPopup()">
                    <svg width="20" height="20" class="MuiSvgIcon-root mgt-1" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path>
                    </svg>
                    <span>Filter</span>
                </button>
            </div>
            <!-- List Section -->
        </div>
        <div style="overflow-y: auto;height:100%;">
            <div class="lead-list-item" >
                <div class="d-flex justify-content-between">
                    <h5>Baljinder</h5>
                    <div class="lead-time"><span class="time-ago">20m ago</span></div>
                </div>
                <p class="text-black category">Web Design</p>
                <p class="location">Hayes, Greater London (Nationwide)</p>
                <div class="flex">
                    <span class="text-success">Addition Details </span>
                    <p class="detail">Create a new website / To advertise my business/services / Small business (...)</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="credit">29 credits</span>
                    <a href="#" >Be the 1st to respond</a>
                </div>
            </div>
            <div class="lead-list-item">
                <div class="d-flex justify-content-between">
                    <h5>Sahfas</h5>
                    <div class="lead-time"><span class="time-ago">20m ago</span></div>
                </div>
                <p class="text-black category">Web Developer</p>
                <p class="location">Puttalam, Sri Lanka (Nationwide)</p>
                <div class="flex">
                    <span class="text-success">Addition Details </span>
                    <p class="detail">Create a new website / To advertise my business/services / Small business (...)</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="credit">40 credits</span>
                    <a href="#" >Be the 1st to respond</a>
                </div>
            </div>
            <div class="lead-list-item">
                <div class="d-flex justify-content-between">
                    <h5>Baljinder</h5>
                    <div class="lead-time"><span class="time-ago">20m ago</span></div>
                </div>
                <p class="text-black category">Web Design</p>
                <p class="location">Hayes, Greater London (Nationwide)</p>
                <div class="flex">
                    <span class="text-success">Addition Details </span>
                    <p class="detail">Create a new website / To advertise my business/services / Small business (...)</p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="credit">29 credits</span>
                    <a href="#">Be the 1st to respond</a>
                </div>
            </div>
        </div>
        </div>

     
        <div class="card col-md-8">
            <div class="card-header">
                <span id="name">Adam</span>
                <span class="text-secondary float-end">28m ago</span>
            </div>
            <div class="card-body">
                <h5 id="category">Web Design</h5>
                <p id="location">Batley, WF17 (Nationwide)</p>
                <p id="detail">Create a new website / To advertise my business/services / Small business (...)</p>
                <p class="mt-3">Happy to receive service online or remotely <i class="fas fa-info-circle text-secondary"></i></p>
                <p class="mt-3"><i class="fas fa-phone verified"></i> 075******** <span class="badge bg-success">Verified</span></p>
                <p><i class="fas fa-envelope verified"></i> e************a@h*****l.com</p>
                <div class="progress mt-3">
                    <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="5"></div>
                </div>
                <p class="text-secondary">0/5 professionals have responded.</p>
                <div class="credits mt-3 flex col-md-8 rounded">
                    <div class="mt-2"><i class="fas fa-coins mr-2"></i><span id="credits"> 33 credits</span></div>
                    <div class="filter-line-yellow ml-5"></div>
                    <div class="guarantee ml-5">
                        <p>Covered by our Get Hired Guarantee <i class="fas fa-info-circle text-secondary"></i></p>
                        <p>If you're not hired during the starter pack, we'll return all the credits</p>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
                    <a href="javascript:void(0)" class="load-modal" title="Contact" data-url='{{route('contact.index')}}'><button class="btn btn-primary me-md-2" type="button">Contact Adam</button></a>
                    <button class="btn btn-secondary" type="button">Not interested</button>
                </div>
                <div class="details mt-3">Details</div>
                <hr>
                <div class="requirement mt-3">What is your web design requirement?</div>
                <p>Create a new website</p>
            </div>
        </div>
            
    
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $(".lead-list-item").click(function() {
            $(".lead-list-item").removeClass("selected");

            $(this).addClass("selected");

            updateRightSideContent($(this));
        });

        function updateRightSideContent(selectedItem) {
            var leadName = selectedItem.find("h5").text();
            var leadCategory = selectedItem.find(".category").text();
            var leadLocation = selectedItem.find(".location").text();
            var leadDetails = selectedItem.find(".detail").text();
            var leadCredits = selectedItem.find(".credit").text();

            $("#name").text(leadName);
            $("#category").text(leadCategory);
            $("#location").text(leadLocation);
            $("#detail").text(leadDetails);
            $("#credits").text(leadCredits);
        }
    });
</script>

@endsection
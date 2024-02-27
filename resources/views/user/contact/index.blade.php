<div class="modal-dialog modal-lg test-modal">
    <div class="modal-content ">
        <form class="form-horizontal" id="ajax-form" method="POST" action="{{route('categories.store')}}"
            data-table="category_table" enctype="multipart/form-data" data-file="true">
            @csrf
            <div class="row  col-lg-12 p-4">
                <h4 class="modal-title text-center" id="myLargeModalLabel">You need 43 credits to contact E Braund</h4>
                <h5 class="text-center" style="color: gray;">To get some credits, you need to buy a starter pack of
                    credits</h5>
                <h5 class="text-center" style="color: gray;">(Enough for this lead + roughly another 9 leads)</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
            </div>
            <hr>
            <div class="modal-body">
                <div id="message-area"></div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="accordion accordion-flush" id="faqlist">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        What are credits?
                                    </button>
                                </h2>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Credits are Bark’s online currency. If you see a job that you like and you want
                                        to get in contact with that customer, then you use credits to purchase their
                                        contact details (you will receive their personal phone number and email
                                        address). The amount of credits required to contact a customer varies depending
                                        on the potential value of the job e.g. you will need less credits to contact a
                                        customer looking for a cleaner once a month for a 1 bedroomed flat than a
                                        customer looking for a cleaner once a week for a 5 bedroomed house.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        What is the starter pack?
                                    </button>
                                </h2>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        The starter pack is the only way to get started and trial Bark properly. It
                                        provides enough credits to contact roughly 10 customers and is designed so that
                                        you get hired at least once and get a great return on your investment. We’re so
                                        confident that you’ll get hired at least once from the starter pack that we
                                        offer a full Get Hired Guarantee. We also offer a massive 20% discount off the
                                        standard price.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="starter-pack-container js-starter-pack-container pt-4 ">
                        <div class="starter-pack-elem border rounded border-grey-100 px-2 pt-4 pb-3 p-md-0 border-md-0 position-relative ">
                            <div class="row p-4">
                              
                                <div class="row no-gutters px-md-3 pt-2 pb-2 pt-md-0 pb-md-0">
                                    <div class="col-6 col-md-7">
                                        <span class="align-middle">
                                            <b><span class="js-n-credits">310</span> credits  </b>
                                        </span>
                                    </div>
                                    <div class="col-6 col-md-5 text-right text-md-left">
                                        <b><span class="bold"><span class="js-price">£396.80</span>
                                             (ex VAT)                                    </span>
                                        <span class="d-none d-md-inline">/
                                            <span class="js-price-per-credit">£1.28</span> per credit
                                        </span>  </b>
                                    </div>
                                    
                                    <div class="col-6 col-md-7 text-xs-14 pt-2">
                                        <b>  <span class="d-none d-md-inline">
                                            Enough for about <span class="js-estimated-responses">10</span> leads
                                        </span>  </b>
                                        <span class="d-md-none d-inline">
                                            For about <span class="js-estimated-responses">10</span> leads
                                        </span>
                                    </div>
                                    <div class="col-6 col-md-5 text-xs-14 pt-2 text-right text-md-left">
                                        <span class="strike-through text-grey-400">
                                            <span class="js-price">£496.00</span>
                                             (ex VAT)                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 px-md-3">
                                <div class="col-12 bg-light py-3 mt-2 mt-md-4 mb-2 mb-md-4 mr-lg-6 position-relative">
                                    <div class="bg-light text-dark text-sm text-center text-md-start p-3 ms-3">
                                        <div class="row d-flex">
                                            <div class="col-2">
                                                <img class="img-fluid position-absolute" alt="Get hired guarantee" width="60" height="60" src="https://d18jakcjgoan9.cloudfront.net/s/img/frontend-v2/icons/ghg-badge.png!d=KN9hX6" />
                                            </div>
                                            <div class="col-10">
                                                <p class="mb-0 ms-2 ms-md-0 text-left text-center-md lh-sm">
                                                    <span class="fw-bold d-block d-md-inline text-xs text-md-sm">
                                                        Get Hired Guarantee
                                                    </span>
                                                    <span class="d-none d-md-inline"> - </span>
                                                    <span class="text-xxs text-md-xs">
                                                        We’re so confident you’ll get hired at least once that if you don’t, we’ll return all the credits.
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row text-center mt-4 pt-4">
                                <h6 style="color: gray">You will use 27 of your 310 purchased credits to contact Alice</h6 >
                            </div>
                            
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="javascript:void(0)" class="load-modal sbscribe-btn" title="Contact" data-url='{{route('subscribe.index')}}'><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Buy 310 Credits</button></a>
                </div>
        </form>

    </div>
</div>
</div>



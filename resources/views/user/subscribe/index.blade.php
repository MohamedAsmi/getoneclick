<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="subscribeModalLabel">Subscribe</h5>
            {{-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
        </div>
        <div class="modal-body">
            <form id="subscriptionForm" method="POST" action="{{ route('subscribe.store') }}">
                @csrf

                <div class="form-group">
                    <label for="card_number">Card Number</label>
                    <div id="card_number" class="form-control">
                        <!-- Add input field for card number -->
                    </div>
                    <small id="cardNumberHelp" class="form-text text-muted">Format: xxxx xxxx xxxx xxxx</small>
                    <div id="card-type">
                        <!-- Display card type icon here -->
                    </div>
                </div>

                <div class="form-group">
                    <label for="expiry_date">Expiry Date</label>
                    <div id="expiry_date" class="form-control">
                        <!-- Add input field for expiry date -->
                    </div>
                    <small id="expiryDateHelp" class="form-text text-muted">Format: MM/YY</small>
                </div>

                <div class="form-group mb-4">
                    <label for="cvv">CVV</label>
                    <div id="cvv" class="form-control">
                        <!-- Add input field for CVV -->
                    </div>
                    <small id="cvvHelp" class="form-text text-muted">3 or 4 digits</small>
                </div>

                <div id="card-errors" role="alert"></div> <!-- Error message display -->

                
                
                
                <button type="submit" class="btn btn-primary" id="subscribeBtn">Subscribe</button>
                <div class="secure-footer d-none bg-grey-50 py-3 px-4 no-gutters justify-content-between align-items-center text-grey-600">
                    <div class="col-6">
                        <span class="align-middle mr-2"><span class="bark-svg-icon bsi-primary-grey-600 bsi-xs d-inline-block"><!--?xml version="1.0" encoding="UTF-8"?-->
                
                </span>
                                    <span class="bark-svg-icon pp-icon d-inline-block ml-1"><!--?xml version="1.0" encoding="UTF-8"?-->
                
                </span>
                                    <span class="bark-svg-icon pp-icon d-inline-block ml-1"><!--?xml version="1.0" encoding="UTF-8"?-->
                
                </span>
                            </div>
                </div>
                
                <div id="loadingIndicator" style="display: none;"> <!-- Loading indicator -->
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div id="successMessage" style="display: none;"> <!-- Success message -->
                    <div class="alert alert-success" role="alert">
                        Subscription Successful!
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Create a Stripe instance
    var stripe = Stripe('pk_test_51LBy68ETHyDgwPAF5BAf3CAj9KoxpNbvq3RVHywBhQXjEiRVr2zzi4VxQkAihonJcgMpsOZLhMt6SMBTfOqk7Kle00pE3giHh3');

    // Create an instance of Elements
    var elements = stripe.elements();

    // Create card number Element and mount it to the card_number field
    var cardNumber = elements.create('cardNumber');
    cardNumber.mount('#card_number');

    // Create expiry date Element and mount it to the expiry_date field
    var cardExpiry = elements.create('cardExpiry');
    cardExpiry.mount('#expiry_date');

    // Create cvv Element and mount it to the cvv field
    var cardCvc = elements.create('cardCvc');
    cardCvc.mount('#cvv');

    // Add event listeners to each Element for validation
    cardNumber.addEventListener('change', function(event) {
        var cardTypeSpan = document.getElementById('cardType');
    if (event.brand) {
        cardTypeSpan.textContent = 'Card Type: ' + event.brand;
    } else {
        cardTypeSpan.textContent = '';
    }
        if (event.error) {
            document.getElementById('card-errors').textContent = event.error.message;
        } else {
            document.getElementById('card-errors').textContent = '';
            var cardType = document.getElementById('card-type');
            var cardBrand = Stripe.card.cardType(event.target.value);
            cardType.textContent = 'Card Type: ' + cardBrand;
        }
    });

    cardExpiry.addEventListener('change', function(event) {
        if (event.error) {
            document.getElementById('card-errors').textContent = event.error.message;
        } else {
            document.getElementById('card-errors').textContent = '';
        }
    });

    cardCvc.addEventListener('change', function(event) {
        if (event.error) {
            document.getElementById('card-errors').textContent = event.error.message;
        } else {
            document.getElementById('card-errors').textContent = '';
        }
    });

    // Add event listener to form submission
    document.getElementById('subscriptionForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Validate the card number, expiry date, and CVV
        stripe.createToken(cardNumber).then(function(result) {
            if (result.error) {
                // Display error message
                document.getElementById('card-errors').textContent = result.error.message;
            } else {
                // Proceed with form submission
                var token = result.token;
                // Add token to the form and submit
                var form = document.getElementById('subscriptionForm');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });
    });
</script>
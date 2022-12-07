@extends('layouts.app')
@section('content')

    <div class="brand-bg-gradient-yo d-flex align-items-center justify-content-center" style="position: relative; height: 100%;">
        <div>
            <h2 class="text-center py-5">Donate to Darby's Dancers</h2>
            <div style="height: 34px;"></div>
            <div class="custom-shape-divider-bottom-1665960448">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col text-center">
                <div id="paypal-button-container-P-0GW491567K692914SMIEXC5A"></div>
                <script src="https://www.paypal.com/sdk/js?client-id=AfeW5TGvbbpyO4ux0ayFxQklEIFYFvx8aUGvaqKfy2Oa_QpPsX45SUU8RWloJeB6Y7DbGsfnjxEos8hn&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
                <script>
                    paypal.Buttons({
                        style: {
                            shape: 'rect',
                            color: 'blue',
                            layout: 'vertical',
                            label: 'subscribe'
                        },
                        createSubscription: function(data, actions) {
                            return actions.subscription.create({
                                /* Creates the subscription */
                                plan_id: 'P-0GW491567K692914SMIEXC5A'
                            });
                        },
                        onApprove: function(data, actions) {
                            alert(data.subscriptionID); // You can add optional success message for the subscriber here
                        }
                    }).render('#paypal-button-container-P-0GW491567K692914SMIEXC5A'); // Renders the PayPal button
                </script>

            </div>
            <div class="col d-flex align-items-center">
                <div>
                    <h3 class="lead font-fira" style="font-size: 2.75em;">Thank you for your generosity!</h3>
                    <p>
                        Darby’s Dancers is a 501(c)(3) non-profit organization that relies on volunteer time and donations to keep its mission alive. No amount is too small. Click the link above to be taken to PayPal where your transaction is guaranteed safe and free of service charges to you or us.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <a href="http://smile.amazon.com/ch/38-3942075" target="_blank">
                        <img src="/images/button-amazon-smile.png" alt="amazon smile button" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <div>
                    <h3 class="lead font-fira" style="font-size: 2.75em;">Thanks for supporting us through your everyday purchases!</h3>
                    <p>
                        Support Darby’s Dancers every time you shop on Amazon! Use the link above to make your purchases on amazon.com, and 0.5% will go directly to Darby’s Dancers! Bookmark it and support us every time you shop!
                    </p>
                </div>
            </div>
        </div>
    </div>



@endsection

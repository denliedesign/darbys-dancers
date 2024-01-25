<?php

use App\Models\User;
use Spark\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Spark Path
    |--------------------------------------------------------------------------
    |
    | This configuration option determines the URI at which the Spark billing
    | portal is available. You are free to change this URI to a value that
    | you prefer. You shall link to this location from your application.
    |
    */

    'path' => 'billing',
    'dashboard_url' => '/people',

    /*
    |--------------------------------------------------------------------------
    | Spark Middleware
    |--------------------------------------------------------------------------
    |
    | These are the middleware that requests to the Spark billing portal must
    | pass through before being accepted. Typically, the default list that
    | is defined below should be suitable for most Laravel applications.
    |
    */

    'middleware' => ['web', 'auth'],

    /*
    |--------------------------------------------------------------------------
    | Branding
    |--------------------------------------------------------------------------
    |
    | These configuration values allow you to customize the branding of the
    | billing portal, including the primary color and the logo that will
    | be displayed within the billing portal. This logo value must be
    | the absolute path to an SVG logo within the local filesystem.
    |
    */

     'brand' =>  [
         'logo' => realpath(__DIR__.'/../public/images/billing-logo.svg'),
         'color' => '#31609D',
     ],

    /*
    |--------------------------------------------------------------------------
    | Proration Behavior
    |--------------------------------------------------------------------------
    |
    | This value determines if charges are prorated when making adjustments
    | to a plan such as incrementing or decrementing the quantity of the
    | plan. This also determines proration behavior if changing plans.
    |
    */

    'prorates' => true,

    /*
    |--------------------------------------------------------------------------
    | Spark Date Format
    |--------------------------------------------------------------------------
    |
    | This date format will be utilized by Spark to format dates in various
    | locations within the billing portal, such as while showing invoice
    | dates. You should customize the format based on your own locale.
    |
    */

    'date_format' => 'F j, Y',

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Some of Spark's features are optional. You may disable the features by
    | removing them from this array. By removing features from this array
    | you can customize your Spark experience for your own application.
    |
    */

    'features' => [
        // Features::billingAddressCollection(['required' => true]),
        // Features::mustAcceptTerms(),
        // Features::euVatCollection(['home-country' => 'BE']),
        // Features::receiptEmails(['custom-addresses' => true]),
        // Features::topUps(['price' => env('SPARK_TOP_UP_PRICE')]),
        Features::paymentNotificationEmails(),
    ],

    /*
    |--------------------------------------------------------------------------
    | Receipt Configuration
    |--------------------------------------------------------------------------
    |
    | The following configuration options allow you to configure the data that
    | appears in PDF receipts generated by Spark. Typically, this data will
    | include a company name as well as your company contact information.
    |
    */

    'receipt_data' => [
        'vendor' => 'Your Product',
        'product' => 'Your Product',
        'street' => '111 Example St.',
        'location' => 'Los Angeles, CA',
        'phone' => '555-555-5555',
    ],

    /*
    |--------------------------------------------------------------------------
    | Spark Billable
    |--------------------------------------------------------------------------
    |
    | Below you may define billable entities supported by your Spark driven
    | application. The Stripe edition of Spark currently only supports a
    | single billable model entity (team, user, etc.) per application.
    |
    | In addition to defining your billable entity, you may also define its
    | plans and the plan's features, including a short description of it
    | as well as a "bullet point" listing of its distinctive features.
    |
    */

    'billables' => [

        'user' => [
            'model' => User::class,

            'default_interval' => 'yearly',

            'plans' => [
//                [
//                    'name' => 'Darby\'s Dancers Membership Test',
//                    'short_description' => 'Testing Studio membership to Darby\'s Dancers program.',
//                    'yearly_id' => 'price_1MGk2NKrXc5EOpOwIrZTHshf',
//                    'features' => [],
//                ],
//                [
//                    'name' => 'Darby\'s Free Dancers Membership Test',
//                    'short_description' => 'Testing Free Studio membership to Darby\'s Dancers program.',
//                    'yearly_id' => 'price_1OcWa3KrXc5EOpOwbac3JuGf',
//                    'features' => [],
//                ],
//                [
//                    'name' => 'Full Darby\'s Dancers Membership',
//                    'short_description' => 'Full Studio membership to Darby\'s Dancers program.',
//                    'yearly_id' => 'price_1MMQFpKrXc5EOpOwkvE8qMgT',
//                    'features' => [],
//                ],
                [
                    'name' => 'Darby\'s Dancers Membership',
                    'short_description' => 'By starting your subscription today at $0, you agree to be automatically charged $495 annually, beginning on September 1st each year, for a studio membership to Darby\'s Dancers program.',
                    'yearly_id' => 'price_1OZhExKrXc5EOpOw2TbTOBx4',
                    'features' => [],
                ],

            ],

        ],
    ],
];

<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DsWKXZ0yDKXr2srd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mwDyJ6YSQ5VMalNU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DgI86Awagdl52YQM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/bank-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MtMt6gExw8fPNxer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i6PtpWRSxijwI113',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OAR6PjlqBncy1w67',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify_via_firebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mM6AmHmr0S3kEOIU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login_with_email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3bRGOofeMQWTBvLQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uNhLCqG9sXGfZUSU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/social_login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KH09eQaTpmBgicEX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify_phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yH5FgRVf81sDDEy2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forget_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nVu4DzoO5nNYKmI1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verifyOtpPass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UqRcJiMJW6qdAvL7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verifyOtpPassfirebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4S7U5pREPsi7rTtC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify_otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KBqUw5mP0AUVIEtt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/loginverify_phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yj2SYwtyDnxfCg2x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/loginverify_via_firebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8TOePeV3MauSMOej',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'validate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mjUlTxFsKukJsygp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6nk5CByre8jbWieL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/mapby' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lb3pl1bnoCubxDmQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/google_map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ysMk7HdsoJnSNtZL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/mapbox' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fRMD0KUmtOTe6FO5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xHec14uJVWmWKQox',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/appaboutus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cSoQi08huFwH9nM7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/appterms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I1Jh5BwRnGGpkkMA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zN1BKLViJms7Bqoa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/society' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ziMhG7ME5dt8v0Wq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/oneapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4e1sNPyAnHY1A6PX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/varient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dKnYLU0PHfK7ez4u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dealproduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4gVWT41mNOT1PdEP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/catee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V34F7XHLQYhs276b',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subcatee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cxA9Y6tRXQOXpRIk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cat_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MrMiRTEAVWQ3X5n3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/topcat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bhNq6mu0iuVJE017',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/homecat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yGabEA62MgDtkC3x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store_homecat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vBFHH3vvkCxFV5zY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tag_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xrA0e0xQSTxBM0jw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/top_cat_prduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IMrCLFnAM4OYGhJf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dPNfd0EUGbvks8oB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/all_p' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/top_selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eigxnqUxYQ90T3BL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recentselling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u9vXmyelpKsancDu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/whatsnew' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZzLahOPwJTrf0Hq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FrHSjRWRc5ygtmUX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/storecoupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::39H8JQlkkJCCemjD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getneareststore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LHRyJLaANb3noHwC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/getfirststore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ChGD1ByM1rW41WlZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YCySuuepmPtoRVBQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v0UHx59lgoBzVbet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::awqKtzAt5Vs3Hl24',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/resendotp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h8n4FjhYqR9v2VjF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/timeslot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pGhcnNra8AU1bOwP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/membership_plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p0aQfMTX5XdUI4xa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgot_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8KijLsgfbGPKun5t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/change_pass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change_pass',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkotponoff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uB9gEZ0COomNjKSq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/change_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gXLeQa6rNi3RXwoR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/firebase_otp_ver' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BXFzrScqHj5WyZOd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/banner_var' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::POuaIzhFFJIafuGn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trendsearchproducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ArP26tttwiFkB9D9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/searchbystore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ns81ghld6kVDwkTo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zKzT6YCJ2LnlR9fS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recent_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::utrOldz3ejxxi3tB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product_det' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PEWhknBFGNH6Actf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SVCU5kNRkXNftDD1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/spotlight' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::22itN5sEbuZg3eYV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_product_rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BXaXUsvXXw2cSi8s',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app_notice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jMaP53a2T0R1aHB7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/razorpay_create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vMVoZrk28YYtfUR0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment_gateways' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Or2zpBHkr9pGhaOh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1CT339vmkOyBF5ma',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/buymember' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HzdB6O9SpQgBrssI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/membership_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mWEgl5Ne6DMJ0jd1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trackorder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tnIwLNUJX05d1qoh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/minmax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5S0mBwcxy4aL3Xfe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delivery_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xQs2Z75vU4tx1FUl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/callback_req' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NclCSohtk2kKYU6m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checkotp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PfvecTjro7A0u2jB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/myprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BAxOUNsR3Q4mQ6G3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile_edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zHOSP6Gz2v0VO9II',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user_block_check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tstqNkkyXCBW8gk1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/deleteusr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qDZs1ccArJcJyxdk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/add_address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JohEt1UGlV306m8U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/show_address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hl8iDmmAxchya6rc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/select_address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::63nR1HlWrK2Eig99',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/edit_address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WwrSXVJEIdDZknU7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/remove_address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uaRMqHhh1iGW7wTT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/show_all_address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vUo9M4dwT18qX0Zy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EUVdHkBQkIlIexpa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cancelling_reasons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5558VNsWIAbcBfZX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete_order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WKsDfhQaZIdIuw4a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/completed_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eYxiBEOMEA71qxQd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/can_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y1D2YwTaPsmFjMWG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/apply_coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yLnGl3P2rh0UrSqi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/couponlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iJML2SX1v5e7CNyw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/walletamount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C3FHvaHFHIKrn2ay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recharge_wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wl0kneQmjwqqTs0o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/paid_by_wallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QXh7UjmOWI0ddNFf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet_recharge_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::809ZhpJ18z8aFJRH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/review_on_delivery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZmApFv5xl9W80yPr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/check_for_product_rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ch2mz565RSxwld8q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/add_product_rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vJ2eys8sSybmwe0L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/redeem_rewards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BbJLZve39MaxFeM5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rewardvalues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OKlYdsFiiZr6xRJE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rewardlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3S3FBVKfuVcDQ7Qz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notificationlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JD4Wx9tfnoG16kMT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/read_by_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lYZJW8hQW9xbKqt4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/mark_all_as_read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gg4EWRBhX4CitVCE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delete_all_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::myOH9XyzICZfR2U8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/countrycode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cr7Q8xOouwiuqW6T',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/firebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f1yMBO8bodJCfWSK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/checknum' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::er9LViz7al9jZGlC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/firebase_iso' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::urIt0rmpLfvxHmof',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/add_rem_wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lOc29GG8pkzDbtDE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/show_wishlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cGKIXsqkjxpBDCjJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wishlist_to_cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7OKgLu03bJRH6oxe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user_feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v0k2YezPR3HIJPUC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/add_to_cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XFsfN2992vCZPACv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/make_order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d90eLu70Sjr3csb4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/show_cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IyFS382eiCUFkzd2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/del_frm_cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UHj83w3p3vV0qOLl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/check_cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TGsUOnjK8UWxgLSY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/clear_cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9txDwhrlQnJLCV4i',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/societyforaddress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W6vK8VIEoEfwnGeG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/appsetting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iwERKxStwnACEr7Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/updateappsetting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N2cv5D2i9iW1WCjT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pen_con_out' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EXICpPuPxkGuESKi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orderlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gjGlZCenPptoPLi3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MUHScAMBBKAjbPqF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MNb4VzLpXiF7fWT7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/storetoday_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4CYUER8NcFfTLz91',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/storenextday_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hytzeBxNuqdfBItS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/productcancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lCvQNL6K2jNMpoUF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/order_rejected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZVxJ7Ecbyio7gg6p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/nearbydboys' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YVPLDkF6ddq8Vx0Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/get-store-dboys' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Yfwt9YoFjKH6XjWO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/storeconfirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R2e1Ca2MsConpkGu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/cart_invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KrY9MsumFehaccRr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/regstore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O37AzjAvImDXzBdn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_productselect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eeVl4IT7yATXeWEE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XjbIJ2dJ9IQFp35R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_stock_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uor7AzQcwPDw0kv5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_delete_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::luBRJDSGD7f4D73Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_add_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R3bgIGLxHyd03kUM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KGJIW1ajPpIN6keU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/cat_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Xx7CZmHa34zmEan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_products_add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::51VNU8Tm2P1jlQhv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_products_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HZYKfAge5WeBLrV5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_products_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mlZFShG5x4U2PvS1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_varients_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5KzbyElF2ySA5KbR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_varients_add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xopkHbOcny3NxhjR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_varients_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::58aMDZiPEZSf3mKD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_varients_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ANdSShrl0grB4TDF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_update_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fPdrsyH2p8W9jRWk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/top_products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DxjZDytbYSYscXsP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4vNFQJCgbBCEbl6o',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_callback_req' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::joGzoDlXhy9EZIYH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/store_order_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgqheTASs0BVxhjo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_couponlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGOdChPzGrBlhJ7A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_coupon_add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UycWPLgyX9OfZ6k6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_updatecoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rrx2JmiwhwlWSTmZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_deletecoupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p7zLLzTiDxJSqCks',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_notificationlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cww8qPhEu1FBjJhb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/read_by_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IS6zeJeCEb9ShYSK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/all_as_read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hli2HTBOdAEr1jZS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/st_delete_all_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7uHjYKcZFd34y97h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/store/id_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HrYd32Oa1kBCGjBI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/ordersfortoday' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CNTR8yvHlquBeWSW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/ordersfornextday' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KaFMfplSduDGQvJz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/out_for_delivery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YeehoWrn0t64OVfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/delivery_completed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6EDE0cpwaPEuInms',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/order_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ute2YzDMs9Aizgs0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/completed_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::boAGw4LTKPQskvFg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/completeorderlistbyday' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OJQYGI4yXY5FJqNF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/update_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vWRzlVSLKVyezet9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SpDKoqBivsRAv3pb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6IMwaL5mh08uPcn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QY6hfDD0n3bCzoLR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VmDNivnzbqCfXiPM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driverupdateprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fi0aIIG7u7FgAg5X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_notificationlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HehWdvde3xcayUJ3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/read_by_driver' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pK0OXKJfZT0jmHYI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/all_as_read_driver' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KayriO5JRflm96G9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_delete_all_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hncyCT9X4oHhTjfU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_feedback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wcMXUkeswi8h3HAs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/driver_callback_req' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kNwVePtFd5QFlIyl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/latlngupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M9yq9M8iU0nFuDjd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lK24jxTLaHPJo9JH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifyLicense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verifyLicense',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/installFinish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'installFinish',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KQ8Qp2hs4p3S5rey',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/requirement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eu3SonKEIEzZHRZW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verifyPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verifyPost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/databaseinst' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'databaseinst',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/databasePost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'databasePost',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/databaseVerifyPost' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xRqUWvKLvSkB8ioq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powergrid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qTyQk2w4qFuev81E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/loginCheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminLoginCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset_pass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset_pass',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset_password_without_token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reset_password_without_token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/adminlogout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminlogout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/tax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxreport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/taxdatewise' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxdatewise',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminHome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'prof',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passchange',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/global_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app_details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app_details/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateappdetails',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/msgby' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'msg91',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/msg91/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatemsg91',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/twilio/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatetwilio',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/msgoff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'msgoff',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/map_api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mapapi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/map_api/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatemap',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mapbox/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatemapbox',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app_settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app_settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app_settings/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatefcm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatheme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom_theme',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/to-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminNotification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Notification_to_store/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminNotificationSendtostore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/currency/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatecurrency',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'catlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/change-postion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change-postion',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadminers/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdminList',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadminers/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdNew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sub-category/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcatlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sub-category/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddsubCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'productlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddProduct',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewProduct',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/d_boy/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'd_boylist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/d_boy/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddD_boy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/d_boy/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewD_boy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/city/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'citylist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/city/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'city',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/city/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/city/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/society/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'societylist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/society/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'society',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/society/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'societyadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/society/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'societyupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeclist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelled/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_cancelled',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stores/finance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'finance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about_us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about_us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about_us/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateabout_us',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateterms',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/prv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'prv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/prv/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reedem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reedem',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reedemupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reedemupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payout_req' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pay_req',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/secbannerlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secbannerlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/secbanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secbanner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/secbanneradd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secbanneradd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/completed_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_com_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/pending_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_pen_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cancelled_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_can_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment_gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gateway',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment_gateway/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updategateway',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stores/waiting_for_approval/stores/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeapprove',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/changeStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hideprod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app_notice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app_notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app_notice/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app_noticeupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatefirebase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatefirebase',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bulk/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulkup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'bulk_upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bulk/v_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulk_v_upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders/today/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales_today',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders/day-wise' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datewise_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/list/day-wise' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'daywise_reg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/item_sale/by_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item_sale_rep',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/firebase/iso_code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatefirebase_iso',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/ref' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateref',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_products/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_plist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/incentive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'up_admin_incentive',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dboy_incentive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'boy_incentive',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/missed/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'missed_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/total-item-sales/last-30-days' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_reqforthirty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad_boy_reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/to-driver' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminNotificationdriver',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/to-driver/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminNotificationSendtodriver',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelling_reasons/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'can_res_list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelling_reasons/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'can_res_add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelling_reasons/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'can_res_added',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancelling_reasons/updated' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'can_res_edited',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gateway_option/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gateway_status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_feedback/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_feedback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_feedback/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_feedback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/driver_feedback/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'driver_feedback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_callback_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_callback_requests',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/driver_callback_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'driver_callback_requests',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user_callback_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_callback_requests',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatereferral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatereferral_codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app_link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'app_link',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/wallet_recharge_history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_wallet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updatespace' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatespace',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/to-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adminNotificationuser',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/to-users/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userNotificationSend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/area_bulk_upload/upload/city-society' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulkupcity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/area_bulk_upload/city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'importcity',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/area_bulk_upload/society' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'importsociety',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'memlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddMember',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/membership/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewMember',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/trending_search/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trendsel_product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/trending_search/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trendadded_product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ongoing_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_on_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/all_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_all_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/out_for_delivery_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_out_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment_failed_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_failed_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/id/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'idlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'id',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/id/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'idadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/id/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'idupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rolelist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addnewrole',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subadminlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddSubadmin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subadmin/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewSubadmin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list/notification/list/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usernotlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list/notification/list/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storenotlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list/notification/list/driver' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drivernotlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/list/user/delete_all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_all_user_not',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/list/user/delete_read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_read_user_not',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/list/store/delete_all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_all_store_not',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification/list/driver/delete_all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_all_driver_not',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/set_delivery_boy_incentive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'driverinc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changeLang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/secret-store-login1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secret-store-login1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store_register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store_registered' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_registered',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/loginCheck' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeLoginCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store-zones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store-zones/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/reward' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reward2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/reward/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rewardupdate2',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storelogout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeHome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sel_product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/product/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'added_product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/orders/next_day' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeOrders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/orders/today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeassignedorders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/update/stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/payout/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payout_req',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/payout/request/sent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payout_req_sent',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/stproducts/price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stt_product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/bulk/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulkuprice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/bulk_upload/price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulk_uploadprice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/bulk_upload/stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulk_uploadstock',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/bulk/export/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulk_export_all_products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/bulk/import/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bulk_import_all_products',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/itemlist/requirement/today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reqfortoday',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/itemlist/requirement/datewise' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datewise_itemsales',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/purchases_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases_report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchases_report.post',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store_orders/today/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_sales_today',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store_orders/day-wise' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_datewise_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/orderbyphoto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeorder_byphoto',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/list/product/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'listadded_product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/storebannerlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storebannerlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/storebanner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storebanner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/storebanneradd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storebanneradd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/deal/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deallist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/deal/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddDeal',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/deal/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewDeal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/timeslot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storetimeslot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/timeslotupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storetimeslotupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/update-orders-time' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateOrdersTime',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/orders-limit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ordersLimit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/amountupdate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'amountupdate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/del_charge/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatedel_charge',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/st/product/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeproductlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/st/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeAddProduct',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/st/product/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeAddNewProduct',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/callback_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callback_requests',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/notification/to-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeNotification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/notification/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeNotificationSend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/coupon/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'couponlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/coupon/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/coupon/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addcoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/coupon/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatecoupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/completed_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_com_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/pending_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_pen_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/cancelled_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_can_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/d_boy/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_d_boylist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/d_boy/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_AddD_boy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/d_boy/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_AddNewD_boy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/st_driver_callback_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_driver_callback_requests',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/st/missed/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_missed_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/item-sales-report/last-30-days' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reqforthirty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/order/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_boy_reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/incentive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'up_store_incentive',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/dboy_incentive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_boy_incentive',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/driver/Notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeNotificationdriver',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/driver/Notification/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_Notification_to_driver_Send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/sendnotificationus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sendnotificationus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/home-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storehomecate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/home-category/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeAddHomeCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/home-category/insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeInsertHomeCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/products/order_quantity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stt_product2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/bulk_upload/order_qty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'importquantity',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/secondary_bannerlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec_bannerlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/secondary_banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec_banner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/secondary_banneradd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec_banneradd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/service_societylist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ser_societylist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/all_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_all_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/ongoing_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_on_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/out_for_delivery_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_out_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/store/payment_failed_orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_failed_orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/spotlight/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'spotlight_product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/spotlight/added' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'added_spotlight',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store/serarea/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ser_societyadddd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityadmin-login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/checklogin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityadmin-getchecklogin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityadmin-checklogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityadhome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/notificateUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-note2user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-send_note2user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/notificateVendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-note2vendor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-send_note2vendor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/delivery_boy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboylist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/delivery_boy/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboyadd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboynew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/delivery_boy/incentive/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboylist-commisions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/delivery_boy/set-incentive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboyadd-commisions',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-storelist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/vendor/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-storeadd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-storenew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/orders/today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-orders2day',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-arealist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cityadmin/area/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-areadd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-areanew',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/(?|message/([^/]++)(*:110)|preview\\-file/([^/]++)(*:140))|/oauth/(?|tokens/([^/]++)(*:174)|clients/([^/]++)(?|(*:201))|personal\\-access\\-tokens/([^/]++)(*:243))|/a(?|p(?|i/(?|stores/([^/]++)/bank\\-accounts(*:296)|users/([^/]++)/bank\\-payments/([^/]++)(*:342)|working\\-days/([^/]++)(*:372))|proved/stores/([^/]++)(*:403))|d(?|min/(?|store/(?|edit/([^/]++)(*:445)|update/([^/]++)(*:468)|delete/([^/]++)(*:491)|orders/([^/]++)(*:514)|assign/([^/]++)(*:537))|d_boy/(?|orders/([^/]++)(*:570)|assign/([^/]++)(*:593))|reject/order/([^/]++)(*:623))|d2home/([^/]++)(*:647)))|/c(?|hange_pass2/([^/]++)(*:682)|a(?|tegory/(?|edit/([^/]++)(*:717)|update/([^/]++)(*:740)|delete/([^/]++)(*:763))|ncelling_reasons/(?|edit/([^/]++)(*:805)|delete/([^/]++)(*:828)))|ity(?|admin(?|ers/(?|edit/([^/]++)(*:872)|update/([^/]++)(*:895)|delete/([^/]++)(*:918)|secretlogin/([^/]++)(*:946))|/(?|delivery_boy/(?|edit/([^/]++)(?|(*:991))|delete/([^/]++)(*:1015))|vendor/(?|edit/([^/]++)(?|(*:1051))|delete/([^/]++)(*:1076)|([^/]++)/orders/today(*:1106))|area/(?|edit/([^/]++)(?|(*:1140))|delete/([^/]++)(*:1165))))|/(?|edit/([^/]++)(*:1194)|delete/([^/]++)(*:1218))))|/forgot_passwordadmin/([^/]++)(*:1260)|/p(?|ro(?|file/update/([^/]++)(*:1299)|duct/(?|edit/([^/]++)(*:1329)|update/([^/]++)(*:1353)|delete/([^/]++)(*:1377)))|a(?|ssword/update/([^/]++)(*:1414)|yout_req/([^/]++)(*:1440)))|/s(?|ub(?|\\-category/edit/([^/]++)(*:1485)|admin/(?|edit/([^/]++)(*:1516)|update/([^/]++)(*:1540)|delete/([^/]++)(*:1564)))|ociety/(?|edit/([^/]++)(*:1598)|delete/([^/]++)(*:1622))|t(?|ore(?|_(?|p(?|ay/([^/]++)(*:1661)|roducts/(?|approve/([^/]++)(*:1697)|reject/([^/]++)(*:1721)))|callbackproc/([^/]++)(*:1753))|hide/([^/]++)(*:1776)|unhide/([^/]++)(*:1800)|s/([^/]++)/bank\\-(?|accounts(?|(*:1840)|/(?|create(*:1859)|([^/]++)(?|(*:1879)|/edit(*:1893)|(*:1902)))|(*:1913))|payments(?|(*:1934)|/(?|create(*:1953)|([^/]++)(?|(*:1973)|/edit(*:1987)|(*:1996)))|(*:2007)))|/(?|s(?|e(?|c(?|ret\\-store\\-login/([^/]++)(*:2060)|ondary_banner(?|edit/([^/]++)(*:2098)|update/([^/]++)(*:2122)|delete/([^/]++)(*:2146)))|rvice_society(?|edit/([^/]++)(*:2186)|update/([^/]++)(*:2210)|delete/([^/]++)(*:2234)))|t(?|ore(?|\\-zones/([^/]++)(?|(*:2274)|/edit(*:2288)|(*:2297))|/(?|invoice/(?|([^/]++)(*:2330)|a4/([^/]++)(*:2350))|pdf/invoice/([^/]++)(*:2380)|makeorder/([^/]++)(*:2407)|home\\-category/(?|edit/([^/]++)(*:2447)|update/([^/]++)(*:2471)|delete/([^/]++)(*:2495))|assign\\-home\\-category/(?|([^/]++)(*:2539)|insert(*:2554)|delete/([^/]++)(*:2578)))|banner(?|edit/([^/]++)(*:2611)|update/([^/]++)(*:2635)|delete/([^/]++)(*:2659)))|product/price/update/([^/]++)(*:2699)|/(?|product/(?|edit/([^/]++)(*:2736)|update/([^/]++)(*:2760)|delete/([^/]++)(*:2784))|d_boy/assign/([^/]++)(*:2815)|status/change/([^/]++)(*:2846))|_driver_callbackproc/([^/]++)(*:2885))|p(?|ecial/varient/(?|([^/]++)(*:2924)|add/(?|([^/]++)(*:2948)|new(*:2960))|edit/([^/]++)(*:2983)|update/([^/]++)(*:3007)|delete/([^/]++)(*:3031))|otlight/delete/([^/]++)(*:3064))|ocietyenable/([^/]++)(*:3095))|p(?|roduct/(?|delete/([^/]++)(*:3134)|stock/([^/]++)(*:3157)|order_quantity/update/([^/]++)(*:3196))|urchases_report_print/([^/]++)/([^/]++)(*:3245))|order(?|s/(?|confirm/([^/]++)(*:3284)|reject/([^/]++)(*:3308)|products/cancel/([^/]++)(*:3341))|/processed/([^/]++)(*:3370))|admin/reject/orderlist/([^/]++)(*:3411)|list/product/(?|delete_from_cart/([^/]++)(*:3461)|add_qty/([^/]++)(*:3486))|reject/order/([^/]++)(*:3517)|d(?|eal/(?|edit/([^/]++)(*:3550)|update/([^/]++)(*:3574)|delete/([^/]++)(*:3598))|_boy/(?|edit/([^/]++)(*:3629)|update/([^/]++)(*:3653)|delete/([^/]++)(*:3677)|orders/([^/]++)(*:3701)|assign/([^/]++)(*:3725))|boy_pay/([^/]++)(*:3751))|c(?|allbackproc/([^/]++)(*:3785)|oupon/(?|edit/([^/]++)(*:3816)|delete/([^/]++)(*:3840)))|Orders/Reassign/([^/]++)(*:3875)))|atus/change/([^/]++)(*:3906))|ecbanner(?|edit/([^/]++)(*:3940)|update/([^/]++)(*:3964)|delete/([^/]++)(*:3988)))|/varient/(?|([^/]++)(*:4019)|add/(?|([^/]++)(*:4043)|new(*:4055))|edit/([^/]++)(*:4078)|update/([^/]++)(*:4102)|delete/([^/]++)(*:4126))|/d(?|_boy/(?|edit/([^/]++)(*:4162)|update/([^/]++)(*:4186)|delete/([^/]++)(*:4210)|assign/([^/]++)(*:4234))|boy_pay/([^/]++)(*:4260)|river_callbackproc/([^/]++)(*:4296)|elfromhome/([^/]++)(*:4324))|/us(?|er(?|/(?|block/([^/]++)(*:4363)|u(?|nblock/([^/]++)(*:4391)|pdate/([^/]++)(*:4414))|delete/([^/]++)(*:4439)|edit/([^/]++)(*:4461)|membership/([^/]++)(*:4489))|_callbackproc/([^/]++)(*:4521))|r_recharge/([^/]++)(*:4550))|/r(?|equired/itemlist/(?|today/store/([^/]++)(*:4605)|store/day\\-wise/([^/]++)(*:4638))|oles/(?|edit/([^/]++)(*:4669)|update/([^/]++)(*:4693)|delete/([^/]++)(*:4717)))|/membership/(?|edit/([^/]++)(*:4756)|update/([^/]++)(*:4780)|delete/([^/]++)(*:4804))|/t(?|ax/(?|edit/([^/]++)(*:4838)|delete/([^/]++)(*:4862))|rending_search/product/delete/([^/]++)(*:4910))|/id/(?|edit/([^/]++)(*:4940)|delete/([^/]++)(*:4964)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      174 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QLnMAITFRek9NBAX',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u1VWOLpSbtxHgR1H',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'paymentFor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eH0FuaZKvxC8zZN3',
          ),
          1 => 
          array (
            0 => 'storeId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeapproved',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storedit',
          ),
          1 => 
          array (
            0 => 'store_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeupdate',
          ),
          1 => 
          array (
            0 => 'store_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storedelete',
          ),
          1 => 
          array (
            0 => 'store_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_store_orders',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_assign',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_dboy_orders',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dboy_assign',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_reject_order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add2home',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'change_pass2',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditCategory',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateCategory',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteCategory',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'can_res_edit',
          ),
          1 => 
          array (
            0 => 'res_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'can_res_del',
          ),
          1 => 
          array (
            0 => 'res_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdEdit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdDelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'CityAdSecretLogin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboyedit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboyupdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-dboydelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-storedit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-storeupdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-storedelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-ordersbystore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-areaedit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-areaupdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityad-areadelete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cityedit',
          ),
          1 => 
          array (
            0 => 'city_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'citydelete',
          ),
          1 => 
          array (
            0 => 'city_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forgot_passwordadmin',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateprof',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditProduct',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateProduct',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteProduct',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updatepass',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'com_payout',
          ),
          1 => 
          array (
            0 => 'req_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditsubCategory',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditSubadmin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateSubadmin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteSubadmin',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'societyedit',
          ),
          1 => 
          array (
            0 => 'society_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'societydelete',
          ),
          1 => 
          array (
            0 => 'society_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_pay',
          ),
          1 => 
          array (
            0 => 'store_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_p_approve',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_p_reject',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_callbackproc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storehide',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeunhide',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.index',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.create',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.show',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.edit',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1902 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.update',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.destroy',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-accounts.store',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.index',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.create',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.show',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.edit',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.update',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.destroy',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'bank_payment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.bank-payments.store',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secret-store-login',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec_banneredit',
          ),
          1 => 
          array (
            0 => 'banner_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec_bannerupdate',
          ),
          1 => 
          array (
            0 => 'banner_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sec_bannerdelete',
          ),
          1 => 
          array (
            0 => 'banner_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ser_societyedit',
          ),
          1 => 
          array (
            0 => 'ser_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ser_societyupdate',
          ),
          1 => 
          array (
            0 => 'ser_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ser_delete',
          ),
          1 => 
          array (
            0 => 'ser_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.show',
          ),
          1 => 
          array (
            0 => 'store_zone',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.edit',
          ),
          1 => 
          array (
            0 => 'store_zone',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.update',
          ),
          1 => 
          array (
            0 => 'store_zone',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'store-zones.destroy',
          ),
          1 => 
          array (
            0 => 'store_zone',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'invoice',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'a4invoice',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pdfinvoice',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_accept_order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeoHomecateEditCategory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeUpdateHomeCategory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeHomecateDeleteCategory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeAssignHomeCategory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeInsertAssignHomeCategory',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeDeleteAssignHomeCategory',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storebanneredit',
          ),
          1 => 
          array (
            0 => 'banner_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storebannerupdate',
          ),
          1 => 
          array (
            0 => 'banner_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storebannerdelete',
          ),
          1 => 
          array (
            0 => 'banner_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'price_update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeEditProduct',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeUpdateProduct',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeDeleteProduct',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sto_dboy_assign',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_changeStatus',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_driver_callbackproc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storevarient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2948 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeadd-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeAddNewvarient',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeedit-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeupdate-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storedelete-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rem_spotlight',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ser_societycheck',
          ),
          1 => 
          array (
            0 => 'ser_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quantity_update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qty_update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'print_purchases_report',
          ),
          1 => 
          array (
            0 => 'from',
            1 => 'to',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_confirm_order',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_reject_order',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_cancel_product',
          ),
          1 => 
          array (
            0 => 'store_order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'process_orderby',
          ),
          1 => 
          array (
            0 => 'ord_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin_reject_orderphoto',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_product_from_cart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_qty_to_cart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_reject_orderbyphoto',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditDeal',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateDeal',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteDeal',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_EditD_boy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_UpdateD_boy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_DeleteD_boy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_dboy_orders',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'st_dboy_assign',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_incentive_pay',
          ),
          1 => 
          array (
            0 => 'dboy_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'callbackproc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'editcoupon',
          ),
          1 => 
          array (
            0 => 'coupon_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3840 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deletecoupon',
          ),
          1 => 
          array (
            0 => 'coupon_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_reassign_order',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changeStatus',
          ),
          1 => 
          array (
            0 => 'cart_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secbanneredit',
          ),
          1 => 
          array (
            0 => 'sec_banner_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secbannerupdate',
          ),
          1 => 
          array (
            0 => 'sec_banner_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'secbannerdelete',
          ),
          1 => 
          array (
            0 => 'sec_banner_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'AddNewvarient',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete-varient',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditD_boy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateD_boy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteD_boy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad_dboy_assign',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incentive_pay',
          ),
          1 => 
          array (
            0 => 'dboy_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'driver_callbackproc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delfromhome',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userblock',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'userunblock',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'up_user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'del_userfromlist',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ed_user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mem_list',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user_callbackproc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'usr_recharge',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'req_items_today',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'datewise_itemsalesreport',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roleedit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updaterole',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'deleterole',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EditMember',
          ),
          1 => 
          array (
            0 => 'plan_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4780 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'UpdateMember',
          ),
          1 => 
          array (
            0 => 'plan_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'DeleteMember',
          ),
          1 => 
          array (
            0 => 'plan_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxedit',
          ),
          1 => 
          array (
            0 => 'tax_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxdelete',
          ),
          1 => 
          array (
            0 => 'tax_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trenddelete_product1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'idedit',
          ),
          1 => 
          array (
            0 => 'type_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'iddelete',
          ),
          1 => 
          array (
            0 => 'type_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DsWKXZ0yDKXr2srd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::DsWKXZ0yDKXr2srd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwDyJ6YSQ5VMalNU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::mwDyJ6YSQ5VMalNU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DgI86Awagdl52YQM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:293:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:75:"function (\\Illuminate\\Http\\Request $request) {
  return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009f90000000000000000";}";s:4:"hash";s:44:"cN2ZSLdAH3thtfupeoXVbWb3yEuebgXIQeIlTCi19bg=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DgI86Awagdl52YQM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QLnMAITFRek9NBAX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/stores/{store}/bank-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BankAccountController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\BankAccountController@index',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::QLnMAITFRek9NBAX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MtMt6gExw8fPNxer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/bank-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\BankPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\BankPaymentController@store',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::MtMt6gExw8fPNxer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u1VWOLpSbtxHgR1H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{user}/bank-payments/{paymentFor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@getUserBankPayments',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@getUserBankPayments',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::u1VWOLpSbtxHgR1H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i6PtpWRSxijwI113' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@login',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::i6PtpWRSxijwI113',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OAR6PjlqBncy1w67' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@getOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@getOtp',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::OAR6PjlqBncy1w67',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mM6AmHmr0S3kEOIU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify_via_firebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@verifyotpfirebase',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@verifyotpfirebase',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::mM6AmHmr0S3kEOIU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3bRGOofeMQWTBvLQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login_with_email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@login_with_email',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@login_with_email',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::3bRGOofeMQWTBvLQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNhLCqG9sXGfZUSU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@register_details',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@register_details',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::uNhLCqG9sXGfZUSU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KH09eQaTpmBgicEX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/social_login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@social_login',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@social_login',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::KH09eQaTpmBgicEX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yH5FgRVf81sDDEy2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify_phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@verifyPhone',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@verifyPhone',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::yH5FgRVf81sDDEy2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVu4DzoO5nNYKmI1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forget_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@forgotPassword',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::nVu4DzoO5nNYKmI1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UqRcJiMJW6qdAvL7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verifyOtpPass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@verifyOtpPass',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@verifyOtpPass',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::UqRcJiMJW6qdAvL7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4S7U5pREPsi7rTtC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verifyOtpPassfirebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@verifyOtpPassfb',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@verifyOtpPassfb',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::4S7U5pREPsi7rTtC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KBqUw5mP0AUVIEtt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verify_otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@verifyOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@verifyOtp',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::KBqUw5mP0AUVIEtt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yj2SYwtyDnxfCg2x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/loginverify_phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@loginverifyPhone',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@loginverifyPhone',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::yj2SYwtyDnxfCg2x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8TOePeV3MauSMOej' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/loginverify_via_firebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@loginverifyotpfirebase',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@loginverifyotpfirebase',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::8TOePeV3MauSMOej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'validate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/validate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PassportController@validates',
        'controller' => 'App\\Http\\Controllers\\Api\\PassportController@validates',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'validate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mjUlTxFsKukJsygp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/app_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@app',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@app',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::mjUlTxFsKukJsygp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6nk5CByre8jbWieL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CurrencyController@currency',
        'controller' => 'App\\Http\\Controllers\\Api\\CurrencyController@currency',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::6nk5CByre8jbWieL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lb3pl1bnoCubxDmQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/mapby',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\MapsetController@mapby',
        'controller' => 'App\\Http\\Controllers\\Api\\MapsetController@mapby',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::lb3pl1bnoCubxDmQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ysMk7HdsoJnSNtZL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/google_map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\MapsetController@google_map',
        'controller' => 'App\\Http\\Controllers\\Api\\MapsetController@google_map',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ysMk7HdsoJnSNtZL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fRMD0KUmtOTe6FO5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/mapbox',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\MapsetController@mapbox',
        'controller' => 'App\\Http\\Controllers\\Api\\MapsetController@mapbox',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::fRMD0KUmtOTe6FO5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xHec14uJVWmWKQox' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@payment',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@payment',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::xHec14uJVWmWKQox',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cSoQi08huFwH9nM7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/appaboutus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@appaboutus',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@appaboutus',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::cSoQi08huFwH9nM7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I1Jh5BwRnGGpkkMA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/appterms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@appterms',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@appterms',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::I1Jh5BwRnGGpkkMA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zN1BKLViJms7Bqoa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@city',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@city',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::zN1BKLViJms7Bqoa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ziMhG7ME5dt8v0Wq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/society',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@society',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@society',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ziMhG7ME5dt8v0Wq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4e1sNPyAnHY1A6PX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/oneapi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@oneapi',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@oneapi',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::4e1sNPyAnHY1A6PX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dKnYLU0PHfK7ez4u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/varient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@varient',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@varient',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::dKnYLU0PHfK7ez4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4gVWT41mNOT1PdEP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dealproduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@dealproduct',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@dealproduct',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::4gVWT41mNOT1PdEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V34F7XHLQYhs276b' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/catee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@cate',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@cate',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::V34F7XHLQYhs276b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cxA9Y6tRXQOXpRIk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/subcatee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@catego',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@catego',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::cxA9Y6tRXQOXpRIk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MrMiRTEAVWQ3X5n3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cat_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@cat_product',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@cat_product',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::MrMiRTEAVWQ3X5n3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bhNq6mu0iuVJE017' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/topcat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@top_cat',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@top_cat',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::bhNq6mu0iuVJE017',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yGabEA62MgDtkC3x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/homecat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@homecat',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@homecat',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::yGabEA62MgDtkC3x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vBFHH3vvkCxFV5zY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store_homecat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@store_homecat',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@store_homecat',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::vBFHH3vvkCxFV5zY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xrA0e0xQSTxBM0jw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tag_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@tag_product',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@tag_product',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::xrA0e0xQSTxBM0jw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IMrCLFnAM4OYGhJf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/top_cat_prduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@top_cat_prduct',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@top_cat_prduct',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::IMrCLFnAM4OYGhJf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dPNfd0EUGbvks8oB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@tabs',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@tabs',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::dPNfd0EUGbvks8oB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/all_p',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@productm',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@productm',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'testp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eigxnqUxYQ90T3BL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/top_selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@top_selling',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@top_selling',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::eigxnqUxYQ90T3BL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u9vXmyelpKsancDu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recentselling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@recentselling',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@recentselling',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::u9vXmyelpKsancDu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZzLahOPwJTrf0Hq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/whatsnew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@whatsnew',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@whatsnew',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::zZzLahOPwJTrf0Hq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FrHSjRWRc5ygtmUX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@storebanner',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@storebanner',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::FrHSjRWRc5ygtmUX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::39H8JQlkkJCCemjD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/storecoupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@couponlist',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@couponlist',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::39H8JQlkkJCCemjD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LHRyJLaANb3noHwC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/getneareststore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@getneareststore',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@getneareststore',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::LHRyJLaANb3noHwC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ChGD1ByM1rW41WlZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getfirststore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@getfirststore',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@getfirststore',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ChGD1ByM1rW41WlZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YCySuuepmPtoRVBQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@success',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@success',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::YCySuuepmPtoRVBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v0UHx59lgoBzVbet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@failed',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@failed',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::v0UHx59lgoBzVbet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::awqKtzAt5Vs3Hl24' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@checkout',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@checkout',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::awqKtzAt5Vs3Hl24',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h8n4FjhYqR9v2VjF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/resendotp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@resendotp',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@resendotp',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::h8n4FjhYqR9v2VjF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pGhcnNra8AU1bOwP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/timeslot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\TimeslotController@timeslot2',
        'controller' => 'App\\Http\\Controllers\\Api\\TimeslotController@timeslot2',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::pGhcnNra8AU1bOwP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eH0FuaZKvxC8zZN3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/working-days/{storeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\TimeslotController@workingDays',
        'controller' => 'App\\Http\\Controllers\\Api\\TimeslotController@workingDays',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::eH0FuaZKvxC8zZN3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p0aQfMTX5XdUI4xa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/membership_plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@membership_plan',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@membership_plan',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::p0aQfMTX5XdUI4xa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8KijLsgfbGPKun5t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgot_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@forgot_password',
        'controller' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@forgot_password',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::8KijLsgfbGPKun5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change_pass' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/change_pass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@change_pass',
        'controller' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@change_pass',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'change_pass',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uB9gEZ0COomNjKSq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/checkotponoff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@checkotponoff',
        'controller' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@checkotponoff',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::uB9gEZ0COomNjKSq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gXLeQa6rNi3RXwoR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/change_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@changePassword',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::gXLeQa6rNi3RXwoR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BXFzrScqHj5WyZOd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/firebase_otp_ver',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@verifyOtp3',
        'controller' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@verifyOtp3',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::BXFzrScqHj5WyZOd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::POuaIzhFFJIafuGn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/banner_var',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@banner_var',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@banner_var',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::POuaIzhFFJIafuGn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ArP26tttwiFkB9D9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trendsearchproducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SearchController@trensearchproducts',
        'controller' => 'App\\Http\\Controllers\\Api\\SearchController@trensearchproducts',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ArP26tttwiFkB9D9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ns81ghld6kVDwkTo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/searchbystore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SearchController@searchbystore',
        'controller' => 'App\\Http\\Controllers\\Api\\SearchController@searchbystore',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ns81ghld6kVDwkTo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zKzT6YCJ2LnlR9fS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SearchController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\SearchController@search',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::zKzT6YCJ2LnlR9fS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::utrOldz3ejxxi3tB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recent_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SearchController@recentsearch',
        'controller' => 'App\\Http\\Controllers\\Api\\SearchController@recentsearch',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::utrOldz3ejxxi3tB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PEWhknBFGNH6Actf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product_det',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@product_det',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@product_det',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::PEWhknBFGNH6Actf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SVCU5kNRkXNftDD1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@delete_users',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@delete_users',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::SVCU5kNRkXNftDD1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::22itN5sEbuZg3eYV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/spotlight',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@spotlight',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@spotlight',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::22itN5sEbuZg3eYV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BXaXUsvXXw2cSi8s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get_product_rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RatingController@get_product_rating',
        'controller' => 'App\\Http\\Controllers\\Api\\RatingController@get_product_rating',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::BXaXUsvXXw2cSi8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jMaP53a2T0R1aHB7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app_notice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FirebaseController@app_notice',
        'controller' => 'App\\Http\\Controllers\\Api\\FirebaseController@app_notice',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::jMaP53a2T0R1aHB7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vMVoZrk28YYtfUR0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/razorpay_create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@razorpay_order',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@razorpay_order',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::vMVoZrk28YYtfUR0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Or2zpBHkr9pGhaOh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment_gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CurrencyController@gatewaysettings',
        'controller' => 'App\\Http\\Controllers\\Api\\CurrencyController@gatewaysettings',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::Or2zpBHkr9pGhaOh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1CT339vmkOyBF5ma' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@re_ordercart',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@re_ordercart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::1CT339vmkOyBF5ma',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HzdB6O9SpQgBrssI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/buymember',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@buymember',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@buymember',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::HzdB6O9SpQgBrssI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mWEgl5Ne6DMJ0jd1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/membership_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@membership_status',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@membership_status',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::mWEgl5Ne6DMJ0jd1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tnIwLNUJX05d1qoh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trackorder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@trackorder',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@trackorder',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::tnIwLNUJX05d1qoh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5S0mBwcxy4aL3Xfe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/minmax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@minmax',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@minmax',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::5S0mBwcxy4aL3Xfe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xQs2Z75vU4tx1FUl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/delivery_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@delivery_info',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@delivery_info',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::xQs2Z75vU4tx1FUl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NclCSohtk2kKYU6m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/callback_req',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppController@call',
        'controller' => 'App\\Http\\Controllers\\Api\\AppController@call',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::NclCSohtk2kKYU6m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PfvecTjro7A0u2jB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checkotp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@checkOTP',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@checkOTP',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::PfvecTjro7A0u2jB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BAxOUNsR3Q4mQ6G3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/myprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@myprofile',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@myprofile',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::BAxOUNsR3Q4mQ6G3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zHOSP6Gz2v0VO9II' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile_edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@profile_edit',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@profile_edit',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::zHOSP6Gz2v0VO9II',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tstqNkkyXCBW8gk1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user_block_check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@user_block_check',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@user_block_check',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::tstqNkkyXCBW8gk1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qDZs1ccArJcJyxdk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/deleteusr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UserController@deletenum',
        'controller' => 'App\\Http\\Controllers\\Api\\UserController@deletenum',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::qDZs1ccArJcJyxdk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JohEt1UGlV306m8U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add_address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@address',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@address',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::JohEt1UGlV306m8U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hl8iDmmAxchya6rc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/show_address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@show_address',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@show_address',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::hl8iDmmAxchya6rc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::63nR1HlWrK2Eig99' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/select_address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@select_address',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@select_address',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::63nR1HlWrK2Eig99',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WwrSXVJEIdDZknU7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/edit_address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@edit_add',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@edit_add',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::WwrSXVJEIdDZknU7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uaRMqHhh1iGW7wTT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/remove_address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@rem_user_address',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@rem_user_address',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::uaRMqHhh1iGW7wTT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vUo9M4dwT18qX0Zy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/show_all_address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@show_all_address',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@show_all_address',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::vUo9M4dwT18qX0Zy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EUVdHkBQkIlIexpa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@ongoing',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@ongoing',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::EUVdHkBQkIlIexpa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5558VNsWIAbcBfZX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cancelling_reasons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@cancel_for',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@cancel_for',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::5558VNsWIAbcBfZX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WKsDfhQaZIdIuw4a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete_order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@delete_order',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@delete_order',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::WKsDfhQaZIdIuw4a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eYxiBEOMEA71qxQd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/completed_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@completed_orders',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@completed_orders',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::eYxiBEOMEA71qxQd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y1D2YwTaPsmFjMWG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/can_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@can_orders',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@can_orders',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::y1D2YwTaPsmFjMWG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yLnGl3P2rh0UrSqi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/apply_coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CouponController@apply_coupon',
        'controller' => 'App\\Http\\Controllers\\Api\\CouponController@apply_coupon',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::yLnGl3P2rh0UrSqi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iJML2SX1v5e7CNyw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/couponlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CouponController@coupon_list',
        'controller' => 'App\\Http\\Controllers\\Api\\CouponController@coupon_list',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::iJML2SX1v5e7CNyw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C3FHvaHFHIKrn2ay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/walletamount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WalletController@walletamount',
        'controller' => 'App\\Http\\Controllers\\Api\\WalletController@walletamount',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::C3FHvaHFHIKrn2ay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wl0kneQmjwqqTs0o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recharge_wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WalletController@add_credit',
        'controller' => 'App\\Http\\Controllers\\Api\\WalletController@add_credit',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::Wl0kneQmjwqqTs0o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QXh7UjmOWI0ddNFf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/paid_by_wallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WalletController@totalbill',
        'controller' => 'App\\Http\\Controllers\\Api\\WalletController@totalbill',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::QXh7UjmOWI0ddNFf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::809ZhpJ18z8aFJRH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet_recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WalletController@show_recharge_history',
        'controller' => 'App\\Http\\Controllers\\Api\\WalletController@show_recharge_history',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::809ZhpJ18z8aFJRH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZmApFv5xl9W80yPr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/review_on_delivery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RatingController@review_on_delivery',
        'controller' => 'App\\Http\\Controllers\\Api\\RatingController@review_on_delivery',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ZmApFv5xl9W80yPr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ch2mz565RSxwld8q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/check_for_product_rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RatingController@check_for_rating',
        'controller' => 'App\\Http\\Controllers\\Api\\RatingController@check_for_rating',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::ch2mz565RSxwld8q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vJ2eys8sSybmwe0L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add_product_rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RatingController@add_product_rating',
        'controller' => 'App\\Http\\Controllers\\Api\\RatingController@add_product_rating',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::vJ2eys8sSybmwe0L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BbJLZve39MaxFeM5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/redeem_rewards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RewardController@redeem',
        'controller' => 'App\\Http\\Controllers\\Api\\RewardController@redeem',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::BbJLZve39MaxFeM5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OKlYdsFiiZr6xRJE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/rewardvalues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RewardController@rewardvalues',
        'controller' => 'App\\Http\\Controllers\\Api\\RewardController@rewardvalues',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::OKlYdsFiiZr6xRJE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3S3FBVKfuVcDQ7Qz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/rewardlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RewardController@rewardlines',
        'controller' => 'App\\Http\\Controllers\\Api\\RewardController@rewardlines',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::3S3FBVKfuVcDQ7Qz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JD4Wx9tfnoG16kMT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notificationlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsernotificationController@notificationlist',
        'controller' => 'App\\Http\\Controllers\\Api\\UsernotificationController@notificationlist',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::JD4Wx9tfnoG16kMT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lYZJW8hQW9xbKqt4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/read_by_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsernotificationController@read_by_user',
        'controller' => 'App\\Http\\Controllers\\Api\\UsernotificationController@read_by_user',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::lYZJW8hQW9xbKqt4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gg4EWRBhX4CitVCE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/mark_all_as_read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsernotificationController@mark_all_as_read',
        'controller' => 'App\\Http\\Controllers\\Api\\UsernotificationController@mark_all_as_read',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::Gg4EWRBhX4CitVCE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::myOH9XyzICZfR2U8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delete_all_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsernotificationController@delete_all',
        'controller' => 'App\\Http\\Controllers\\Api\\UsernotificationController@delete_all',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::myOH9XyzICZfR2U8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cr7Q8xOouwiuqW6T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/countrycode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FirebaseController@countrycode',
        'controller' => 'App\\Http\\Controllers\\Api\\FirebaseController@countrycode',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::Cr7Q8xOouwiuqW6T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f1yMBO8bodJCfWSK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/firebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FirebaseController@firebase',
        'controller' => 'App\\Http\\Controllers\\Api\\FirebaseController@firebase',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::f1yMBO8bodJCfWSK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::er9LViz7al9jZGlC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/checknum',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@checknum',
        'controller' => 'App\\Http\\Controllers\\Api\\forgotpasswordController@checknum',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::er9LViz7al9jZGlC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::urIt0rmpLfvxHmof' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/firebase_iso',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\FirebaseController@firebase_iso',
        'controller' => 'App\\Http\\Controllers\\Api\\FirebaseController@firebase_iso',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::urIt0rmpLfvxHmof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lOc29GG8pkzDbtDE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add_rem_wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WishlistController@add_to_wishlist',
        'controller' => 'App\\Http\\Controllers\\Api\\WishlistController@add_to_wishlist',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::lOc29GG8pkzDbtDE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGKIXsqkjxpBDCjJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/show_wishlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WishlistController@show_wishlist',
        'controller' => 'App\\Http\\Controllers\\Api\\WishlistController@show_wishlist',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::cGKIXsqkjxpBDCjJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7OKgLu03bJRH6oxe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wishlist_to_cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WishlistController@wishlist_to_cart',
        'controller' => 'App\\Http\\Controllers\\Api\\WishlistController@wishlist_to_cart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::7OKgLu03bJRH6oxe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v0k2YezPR3HIJPUC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user_feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SupportController@feedback',
        'controller' => 'App\\Http\\Controllers\\Api\\SupportController@feedback',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::v0k2YezPR3HIJPUC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XFsfN2992vCZPACv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/add_to_cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@add_to_cart',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@add_to_cart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::XFsfN2992vCZPACv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d90eLu70Sjr3csb4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/make_order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@make_an_order',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@make_an_order',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::d90eLu70Sjr3csb4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IyFS382eiCUFkzd2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/show_cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@show_cart',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@show_cart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::IyFS382eiCUFkzd2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UHj83w3p3vV0qOLl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/del_frm_cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@del_frm_cart',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@del_frm_cart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::UHj83w3p3vV0qOLl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TGsUOnjK8UWxgLSY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/check_cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@check_cart',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@check_cart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::TGsUOnjK8UWxgLSY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9txDwhrlQnJLCV4i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/clear_cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CartController@clear_cart',
        'controller' => 'App\\Http\\Controllers\\Api\\CartController@clear_cart',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::9txDwhrlQnJLCV4i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W6vK8VIEoEfwnGeG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/societyforaddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AddressController@societyforadd',
        'controller' => 'App\\Http\\Controllers\\Api\\AddressController@societyforadd',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::W6vK8VIEoEfwnGeG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iwERKxStwnACEr7Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/appsetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppsetController@appsetting',
        'controller' => 'App\\Http\\Controllers\\Api\\AppsetController@appsetting',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::iwERKxStwnACEr7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N2cv5D2i9iW1WCjT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/updateappsetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AppsetController@updateapp',
        'controller' => 'App\\Http\\Controllers\\Api\\AppsetController@updateapp',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::N2cv5D2i9iW1WCjT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXICpPuPxkGuESKi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pen_con_out',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderController@pen_con_out',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderController@pen_con_out',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::EXICpPuPxkGuESKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gjGlZCenPptoPLi3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orderlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\OrderlistController@orderlist',
        'controller' => 'App\\Http\\Controllers\\Api\\OrderlistController@orderlist',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::gjGlZCenPptoPLi3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MUHScAMBBKAjbPqF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@store_login',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@store_login',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::MUHScAMBBKAjbPqF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MNb4VzLpXiF7fWT7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@storeprofile',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@storeprofile',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::MNb4VzLpXiF7fWT7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4CYUER8NcFfTLz91' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/storetoday_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@todayorders',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@todayorders',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::4CYUER8NcFfTLz91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hytzeBxNuqdfBItS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/storenextday_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@nextdayorders',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@nextdayorders',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::hytzeBxNuqdfBItS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lCvQNL6K2jNMpoUF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/productcancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@productcancelled',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@productcancelled',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::lCvQNL6K2jNMpoUF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZVxJ7Ecbyio7gg6p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/order_rejected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@order_rejected',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@order_rejected',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::ZVxJ7Ecbyio7gg6p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVPLDkF6ddq8Vx0Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/nearbydboys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AssignController@delivery_boy_list',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AssignController@delivery_boy_list',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::YVPLDkF6ddq8Vx0Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yfwt9YoFjKH6XjWO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/get-store-dboys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AssignController@getStoreDeliveryBoys',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AssignController@getStoreDeliveryBoys',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::Yfwt9YoFjKH6XjWO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R2e1Ca2MsConpkGu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/storeconfirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AssignController@storeconfirm',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AssignController@storeconfirm',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::R2e1Ca2MsConpkGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KrY9MsumFehaccRr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/cart_invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreinvoiceController@cart_invoice',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreinvoiceController@cart_invoice',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::KrY9MsumFehaccRr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O37AzjAvImDXzBdn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/regstore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\RegController@regstore',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\RegController@regstore',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::O37AzjAvImDXzBdn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eeVl4IT7yATXeWEE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_productselect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@productselect',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@productselect',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::eeVl4IT7yATXeWEE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XjbIJ2dJ9IQFp35R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@store_products',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@store_products',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::XjbIJ2dJ9IQFp35R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uor7AzQcwPDw0kv5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_stock_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@stock_update',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@stock_update',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::uor7AzQcwPDw0kv5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::luBRJDSGD7f4D73Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_delete_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@delete_product',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@delete_product',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::luBRJDSGD7f4D73Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R3bgIGLxHyd03kUM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_add_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@add_products',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\AddproductController@add_products',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::R3bgIGLxHyd03kUM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KGJIW1ajPpIN6keU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StproductController@list',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StproductController@list',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::KGJIW1ajPpIN6keU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Xx7CZmHa34zmEan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store/cat_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StproductController@category_list',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StproductController@category_list',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::3Xx7CZmHa34zmEan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::51VNU8Tm2P1jlQhv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_products_add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StproductController@st_addproduct',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StproductController@st_addproduct',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::51VNU8Tm2P1jlQhv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZYKfAge5WeBLrV5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_products_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StproductController@St_updateproduct',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StproductController@St_updateproduct',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::HZYKfAge5WeBLrV5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mlZFShG5x4U2PvS1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_products_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StproductController@DeleteProduct',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StproductController@DeleteProduct',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::mlZFShG5x4U2PvS1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5KzbyElF2ySA5KbR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_varients_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@varient_list',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@varient_list',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::5KzbyElF2ySA5KbR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xopkHbOcny3NxhjR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_varients_add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@AddNewproduct',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@AddNewproduct',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::xopkHbOcny3NxhjR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::58aMDZiPEZSf3mKD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_varients_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@Updateproduct',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@Updateproduct',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::58aMDZiPEZSf3mKD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ANdSShrl0grB4TDF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_varients_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@deleteproduct',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StvarientController@deleteproduct',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::ANdSShrl0grB4TDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fPdrsyH2p8W9jRWk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_update_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@storeupdateprofile',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@storeupdateprofile',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::fPdrsyH2p8W9jRWk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DxjZDytbYSYscXsP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/top_products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@top_selling',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreloginController@top_selling',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::DxjZDytbYSYscXsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4vNFQJCgbBCEbl6o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoresupportController@feedback',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoresupportController@feedback',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::4vNFQJCgbBCEbl6o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::joGzoDlXhy9EZIYH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_callback_req',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StorecallController@call',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StorecallController@call',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::joGzoDlXhy9EZIYH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgqheTASs0BVxhjo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/store_order_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@store_order_history',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StoreorderController@store_order_history',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::kgqheTASs0BVxhjo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGOdChPzGrBlhJ7A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_couponlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@couponlist',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@couponlist',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::GGOdChPzGrBlhJ7A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UycWPLgyX9OfZ6k6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_coupon_add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@addcoupon',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@addcoupon',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::UycWPLgyX9OfZ6k6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rrx2JmiwhwlWSTmZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_updatecoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@updatecoupon',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@updatecoupon',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::rrx2JmiwhwlWSTmZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p7zLLzTiDxJSqCks' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_deletecoupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@deletecoupon',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\StorecouponController@deletecoupon',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::p7zLLzTiDxJSqCks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cww8qPhEu1FBjJhb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_notificationlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@notificationlist',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@notificationlist',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::cww8qPhEu1FBjJhb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IS6zeJeCEb9ShYSK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/read_by_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@read_by_store',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@read_by_store',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::IS6zeJeCEb9ShYSK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hli2HTBOdAEr1jZS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/all_as_read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@all_as_read',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@all_as_read',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::Hli2HTBOdAEr1jZS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7uHjYKcZFd34y97h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/store/st_delete_all_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@delete_all',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\NotificationController@delete_all',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::7uHjYKcZFd34y97h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HrYd32Oa1kBCGjBI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/store/id_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Storeapi\\RegController@idlist',
        'controller' => 'App\\Http\\Controllers\\Storeapi\\RegController@idlist',
        'namespace' => 'Storeapi',
        'prefix' => 'api/store',
        'where' => 
        array (
        ),
        'as' => 'generated::HrYd32Oa1kBCGjBI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CNTR8yvHlquBeWSW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/ordersfortoday',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@ordersfortoday',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@ordersfortoday',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::CNTR8yvHlquBeWSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KaFMfplSduDGQvJz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/ordersfornextday',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@ordersfornextday',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@ordersfornextday',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::KaFMfplSduDGQvJz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YeehoWrn0t64OVfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/out_for_delivery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@delivery_out',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@delivery_out',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::YeehoWrn0t64OVfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6EDE0cpwaPEuInms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/delivery_completed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@delivery_completed',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@delivery_completed',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::6EDE0cpwaPEuInms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ute2YzDMs9Aizgs0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/order_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@order_items',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@order_items',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::ute2YzDMs9Aizgs0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::boAGw4LTKPQskvFg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/completed_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@completed_orders',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@completed_orders',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::boAGw4LTKPQskvFg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OJQYGI4yXY5FJqNF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/completeorderlistbyday',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@completeorderlist',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverorderController@completeorderlist',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::OJQYGI4yXY5FJqNF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vWRzlVSLKVyezet9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/update_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverstatusController@status',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverstatusController@status',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::vWRzlVSLKVyezet9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SpDKoqBivsRAv3pb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverstatusController@get_status',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverstatusController@get_status',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::SpDKoqBivsRAv3pb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6IMwaL5mh08uPcn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driver_login',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driver_login',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::x6IMwaL5mh08uPcn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QY6hfDD0n3bCzoLR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driverbank',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driverbank',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::QY6hfDD0n3bCzoLR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VmDNivnzbqCfXiPM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driverprofile',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driverprofile',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::VmDNivnzbqCfXiPM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fi0aIIG7u7FgAg5X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driverupdateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driverupdateprofile',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverloginController@driverupdateprofile',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::fi0aIIG7u7FgAg5X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HehWdvde3xcayUJ3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_notificationlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@notificationlist',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@notificationlist',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::HehWdvde3xcayUJ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pK0OXKJfZT0jmHYI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/read_by_driver',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@read_by_driver',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@read_by_driver',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::pK0OXKJfZT0jmHYI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KayriO5JRflm96G9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/all_as_read_driver',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@all_as_read',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@all_as_read',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::KayriO5JRflm96G9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hncyCT9X4oHhTjfU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_delete_all_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@delete_all',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverNotificationController@delete_all',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::hncyCT9X4oHhTjfU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wcMXUkeswi8h3HAs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_feedback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriversupportController@feedback',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriversupportController@feedback',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::wcMXUkeswi8h3HAs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNwVePtFd5QFlIyl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/driver_callback_req',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DrivercallController@call',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DrivercallController@call',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::kNwVePtFd5QFlIyl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M9yq9M8iU0nFuDjd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/latlngupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        0 => 
        array (
          'middleware' => 
          array (
            0 => 'XSS',
          ),
        ),
        'uses' => 'App\\Http\\Controllers\\Driverapi\\DriverstatusController@latlngupdate',
        'controller' => 'App\\Http\\Controllers\\Driverapi\\DriverstatusController@latlngupdate',
        'namespace' => 'Driverapi',
        'prefix' => 'api/driver',
        'where' => 
        array (
        ),
        'as' => 'generated::M9yq9M8iU0nFuDjd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lK24jxTLaHPJo9JH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:427:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:208:"function () {
    \\Artisan::call(\'config:cache\');
    \\Artisan::call(\'config:clear\');
    \\Artisan::call(\'route:clear\');
    \\Artisan::call(\'view:clear\');
    return "Cache, route, view, config is cleared";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ab70000000000000000";}";s:4:"hash";s:44:"PWizinCz/siPRs1hEECZqejp1K34wIDIGtLDOd6H75c=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lK24jxTLaHPJo9JH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verifyLicense' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verifyLicense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@verifyLicense',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@verifyLicense',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verifyLicense',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'installFinish' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'installFinish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@installFinish',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@installFinish',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'installFinish',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KQ8Qp2hs4p3S5rey' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@requirement',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@requirement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KQ8Qp2hs4p3S5rey',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eu3SonKEIEzZHRZW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'requirement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@requirement',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@requirement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eu3SonKEIEzZHRZW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@verify',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@verify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verifyPost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verifyPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@verifyPost',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@verifyPost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verifyPost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'databaseinst' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'databaseinst',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@databaseinst',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@databaseinst',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'databaseinst',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'databasePost' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'databasePost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Installer\\InstallController@databasePost',
        'controller' => 'App\\Http\\Controllers\\Installer\\InstallController@databasePost',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'databasePost',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xRqUWvKLvSkB8ioq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'databaseVerifyPost',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:420:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:201:"function () {
        \\Artisan::call(\'config:cache\');
        \\Artisan::call(\'config:clear\');

        return \\app(\\App\\Http\\Controllers\\Installer\\InstallController::class)->databaseVerifyPost();
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ac20000000000000000";}";s:4:"hash";s:44:"RnXYm8cUP2O4q0BRzIVM9yKP2M07/wMFQyusRExQIS4=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xRqUWvKLvSkB8ioq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qTyQk2w4qFuev81E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powergrid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'generated::qTyQk2w4qFuev81E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'powergrid-demo',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@adminLogin',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@adminLogin',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminLoginCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'loginCheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@adminLoginCheck',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@adminLoginCheck',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminLoginCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reset_pass' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset_pass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@reset_pass',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@reset_pass',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'reset_pass',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reset_password_without_token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset_password_without_token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@validatePasswordRequest',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@validatePasswordRequest',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'reset_password_without_token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change_pass2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'change_pass2/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@change_pass2',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@change_pass2',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'change_pass2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forgot_passwordadmin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot_passwordadmin/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthController@forgot_passwordadmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthController@forgot_passwordadmin',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'forgot_passwordadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminlogout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'adminlogout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminlogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxreport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxreportController@taxreport',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxreportController@taxreport',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxreport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxdatewise' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/taxdatewise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxreportController@taxdatewise',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxreportController@taxdatewise',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxdatewise',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminHome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@adminHome',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@adminHome',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminHome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prof' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminProfile',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'prof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprof' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminUpdateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminUpdateProfile',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updateprof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passchange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminChangePass',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminChangePass',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'passchange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatepass' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminChangePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfileController@adminChangePassword',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatepass',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app_details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'global_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@app_details',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@app_details',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'app_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateappdetails' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app_details/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateappdetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateappdetails',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updateappdetails',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'msg91' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'msgby',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@msg91',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@msg91',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'msg91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatemsg91' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'msg91/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatemsg91',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatemsg91',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatemsg91',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatetwilio' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'twilio/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TwilioController@updatetwilio',
        'controller' => 'App\\Http\\Controllers\\Admin\\TwilioController@updatetwilio',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatetwilio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'msgoff' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'msgoff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TwilioController@msgoff',
        'controller' => 'App\\Http\\Controllers\\Admin\\TwilioController@msgoff',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'msgoff',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mapapi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'map_api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MapController@mapsettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\MapController@mapsettings',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'mapapi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatemap' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'map_api/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MapController@updategooglemap',
        'controller' => 'App\\Http\\Controllers\\Admin\\MapController@updategooglemap',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatemap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatemapbox' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mapbox/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MapController@updatemapbox',
        'controller' => 'App\\Http\\Controllers\\Admin\\MapController@updatemapbox',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatemapbox',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app_settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app_settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@fcm',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@fcm',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'app_settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatefcm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app_settings/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatefcm',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatefcm',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatefcm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom_theme' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updatheme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@custom_theme',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@custom_theme',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'custom_theme',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminNotification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/to-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@adminNotification',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@adminNotification',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminNotification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminNotificationSendtostore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Notification_to_store/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@Notification_to_store_Send',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@Notification_to_store_Send',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminNotificationSendtostore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatecurrency' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'currency/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatecurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatecurrency',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatecurrency',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'catlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'catlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@AddCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@AddCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewCategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@AddNewCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@AddNewCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddNewCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/edit/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@EditCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@EditCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'EditCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateCategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category/update/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@UpdateCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@UpdateCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'UpdateCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'DeleteCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/delete/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@DeleteCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@DeleteCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'DeleteCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'change-postion' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'change-postion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@changePostion',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@changePostion',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'change-postion',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdminList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadminers/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminList',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminList',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdminList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdAdd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadminers/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminAdd',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminAdd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdNew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadminers/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminNew',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminNew',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdNew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdEdit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadminers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminEdit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdEdit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadminers/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminUpdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdDelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadminers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminDelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdDelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'CityAdSecretLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadminers/secretlogin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminSecretLogin',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityAdminController@cityAdminSecretLogin',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'CityAdSecretLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcatlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sub-category/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'subcatlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddsubCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sub-category/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubController@AddCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubController@AddCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddsubCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditsubCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sub-category/edit/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubController@EditCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubController@EditCategory',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'EditsubCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'productlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'productlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddProduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@AddProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@AddProduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewProduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@AddNewProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@AddNewProduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddNewProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditProduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/edit/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@EditProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@EditProduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'EditProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateProduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product/update/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@UpdateProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@UpdateProduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'UpdateProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'DeleteProduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/delete/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductController@DeleteProduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductController@DeleteProduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'DeleteProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'varient/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VarientController@varient',
        'controller' => 'App\\Http\\Controllers\\Admin\\VarientController@varient',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'varient/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VarientController@Addproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\VarientController@Addproduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'add-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewvarient' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'varient/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VarientController@AddNewproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\VarientController@AddNewproduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddNewvarient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit-varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'varient/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VarientController@Editproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\VarientController@Editproduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'edit-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-varient' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'varient/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VarientController@Updateproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\VarientController@Updateproduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'update-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete-varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'varient/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VarientController@deleteproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\VarientController@deleteproduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'delete-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'd_boylist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'd_boy/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'd_boylist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'd_boy/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@AddD_boy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@AddD_boy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'd_boy/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@AddNewD_boy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@AddNewD_boy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddNewD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'd_boy/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@EditD_boy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@EditD_boy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'EditD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'd_boy/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@UpdateD_boy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@UpdateD_boy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'UpdateD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'DeleteD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'd_boy/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@DeleteD_boy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@DeleteD_boy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'DeleteD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'userlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userblock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/block/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@block',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@block',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'userblock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userunblock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/unblock/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@unblock',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@unblock',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'userunblock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'citylist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'city/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@citylist',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@citylist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'citylist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'city/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@city',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@city',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'city/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@cityadd',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@cityadd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'cityadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'city/edit/{city_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@cityedit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@cityedit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'cityedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'city/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@cityupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@cityupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'cityupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'citydelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'city/delete/{city_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@citydelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@citydelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'citydelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'societylist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'society/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocietyController@societylist',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocietyController@societylist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'societylist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'society' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'society/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocietyController@society',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocietyController@society',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'society',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'societyadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'society/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocietyController@societyadd',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocietyController@societyadd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'societyadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'societyedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'society/edit/{society_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocietyController@societyedit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocietyController@societyedit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'societyedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'societyupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'society/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocietyController@societyupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocietyController@societyupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'societyupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'societydelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'society/delete/{society_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SocietyController@societydelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocietyController@societydelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'societydelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeclist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@storeclist',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@storeclist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storeclist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@store',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@storeadd',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@storeadd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storeadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/edit/{store_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@storedit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@storedit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/update/{store_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@storeupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@storeupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storeupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storedelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/delete/{store_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StoreController@storedelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\StoreController@storedelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_store_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/store/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_store_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_store_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_store_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelled/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@store_cancelled',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@store_cancelled',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store_cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store/assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@assignstore',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@assignstore',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store_assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'finance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/finance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@finance',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@finance',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'finance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_pay/{store_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@store_pay',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@store_pay',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store_pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about_us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about_us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@about_us',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@about_us',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'about_us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateabout_us' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'about_us/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@updateabout_us',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@updateabout_us',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updateabout_us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@terms',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@terms',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateterms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'terms/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@updateterms',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@updateterms',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updateterms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'prv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'prv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@prv',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@prv',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'prv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateprv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'prv/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateprv',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateprv',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updateprv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reedem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reedem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReedemController@reedem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReedemController@reedem',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'reedem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reedemupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reedemupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReedemController@reedemupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReedemController@reedemupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'reedemupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pay_req' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payout_req',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PayoutController@pay_req',
        'controller' => 'App\\Http\\Controllers\\Admin\\PayoutController@pay_req',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'pay_req',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'com_payout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payout_req/{req_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PayoutController@store_pay',
        'controller' => 'App\\Http\\Controllers\\Admin\\PayoutController@store_pay',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'com_payout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secbannerlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'secbannerlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbannerlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbannerlist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'secbannerlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secbanner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'secbanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbanner',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbanner',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'secbanner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secbanneradd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'secbanneradd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbanneradd',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbanneradd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'secbanneradd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secbanneredit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'secbanneredit/{sec_banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbanneredit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbanneredit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'secbanneredit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secbannerupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'secbannerupdate/{sec_banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbannerupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbannerupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'secbannerupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secbannerdelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'secbannerdelete/{sec_banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbannerdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SecondaryBannerController@secbannerdelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'secbannerdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_dboy_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/d_boy/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_dboy_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_dboy_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_dboy_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dboy_assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/d_boy/assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@assigndboy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@assigndboy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'dboy_assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_com_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/completed_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_com_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_com_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_com_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_pen_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/pending_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_pen_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_pen_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_pen_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_reject_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reject/order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@rejectorder',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@rejectorder',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_reject_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_can_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cancelled_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_can_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_can_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_can_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment_gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PayController@payment_gateway',
        'controller' => 'App\\Http\\Controllers\\Admin\\PayController@payment_gateway',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'gateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updategateway' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment_gateway/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PayController@updatepymntvia',
        'controller' => 'App\\Http\\Controllers\\Admin\\PayController@updatepymntvia',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updategateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeapprove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/waiting_for_approval/stores/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApprovalController@storeclist',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApprovalController@storeclist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storeapprove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeapproved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'approved/stores/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ApprovalController@storeapproved',
        'controller' => 'App\\Http\\Controllers\\Admin\\ApprovalController@storeapproved',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storeapproved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'del_userfromlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@del_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@del_user',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'del_userfromlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hideprod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'changeStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HideController@hideproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\HideController@hideproduct',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'hideprod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app_notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app_notice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NoticeController@adminnotice',
        'controller' => 'App\\Http\\Controllers\\Admin\\NoticeController@adminnotice',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'app_notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app_noticeupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app_notice/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NoticeController@adminupdatenotice',
        'controller' => 'App\\Http\\Controllers\\Admin\\NoticeController@adminupdatenotice',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'app_noticeupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatefirebase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'updatefirebase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HideController@updatefirebase',
        'controller' => 'App\\Http\\Controllers\\Admin\\HideController@updatefirebase',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatefirebase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulkup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bulk/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@bulkup',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@bulkup',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'bulkup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulk_upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bulk/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@import',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@import',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'bulk_upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulk_v_upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bulk/v_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@import_varients',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@import_varients',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'bulk_v_upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales_today' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/today/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesreportController@sales_today',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesreportController@sales_today',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'sales_today',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datewise_orders' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'orders/day-wise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SalesreportController@orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\SalesreportController@orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'datewise_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'daywise_reg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/list/day-wise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@daywise',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@daywise',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'daywise_reg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item_sale_rep' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/item_sale/by_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RequiredController@storeclist',
        'controller' => 'App\\Http\\Controllers\\Admin\\RequiredController@storeclist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'item_sale_rep',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'req_items_today' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'required/itemlist/today/store/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RequiredController@reqfortoday',
        'controller' => 'App\\Http\\Controllers\\Admin\\RequiredController@reqfortoday',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'req_items_today',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datewise_itemsalesreport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'required/itemlist/store/day-wise/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RequiredController@reqdaywise',
        'controller' => 'App\\Http\\Controllers\\Admin\\RequiredController@reqdaywise',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'datewise_itemsalesreport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storehide' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storehide/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StorehideController@off',
        'controller' => 'App\\Http\\Controllers\\Admin\\StorehideController@off',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storehide',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeunhide' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storeunhide/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StorehideController@on',
        'controller' => 'App\\Http\\Controllers\\Admin\\StorehideController@on',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storeunhide',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatefirebase_iso' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'firebase/iso_code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatefirebase_iso',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatefirebase_iso',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatefirebase_iso',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateref' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update/ref',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateref',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateref',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updateref',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_plist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_products/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductapproveController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductapproveController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'st_plist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_p_approve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_products/approve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductapproveController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductapproveController@approve',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'st_p_approve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_p_reject' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_products/reject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductapproveController@reject',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductapproveController@reject',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'st_p_reject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'up_admin_incentive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'incentive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateincentive',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateincentive',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'up_admin_incentive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'boy_incentive' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dboy_incentive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@boy_incentive',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@boy_incentive',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'boy_incentive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'incentive_pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dboy_pay/{dboy_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@incentive_pay',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@incentive_pay',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'incentive_pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'missed_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/missed/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@missed_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@missed_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'missed_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'status/change/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderstatussController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderstatussController@change',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'changeStatus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ad_dboy_assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'd_boy/assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderstatussController@assigndboy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderstatussController@assigndboy',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'ad_dboy_assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_reqforthirty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/total-item-sales/last-30-days',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RequiredController@ad_reqforthirty',
        'controller' => 'App\\Http\\Controllers\\Admin\\RequiredController@ad_reqforthirty',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_reqforthirty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ad_boy_reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DeliveryController@boy_reports',
        'controller' => 'App\\Http\\Controllers\\Admin\\DeliveryController@boy_reports',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'ad_boy_reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminNotificationdriver' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/to-driver',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@adminNotificationdriver',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@adminNotificationdriver',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminNotificationdriver',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminNotificationSendtodriver' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notification/to-driver/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@Notification_to_driver_Send',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@Notification_to_driver_Send',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminNotificationSendtodriver',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'can_res_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelling_reasons/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_list',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'can_res_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'can_res_add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelling_reasons/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_add',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_add',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'can_res_add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'can_res_added' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cancelling_reasons/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_added',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_added',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'can_res_added',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'can_res_edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelling_reasons/edit/{res_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_edit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'can_res_edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'can_res_edited' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cancelling_reasons/updated',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_edited',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_edited',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'can_res_edited',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'can_res_del' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cancelling_reasons/delete/{res_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_del',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReasonController@can_res_del',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'can_res_del',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gateway_status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gateway_option/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PayController@gateway_status',
        'controller' => 'App\\Http\\Controllers\\Admin\\PayController@gateway_status',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'gateway_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_feedback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user_feedback/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@user_feedback',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@user_feedback',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'user_feedback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_feedback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_feedback/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@store_feedback',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@store_feedback',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store_feedback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'driver_feedback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'driver_feedback/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FeedbackController@driver_feedback',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeedbackController@driver_feedback',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'driver_feedback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_callback_requests' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_callback_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StorecallbackController@storecallbacklist',
        'controller' => 'App\\Http\\Controllers\\Admin\\StorecallbackController@storecallbacklist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store_callback_requests',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_callbackproc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_callbackproc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StorecallbackController@store_call_proc',
        'controller' => 'App\\Http\\Controllers\\Admin\\StorecallbackController@store_call_proc',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'store_callbackproc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'driver_callback_requests' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'driver_callback_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DrivercallbackController@drivercallbacklist',
        'controller' => 'App\\Http\\Controllers\\Admin\\DrivercallbackController@drivercallbacklist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'driver_callback_requests',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'driver_callbackproc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'driver_callbackproc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DrivercallbackController@driver_call_proc',
        'controller' => 'App\\Http\\Controllers\\Admin\\DrivercallbackController@driver_call_proc',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'driver_callbackproc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_callback_requests' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user_callback_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsercallbackController@usercallbacklist',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsercallbackController@usercallbacklist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'user_callback_requests',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_callbackproc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user_callbackproc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsercallbackController@user_call_proc',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsercallbackController@user_call_proc',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'user_callbackproc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatereferral_codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'updatereferral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatereferral',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatereferral',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatereferral_codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'app_link' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app_link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@app_link',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@app_link',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'app_link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user_wallet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/wallet_recharge_history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserwalletController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserwalletController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'user_wallet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usr_recharge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'usr_recharge/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserwalletController@pay',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserwalletController@pay',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'usr_recharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatespace' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updatespace',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatespace',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updatespace',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updatespace',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adminNotificationuser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/to-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@adminNotificationuser',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@adminNotificationuser',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'adminNotificationuser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'userNotificationSend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notification/to-users/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@userNotificationSend',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@userNotificationSend',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'userNotificationSend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ed_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@ed_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@ed_user',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'ed_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'up_user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@up_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@up_user',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'up_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulkupcity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'area_bulk_upload/upload/city-society',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@bulkupcity',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@bulkupcity',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'bulkupcity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'importcity' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'area_bulk_upload/city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@importcity',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@importcity',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'importcity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'importsociety' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'area_bulk_upload/society',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@importsociety',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImportExcelController@importsociety',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'importsociety',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'memlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'membership/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MemberController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\MemberController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'memlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddMember' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'membership/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MemberController@AddMember',
        'controller' => 'App\\Http\\Controllers\\Admin\\MemberController@AddMember',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddMember',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewMember' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'membership/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MemberController@AddNewMember',
        'controller' => 'App\\Http\\Controllers\\Admin\\MemberController@AddNewMember',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddNewMember',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditMember' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'membership/edit/{plan_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MemberController@EditMember',
        'controller' => 'App\\Http\\Controllers\\Admin\\MemberController@EditMember',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'EditMember',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateMember' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'membership/update/{plan_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MemberController@UpdateMember',
        'controller' => 'App\\Http\\Controllers\\Admin\\MemberController@UpdateMember',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'UpdateMember',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'DeleteMember' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'membership/delete/{plan_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MemberController@DeleteMember',
        'controller' => 'App\\Http\\Controllers\\Admin\\MemberController@DeleteMember',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'DeleteMember',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mem_list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/membership/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@mem_list',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@mem_list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'mem_list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@taxlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@taxlist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@tax',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@tax',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'tax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tax/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@taxadd',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@taxadd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/edit/{tax_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@taxedit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@taxedit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tax/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@taxupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@taxupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxdelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/delete/{tax_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TaxController@taxdelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\TaxController@taxdelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'taxdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trendsel_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trending_search/product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TrendingController@sel_product',
        'controller' => 'App\\Http\\Controllers\\Admin\\TrendingController@sel_product',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'trendsel_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trendadded_product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'trending_search/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TrendingController@added_product',
        'controller' => 'App\\Http\\Controllers\\Admin\\TrendingController@added_product',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'trendadded_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trenddelete_product1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'trending_search/product/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\TrendingController@delete_product',
        'controller' => 'App\\Http\\Controllers\\Admin\\TrendingController@delete_product',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'trenddelete_product1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_on_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ongoing_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_on_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_on_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_on_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_all_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/all_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_all_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_all_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_all_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_out_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/out_for_delivery_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_out_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_out_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_out_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_failed_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment_failed_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_failed_orders',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminorderController@admin_failed_orders',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'admin_failed_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'idlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'id/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IdController@idlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\IdController@idlist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'idlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'id' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IdController@idd',
        'controller' => 'App\\Http\\Controllers\\Admin\\IdController@idd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'id',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'idadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'id/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IdController@idadd',
        'controller' => 'App\\Http\\Controllers\\Admin\\IdController@idadd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'idadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'idedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'id/edit/{type_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IdController@idedit',
        'controller' => 'App\\Http\\Controllers\\Admin\\IdController@idedit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'idedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'idupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'id/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IdController@idupdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\IdController@idupdate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'idupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'iddelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'id/delete/{type_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IdController@iddelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\IdController@iddelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'iddelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubadController@add',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubadController@add',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'roles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rolelist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubadController@sub',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubadController@sub',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'rolelist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addnewrole' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'roles/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubadController@addnew',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubadController@addnew',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'addnewrole',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roleedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubadController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubadController@edit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'roleedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updaterole' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'roles/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubadController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubadController@update',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'updaterole',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deleterole' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubadController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubadController@delete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'deleterole',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subadminlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@list',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@list',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'subadminlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddSubadmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@Add',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@Add',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddSubadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewSubadmin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@AddNew',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@AddNew',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'AddNewSubadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditSubadmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@Edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@Edit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'EditSubadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateSubadmin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subadmin/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@Update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@Update',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'UpdateSubadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'DeleteSubadmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subadmin/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@Delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@Delete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'DeleteSubadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'usernotlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list/notification/list/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@usernotlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@usernotlist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'usernotlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storenotlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list/notification/list/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@storenotlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@storenotlist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'storenotlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drivernotlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list/notification/list/driver',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@drivernotlist',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@drivernotlist',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'drivernotlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_all_user_not' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/list/user/delete_all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_all_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_all_user',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'delete_all_user_not',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_read_user_not' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/list/user/delete_read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_read_user',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_read_user',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'delete_read_user_not',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_all_store_not' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/list/store/delete_all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_all_store',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_all_store',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'delete_all_store_not',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_all_driver_not' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification/list/driver/delete_all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_all_driver',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete_all_driver',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'delete_all_driver_not',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'driverinc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'set_delivery_boy_incentive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@driverinc',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@driverinc',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'driverinc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add2home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add2home/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubController@add2home',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubController@add2home',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'add2home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delfromhome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delfromhome/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubController@delfromhome',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubController@delfromhome',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'delfromhome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changeLang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@change',
        'controller' => 'App\\Http\\Controllers\\LanguageController@change',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'changeLang',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.index',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@index',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.create',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@create',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stores/{store}/bank-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.store',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@store',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-accounts/{bank_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.show',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@show',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-accounts/{bank_account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.edit',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@edit',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stores/{store}/bank-accounts/{bank_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.update',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@update',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stores/{store}/bank-accounts/{bank_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-accounts.destroy',
        'uses' => 'App\\Http\\Controllers\\Store\\BankAccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\Store\\BankAccountController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.index',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-payments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.create',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@create',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stores/{store}/bank-payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.store',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-payments/{bank_payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.show',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@show',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/bank-payments/{bank_payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.edit',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stores/{store}/bank-payments/{bank_payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.update',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@update',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.bank-payments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stores/{store}/bank-payments/{bank_payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'stores.bank-payments.destroy',
        'uses' => 'App\\Http\\Controllers\\Store\\BankPaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Store\\BankPaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeLogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreLoginController@storeLogin',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreLoginController@storeLogin',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeLogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secret-store-login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/secret-store-login/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreLoginController@secretStoreLogin',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreLoginController@secretStoreLogin',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'secret-store-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'secret-store-login1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/secret-store-login1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreLoginController@secretStoreLogin1',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreLoginController@secretStoreLogin1',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'secret-store-login1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store_register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreregController@register_store',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreregController@register_store',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_registered' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store_registered',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreregController@store_registered',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreregController@store_registered',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_registered',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeLoginCheck' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/loginCheck',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreLoginController@storeLoginCheck',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreLoginController@storeLoginCheck',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeLoginCheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store-zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.index',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@index',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@index',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store-zones/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.create',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@create',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@create',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store-zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.store',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@store',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@store',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store-zones/{store_zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.show',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@show',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@show',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store-zones/{store_zone}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.edit',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@edit',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@edit',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'store/store-zones/{store_zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.update',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@update',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@update',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store-zones.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'store/store-zones/{store_zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'as' => 'store-zones.destroy',
        'uses' => 'App\\Http\\Controllers\\Store\\StoreZoneController@destroy',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreZoneController@destroy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reward2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/reward',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\RewardController@reward2',
        'controller' => 'App\\Http\\Controllers\\Store\\RewardController@reward2',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'reward2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rewardupdate2' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'store/reward/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\RewardController@rewardupdate2',
        'controller' => 'App\\Http\\Controllers\\Store\\RewardController@rewardupdate2',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'rewardupdate2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storelogout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreLoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreLoginController@logout',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storelogout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeHome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreHomeController@storeHome',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreHomeController@storeHome',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeHome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sel_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@sel_product',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@sel_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sel_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'added_product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/product/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@added_product',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@added_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'added_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/product/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@delete_product',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@delete_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'delete_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quantity_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/product/stock/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@quantity_update',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@quantity_update',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'quantity_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeOrders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/orders/next_day',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AssignorderController@orders',
        'controller' => 'App\\Http\\Controllers\\Store\\AssignorderController@orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeOrders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeassignedorders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/orders/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AssignorderController@assignedorders',
        'controller' => 'App\\Http\\Controllers\\Store\\AssignorderController@assignedorders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeassignedorders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_confirm_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/orders/confirm/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AssignorderController@confirm_order',
        'controller' => 'App\\Http\\Controllers\\Store\\AssignorderController@confirm_order',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_confirm_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_reject_order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/orders/reject/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\OrderController@reject_order',
        'controller' => 'App\\Http\\Controllers\\Store\\OrderController@reject_order',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_reject_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_cancel_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/orders/products/cancel/{store_order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\OrderController@cancel_products',
        'controller' => 'App\\Http\\Controllers\\Store\\OrderController@cancel_products',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_cancel_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/update/stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@st_product',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@st_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payout_req' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/payout/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorePayoutController@payout_req',
        'controller' => 'App\\Http\\Controllers\\Store\\StorePayoutController@payout_req',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'payout_req',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payout_req_sent' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/payout/request/sent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorePayoutController@req_sent',
        'controller' => 'App\\Http\\Controllers\\Store\\StorePayoutController@req_sent',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'payout_req_sent',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/invoice/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\InvoiceController@invoice',
        'controller' => 'App\\Http\\Controllers\\Store\\InvoiceController@invoice',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pdfinvoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/pdf/invoice/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\InvoiceController@pdfinvoice',
        'controller' => 'App\\Http\\Controllers\\Store\\InvoiceController@pdfinvoice',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'pdfinvoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stt_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/stproducts/price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\PriceController@stt_product',
        'controller' => 'App\\Http\\Controllers\\Store\\PriceController@stt_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'stt_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'price_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/stproduct/price/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\PriceController@price_update',
        'controller' => 'App\\Http\\Controllers\\Store\\PriceController@price_update',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'price_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulkuprice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/bulk/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ImpexcelController@bulkup',
        'controller' => 'App\\Http\\Controllers\\Store\\ImpexcelController@bulkup',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'bulkuprice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulk_uploadprice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/bulk_upload/price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ImpexcelController@import',
        'controller' => 'App\\Http\\Controllers\\Store\\ImpexcelController@import',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'bulk_uploadprice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulk_uploadstock' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/bulk_upload/stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ImpexcelController@importstock',
        'controller' => 'App\\Http\\Controllers\\Store\\ImpexcelController@importstock',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'bulk_uploadstock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulk_export_all_products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/bulk/export/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ImpexcelController@exportAllProducts',
        'controller' => 'App\\Http\\Controllers\\Store\\ImpexcelController@exportAllProducts',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'bulk_export_all_products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bulk_import_all_products' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/bulk/import/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ImpexcelController@importAllProducts',
        'controller' => 'App\\Http\\Controllers\\Store\\ImpexcelController@importAllProducts',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'bulk_import_all_products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reqfortoday' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/itemlist/requirement/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StRequiredController@reqfortoday',
        'controller' => 'App\\Http\\Controllers\\Store\\StRequiredController@reqfortoday',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'reqfortoday',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'datewise_itemsales' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/itemlist/requirement/datewise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StRequiredController@reqfordate',
        'controller' => 'App\\Http\\Controllers\\Store\\StRequiredController@reqfordate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'datewise_itemsales',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/purchases_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ReportController@purchasesReport',
        'controller' => 'App\\Http\\Controllers\\Store\\ReportController@purchasesReport',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'purchases_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases_report.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/purchases_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ReportController@showPurchasesReport',
        'controller' => 'App\\Http\\Controllers\\Store\\ReportController@showPurchasesReport',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'purchases_report.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'print_purchases_report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/purchases_report_print/{from}/{to}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ReportController@printPurchasesReport',
        'controller' => 'App\\Http\\Controllers\\Store\\ReportController@printPurchasesReport',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'print_purchases_report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_sales_today' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store_orders/today/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StSalesreportController@sales_today',
        'controller' => 'App\\Http\\Controllers\\Store\\StSalesreportController@sales_today',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_sales_today',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_datewise_orders' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store_orders/day-wise',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StSalesreportController@orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StSalesreportController@orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_datewise_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeorder_byphoto' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/orderbyphoto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@user_list',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@user_list',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeorder_byphoto',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_accept_order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/makeorder/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@sel_product',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@sel_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_accept_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'listadded_product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/list/product/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@added_product',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@added_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'listadded_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin_reject_orderphoto' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/admin/reject/orderlist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@rejectorder',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@rejectorder',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'admin_reject_orderphoto',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_product_from_cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/list/product/delete_from_cart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@delete_product',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@delete_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'delete_product_from_cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_qty_to_cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/list/product/add_qty/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@add_qty',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@add_qty',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'add_qty_to_cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_reject_orderbyphoto' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/reject/order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@rejectorder',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@rejectorder',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_reject_orderbyphoto',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'process_orderby' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/order/processed/{ord_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ByphotoController@checkout',
        'controller' => 'App\\Http\\Controllers\\Store\\ByphotoController@checkout',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'process_orderby',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storebannerlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/storebannerlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorebannerController@bannerlist',
        'controller' => 'App\\Http\\Controllers\\Store\\StorebannerController@bannerlist',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storebannerlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storebanner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/storebanner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorebannerController@banner',
        'controller' => 'App\\Http\\Controllers\\Store\\StorebannerController@banner',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storebanner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storebanneradd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/storebanneradd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorebannerController@banneradd',
        'controller' => 'App\\Http\\Controllers\\Store\\StorebannerController@banneradd',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storebanneradd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storebanneredit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/storebanneredit/{banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorebannerController@banneredit',
        'controller' => 'App\\Http\\Controllers\\Store\\StorebannerController@banneredit',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storebanneredit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storebannerupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/storebannerupdate/{banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorebannerController@bannerupdate',
        'controller' => 'App\\Http\\Controllers\\Store\\StorebannerController@bannerupdate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storebannerupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storebannerdelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/storebannerdelete/{banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorebannerController@bannerdelete',
        'controller' => 'App\\Http\\Controllers\\Store\\StorebannerController@bannerdelete',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storebannerdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deallist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/deal/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DealController@list',
        'controller' => 'App\\Http\\Controllers\\Store\\DealController@list',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'deallist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddDeal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/deal/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DealController@AddDeal',
        'controller' => 'App\\Http\\Controllers\\Store\\DealController@AddDeal',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'AddDeal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'AddNewDeal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/deal/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DealController@AddNewDeal',
        'controller' => 'App\\Http\\Controllers\\Store\\DealController@AddNewDeal',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'AddNewDeal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'EditDeal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/deal/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DealController@EditDeal',
        'controller' => 'App\\Http\\Controllers\\Store\\DealController@EditDeal',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'EditDeal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'UpdateDeal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/deal/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DealController@UpdateDeal',
        'controller' => 'App\\Http\\Controllers\\Store\\DealController@UpdateDeal',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'UpdateDeal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'DeleteDeal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/deal/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DealController@DeleteDeal',
        'controller' => 'App\\Http\\Controllers\\Store\\DealController@DeleteDeal',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'DeleteDeal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storetimeslot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/timeslot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@timeslot',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@timeslot',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storetimeslot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storetimeslotupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store/timeslotupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@timeslotupdate',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@timeslotupdate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storetimeslotupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateOrdersTime' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store/update-orders-time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@updateOrdersTime',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@updateOrdersTime',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'updateOrdersTime',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ordersLimit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store/orders-limit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@ordersLimit',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@ordersLimit',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ordersLimit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'amountupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/amountupdate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@amountupdate',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@amountupdate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'amountupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatedel_charge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/del_charge/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@updatedel_charge',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@updatedel_charge',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'updatedel_charge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeproductlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st/product/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreProductController@list',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreProductController@list',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeproductlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeAddProduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st/product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreProductController@AddProduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreProductController@AddProduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeAddProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeAddNewProduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/st/product/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreProductController@AddNewProduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreProductController@AddNewProduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeAddNewProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeEditProduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st/product/edit/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreProductController@EditProduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreProductController@EditProduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeEditProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeUpdateProduct' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/st/product/update/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreProductController@UpdateProduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreProductController@UpdateProduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeUpdateProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeDeleteProduct' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'store/st/product/delete/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreProductController@DeleteProduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreProductController@DeleteProduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeDeleteProduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storevarient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/special/varient/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreVarientController@varient',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreVarientController@varient',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storevarient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeadd-varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/special/varient/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreVarientController@Addproduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreVarientController@Addproduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeadd-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeAddNewvarient' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/special/varient/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreVarientController@AddNewproduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreVarientController@AddNewproduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeAddNewvarient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeedit-varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/special/varient/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreVarientController@Editproduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreVarientController@Editproduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeedit-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeupdate-varient' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/special/varient/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreVarientController@Updateproduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreVarientController@Updateproduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeupdate-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storedelete-varient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/special/varient/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreVarientController@deleteproduct',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreVarientController@deleteproduct',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storedelete-varient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callback_requests' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/callback_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CallbackController@callbacklist',
        'controller' => 'App\\Http\\Controllers\\Store\\CallbackController@callbacklist',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'callback_requests',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'callbackproc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/callbackproc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CallbackController@call_proc',
        'controller' => 'App\\Http\\Controllers\\Store\\CallbackController@call_proc',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'callbackproc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeNotification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/notification/to-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@storeNotification',
        'controller' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@storeNotification',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeNotification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeNotificationSend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/notification/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@storeNotificationSend',
        'controller' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@storeNotificationSend',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeNotificationSend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'couponlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/coupon/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CouponController@couponlist',
        'controller' => 'App\\Http\\Controllers\\Store\\CouponController@couponlist',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'couponlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/coupon/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CouponController@coupon',
        'controller' => 'App\\Http\\Controllers\\Store\\CouponController@coupon',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addcoupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/coupon/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CouponController@addcoupon',
        'controller' => 'App\\Http\\Controllers\\Store\\CouponController@addcoupon',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'addcoupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'editcoupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/coupon/edit/{coupon_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CouponController@editcoupon',
        'controller' => 'App\\Http\\Controllers\\Store\\CouponController@editcoupon',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'editcoupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updatecoupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/coupon/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CouponController@updatecoupon',
        'controller' => 'App\\Http\\Controllers\\Store\\CouponController@updatecoupon',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'updatecoupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'deletecoupon' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/coupon/delete/{coupon_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CouponController@deletecoupon',
        'controller' => 'App\\Http\\Controllers\\Store\\CouponController@deletecoupon',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'deletecoupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_com_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/completed_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_com_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_com_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_com_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_pen_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/pending_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_pen_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_pen_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_pen_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_can_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/cancelled_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_can_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_can_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_can_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_d_boylist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/d_boy/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@list',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@list',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_d_boylist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_AddD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/d_boy/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@AddD_boy',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@AddD_boy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_AddD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_AddNewD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/d_boy/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@AddNewD_boy',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@AddNewD_boy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_AddNewD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_EditD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/d_boy/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@EditD_boy',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@EditD_boy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_EditD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_UpdateD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/d_boy/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@UpdateD_boy',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@UpdateD_boy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_UpdateD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_DeleteD_boy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/d_boy/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@DeleteD_boy',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@DeleteD_boy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_DeleteD_boy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_driver_callback_requests' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st_driver_callback_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CallbackController@drivercallbacklist',
        'controller' => 'App\\Http\\Controllers\\Store\\CallbackController@drivercallbacklist',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_driver_callback_requests',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_driver_callbackproc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st_driver_callbackproc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\CallbackController@driver_call_proc',
        'controller' => 'App\\Http\\Controllers\\Store\\CallbackController@driver_call_proc',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_driver_callbackproc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_dboy_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/d_boy/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_dboy_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_dboy_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_dboy_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sto_dboy_assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/st/d_boy/assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@assigndboyo',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@assigndboyo',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sto_dboy_assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_missed_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st/missed/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@missed_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@missed_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_missed_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_changeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/st/status/change/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@change',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@change',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_changeStatus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_dboy_assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/d_boy/assign/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@assigndboy',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@assigndboy',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_dboy_assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reqforthirty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/item-sales-report/last-30-days',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StRequiredController@reqforthirty',
        'controller' => 'App\\Http\\Controllers\\Store\\StRequiredController@reqforthirty',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'reqforthirty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'st_boy_reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/order/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@boy_reports',
        'controller' => 'App\\Http\\Controllers\\Store\\DeliveryboyController@boy_reports',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'st_boy_reports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'up_store_incentive' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/incentive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@updateincentive',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreTimeslotController@updateincentive',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'up_store_incentive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_boy_incentive' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/dboy_incentive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DriverfinanceController@boy_incentive',
        'controller' => 'App\\Http\\Controllers\\Store\\DriverfinanceController@boy_incentive',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_boy_incentive',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_incentive_pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/dboy_pay/{dboy_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\DriverfinanceController@incentive_pay',
        'controller' => 'App\\Http\\Controllers\\Store\\DriverfinanceController@incentive_pay',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_incentive_pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_reassign_order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/Orders/Reassign/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AssignorderController@reassign_order',
        'controller' => 'App\\Http\\Controllers\\Store\\AssignorderController@reassign_order',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_reassign_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeNotificationdriver' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/driver/Notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@storeNotificationdriver',
        'controller' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@storeNotificationdriver',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeNotificationdriver',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_Notification_to_driver_Send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/driver/Notification/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@Notification_to_driver_Send',
        'controller' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@Notification_to_driver_Send',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_Notification_to_driver_Send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sendnotificationus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/sendnotificationus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@sendnotificationus',
        'controller' => 'App\\Http\\Controllers\\Store\\UsrnotificationController@sendnotificationus',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sendnotificationus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storehomecate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/home-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorehomecateController@allhomecate',
        'controller' => 'App\\Http\\Controllers\\Store\\StorehomecateController@allhomecate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storehomecate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeAddHomeCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/home-category/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorehomecateController@AddCategory',
        'controller' => 'App\\Http\\Controllers\\Store\\StorehomecateController@AddCategory',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeAddHomeCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeInsertHomeCategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store/home-category/insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorehomecateController@InsertCategory',
        'controller' => 'App\\Http\\Controllers\\Store\\StorehomecateController@InsertCategory',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeInsertHomeCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeoHomecateEditCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/home-category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorehomecateController@EditCategory',
        'controller' => 'App\\Http\\Controllers\\Store\\StorehomecateController@EditCategory',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeoHomecateEditCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeUpdateHomeCategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store/home-category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorehomecateController@UpdateCategory',
        'controller' => 'App\\Http\\Controllers\\Store\\StorehomecateController@UpdateCategory',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeUpdateHomeCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeHomecateDeleteCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/home-category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StorehomecateController@DeleteCategory',
        'controller' => 'App\\Http\\Controllers\\Store\\StorehomecateController@DeleteCategory',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeHomecateDeleteCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeAssignHomeCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/assign-home-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreassignHomecateController@assignhomecat',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreassignHomecateController@assignhomecat',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeAssignHomeCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeInsertAssignHomeCategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/store/assign-home-category/insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreassignHomecateController@InsertAssignHomeCat',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreassignHomecateController@InsertAssignHomeCat',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeInsertAssignHomeCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeDeleteAssignHomeCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/assign-home-category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreassignHomecateController@DeleteAssignhomecat',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreassignHomecateController@DeleteAssignhomecat',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'storeDeleteAssignHomeCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stt_product2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/products/order_quantity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\PriceController@stt_product2',
        'controller' => 'App\\Http\\Controllers\\Store\\PriceController@stt_product2',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'stt_product2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/product/order_quantity/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\PriceController@qty_update',
        'controller' => 'App\\Http\\Controllers\\Store\\PriceController@qty_update',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'qty_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'importquantity' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/bulk_upload/order_qty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\ImpexcelController@importquantity',
        'controller' => 'App\\Http\\Controllers\\Store\\ImpexcelController@importquantity',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'importquantity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sec_bannerlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/secondary_bannerlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\SecondaryController@bannerlist',
        'controller' => 'App\\Http\\Controllers\\Store\\SecondaryController@bannerlist',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sec_bannerlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sec_banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/secondary_banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\SecondaryController@banner',
        'controller' => 'App\\Http\\Controllers\\Store\\SecondaryController@banner',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sec_banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sec_banneradd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/secondary_banneradd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\SecondaryController@banneradd',
        'controller' => 'App\\Http\\Controllers\\Store\\SecondaryController@banneradd',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sec_banneradd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sec_banneredit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/secondary_banneredit/{banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\SecondaryController@banneredit',
        'controller' => 'App\\Http\\Controllers\\Store\\SecondaryController@banneredit',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sec_banneredit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sec_bannerupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/secondary_bannerupdate/{banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\SecondaryController@bannerupdate',
        'controller' => 'App\\Http\\Controllers\\Store\\SecondaryController@bannerupdate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sec_bannerupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sec_bannerdelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/secondary_bannerdelete/{banner_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\SecondaryController@bannerdelete',
        'controller' => 'App\\Http\\Controllers\\Store\\SecondaryController@bannerdelete',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'sec_bannerdelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ser_societylist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/service_societylist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AreaController@societylist',
        'controller' => 'App\\Http\\Controllers\\Store\\AreaController@societylist',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ser_societylist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ser_societyedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/service_societyedit/{ser_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AreaController@societyedit',
        'controller' => 'App\\Http\\Controllers\\Store\\AreaController@societyedit',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ser_societyedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ser_societyupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/service_societyupdate/{ser_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AreaController@societyupdate',
        'controller' => 'App\\Http\\Controllers\\Store\\AreaController@societyupdate',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ser_societyupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ser_societycheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/societyenable/{ser_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AreaController@societyenable',
        'controller' => 'App\\Http\\Controllers\\Store\\AreaController@societyenable',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ser_societycheck',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ser_delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/service_societydelete/{ser_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AreaController@societydelete',
        'controller' => 'App\\Http\\Controllers\\Store\\AreaController@societydelete',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ser_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_all_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/all_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_all_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_all_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_all_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_on_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/ongoing_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_on_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_on_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_on_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_out_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/out_for_delivery_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_out_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_out_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_out_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_failed_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/payment_failed_orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_failed_orders',
        'controller' => 'App\\Http\\Controllers\\Store\\StoreordersController@store_failed_orders',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'store_failed_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'spotlight_product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/spotlight/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@sp_product',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@sp_product',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'spotlight_product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'added_spotlight' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/spotlight/added',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@added_spotlight',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@added_spotlight',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'added_spotlight',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rem_spotlight' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/spotlight/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\StProductController@rem_spotlight',
        'controller' => 'App\\Http\\Controllers\\Store\\StProductController@rem_spotlight',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'rem_spotlight',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'a4invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store/store/invoice/a4/{cart_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\InvoiceController@a4invoice',
        'controller' => 'App\\Http\\Controllers\\Store\\InvoiceController@a4invoice',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'a4invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ser_societyadddd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/serarea/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:store',
        ),
        'uses' => 'App\\Http\\Controllers\\Store\\AreaController@societyadd',
        'controller' => 'App\\Http\\Controllers\\Store\\AreaController@societyadd',
        'namespace' => NULL,
        'prefix' => '/store',
        'where' => 
        array (
        ),
        'as' => 'ser_societyadddd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityadmin-login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdLogin',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdLogin',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityadmin-login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityadmin-getchecklogin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/checklogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdGetCheckLogin',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdGetCheckLogin',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityadmin-getchecklogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityadmin-checklogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/checklogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdCheckLogin',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdCheckLogin',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityadmin-checklogin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityadhome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdHomeController@cityHome',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdHomeController@cityHome',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityadhome',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdLogOut',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdLoginController@cityAdLogOut',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-note2user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/notificateUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdNotifyUser',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdNotifyUser',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-note2user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-send_note2user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/notificateUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdSendNotifyUser',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdSendNotifyUser',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-send_note2user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-note2vendor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/notificateVendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdNotifyVendor',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdNotifyVendor',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-note2vendor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-send_note2vendor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/notificateVendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdSendNotifyVendor',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdNotifyController@cityAdSendNotifyVendor',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-send_note2vendor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboylist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/delivery_boy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyList',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyList',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboylist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboyadd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/delivery_boy/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyAdd',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyAdd',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboyadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboynew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/delivery_boy/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyAddNew',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyAddNew',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboynew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboyedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/delivery_boy/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyEdit',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyEdit',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboyedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboyupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/delivery_boy/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyUpdate',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyUpdate',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboyupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboydelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/delivery_boy/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyDelete',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyDelete',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboydelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboylist-commisions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/delivery_boy/incentive/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyListCommision',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyListCommision',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboylist-commisions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-dboyadd-commisions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/delivery_boy/set-incentive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyAddCommision',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdDBoyController@cityAdDBoyAddCommision',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-dboyadd-commisions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-storelist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreList',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreList',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-storelist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-storeadd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/vendor/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreAdd',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreAdd',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-storeadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-storenew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/vendor/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreAddNew',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreAddNew',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-storenew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-storedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/vendor/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreEdit',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreEdit',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-storedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-storeupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/vendor/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreUpdate',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreUpdate',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-storeupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-storedelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/vendor/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreDelete',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreDelete',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-storedelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-orders2day' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/orders/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreOrdersToday',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreOrdersToday',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-orders2day',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-ordersbystore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/vendor/{id}/orders/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreOrdersToday',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\CityAdStoreController@cityAdStoreOrdersToday',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-ordersbystore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-arealist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaList',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaList',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-arealist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-areadd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/area/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaAdd',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaAdd',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-areadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-areanew' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/area/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaNew',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaNew',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-areanew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-areaedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/area/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaEdit',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaEdit',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-areaedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-areaupdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cityadmin/area/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaUpdate',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaUpdate',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-areaupdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cityad-areadelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cityadmin/area/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:cityadmin',
        ),
        'uses' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaDelete',
        'controller' => 'App\\Http\\Controllers\\CityAdmin\\AreaController@cityAdAreaDelete',
        'namespace' => 'CityAdmin',
        'prefix' => '/cityadmin',
        'where' => 
        array (
        ),
        'as' => 'cityad-areadelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

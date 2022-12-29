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
            '_route' => 'generated::mxu5PTfnDNhsIHsI',
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
            '_route' => 'generated::WBk0Si0M1f9mgWcQ',
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
            '_route' => 'generated::eg30NLfuaAcyKa45',
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
      '/api/bank-payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tpoo1ntlFotPoH8D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PcKZUEJcZXh9wJiN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zVBhlhWxMWXQEJPw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2M1P7mA3OvY4KVN5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gHjuv3hTfedZ7xiv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::o0nYCYXm79Qh1QnN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7yIjOEhr1vHFp00V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CCfCtXkS8BZSlxTb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gmYxvBlGoxTGGSOE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HPOMqJFLk4udfvsC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::43OVEpLSWHhXKzLS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cDi6MRJ583Z50VP6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cFjGzJwTqoTjlaiV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::B67njJeFG01tG6dQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6kesYdvVHXtdgFHg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q3fKtWpzJamq1xQ3',
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
            '_route' => 'generated::9xS61hwSSD5FclEI',
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
            '_route' => 'generated::wJ8Tk21HoamiX5Qm',
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
            '_route' => 'generated::KrxqG0EXPEP5SdLu',
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
            '_route' => 'generated::5HBykTbon2FbIUCu',
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
            '_route' => 'generated::i5OfvKjZjwwSNDID',
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
            '_route' => 'generated::qN3F7FIQ4zFAczkQ',
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
            '_route' => 'generated::10BXCDM70fc62cIS',
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
            '_route' => 'generated::iKtL4uMeC24rXHnZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U3SvhL1GzON6wWDn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8brdbgmmV8VkaNDe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QrZy8y0JasxnwVF5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZSSfzQ8PERGDV35c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WlxNI5J2rZ09JV4c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RCT0OC12Vyud7ThM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZA4wQIRnwtvZEcf6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Mbq1nttl4SPYNmdi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NL0hCCwmz6JOleh5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6oIz8ERuNIjrbuRL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Y3TQSEfPhZhGRLeT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QBZD3Kzoxe2siVSM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Uor5bwXY929h3LUQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QDP0FWxdroDrCYWS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kcBXW79bQAw068Vj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z8aCweickkI1Ojhm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TqxpaGFPDzQWJSs9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::h3XzDJcpcyPoKLns',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xNk1munplaAeVeUY',
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
            '_route' => 'generated::x81le05xGpwfnJnW',
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
            '_route' => 'generated::jFxN0YYRBWGOaxKS',
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
            '_route' => 'generated::xmRh8aoQMmwhCD02',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q8aZo44V5ihk7NzR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SSw1PDUC4Em5zkhq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VDMRU4FJmYcOxCLv',
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
            '_route' => 'generated::wwnb3YcpBMnZgE9O',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7MuASoLhCXr663ZT',
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
            '_route' => 'generated::ytfkjRI06GIFsKNS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5PF8riBRuspdRwIt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z4ebn80uAM8hxlVI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IJtSpDP2jr1eIsDJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kC1knrAtI5f0Dc5U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::j7ubWAEHR2p8RNer',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z8pbYk5NPxYRK1VX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pC3zwdnYmqEaPaPM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SdXc3YY75Joj7wh7',
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
            '_route' => 'generated::LoQTyUCJqlIqUlZP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::E704G9qf27P1EdGh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Nk5sM76AEmvfXZ1C',
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
            '_route' => 'generated::iciXZxVH1U6Yn7pJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wIBiss72yz8vIUQS',
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
            '_route' => 'generated::U4xjxWndrzA27vSZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::i7RSnzs4urYma4NB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BuY0BeqyokS4Az8R',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IH8qKkjJg4evrF1D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VFzjLvsNMMVwRWJp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tfuoNQkno2rXvWBw',
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
            '_route' => 'generated::ksGfwDDLcB2NCD04',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XbrUTXAZorSDlWTO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2tOycpdGzQ0HCNYq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dfVbqpYsoacHgO2H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RQ89YGHlRIcCrpfh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mIQKVroTcFqXu6Yq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::58EaoSNA4VilncVA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8eByFlADRGPMMiBa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ip33cFA6iCi5IjbD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Qe3NH9tdCyBiQcl9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::smTHKjiWnnu8Er5H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zwT76mRo67Tjznha',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KCaVZd5wKwjS3E7u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oIWNGy1BD9HVHQCZ',
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
            '_route' => 'generated::t2Q5FC7yUhDi2jkE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SD5WDrPiK4IyRja7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::csSdwwx9c4x7L2XG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rz5TwqUr0pDiYTHv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vlFBD42dfYp9vAGW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oJmeVVR4whjg6gJd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::php9jL17lwJ1uE22',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GQW5pK856oFLVEmN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V1rqmHcJZgat58lt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mUk6UXftZEg3Yl9U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KTo5Rad0j8iK7pa4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WpQBfjxWz8Y5m22a',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::N3vNKruIkkoL9r1d',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::u6aWCmFLOGseMbVO',
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
            '_route' => 'generated::IsgDO7b5l4l8xkpW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::w3n0HlSWeksryMjr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8S5kCTad1hGJxuKT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Jwcl4zcI9jrpjyvA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Rf0aIU4yJA9o3iPM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LD35wIVm2j5bdgDs',
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
            '_route' => 'generated::Xr4rKlu2YNlMJmy3',
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
            '_route' => 'generated::AjXqeJQ1RK45CZZj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lv7eq0z3U6ri8JgO',
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
            '_route' => 'generated::gCdRvjqUq8ATCLKz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rdj6oowhCl4oj2NE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OfXSMWleYQMvksSU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::m9bKpwTSFj7xbagB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HZ7ijsq7TYodvHaL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ygw1jYOO5cZ5jyoB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zcu80mRxSKBmkpM0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NblnlPYlhFteas0F',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4RbGoNBWhxtVwVeZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xY65NDvy95HYYStc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AJNWGjwrnImSkx33',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4BzVWBTrFojwpGZm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Sa6Waj6HoRuH5kyX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1RAqlKRd7pDrsUFN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ndIlY93t6Bnde6ZO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::07SPRF8hSK4koOPr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IxhPbTKBdUKAnSP9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Amq6wNlXVXUwC2Sz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::X3e10rP7HtLdNDSy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Z9exILqh7ogpLwmZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xgk6bZNoF8Oqn94o',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::icMeN1iyjwMVZMta',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AEkqDWYXo7Y7xfpn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fGZvMUKS633DKksO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4ik3uIJ0cVo8sHAU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wb1dmFFf8q9qmNlg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0jQ363z43ZiDdLou',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3l1tWd1s27Vzl8WP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Qvyl4DxAHBd4G1EX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zMGjeB7xl4PWTlwM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TShdcka3mk2J7PtC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oyWvGbshzAUOwi0v',
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
            '_route' => 'generated::jHnx1744rqlIvVGs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VQRMGcZVMwDLh4S4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UJZhEnWNWDZGz80F',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tj1BOVC5DGBskRi1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MBriVDbF3G3DY2Rc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::D1tGmBr2FKKqdZZe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JZpOSRY1pGZB7ycE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XAYWeGhlRbWxxhag',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Of6pgjStRbQOgLLa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nzMwoxCERW7JX4tt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8c8SuNkAMjIOuon8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::B8P9lBRsdqH7wBFf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::m7n1O4ly5rfCiX9U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fiNez0fhxVAsrLMN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ibETknK9iGAKUtDC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oCBO59GaHp3mHXp3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zcbskWgF6jEphcrL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vIhw8IV9zwl2WlwT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oQVuqWjdikBcgGQl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yjQdNRGfUqjjUh9D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ispIWKEaugsNIdNC',
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
            '_route' => 'generated::bdfV1FEKwqBrJowo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cpApPmchquxITBMK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::szIuLKPQH0OITjqI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5SoFR8xeHfbdnSpt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::18omdvVyqV5TISy6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s8SyVpC7BXspp2cv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MeeWHVCUTp1je7HB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ApoYabMhBiDxYgTs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kStPALoNmaYegiqQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::piyf3u80BgBfVbc2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qrkqnYevf06gA3iW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::16GKaTYeQz17GYXG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DPll1ck6aiPGefaD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fLS79PBXY4NMukdC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XSCIzxsSfP7pqxHO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZQ7bxd67OeMDiCI8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::A0USOP5hN1adZKkd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Zu4PrHxcHLKIIVzi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::p24z0bu6qqwJkjQs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Qjp6XmdtVfR6LeJT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4TDt7D7Wn0R74Xzi',
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
            '_route' => 'generated::C35NtzPP2bcXxKCf',
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
            '_route' => 'generated::Vaq2RWPmpv7Ga73n',
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
            '_route' => 'generated::4LoCmgH1Jftjqtcm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fGHbpfzZ3YKV87Jn',
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
      '/reward' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'RewardList',
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
      '/reward/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reward',
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
      '/reward/add/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rewardadd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reward/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rewardupate',
          ),
          1 => NULL,
          2 => 
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
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/livewire/(?|message/([^/]++)(*:110)|preview\\-file/([^/]++)(*:140))|/oauth/(?|tokens/([^/]++)(*:174)|clients/([^/]++)(?|(*:201))|personal\\-access\\-tokens/([^/]++)(*:243))|/a(?|p(?|i/stores/([^/]++)/bank\\-accounts(*:293)|proved/stores/([^/]++)(*:323))|d(?|min/(?|store/(?|edit/([^/]++)(*:365)|update/([^/]++)(*:388)|delete/([^/]++)(*:411)|orders/([^/]++)(*:434)|assign/([^/]++)(*:457))|d_boy/(?|orders/([^/]++)(*:490)|assign/([^/]++)(*:513))|reject/order/([^/]++)(*:543))|d2home/([^/]++)(*:567)))|/s(?|t(?|ore(?|s/([^/]++)/banks\\-accounts(?|(*:621)|/(?|create(*:639)|([^/]++)(?|(*:658)|/edit(*:671)|(*:679)))|(*:689))|_(?|p(?|ay/([^/]++)(*:717)|roducts/(?|approve/([^/]++)(*:752)|reject/([^/]++)(*:775)))|callbackproc/([^/]++)(*:806))|hide/([^/]++)(*:828)|unhide/([^/]++)(*:851)|/(?|s(?|e(?|c(?|ret\\-store\\-login/([^/]++)(*:901)|ondary_banner(?|edit/([^/]++)(*:938)|update/([^/]++)(*:961)|delete/([^/]++)(*:984)))|rvice_society(?|edit/([^/]++)(*:1023)|update/([^/]++)(*:1047)|delete/([^/]++)(*:1071)))|t(?|ore(?|/(?|invoice/(?|([^/]++)(*:1115)|a4/([^/]++)(*:1135))|pdf/invoice/([^/]++)(*:1165)|makeorder/([^/]++)(*:1192)|home\\-category/(?|edit/([^/]++)(*:1232)|update/([^/]++)(*:1256)|delete/([^/]++)(*:1280))|assign\\-home\\-category/(?|([^/]++)(*:1324)|insert(*:1339)|delete/([^/]++)(*:1363)))|banner(?|edit/([^/]++)(*:1396)|update/([^/]++)(*:1420)|delete/([^/]++)(*:1444)))|product/price/update/([^/]++)(*:1484)|/(?|product/(?|edit/([^/]++)(*:1521)|update/([^/]++)(*:1545)|delete/([^/]++)(*:1569))|d_boy/assign/([^/]++)(*:1600)|status/change/([^/]++)(*:1631))|_driver_callbackproc/([^/]++)(*:1670))|p(?|ecial/varient/(?|([^/]++)(*:1709)|add/(?|([^/]++)(*:1733)|new(*:1745))|edit/([^/]++)(*:1768)|update/([^/]++)(*:1792)|delete/([^/]++)(*:1816))|otlight/delete/([^/]++)(*:1849))|ocietyenable/([^/]++)(*:1880))|product/(?|delete/([^/]++)(*:1916)|stock/([^/]++)(*:1939)|order_quantity/update/([^/]++)(*:1978))|order(?|s/(?|confirm/([^/]++)(*:2017)|reject/([^/]++)(*:2041)|products/cancel/([^/]++)(*:2074))|/processed/([^/]++)(*:2103))|admin/reject/orderlist/([^/]++)(*:2144)|list/product/(?|delete_from_cart/([^/]++)(*:2194)|add_qty/([^/]++)(*:2219))|reject/order/([^/]++)(*:2250)|d(?|eal/(?|edit/([^/]++)(*:2283)|update/([^/]++)(*:2307)|delete/([^/]++)(*:2331))|_boy/(?|edit/([^/]++)(*:2362)|update/([^/]++)(*:2386)|delete/([^/]++)(*:2410)|orders/([^/]++)(*:2434)|assign/([^/]++)(*:2458))|boy_pay/([^/]++)(*:2484))|c(?|allbackproc/([^/]++)(*:2518)|oupon/(?|edit/([^/]++)(*:2549)|delete/([^/]++)(*:2573)))|Orders/Reassign/([^/]++)(*:2608)))|atus/change/([^/]++)(*:2639))|ub(?|\\-category/edit/([^/]++)(*:2678)|admin/(?|edit/([^/]++)(*:2709)|update/([^/]++)(*:2733)|delete/([^/]++)(*:2757)))|ociety/(?|edit/([^/]++)(*:2791)|delete/([^/]++)(*:2815))|ecbanner(?|edit/([^/]++)(*:2849)|update/([^/]++)(*:2873)|delete/([^/]++)(*:2897)))|/c(?|hange_pass2/([^/]++)(*:2933)|a(?|tegory/(?|edit/([^/]++)(*:2969)|update/([^/]++)(*:2993)|delete/([^/]++)(*:3017))|ncelling_reasons/(?|edit/([^/]++)(*:3060)|delete/([^/]++)(*:3084)))|ity(?|admin(?|ers/(?|edit/([^/]++)(*:3129)|update/([^/]++)(*:3153)|delete/([^/]++)(*:3177)|secretlogin/([^/]++)(*:3206))|/(?|delivery_boy/(?|edit/([^/]++)(?|(*:3252))|delete/([^/]++)(*:3277))|vendor/(?|edit/([^/]++)(?|(*:3313))|delete/([^/]++)(*:3338)|([^/]++)/orders/today(*:3368))|area/(?|edit/([^/]++)(?|(*:3402))|delete/([^/]++)(*:3427))))|/(?|edit/([^/]++)(*:3456)|delete/([^/]++)(*:3480))))|/forgot_passwordadmin/([^/]++)(*:3522)|/p(?|ro(?|file/update/([^/]++)(*:3561)|duct/(?|edit/([^/]++)(*:3591)|update/([^/]++)(*:3615)|delete/([^/]++)(*:3639)))|a(?|ssword/update/([^/]++)(*:3676)|yout_req/([^/]++)(*:3702)))|/varient/(?|([^/]++)(*:3733)|add/(?|([^/]++)(*:3757)|new(*:3769))|edit/([^/]++)(*:3792)|update/([^/]++)(*:3816)|delete/([^/]++)(*:3840))|/d(?|_boy/(?|edit/([^/]++)(*:3876)|update/([^/]++)(*:3900)|delete/([^/]++)(*:3924)|assign/([^/]++)(*:3948))|boy_pay/([^/]++)(*:3974)|river_callbackproc/([^/]++)(*:4010)|elfromhome/([^/]++)(*:4038))|/us(?|er(?|/(?|block/([^/]++)(*:4077)|u(?|nblock/([^/]++)(*:4105)|pdate/([^/]++)(*:4128))|delete/([^/]++)(*:4153)|edit/([^/]++)(*:4175)|membership/([^/]++)(*:4203))|_callbackproc/([^/]++)(*:4235))|r_recharge/([^/]++)(*:4264))|/r(?|e(?|ward/(?|edit/([^/]++)(*:4304)|delete/([^/]++)(*:4328))|quired/itemlist/(?|today/store/([^/]++)(*:4377)|store/day\\-wise/([^/]++)(*:4410)))|oles/(?|edit/([^/]++)(*:4442)|update/([^/]++)(*:4466)|delete/([^/]++)(*:4490)))|/membership/(?|edit/([^/]++)(*:4529)|update/([^/]++)(*:4553)|delete/([^/]++)(*:4577))|/t(?|ax/(?|edit/([^/]++)(*:4611)|delete/([^/]++)(*:4635))|rending_search/product/delete/([^/]++)(*:4683))|/id/(?|edit/([^/]++)(*:4713)|delete/([^/]++)(*:4737)))/?$}sDu',
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
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8FLwciPOLJCq3Cl9',
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
      323 => 
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
      365 => 
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
      388 => 
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
      411 => 
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
      434 => 
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
      457 => 
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
      490 => 
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
      513 => 
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
      543 => 
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
      567 => 
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
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.banks-accounts.index',
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
      639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.banks-accounts.create',
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
      658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.banks-accounts.show',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'banks_account',
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
      671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.banks-accounts.edit',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'banks_account',
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
      679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.banks-accounts.update',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'banks_account',
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
            '_route' => 'stores.banks-accounts.destroy',
          ),
          1 => 
          array (
            0 => 'store',
            1 => 'banks_account',
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
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stores.banks-accounts.store',
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
      717 => 
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
      752 => 
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
      775 => 
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
      806 => 
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
      828 => 
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
      851 => 
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
      901 => 
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
      938 => 
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
      961 => 
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
      984 => 
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
      1023 => 
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
      1047 => 
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
      1071 => 
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
      1115 => 
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
      1135 => 
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
      1165 => 
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
      1192 => 
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
      1232 => 
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
      1256 => 
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
      1280 => 
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
      1324 => 
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
      1339 => 
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
      1363 => 
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
      1396 => 
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
      1420 => 
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
      1444 => 
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
      1484 => 
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
      1521 => 
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
      1545 => 
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
      1569 => 
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
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1600 => 
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
      1631 => 
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
      1670 => 
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
      1709 => 
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
      1733 => 
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
      1745 => 
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
      1768 => 
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
      1792 => 
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
      1816 => 
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
      1849 => 
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
      1880 => 
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
      1916 => 
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
      1939 => 
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
      1978 => 
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
      2017 => 
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
      2041 => 
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
      2074 => 
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
      2103 => 
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
      2144 => 
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
      2194 => 
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
      2219 => 
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
      2250 => 
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
      2283 => 
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
      2307 => 
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
      2331 => 
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
      2362 => 
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
      2386 => 
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
      2410 => 
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
      2434 => 
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
      2458 => 
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
      2484 => 
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
      2518 => 
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
      2549 => 
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
      2573 => 
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
      2608 => 
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
      2639 => 
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
      2678 => 
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
      2709 => 
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
      2733 => 
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
      2757 => 
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
      2791 => 
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
      2815 => 
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
      2849 => 
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
      2873 => 
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
      2897 => 
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
      2933 => 
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
      2969 => 
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
      2993 => 
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
      3017 => 
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
      3060 => 
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
      3084 => 
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
      3129 => 
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
      3153 => 
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
      3177 => 
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
      3206 => 
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
      3252 => 
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
      3277 => 
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
      3313 => 
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
      3338 => 
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
      3368 => 
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
      3402 => 
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
      3427 => 
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
      3456 => 
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
      3480 => 
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
      3522 => 
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
      3561 => 
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
      3591 => 
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
      3615 => 
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
      3639 => 
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
      3676 => 
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
      3702 => 
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
      3733 => 
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
      3757 => 
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
      3769 => 
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
      3792 => 
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
      3816 => 
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
      3840 => 
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
      3876 => 
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
      3900 => 
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
      3924 => 
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
      3948 => 
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
      3974 => 
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
      4010 => 
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
      4038 => 
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
      4077 => 
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
      4105 => 
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
      4128 => 
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
      4153 => 
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
      4175 => 
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
      4203 => 
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
      4235 => 
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
      4264 => 
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
      4304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rewardedit',
          ),
          1 => 
          array (
            0 => 'reward_id',
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
      4328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rewarddelete',
          ),
          1 => 
          array (
            0 => 'reward_id',
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
      4377 => 
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
      4410 => 
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
      4442 => 
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
      4466 => 
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
      4490 => 
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
      4529 => 
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
      4553 => 
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
      4577 => 
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
      4611 => 
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
      4635 => 
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
      4683 => 
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
      4713 => 
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
      4737 => 
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
    'generated::mxu5PTfnDNhsIHsI' => 
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
        'as' => 'generated::mxu5PTfnDNhsIHsI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WBk0Si0M1f9mgWcQ' => 
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
        'as' => 'generated::WBk0Si0M1f9mgWcQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::eg30NLfuaAcyKa45' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009a90000000000000000";}";s:4:"hash";s:44:"zrmj/yThhZ43EWcqNyAJtT0QUsdRYGQ09zB9xUSn7Fs=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eg30NLfuaAcyKa45',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8FLwciPOLJCq3Cl9' => 
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
        'as' => 'generated::8FLwciPOLJCq3Cl9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tpoo1ntlFotPoH8D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/bank-payments',
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
        'as' => 'generated::Tpoo1ntlFotPoH8D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PcKZUEJcZXh9wJiN' => 
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
        'as' => 'generated::PcKZUEJcZXh9wJiN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zVBhlhWxMWXQEJPw' => 
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
        'as' => 'generated::zVBhlhWxMWXQEJPw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2M1P7mA3OvY4KVN5' => 
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
        'as' => 'generated::2M1P7mA3OvY4KVN5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gHjuv3hTfedZ7xiv' => 
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
        'as' => 'generated::gHjuv3hTfedZ7xiv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0nYCYXm79Qh1QnN' => 
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
        'as' => 'generated::o0nYCYXm79Qh1QnN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7yIjOEhr1vHFp00V' => 
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
        'as' => 'generated::7yIjOEhr1vHFp00V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CCfCtXkS8BZSlxTb' => 
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
        'as' => 'generated::CCfCtXkS8BZSlxTb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gmYxvBlGoxTGGSOE' => 
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
        'as' => 'generated::gmYxvBlGoxTGGSOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HPOMqJFLk4udfvsC' => 
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
        'as' => 'generated::HPOMqJFLk4udfvsC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::43OVEpLSWHhXKzLS' => 
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
        'as' => 'generated::43OVEpLSWHhXKzLS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cDi6MRJ583Z50VP6' => 
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
        'as' => 'generated::cDi6MRJ583Z50VP6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cFjGzJwTqoTjlaiV' => 
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
        'as' => 'generated::cFjGzJwTqoTjlaiV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B67njJeFG01tG6dQ' => 
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
        'as' => 'generated::B67njJeFG01tG6dQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::6kesYdvVHXtdgFHg' => 
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
        'as' => 'generated::6kesYdvVHXtdgFHg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q3fKtWpzJamq1xQ3' => 
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
        'as' => 'generated::Q3fKtWpzJamq1xQ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9xS61hwSSD5FclEI' => 
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
        'as' => 'generated::9xS61hwSSD5FclEI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wJ8Tk21HoamiX5Qm' => 
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
        'as' => 'generated::wJ8Tk21HoamiX5Qm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KrxqG0EXPEP5SdLu' => 
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
        'as' => 'generated::KrxqG0EXPEP5SdLu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5HBykTbon2FbIUCu' => 
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
        'as' => 'generated::5HBykTbon2FbIUCu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i5OfvKjZjwwSNDID' => 
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
        'as' => 'generated::i5OfvKjZjwwSNDID',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qN3F7FIQ4zFAczkQ' => 
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
        'as' => 'generated::qN3F7FIQ4zFAczkQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::10BXCDM70fc62cIS' => 
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
        'as' => 'generated::10BXCDM70fc62cIS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iKtL4uMeC24rXHnZ' => 
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
        'as' => 'generated::iKtL4uMeC24rXHnZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U3SvhL1GzON6wWDn' => 
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
        'as' => 'generated::U3SvhL1GzON6wWDn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8brdbgmmV8VkaNDe' => 
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
        'as' => 'generated::8brdbgmmV8VkaNDe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QrZy8y0JasxnwVF5' => 
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
        'as' => 'generated::QrZy8y0JasxnwVF5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZSSfzQ8PERGDV35c' => 
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
        'as' => 'generated::ZSSfzQ8PERGDV35c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WlxNI5J2rZ09JV4c' => 
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
        'as' => 'generated::WlxNI5J2rZ09JV4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RCT0OC12Vyud7ThM' => 
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
        'as' => 'generated::RCT0OC12Vyud7ThM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZA4wQIRnwtvZEcf6' => 
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
        'as' => 'generated::ZA4wQIRnwtvZEcf6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mbq1nttl4SPYNmdi' => 
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
        'as' => 'generated::Mbq1nttl4SPYNmdi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NL0hCCwmz6JOleh5' => 
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
        'as' => 'generated::NL0hCCwmz6JOleh5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6oIz8ERuNIjrbuRL' => 
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
        'as' => 'generated::6oIz8ERuNIjrbuRL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y3TQSEfPhZhGRLeT' => 
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
        'as' => 'generated::Y3TQSEfPhZhGRLeT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QBZD3Kzoxe2siVSM' => 
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
        'as' => 'generated::QBZD3Kzoxe2siVSM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::Uor5bwXY929h3LUQ' => 
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
        'as' => 'generated::Uor5bwXY929h3LUQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QDP0FWxdroDrCYWS' => 
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
        'as' => 'generated::QDP0FWxdroDrCYWS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kcBXW79bQAw068Vj' => 
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
        'as' => 'generated::kcBXW79bQAw068Vj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z8aCweickkI1Ojhm' => 
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
        'as' => 'generated::Z8aCweickkI1Ojhm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TqxpaGFPDzQWJSs9' => 
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
        'as' => 'generated::TqxpaGFPDzQWJSs9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h3XzDJcpcyPoKLns' => 
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
        'as' => 'generated::h3XzDJcpcyPoKLns',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xNk1munplaAeVeUY' => 
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
        'as' => 'generated::xNk1munplaAeVeUY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x81le05xGpwfnJnW' => 
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
        'as' => 'generated::x81le05xGpwfnJnW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jFxN0YYRBWGOaxKS' => 
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
        'as' => 'generated::jFxN0YYRBWGOaxKS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xmRh8aoQMmwhCD02' => 
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
        'as' => 'generated::xmRh8aoQMmwhCD02',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8aZo44V5ihk7NzR' => 
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
        'as' => 'generated::Q8aZo44V5ihk7NzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SSw1PDUC4Em5zkhq' => 
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
        'uses' => 'App\\Http\\Controllers\\Api\\TimeslotController@timeslot',
        'controller' => 'App\\Http\\Controllers\\Api\\TimeslotController@timeslot',
        'namespace' => 'Api',
        'prefix' => 'api/',
        'where' => 
        array (
        ),
        'as' => 'generated::SSw1PDUC4Em5zkhq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VDMRU4FJmYcOxCLv' => 
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
        'as' => 'generated::VDMRU4FJmYcOxCLv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wwnb3YcpBMnZgE9O' => 
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
        'as' => 'generated::wwnb3YcpBMnZgE9O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::7MuASoLhCXr663ZT' => 
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
        'as' => 'generated::7MuASoLhCXr663ZT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ytfkjRI06GIFsKNS' => 
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
        'as' => 'generated::ytfkjRI06GIFsKNS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5PF8riBRuspdRwIt' => 
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
        'as' => 'generated::5PF8riBRuspdRwIt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z4ebn80uAM8hxlVI' => 
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
        'as' => 'generated::Z4ebn80uAM8hxlVI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IJtSpDP2jr1eIsDJ' => 
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
        'as' => 'generated::IJtSpDP2jr1eIsDJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kC1knrAtI5f0Dc5U' => 
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
        'as' => 'generated::kC1knrAtI5f0Dc5U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j7ubWAEHR2p8RNer' => 
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
        'as' => 'generated::j7ubWAEHR2p8RNer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z8pbYk5NPxYRK1VX' => 
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
        'as' => 'generated::Z8pbYk5NPxYRK1VX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pC3zwdnYmqEaPaPM' => 
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
        'as' => 'generated::pC3zwdnYmqEaPaPM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SdXc3YY75Joj7wh7' => 
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
        'as' => 'generated::SdXc3YY75Joj7wh7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LoQTyUCJqlIqUlZP' => 
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
        'as' => 'generated::LoQTyUCJqlIqUlZP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E704G9qf27P1EdGh' => 
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
        'as' => 'generated::E704G9qf27P1EdGh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nk5sM76AEmvfXZ1C' => 
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
        'as' => 'generated::Nk5sM76AEmvfXZ1C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iciXZxVH1U6Yn7pJ' => 
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
        'as' => 'generated::iciXZxVH1U6Yn7pJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wIBiss72yz8vIUQS' => 
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
        'as' => 'generated::wIBiss72yz8vIUQS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U4xjxWndrzA27vSZ' => 
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
        'as' => 'generated::U4xjxWndrzA27vSZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i7RSnzs4urYma4NB' => 
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
        'as' => 'generated::i7RSnzs4urYma4NB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BuY0BeqyokS4Az8R' => 
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
        'as' => 'generated::BuY0BeqyokS4Az8R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IH8qKkjJg4evrF1D' => 
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
        'as' => 'generated::IH8qKkjJg4evrF1D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VFzjLvsNMMVwRWJp' => 
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
        'as' => 'generated::VFzjLvsNMMVwRWJp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tfuoNQkno2rXvWBw' => 
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
        'as' => 'generated::tfuoNQkno2rXvWBw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ksGfwDDLcB2NCD04' => 
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
        'as' => 'generated::ksGfwDDLcB2NCD04',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XbrUTXAZorSDlWTO' => 
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
        'as' => 'generated::XbrUTXAZorSDlWTO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2tOycpdGzQ0HCNYq' => 
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
        'as' => 'generated::2tOycpdGzQ0HCNYq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dfVbqpYsoacHgO2H' => 
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
        'as' => 'generated::dfVbqpYsoacHgO2H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RQ89YGHlRIcCrpfh' => 
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
        'as' => 'generated::RQ89YGHlRIcCrpfh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mIQKVroTcFqXu6Yq' => 
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
        'as' => 'generated::mIQKVroTcFqXu6Yq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::58EaoSNA4VilncVA' => 
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
        'as' => 'generated::58EaoSNA4VilncVA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8eByFlADRGPMMiBa' => 
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
        'as' => 'generated::8eByFlADRGPMMiBa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ip33cFA6iCi5IjbD' => 
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
        'as' => 'generated::Ip33cFA6iCi5IjbD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qe3NH9tdCyBiQcl9' => 
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
        'as' => 'generated::Qe3NH9tdCyBiQcl9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::smTHKjiWnnu8Er5H' => 
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
        'as' => 'generated::smTHKjiWnnu8Er5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zwT76mRo67Tjznha' => 
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
        'as' => 'generated::zwT76mRo67Tjznha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KCaVZd5wKwjS3E7u' => 
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
        'as' => 'generated::KCaVZd5wKwjS3E7u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIWNGy1BD9HVHQCZ' => 
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
        'as' => 'generated::oIWNGy1BD9HVHQCZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t2Q5FC7yUhDi2jkE' => 
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
        'as' => 'generated::t2Q5FC7yUhDi2jkE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SD5WDrPiK4IyRja7' => 
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
        'as' => 'generated::SD5WDrPiK4IyRja7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::csSdwwx9c4x7L2XG' => 
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
        'as' => 'generated::csSdwwx9c4x7L2XG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rz5TwqUr0pDiYTHv' => 
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
        'as' => 'generated::rz5TwqUr0pDiYTHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vlFBD42dfYp9vAGW' => 
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
        'as' => 'generated::vlFBD42dfYp9vAGW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oJmeVVR4whjg6gJd' => 
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
        'as' => 'generated::oJmeVVR4whjg6gJd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::php9jL17lwJ1uE22' => 
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
        'as' => 'generated::php9jL17lwJ1uE22',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GQW5pK856oFLVEmN' => 
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
        'as' => 'generated::GQW5pK856oFLVEmN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V1rqmHcJZgat58lt' => 
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
        'as' => 'generated::V1rqmHcJZgat58lt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mUk6UXftZEg3Yl9U' => 
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
        'as' => 'generated::mUk6UXftZEg3Yl9U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KTo5Rad0j8iK7pa4' => 
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
        'as' => 'generated::KTo5Rad0j8iK7pa4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WpQBfjxWz8Y5m22a' => 
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
        'as' => 'generated::WpQBfjxWz8Y5m22a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N3vNKruIkkoL9r1d' => 
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
        'as' => 'generated::N3vNKruIkkoL9r1d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u6aWCmFLOGseMbVO' => 
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
        'as' => 'generated::u6aWCmFLOGseMbVO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IsgDO7b5l4l8xkpW' => 
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
        'as' => 'generated::IsgDO7b5l4l8xkpW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w3n0HlSWeksryMjr' => 
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
        'as' => 'generated::w3n0HlSWeksryMjr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8S5kCTad1hGJxuKT' => 
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
        'as' => 'generated::8S5kCTad1hGJxuKT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jwcl4zcI9jrpjyvA' => 
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
        'as' => 'generated::Jwcl4zcI9jrpjyvA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rf0aIU4yJA9o3iPM' => 
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
        'as' => 'generated::Rf0aIU4yJA9o3iPM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LD35wIVm2j5bdgDs' => 
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
        'as' => 'generated::LD35wIVm2j5bdgDs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xr4rKlu2YNlMJmy3' => 
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
        'as' => 'generated::Xr4rKlu2YNlMJmy3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AjXqeJQ1RK45CZZj' => 
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
        'as' => 'generated::AjXqeJQ1RK45CZZj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lv7eq0z3U6ri8JgO' => 
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
        'as' => 'generated::Lv7eq0z3U6ri8JgO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gCdRvjqUq8ATCLKz' => 
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
        'as' => 'generated::gCdRvjqUq8ATCLKz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rdj6oowhCl4oj2NE' => 
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
        'as' => 'generated::rdj6oowhCl4oj2NE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OfXSMWleYQMvksSU' => 
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
        'as' => 'generated::OfXSMWleYQMvksSU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m9bKpwTSFj7xbagB' => 
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
        'as' => 'generated::m9bKpwTSFj7xbagB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HZ7ijsq7TYodvHaL' => 
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
        'as' => 'generated::HZ7ijsq7TYodvHaL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ygw1jYOO5cZ5jyoB' => 
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
        'as' => 'generated::Ygw1jYOO5cZ5jyoB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zcu80mRxSKBmkpM0' => 
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
        'as' => 'generated::zcu80mRxSKBmkpM0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NblnlPYlhFteas0F' => 
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
        'as' => 'generated::NblnlPYlhFteas0F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4RbGoNBWhxtVwVeZ' => 
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
        'as' => 'generated::4RbGoNBWhxtVwVeZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xY65NDvy95HYYStc' => 
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
        'as' => 'generated::xY65NDvy95HYYStc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AJNWGjwrnImSkx33' => 
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
        'as' => 'generated::AJNWGjwrnImSkx33',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4BzVWBTrFojwpGZm' => 
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
        'as' => 'generated::4BzVWBTrFojwpGZm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sa6Waj6HoRuH5kyX' => 
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
        'as' => 'generated::Sa6Waj6HoRuH5kyX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1RAqlKRd7pDrsUFN' => 
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
        'as' => 'generated::1RAqlKRd7pDrsUFN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ndIlY93t6Bnde6ZO' => 
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
        'as' => 'generated::ndIlY93t6Bnde6ZO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::07SPRF8hSK4koOPr' => 
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
        'as' => 'generated::07SPRF8hSK4koOPr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IxhPbTKBdUKAnSP9' => 
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
        'as' => 'generated::IxhPbTKBdUKAnSP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Amq6wNlXVXUwC2Sz' => 
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
        'as' => 'generated::Amq6wNlXVXUwC2Sz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X3e10rP7HtLdNDSy' => 
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
        'as' => 'generated::X3e10rP7HtLdNDSy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z9exILqh7ogpLwmZ' => 
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
        'as' => 'generated::Z9exILqh7ogpLwmZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xgk6bZNoF8Oqn94o' => 
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
        'as' => 'generated::xgk6bZNoF8Oqn94o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::icMeN1iyjwMVZMta' => 
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
        'as' => 'generated::icMeN1iyjwMVZMta',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AEkqDWYXo7Y7xfpn' => 
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
        'as' => 'generated::AEkqDWYXo7Y7xfpn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fGZvMUKS633DKksO' => 
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
        'as' => 'generated::fGZvMUKS633DKksO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ik3uIJ0cVo8sHAU' => 
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
        'as' => 'generated::4ik3uIJ0cVo8sHAU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wb1dmFFf8q9qmNlg' => 
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
        'as' => 'generated::wb1dmFFf8q9qmNlg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0jQ363z43ZiDdLou' => 
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
        'as' => 'generated::0jQ363z43ZiDdLou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3l1tWd1s27Vzl8WP' => 
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
        'as' => 'generated::3l1tWd1s27Vzl8WP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qvyl4DxAHBd4G1EX' => 
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
        'as' => 'generated::Qvyl4DxAHBd4G1EX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zMGjeB7xl4PWTlwM' => 
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
        'as' => 'generated::zMGjeB7xl4PWTlwM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TShdcka3mk2J7PtC' => 
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
        'as' => 'generated::TShdcka3mk2J7PtC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oyWvGbshzAUOwi0v' => 
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
        'as' => 'generated::oyWvGbshzAUOwi0v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jHnx1744rqlIvVGs' => 
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
        'as' => 'generated::jHnx1744rqlIvVGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VQRMGcZVMwDLh4S4' => 
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
        'as' => 'generated::VQRMGcZVMwDLh4S4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UJZhEnWNWDZGz80F' => 
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
        'as' => 'generated::UJZhEnWNWDZGz80F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tj1BOVC5DGBskRi1' => 
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
        'as' => 'generated::tj1BOVC5DGBskRi1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MBriVDbF3G3DY2Rc' => 
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
        'as' => 'generated::MBriVDbF3G3DY2Rc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1tGmBr2FKKqdZZe' => 
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
        'as' => 'generated::D1tGmBr2FKKqdZZe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JZpOSRY1pGZB7ycE' => 
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
        'as' => 'generated::JZpOSRY1pGZB7ycE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XAYWeGhlRbWxxhag' => 
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
        'as' => 'generated::XAYWeGhlRbWxxhag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Of6pgjStRbQOgLLa' => 
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
        'as' => 'generated::Of6pgjStRbQOgLLa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nzMwoxCERW7JX4tt' => 
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
        'as' => 'generated::nzMwoxCERW7JX4tt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8c8SuNkAMjIOuon8' => 
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
        'as' => 'generated::8c8SuNkAMjIOuon8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B8P9lBRsdqH7wBFf' => 
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
        'as' => 'generated::B8P9lBRsdqH7wBFf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m7n1O4ly5rfCiX9U' => 
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
        'as' => 'generated::m7n1O4ly5rfCiX9U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fiNez0fhxVAsrLMN' => 
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
        'as' => 'generated::fiNez0fhxVAsrLMN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ibETknK9iGAKUtDC' => 
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
        'as' => 'generated::ibETknK9iGAKUtDC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oCBO59GaHp3mHXp3' => 
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
        'as' => 'generated::oCBO59GaHp3mHXp3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zcbskWgF6jEphcrL' => 
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
        'as' => 'generated::zcbskWgF6jEphcrL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vIhw8IV9zwl2WlwT' => 
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
        'as' => 'generated::vIhw8IV9zwl2WlwT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oQVuqWjdikBcgGQl' => 
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
        'as' => 'generated::oQVuqWjdikBcgGQl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yjQdNRGfUqjjUh9D' => 
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
        'as' => 'generated::yjQdNRGfUqjjUh9D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ispIWKEaugsNIdNC' => 
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
        'as' => 'generated::ispIWKEaugsNIdNC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bdfV1FEKwqBrJowo' => 
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
        'as' => 'generated::bdfV1FEKwqBrJowo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cpApPmchquxITBMK' => 
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
        'as' => 'generated::cpApPmchquxITBMK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::szIuLKPQH0OITjqI' => 
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
        'as' => 'generated::szIuLKPQH0OITjqI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5SoFR8xeHfbdnSpt' => 
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
        'as' => 'generated::5SoFR8xeHfbdnSpt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::18omdvVyqV5TISy6' => 
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
        'as' => 'generated::18omdvVyqV5TISy6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s8SyVpC7BXspp2cv' => 
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
        'as' => 'generated::s8SyVpC7BXspp2cv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MeeWHVCUTp1je7HB' => 
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
        'as' => 'generated::MeeWHVCUTp1je7HB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ApoYabMhBiDxYgTs' => 
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
        'as' => 'generated::ApoYabMhBiDxYgTs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kStPALoNmaYegiqQ' => 
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
        'as' => 'generated::kStPALoNmaYegiqQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::piyf3u80BgBfVbc2' => 
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
        'as' => 'generated::piyf3u80BgBfVbc2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qrkqnYevf06gA3iW' => 
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
        'as' => 'generated::qrkqnYevf06gA3iW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16GKaTYeQz17GYXG' => 
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
        'as' => 'generated::16GKaTYeQz17GYXG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DPll1ck6aiPGefaD' => 
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
        'as' => 'generated::DPll1ck6aiPGefaD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fLS79PBXY4NMukdC' => 
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
        'as' => 'generated::fLS79PBXY4NMukdC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XSCIzxsSfP7pqxHO' => 
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
        'as' => 'generated::XSCIzxsSfP7pqxHO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQ7bxd67OeMDiCI8' => 
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
        'as' => 'generated::ZQ7bxd67OeMDiCI8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A0USOP5hN1adZKkd' => 
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
        'as' => 'generated::A0USOP5hN1adZKkd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zu4PrHxcHLKIIVzi' => 
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
        'as' => 'generated::Zu4PrHxcHLKIIVzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p24z0bu6qqwJkjQs' => 
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
        'as' => 'generated::p24z0bu6qqwJkjQs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qjp6XmdtVfR6LeJT' => 
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
        'as' => 'generated::Qjp6XmdtVfR6LeJT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4TDt7D7Wn0R74Xzi' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000a640000000000000000";}";s:4:"hash";s:44:"xpkUMICs6niTpmb+5rwIgToaPsWW6DVdehFF74b6wBI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4TDt7D7Wn0R74Xzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::C35NtzPP2bcXxKCf' => 
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
        'as' => 'generated::C35NtzPP2bcXxKCf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vaq2RWPmpv7Ga73n' => 
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
        'as' => 'generated::Vaq2RWPmpv7Ga73n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::4LoCmgH1Jftjqtcm' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000a6f0000000000000000";}";s:4:"hash";s:44:"/TI6Ma8r0ZmwGiH34TbXzAGnf2lcaZZJaNIQ4xcYqgI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4LoCmgH1Jftjqtcm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stores.banks-accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/banks-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.index',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@index',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@index',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'stores.banks-accounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/banks-accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.create',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@create',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@create',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'stores.banks-accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stores/{store}/banks-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.store',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@store',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@store',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'stores.banks-accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/banks-accounts/{banks_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.show',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@show',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@show',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'stores.banks-accounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stores/{store}/banks-accounts/{banks_account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.edit',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@edit',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@edit',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'stores.banks-accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stores/{store}/banks-accounts/{banks_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.update',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@update',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@update',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'stores.banks-accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stores/{store}/banks-accounts/{banks_account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
        ),
        'as' => 'stores.banks-accounts.destroy',
        'uses' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@destroy',
        'controller' => 'Admin\\App\\Http\\Controllers\\Store\\BankAccountController@destroy',
        'namespace' => 'Admin',
        'prefix' => '/',
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
    'generated::fGHbpfzZ3YKV87Jn' => 
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
        'as' => 'generated::fGHbpfzZ3YKV87Jn',
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
    'RewardList' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reward',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RewardController@RewardList',
        'controller' => 'App\\Http\\Controllers\\Admin\\RewardController@RewardList',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'RewardList',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reward' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reward/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RewardController@reward',
        'controller' => 'App\\Http\\Controllers\\Admin\\RewardController@reward',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'reward',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rewardadd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reward/add/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RewardController@rewardadd',
        'controller' => 'App\\Http\\Controllers\\Admin\\RewardController@rewardadd',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'rewardadd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rewardedit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reward/edit/{reward_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RewardController@rewardedit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RewardController@rewardedit',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'rewardedit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rewardupate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reward/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RewardController@rewardupate',
        'controller' => 'App\\Http\\Controllers\\Admin\\RewardController@rewardupate',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'rewardupate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rewarddelete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reward/delete/{reward_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verifylicense',
          2 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RewardController@rewarddelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\RewardController@rewarddelete',
        'namespace' => 'Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'rewarddelete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        0 => 'GET',
        1 => 'HEAD',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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
        'namespace' => 'Store',
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

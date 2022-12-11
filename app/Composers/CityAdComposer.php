<?php 

namespace App\Composers;

use Session;
use Hash;
use App\Models\CityAdUser as User;

class CityAdComposer
{
    public function compose($view)
    {
        if(Session::has('bamaCityAdmin')){
            $citadmin_email = Session::get('bamaCityAdmin');
            /* $user=User::where('email', $citadmin_email); */
            dd($citadmin_email);
            die();
            $view->with('cityadmin_name', $user->email);
        }
    }
}

?>
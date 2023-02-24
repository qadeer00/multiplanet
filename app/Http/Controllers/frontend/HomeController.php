<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.index');
    }
    public function about(){

        return view('frontend.about-us');
    }
    public function alrah(){

        return view('frontend.al-rah');
    }
    public function alreem(){

        return view('frontend.al-reem');
    }
    public function career(){

        return view('frontend.careers');
    }
    public function clubhouse(){

        return view('frontend.clubhouse-and-lifestyle');
    }
    public function consultency(){

        return view('frontend.consultency-services');
    }
    public function contact(){

        return view('frontend.contact-us');
    }
    public function cookie(){

        return view('frontend.cookie-policy');
    }
    public function corporate(){

        return view('frontend.corporate-social-responsibility');
    }
    public function leadership(){

        return view('frontend.leadership-team');
    }
    public function leasing(){

        return view('frontend.leasing');
    }
    public function media(){

        return view('frontend.media');
    }
    public function client(){

        return view('frontend.our-clients');
    }
    public function values(){

        return view('frontend.our-values');
    }
    public function vision(){

        return view('frontend.our-vision-and-mission');
    }
    public function owner(){

        return view('frontend.owners-association');
    }
    public function privacy(){

        return view('frontend.privacy-policy');
    }
    public function propertymanagement(){
        return view('frontend.property-management');

        
    }
    public function propertysearch(){

        return view('frontend.property-search');
    }
    public function saadiyatisland(){

        return view('frontend.saadiyat-island');
    }
    public function signin(){

        return view('frontend.signin');
      
    }
    public function terms(){
        return view('frontend.terms-condition');

    }
    public function yasisland(){

        
    }
   
    
}

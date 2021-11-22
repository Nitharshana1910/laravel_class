<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function myInfo(){
        // return 'welcome to controller';
        return view('about');
    }
    public function fullName(){
        return 'nitharshana';
    }

    public function total(){
        $x=20;
        $y=10;
        $z=$x+$y;
        return ($x>$y) ?"pass":"fail";
    }

    public function profile($fname='saji',$lname='mahe'){
        return 'full name is <b>'.$fname.' '.$lname.'</b>';
    }

    public function colourPage($page='contact',$color='red'){
        return '<i style="color:'.$color.';">welcome to '.$page.' page</i>';
    }

    public function cube($number=5){
        $cube =  $number*$number*$number;  
        return '<h3>Cube of <b style="color:blue">'.$number.'</b> is: <b style="color:blue">'.$cube.'</b></h3>';      
    }

    public function customFont($font='Arial', $size=1.5){
        return '<p style="font-family:'.$font.';font-size:'.$size.'em;">Welcome to custom page!</p>';
    }
    
}

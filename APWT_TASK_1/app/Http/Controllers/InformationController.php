<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function teams()
    {
        $teams = array
        (
            'name'=>'',
            'designation'=>'',
            'facebook'=>'',
            'linkedin'=>'',
            'picture'=>''
            
        );

        $all_member_portfolio = array();

        $teams['name'] = 'Syed Syfuzzaman';
        $teams['designation'] = 'Chairman';
        $teams['facebook'] = '#';
        $teams['linkedin'] = '#';
        $teams['picture'] = 'assets/img/team/ador.jpg';

        $all_member_portfolio[0] = $teams;

        return view('portfolio')->with('all_member_portfolio', $all_member_portfolio);
    }

}

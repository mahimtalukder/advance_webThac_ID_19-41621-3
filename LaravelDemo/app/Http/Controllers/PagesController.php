<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function index()
    {
        return view('indexPage');
    }

    public function aboutMe()
    {
        return view('aboutMe');
    }

    public function portfolio()
    {
        $Portfolio = array
        (
           'course_title'=>'',
            'class_name'=>'',
            'name'=>'',
            'type'=>'',
            'details1'=>'',
            'details2'=>'',
            'date'=>'',
            'download_link'=>'',
            'picture'=>''
            
        );

        $all_portfolio = array();

        $Portfolio['course_title'] = 'Jave';
        $Portfolio['class_name'] = 'jave';
        $Portfolio['name'] = 'Library Management System';
        $Portfolio['type'] = 'Java project';
        $Portfolio['details1'] = 'TBA';
        $Portfolio['details2'] = 'TBA';
        $Portfolio['date'] = 'May, 2020';
        $Portfolio['download_link'] = 'https://github.com/mahimtalukder/java_project';
        $Portfolio['picture'] = 'img/portfolio/java.jpg';

        $all_portfolio[0] = $Portfolio;

        $Portfolio['course_title'] = 'C#';
        $Portfolio['class_name'] = 'c_sharp';
        $Portfolio['name'] = 'AAME';
        $Portfolio['type'] = 'C# project';
        $Portfolio['details1'] = 'TBA';
        $Portfolio['details2'] = 'TBA';
        $Portfolio['date'] = 'May, 2021';
        $Portfolio['download_link'] = 'https://github.com/mahimtalukder/AAME';
        $Portfolio['picture'] = 'img/portfolio/AAME.png';

        $all_portfolio[1] = $Portfolio;

        $Portfolio['course_title'] = 'Web Technologies';
        $Portfolio['class_name'] = 'Web_technologies';
        $Portfolio['name'] = 'E Learning Web App';
        $Portfolio['type'] = 'Web Technologies project';
        $Portfolio['details1'] = 'TBA';
        $Portfolio['details2'] = 'TBA';
        $Portfolio['date'] = 'December, 2021';
        $Portfolio['download_link'] = 'https://github.com/mahimtalukder/webthac_ID_19-41621-3/tree/main/Final%20Project';
        $Portfolio['picture'] = 'img/portfolio/Web_thac.jpg';

        $all_portfolio[2] = $Portfolio;

        

        return view('portfolio')->with('all_portfolio', $all_portfolio);
    }

    public function contact()
    {
        return view('contact');
    }

}

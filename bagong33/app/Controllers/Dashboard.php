<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('part_adm/header');
        echo view('part_adm/top_menu');
        echo view('party_adm/side_menu');
        echo view('dashobard');
        echo view('part_adm/footer');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;                                             //使用Project的model

class ProjectsController extends Controller
{
    public function index()                                  //建立名為index的function
    {
        $projects = Project::all();                          //用變數代替資料庫資料

        return view('index', compact('projects'));           //回傳變數到view
    }
}

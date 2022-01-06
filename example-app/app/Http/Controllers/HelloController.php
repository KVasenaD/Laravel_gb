<?php
namespace App\Http\Controllers;


class HelloController extends Controller
{
    public function index()
    {
      echo "Рады приветствовать вас на 
      агрегаторе новостей";
      exit;
    }
}
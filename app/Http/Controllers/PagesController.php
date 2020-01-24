<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Controlleur de chargement de la page 
class PagesController extends Controller
{

    //Connexion à l'application

	public function login(){
		return view('auth.login.login');
	}

	// page d''accueil pour le Dashboard
	public function home(){

		return view('dashboard.index');
	}

// Chargement de l'enseignents

	public function enseig(){

		return view('enseignants.enseig');
	}


}

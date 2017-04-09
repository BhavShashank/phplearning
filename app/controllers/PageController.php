<?php
	namespace App\Controllers;
	class PageController {
		public function home() {
			return view('index');
		}
		public function about() {
			return view('about', ['company'=>'Bhav Studios']);
		}
		public function contact() {
			return view('contact');
		}
	}
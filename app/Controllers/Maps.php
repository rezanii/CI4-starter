<?php
		namespace App\Controllers;
		use App\Controllers\BaseController;
		class Maps extends BaseController
		{
			public function index()
			{
				$data = array_merge($this->data, [
					'title' 	=> 'Maps Page'
				]);
				return view('maps/maps', $data);
			}
		}
		
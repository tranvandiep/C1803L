<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {
	public function abc(Request $request) {
		# code...
		echo $request->param1;
		echo '<br/>';
		echo $request->param2;
	}

	public function aaa(Request $request, $p1, $p2) {
		# code...
		// $input = $request->all();
		// var_dump($input);
		echo $p1;
	}

	public function view(Request $request) {
		# code...
		return view('test');
	}

	public function demo(Request $request) {
		# code...
		//logic - ....
		return redirect('/test/view');
	}

	public function list(Request $request) {
		# code...
		$dataList = [];
		for ($i = 0; $i < 100; $i++) {
			$dataList[] = [
				'no'       => $i,
				'username' => 'A'.$i,
				'email'    => 'a'.$i.'@gmail.com'
			];
		}
		return view('list')->with([
				'dataList' => $dataList
			]);
	}

	public function list1(Request $request) {
		# code...
		$dataList = [];
		for ($i = 0; $i < 100; $i++) {
			$dataList[] = [
				'no'       => $i,
				'username' => 'A'.$i,
				'email'    => 'a'.$i.'@gmail.com'
			];
		}
		return view('list1')->with([
				'dataList' => $dataList
			]);
	}
}

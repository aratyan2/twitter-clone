<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TimelineController extends Controller{
	public function showTimelinePage(Request $request, Response $response) {
//        $html=";//htmlの内容は割愛";
//        $response->setContent($html);
//        return $response;

	   return view('timeline', [
		   'image_url' => 'https://thumb.ac-illust.com/77/77d8905d1a9192f70ecacde86aae5de6_t.jpeg',
			'name' => '田中太郎',
		]);


	}

	public function postTweet(Request $request, Response $response) {

//	   $tweet = $request->input('tweet');
//	   $image_url = $request->input('image_url');
//	   $html = <<<EOF
//	   <html>
//	   <head><title>Access</title></head>
//	   <h3>Tweet</h3>
//EOF;
//			   $tweet.
//		<<<EOF
//			   <img src="
//EOF;
//			   $image_url.
//		<<<EOF
//		
//		" width="40%" height="auto">
//EOF;
//		<<<EOF
//	   </pre>
//	   </body>
//	   </html>
//EOF;
//	  $response->setContent($html);
//	   return $response;


	}

	public function showEditUserPage()
	{
		return view('edit',[
			'image_url' => 'https://thumb.ac-illust.com/77/77d8905d1a9192f70ecacde86aae5de6_t.jpeg',
		]);
	}

	//
}

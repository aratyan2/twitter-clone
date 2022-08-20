<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EditUserController extends Controller
{
   public function showEditUserPage()
    {
        return view('edit');
    }

    public function editComplete(Request $request, Response $response)
    {        
//       $param = $request->except('image_url','_token');
//       $output = implode('</br>', $param);
//       $image_url = $request->input('image_url');
//       $html = <<<EOF
//       <html>
//       <head><title>Access</title></head>
//       <h3>User</h3>
//       <p>
//EOF;
//      $output.
//                <<<EOF
//       </p>
//       <img src="
//EOF;
//       
//       $image_url.
//                <<<EOF
//               " width="40%" height="auto">
//               </body>
//               </html>
//EOF;
//              $response->setContent($html);
//       return $response;
    }


    //
}

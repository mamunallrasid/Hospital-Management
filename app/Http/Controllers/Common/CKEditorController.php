<?php
namespace App\Http\Controllers\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class CKEditorController extends Controller
{
    public function fileUpload(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName,PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName."-".time().'.'.$extension;
            $request->file('upload')->move(public_path('media',),$fileName);
            $url = asset('media/'.$fileName);
            return response()->json([
                'filename'=> $fileName,
                'uploaded'=> 1,
                'url'=> $url
            ]);
        }
    }
}
?>

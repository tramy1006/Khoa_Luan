<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Redirect;
use League\Flysystem\Dropbox\DropboxAdapter;
use League\Flysystem\Filesystem;
use Dropbox\Client;
use Dropbox\WriteMode;

class dropController extends Controller
{
    public function dropboxUpload()
 {
  return view('admin.droboxUpload');
 }
 
    public function dropboxFileUpload()
        {       
         $Client = new Client(env('DROPBOX_TOKEN'), env('DROPBOX_SECRET'));
         $file = fopen(Input::file('image'), 'rb');
         $size = filesize(Input::file('image'));
         $dropboxFileName = '/'.Input::file('image')->getClientOriginalName();
         $Client->uploadFile($dropboxFileName,WriteMode::add(),$file, $size);
         //$links['share'] = $Client->createShareableLink($dropboxFileName);
         $links = $Client->createTemporaryDirectLink($dropboxFileName);
         //$links = $client->createShareableLink($dropboxPath)
         //print_r($links); 
         return view('admin.droboxUpload', ['links'=>$links]);
         

         
         }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
class CommentController extends Controller
{
    public function getDelete($id, $less_id)
    {
    	$cmt = Comment::find($id);
    	$cmt->delete();
    	return redirect('/lesson/edit/'.$less_id)->with('thongbao', 'Xóa comment thành công');
    }
}

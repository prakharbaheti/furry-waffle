<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Category;

class chatController extends Controller
{
    public function __invoke()
    {
        return 'its working';


    }


    public function show($username)
    {   $post=Category::all();
        return view('chat.mainchat',['username'=>$username,'post'=>$post]);


    }

    public function post()
    {
        $text=Input::get('text');

        $new=new Category;
        $new->name=$text;
        $new->save();
       return ($id=Category::pluck('id')->last());


    }
    public function update()
    {
        $id1=Category::pluck('id')->last();
        $id=Input::get('id');
        if($id==null)
        {
//            return false
            return json_encode(Category::all());

        }
        if(!($id==$id1))
        {
            return json_encode(Category::where('id','>',$id)->get());

        }
        else{return false;}


    }
}

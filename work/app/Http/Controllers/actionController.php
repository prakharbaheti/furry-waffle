<?php
namespace App\Http\Controllers;
use App\NiceAction;
use Symfony\Component\HttpFoundation\Request;

class actionController extends Controller
{

        public function getHome()
        {
            $actions=NiceAction::all();
            return view('prakhar',['actions'=>$actions]);


        }



        public function wish($action,$name=null)
        {
            return view('actions/'.$action,['name'=>$name]);


        }

        public function post(Request $Req)
        {
                  $this->validate($Req,[
                      'action'=>'required',
                      'text'  => 'required|alpha' ]);
                    return view('actions/nice',['action'=>$Req['action'], 'text'=>$Req['text']]);



        }
        public  function abc()
        {
            return 'its working';
        }

}

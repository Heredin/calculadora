<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
      public function calculatefunc(Request $request){
          $operator =$request->input('operator');
          $first_num =$request->input('first');
          $second_num =$request->input('second');
          $result=0;
          if($operator =='plus'){
              $result =$first_num +$second_num;

          }else if($operator =='minus'){
            $result =$first_num -$second_num;
          }else if($operator =='multiply'){
            $result =$first_num *$second_num;
          }else if($operator =='divide'){
            $result =$first_num /$second_num;
          }else{
              $result=0;
          }

          return redirect('/')->with('info','El resultado es '.$result);
      }
     public function showForm(){
         return view('welcome');
     }
     public function store(){
        return 'Guardado';
    }
}

<?php

namespace INTEGRATEITM\Http\Controllers;

use Illuminate\Http\Request;

use INTEGRATEITM\User;
use INTEGRATEITM\Publication;



class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', ['user'=> $user]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('publications.index');
    }
    
    public function edit($id)
    {        $user=User::findOrFail($id);  
        return view('user.edit',['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|min:5'
          ]);    
          $user=User::findOrFail($id);    
          $user->name=$request->name;
          $user->email=$request->email;   
          $user->password=bcrypt($request->password);
          $user->save();   
          return redirect()->route('publications.index');
    }
}

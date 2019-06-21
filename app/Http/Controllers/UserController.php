<?php

namespace INTEGRATEITM\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use INTEGRATEITM\User;
use INTEGRATEITM\Role;
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
    public function manageUser(){
        
        $users=User::all();
        $roles = Role::get();
        return view('user.manageUser', compact('users','roles') );        
    }

    public function updateRole( $id,$roleId){ 
     $user=User::findOrFail($id);    
    $role= Role::findOrFail($roleId);
    
    if($role->id===1){
        $user
        ->roles()
        ->detach(Role::where('name', 'user')->first());

         $user
        ->roles()
        ->attach(Role::where('name', 'admin')->first());

        $user->save();
    }
        else{
            $user
            ->roles()
            ->detach(Role::where('name', 'admin')->first());
    
             $user
            ->roles()
            ->attach(Role::where('name', 'user')->first());
    
            $user->save();            
        }
        return redirect()->route('publications.index');
    }
}

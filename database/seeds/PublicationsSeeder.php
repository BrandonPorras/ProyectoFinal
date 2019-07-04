<?php

use Illuminate\Database\Seeder;
use INTEGRATEITM\Publication;
use INTEGRATEITM\User;

class PublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();

        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();

        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();

        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();

        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();

        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();

        $publication = new Publication();
        $publication->titulo  = 'titulo Prueba';        
        $publication->text = 'Este texto representa la descripcion de una publicacion
        texto solo de pruebas, texto solo de pruebas';        
        $publication->categoria ='Others';         
       

        $publication->img=time() .'imagenPrueba.jpg';
        $publication->state='1';

        $user = User::where('name', 'admin')->first();
        $publication->user_id=$user->id;
       
        $publication->user()->associate($user);     

        $publication->save();


       

       
    }
}

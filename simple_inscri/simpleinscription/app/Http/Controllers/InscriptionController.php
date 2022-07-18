<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InscriptionMail;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{
    public function sendRequest(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'phone'      => 'required',
            'adress'     => 'required',
            'country'     => 'required',
            'email'      => 'required|string|email|max:255',
        ]);

        $title = "Nouvelle Inscription (Pas encore confirmée)";
        $content = "Vous avez reçu une nouvelle inscription de la part de $request->first_name $request->last_name .Cette inscription n'a pas encore été confirmer par l'intéressé.e .Voici ses contacts: $request->email , $request->phone.Adresse:$request->country , $request->adress";
 
        $data =[
            'title' => $title,
            'content' => $content,
        ];

       $datas ="$request->first_name;$request->last_name;$request->phone;$request->adress;$request->email;$request->country"; 

        Mail::to('contact@innov.com')->send(new InscriptionMail($data));

        return redirect()->route('decision',['data'=> $datas])->with('success','Inscription envoyée. Vous devez confirmer votre inscription en suivant les consignes si dessous !');

    }

    public function decision($data){
       

        $user_data = explode(';',$data);
     

        return view('inscription.decision',['data' => $data]); 
    }

    public function index_inscription(){
        
        return view('inscription.index');
    }

    public function confirm_inscription(Request $request , $datas){

        $data  = explode(';',$datas);
        $title = "Nouvelle Inscription (Confirmée)";
        $content = "L'inscription de $data[0] $data[1] a été confirmer .Voici ses contacts: $data[4] , $data[2]. Adresse:$data[5] $data[3]";
 
        $data =[
            'title' => $title,
            'content' => $content,
        ];
        Mail::to('contact@innov.com')->send(new InscriptionMail($data));

        return view('inscription.confirm_inscription');
    }

    public function no_confirm_inscription($datas){
     
        $data  = explode(';',$datas);
      
        $title = "Nouvelle Inscription (En attente de confirmation)";
        $content = "L'inscription de $data[0] $data[1] n'a pas été confirmer .Voici ses contacts: $data[4] , $data[2]. Adresse:$data[5] $data[3]";
 
        $data_message =[
            'title' => $title,
            'content' => $content,
        ];
        Mail::to('contact@innov.com')->send(new InscriptionMail($data_message));
      
        $title = "(En attente de confirmation)";
        $content = "$data[0] $data[1] Votre inscrption a bien été envoyer mais elle n'est pas encore confirmée .Au cas ou vous voudriez confirmer votre inscription , veuillez nous contacter pour savoir comment procéder.";
 
        $data_message =[
            'title' => $title,
            'content' => $content,
        ];
        Mail::to($data[4])->send(new InscriptionMail($data_message));


        return redirect()->route('inscription')->with('success','Votre inscription a bien été envoyer mais pas encore confirmée');

    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
    //Get All Utilisateur
    function listAllUtilisateur()
    {
        // $utilisateurs = DB::select('select * from utilisateur');
        $data = Utilisateur::all();
        if (!empty($data )) {
            return ["status"=> '200', "data" => $data];
         }else {
            return [ "status"=> '204',"data" => [], ];
         }
    }

     //Get Utilisateur by id
     function UtilisateurFindBy(Request $request)
     {
         if (isset($request->id)) {
             # code...
            $id = $request->id;
         }

         $data = Utilisateur::find($id);
         if (!empty($data )) {
            return ["status"=> '200', "data" => $data];
         }else {
            return [ "status"=> '204',"data" => [], ];
         }
         
     }

     //Post All Utilisateur
    public function create(Request $req, $id)
    {
        $user = new Utilisateur();
        

        
        error_log("request intercept successfully");
        error_log($id);
        return [];
     
        // try {
        //     //code...
        //     $user->nom = $body->nom;
        //     $user->prenom = $body->prenom;
        //     $user->email = $body->email;
        //     $user->contact = $body->contact; 
        //     $user->password = $body->password;
        //     $user->remember_token = $body->remember_token;
        //     Log::info($user);
        //     $data = $user->save();
        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return ["status"=> '500',"message"=> 'Une erreur est survenue', "data" => []];
        // }
       
        //  if (!empty($data )) {
        //     return ["status"=> '200',"message"=> 'Utilisateur crée avec succes', "data" => $data];
        //  }else {
        //     return [ "status"=> '204',"data" => [], ];
        //  }
    }

}
     // switch (json_last_error()) {
        //     case JSON_ERROR_NONE:
        //         echo ' - Aucune erreur';
        //     break;
        //     case JSON_ERROR_DEPTH:
        //         echo ' - Profondeur maximale atteinte';
        //     break;
        //     case JSON_ERROR_STATE_MISMATCH:
        //         echo ' - Inadéquation des modes ou underflow';
        //     break;
        //     case JSON_ERROR_CTRL_CHAR:
        //         echo ' - Erreur lors du contrôle des caractères';
        //     break;
        //     case JSON_ERROR_SYNTAX:
        //         echo ' - Erreur de syntaxe ; JSON malformé';
        //     break;
        //     case JSON_ERROR_UTF8:
        //         echo ' - Caractères UTF-8 malformés, probablement une erreur d\'encodage';
        //     break;
        //     default:
        //         echo ' - Erreur inconnue';
        //     break;
        // }
    

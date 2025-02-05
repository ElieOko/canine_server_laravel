<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserCollection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function login(Request $request) {
        $personnel = "" ;
        $validator = Validator::make($request->all(),[
            "username" =>'required|string',
            "password" =>'required|string'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        $user = User::where('username',$field['username'])->first() ;
        if(!$user){
            return response()->json([
               'message' => 'Utilisateur non valide'
            ],404);
        }
        if(!Hash::check($field['password'],$user->password)){
            return response()->json([
               'message' => 'Mot de passe incorrecte'
            ],404);
        }
        else{
            $personnel = Personnel::where('user_id', $user->id)->first();
            $token = $user->createToken('token')->plainTextToken;
            return response()->json([
               'message' => 'login success',
               'token' => $token,
               'user' => $user,
               'personnel' => $personnel
            ],200);
        }
    }

    public function register(Request $request) {
        $data["sys"] ="User System";
        $account = "User Sytem";
        $validator = Validator::make($request->all(),[
            'password' => 'string',
            'email'=>'string',
            'user_type_id'=>'required|int',
            'image' => 'required|string',
        ]);

        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors(),
             ],403);
        }

        $field = $validator->validated();

        $imageData = base64_decode($request->input('image'));

        if ($imageData === false) {
            return response()->json([
                'message' => 'Erreur lors du décodage de l\'image Base64.',
            ], 400);
        }

        // Déterminer le type MIME à partir des données de l'image
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime_type = finfo_buffer($finfo, $imageData, FILEINFO_MIME_TYPE);
        finfo_close($finfo);

        // Déterminer l'extension de fichier appropriée en fonction du type MIME
        $extension = '';
        switch ($mime_type) {
            case 'image/jpeg':
                $extension = 'jpg';
                break;
            case 'image/png':
                $extension = 'png';
                break;
            case 'image/gif':
                $extension = 'gif';
                break;
            default:
                $extension = 'jpg';
                break;
        }

        $file_name = time() . '_' . uniqid() . '.' . $extension;
        $url = 'image/' . $file_name;

        // Stocker l'image décodée
        Storage::disk('public')->put($url, $imageData);

        $user_generate =strtolower($request->username??($request->nom??"muzola").($request->prenom??"ethys")).$this->canine_ext;
        $state = User::where('username',$user_generate)->first() ;
        if(!$state){
            $user = User::updateOrCreate([
                'image_profil'=>   $url,
                'username'    =>   $user_generate,
                'password'    =>   Hash::make($field['password']),
                'email'       =>   $field['email']??"",
                'user_type_id'=>   $field['user_type_id']
            ]);
            $token = $user->createToken('token')->plainTextToken;
        //
            if($field['user_type_id'] == 2){
                $request->merge(['user_id' => $user->id,'image_profil' => $url]);
                $data = (new PersonnelController())->store($request);
                if($data['error'] != ""){
                    User::destroy($user->id);
                    return response()->json([
                        "message"=> $data['error']
                    ],422);
                }
                $account =  "Compte Personnel";
            }

                //user_system
            else{
                if($field['user_type_id'] != 1){
                    User::destroy($user->id);
                    return response()->json([
                        'message' => $this->msg_account_invalid
                    ],400);
                }
                else{
                    return response()->json([
                        'user' => $user,
                        'token'=> $token,
                        'account' => $account,
                        'status' => 200
                    ],200);
                }
            }
            return response()->json([
                'message' =>'Votre compte a été créer avec succès',
                'data' => $data['sys'],
                'user' => $user,
                'token'=> $token,
                'account' => $account,
                'status' => 200
            ],200);
        }
        else{
            return response()->json([
                'message' =>'Il semblerait que ce nom d\'utilisateur sois déjà enregistré',
            ],403);
        }
    }



    public function index(){
        $data = User::all();
        if($data->count() != 0 ){
            return new UserCollection($data);
        }
        return response()->json([
            "message"=>"Ressource not found",
            'status' => 404
        ],404);
    }
}

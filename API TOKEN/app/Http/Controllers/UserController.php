<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)  
    {
        $validator = Validator::make($request->json()->all() ,[
            'name' => 'required|string|max:225',
            'email'=> 'required|string|email|max:225|unique:users',
            'password'=>'required|string|min:6'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user = User::create([
            'name'=>$request->json()->get('name'),
            'email'=>$request->json()->get('email'),
            'password' => Hash::make($request->json()->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user','token'),201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->json()->all();
        try{ 
            if(! $token = JWTAuth::attempt($credentials)){
                return response()->json(['error'=>'invalid_credentials'], 400);
            }
        }catch(JWTException $e){
            return response()->json(['error'=>'cloalala'], 500);
        }
        return response()->json(compact('token'));
    }
    public function getAuthenticateUser(){
        try{
            if(!$user = JWTAuth::parseToken()->authenticate()){
                return response()->json(['user_not_found'], 404);
            }
        }catch(Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            return response()->json(['token_expired'],$e->getStatusCode());
        }catch(Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            return response()->json(['token_invalid'],$e->getStatusCode());
        }catch(Tymon\JWTAuth\Exceptions\JWTException $e){
            return response()->json(['token_absent'],$e->getStatusCode());
        }
        return response()->json(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

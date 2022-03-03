<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
   public function login(Request $request)
   {
       $http = new \GuzzleHttp\Client;

       try{
           $response = $http->post(config('services.passport.login_endpoint'), [
               'form_params' => [
                   'grant_type' => 'password',
                   'client_id' => config('services.passport.client_id'),
                   'client_secret' => config('services.passport.client_secret'),
                   'username' => $request->username,
                   'password' => $request->password,
               ]
               ]);

               return $response->getBody();
            }catch(\GuzzleHttp\Exception\BadResponceException $e){
                if($e->getCode() === 400){
                    return response()->json('Invalid Request. Please enter a username or password.', $e->getCode());
                }else if ($e->getCode() === 401){
                    return response()->json('Your credentials are incorrect. Please try again.', $e->getCode());
                }
                return responce()->json('something went wrong on the server.', $e->getCode());
            }
       }
       public function register(Request $request){
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);

            return User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
       }

       public function logout()
       {
           auth()->user()->tokens->each(function($token, $key){
               $token->delete();
           });
           return responce()->json('Logged out succesfully, 200');
       }
}


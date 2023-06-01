<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                session()->flash('err', 'Tài khoản hoặc mật khấu không đúng !');
                return redirect()->route('login');
                // return response()->json([
                //     'status_code' => 500,
                //     'message' => 'Unauthorized'
                // ]);
            }

            $user = User::where('email', $request->email)->first();

            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }

            return redirect()->route('nhom-nganh');

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            session()->flash('err', $error->getMessage());
            return redirect()->route('login');
            // return response()->json([
            //     'status_code' => 500,
            //     'message' => 'Error in Login try catch',
            //     'error' => $error->getMessage(),
            // ]);
        }
    }
    public function register()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => Hash::make('admin')
        ]);
        return 'register';
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}

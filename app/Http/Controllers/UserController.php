<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone_codes;
use Log;
use Symfony\Contracts\Service\Attribute\Required;
class UserController extends Controller
{
    public function createSignup(Request $request)
    {
        $request->validate([
            "phoneNumber" => ['required', "max:11"],
            "password" => ["required"]
        ], [
            "phoneNumber.required" => "شماره موبایل ضروری است",
            "phoneNumber.max" => "باید 11 کاراکتر باشد",
            "password.required" => "رمز ضروری می باشد"
        ]);

        $phoneNumber = $request->input("phoneNumber");
        $password = $request->input("password");
        $user = User::where("phoneNumber", $phoneNumber)->first();
        if ($user) {
            return redirect()->back()->with('message', 'این شماره تلفن قبلا استفاده شده');
        }
        if (!$user) {
            User::create([
                'phoneNumber' => $phoneNumber,
                'password' => Hash::make($password),
                'code_reference' => rand(1000, 10000)
            ]);
            $user = User::where("phoneNumber", $phoneNumber)->first();
            Auth::login($user);
            return to_route('home');
        }
    }
    public function logOut()
    {
        Auth::logout();
        return redirect("/");
    }
    public function sendCode(Request $request)
    {
        $user = User::where("phoneNumber", $request->phoneNumber)->first();
        if ($user) {
            return response()->json(false);
        }
        $code = rand(1000, 10000);
        Phone_codes::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
        $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
        $client = new \IPPanel\Client($apiKey);
        $patternValues = [
            'activation_code' => $code,
        ];
        $bulkID = $client->sendPattern(
            '7fvdx77gveizxqn',  // pattern code
            '+983000505',  // originator
            $request->phoneNumber,  // recipient
            $patternValues,  // pattern values
        );
        return response()->json(true);
    }
    public function sendLoginCode(Request $request)
    {
        $user = User::where("phoneNumber", $request->phoneNumber)->first();
        if (!$user) {
            return response()->json(false);
        }
        $code = rand(1000, 10000);
        Phone_codes::upsert(['phoneNumber' => $request->phoneNumber, 'code' => $code], ['phoneNumber'], ['code']);
        $apiKey = 'YTBhZjhlNDAtZGI1Zi00ZWQ1LTkwNmYtZWU2MWFhYTkzY2M0NTcxZGQ3ZjY2Yzk1MmNjZmFiM2M2ZjVmNjBhMDg2MTQ=';
        $client = new \IPPanel\Client($apiKey);
        $patternValues = [
            'activation_code' => $code,
        ];
        $bulkID = $client->sendPattern(
            '7fvdx77gveizxqn',  // pattern code
            '+983000505',  // originator
            $request->phoneNumber,  // recipient
            $patternValues,  // pattern values
        );
        return response()->json(true);
    }
    public function CheckActivationCode(Request $request)
    {
        $phone = Phone_codes::where("phoneNumber", $request->phoneNumber)->first();
        if ($phone) {
            if ($phone->code == $request->code) {
                return response()->json(true);
            }
        }
        return response()->json(false);
    }
    public function loginPass(Request $request)
    {
        // dd($request->all());
        $user = User::where("phoneNumber", $request->phoneNumber)->first();
        // Log::info($user);
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return response()->json(["type" => true]);
            }
            if (!Hash::check($request->password, $user->password)) {
                return response()->json(["message" => "رمز عبور اشتباه هست", "type" => false]);
            }
        }
        if (!$user) {
            return response()->json(["message" => "این کاربر ثبت نام نکرده لطفا ثبت نام کنید", "type" => false]);
        }
    }
    public function LoginUser(Request $request)
    {
        $user = User::where("phoneNumber", $request->phoneNumber)->first();
        Auth::login($user);
        return redirect('/');
    }
    public function loginCode(Request $request)
    {
        $user = Phone_codes::where("phoneNumber", $request->phoneNumber)->first();
        if ($user) {
            if ($user->code == $request->code) {
                return response()->json(true);
            }
            return response()->json(false);
        }
        return response()->json(false);
    }
}
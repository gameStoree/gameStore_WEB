<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Symfony\Component\Mime\Email;
// use Symfony\Component\Mime\Part\TextPart;
// use App\Models\
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{

public function sendOTP(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|exists:users,email',
    ]);

    if ($validator->fails()) {
        return response()->json(['message' => 'Invalid email'], 400);
    }

    $email = $request->email;
    $otp = rand(100000, 999999);

    DB::table('password_reset_tokens')->updateOrInsert(
        ['email' => $email],
        ['token' => $otp, 'created_at' => Carbon::now()]
    );

    $emailMessage = (new Email())
        ->to($email)
        ->subject('Your OTP Code')
        ->text("Your OTP code is $otp.");

    Mail::send($emailMessage);

    return response()->json(['message' => 'OTP sent successfully'], 200);
}

    public function verifyOTP(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|digits:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Invalid OTP or email'], 400);
        }

        $email = $request->email;
        $otp = $request->otp;

        $otpRecord = DB::table('password_resets')
            ->where('email', $email)
            ->where('token', $otp)
            ->first();

        if (!$otpRecord) {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }

        $otpAge = Carbon::now()->diffInMinutes(Carbon::parse($otpRecord->created_at));
        if ($otpAge > 10) {
            return response()->json(['message' => 'OTP has expired'], 400);
        }

        return response()->json(['message' => 'OTP verified successfully'], 200);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|digits:6',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Invalid request'], 400);
        }

        $email = $request->email;
        $otp = $request->otp;
        $newPassword = bcrypt($request->password);

        $otpRecord = DB::table('password_resets')
            ->where('email', $email)
            ->where('token', $otp)
            ->first();

        if (!$otpRecord) {
            return response()->json(['message' => 'Invalid OTP'], 400);
        }

        $otpAge = Carbon::now()->diffInMinutes(Carbon::parse($otpRecord->created_at));
        if ($otpAge > 10) {
            return response()->json(['message' => 'OTP has expired'], 400);
        }

        $user = User::where('email', $email)->first();
        $user->password = $newPassword;
        $user->save();

        DB::table('password_resets')->where('email', $email)->delete();

        return response()->json(['message' => 'Password has been reset'], 200);
    }
}

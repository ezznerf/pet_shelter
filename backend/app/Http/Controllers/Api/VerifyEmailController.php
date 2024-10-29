<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    public function anime(EmailVerificationRequest $request)
    {

        if ($request->user()->hasVerifiedEmail()) {
            return response([
                'message' => 'Email already verified'
            ]);
        }

        $request->user()->markEmailAsVerified();

        return response([
            'message' => 'Email has been verified'
        ]);
    }
}

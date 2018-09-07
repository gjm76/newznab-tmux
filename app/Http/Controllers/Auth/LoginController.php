<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'username'    => 'required',
            'password' => 'required',
        ]);

        $error = '';
        $user = User::getByUsername($request->input('username'));

        if ($user !== null && \Firewall::isBlacklisted($user->host) === false) {
            if (env('NOCAPTCHA_ENABLED') === true && (! empty(env('NOCAPTCHA_SECRET')) && ! empty(env('NOCAPTCHA_SITEKEY')))) {
                $this->validate($request, [
                    'g-recaptcha-response' => 'required|captcha',
                ]);
            }

            $rememberMe = $request->has('rememberme') && $request->input('rememberme') === 'on';

            $login_type = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            $request->merge([
                $login_type => $request->input('username'),
            ]);

            if ($user->isVerified() === false || $user->isPendingVerification()) {
                return $this->showLoginForm('You have not verified your email address!');
            }

            if (Auth::attempt($request->only($login_type, 'password'), $rememberMe)) {
                User::updateSiteAccessed($user->id, (int) Settings::settingValue('..storeuserips') === 1 ? $request->getClientIp() : '');

                return redirect()->intended($this->redirectPath());
            }

            $error = 'Username/email and password combination used does not match our records!';
        } else {
            $error = 'Username or email used do not match our records!';
        }

        return $this->showLoginForm($error);
    }

    /**
     * @param string $error
     * @param string $notice
     */
    public function showLoginForm($error = '', $notice = '')
    {
        $theme = Settings::settingValue('site.main.style');
        app('smarty.view')->assign(['error' => $error, 'notice' => $notice, 'username' => '', 'rememberme' => '']);

        $meta_title = 'Login';
        $meta_keywords = 'Login';
        $meta_description = 'Login';
        $content = app('smarty.view')->fetch($theme.'/login.tpl');
        app('smarty.view')->assign(
            [
                'content' => $content,
                'meta_title' => $meta_title,
                'meta_keywords' => $meta_keywords,
                'meta_description' => $meta_description,
            ]
        );
        app('smarty.view')->display($theme.'/basepage.tpl');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

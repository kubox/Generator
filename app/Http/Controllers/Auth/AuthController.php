<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 登録／ログインコントローラー
    |--------------------------------------------------------------------------
    |
    | このコントローラハンドラーは新ユーザーを登録し、同時に既存の
    | ユーザーを認証します。デフォルトでこのコントローラーは振る舞いを
    | 追加するためにシンプルなトレイトを使用します。試してみませんか？
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $loginPath = '/login';
    protected $redirectTo = '/home';
    protected $redirectAfterLogout = '/login';

    /* ログイン認証で利用する項目 */
    protected $username = 'name';

    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * やって来た登録リクエストに対するバリデターを取得
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * 登録内容を確認後、新しいユーザーインスタンスを生成
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

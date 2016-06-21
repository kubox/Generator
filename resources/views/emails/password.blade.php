パスワードをリセットするには、次のリンクをクリックしてください。 <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>

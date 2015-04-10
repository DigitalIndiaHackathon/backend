<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $user = new User;
        $user->email = 'kunalvarma05@gmail.com';
        $user->username = 'kunalvarma05';
        $user->password = 'champion';
        $user->password_confirmation = 'champion';
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        $user->confirmed = 1;

        if(! $user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }
    }
}

<?php

require "bootstrap.php";
$user = User::Create([    'name' => "Ahmed Khan",    'email' => "ahmed.khan@lbs.com",    'password' => password_hash("ahmedkhan",PASSWORD_BCRYPT), ]);

print_r($user->todo()->create([

   'todo' => "Working with Eloquent Without PHP",

   'category' => "eloquent",

   'description' => "Testing the work using eloquent without laravel"

   ]));

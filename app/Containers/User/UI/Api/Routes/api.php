<?php

use App\Containers\User\Commands\CreateUser\CreateUserCommand;
use App\Containers\User\Commands\CreateUser\CreateUserDto;

Route::get('/', static function () {
    return response()->json([
        'data' => 'hello'
    ]);
});
Route::get('/user', static function (CreateUserCommand $command) {
    $command->execute(CreateUserDto::fromArray([
        'name' => 'Boburmirzo Kozimov',
        'email' => 'boburmirzokov@gmail.com',
        'password' => 'boburmirzo'
    ]));
    return response()->json([
        'data' => 'hello'
    ]);
});

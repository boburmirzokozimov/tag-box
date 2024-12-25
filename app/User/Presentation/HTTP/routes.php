<?php

use App\User\Presentation\HTTP\UserController;

Route::get('/users', [UserController::class, 'index']);

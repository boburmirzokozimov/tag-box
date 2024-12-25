<?php

use App\Core\Presentation\HTTP\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);

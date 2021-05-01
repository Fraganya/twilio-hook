<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;

Route::post('bot', [BotController::class, 'handleChat']);

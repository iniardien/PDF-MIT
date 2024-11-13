<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('pdf', [PDFController::class, 'generatePDF']);

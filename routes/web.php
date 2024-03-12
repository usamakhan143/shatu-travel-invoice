<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TicketController::class, 'createTicket'])->name('add.tickets');
Route::post('/store-tickets', [TicketController::class, 'storeTicket'])->name('store.ticket');

Route::get('/tickets', [TicketController::class, 'allTickets'])->name('all.tickets');
Route::get('/pdf/{id}', [PdfController::class, 'generatePDF'])->name('generate.pdf');
Route::get('/all-tickets', [PdfController::class, 'showTickets'])->name('show.allTickets');
Route::get('/show-ticket/{id}', [TicketController::class, 'showTicket'])->name('show.ticket');

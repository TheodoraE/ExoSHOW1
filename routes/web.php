<?php

use App\Http\Controllers\IngredientController;
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

// -Créer un projet(laravel new, new db etc) avec la possibilité de créer des ingredients ( nom , quantite, photo'lien vers votre dossier public' )
// example : Sel 1kg
// - une view avec tous les ingrédients ( juste les noms + button suppression )
// - chaque ingrédient est cliquable et nous mènes sur une view show ou on ne voit que l'ingrédient en question , son nom , sa quantité et sa photo, dans cette page il y a le fameux bouton pour supprimer l'ingrédient a nouveau


Route::get('/', [IngredientController::class, 'index']);
Route::get('/create', [IngredientController::class, 'create']);
Route::post('/ingredient-store', [IngredientController::class, 'store']);
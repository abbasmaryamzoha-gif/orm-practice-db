<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class InventoryController extends Controller
{
    public function index()
{
    $items = Item::all();
    return view('components.index', ['items' => $items]);
}
}



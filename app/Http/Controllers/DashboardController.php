<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::where('user_id', Auth::id())->latest()->get();
        return view('articles.dashboard', compact('articles'));
    }
}
<?php
declare(strict_types=1);
namespace App\Http\Controllers;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::paginate();
    }
}

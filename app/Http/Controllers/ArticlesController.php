<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Request; if using this we can use Request::all() where Request is the Facade.

class ArticlesController extends Controller {

  /**
   * Show all articles
   *
   * @return Response
   */
	public function index()
  {
    // Get all articles
    // $articles = Article::all();

    // Fetch articles using order by clause
    $articles = Article::orderBy('published_at', 'desc')->get();
    // $articles = Article::orderBy('created_at', 'desc')->get();

    // Fetch all articles latest first
    // $articles = Article::latest('published_at', 'desc')->where('published_at', '<=', Carbon::now())->get();

    return view('articles.index', compact('articles'));
  }

  /**
   * Show a single article
   *
   * @return Response
   */
  public function show($id)
  {
    // dd('in show method'); // debug method in laravel
    $article = Article::findOrFail($id);
    return view('articles.show', compact('article'));
  }

  /**
   * Display a page/form to create new article
   *
   * @return Response
   */
  public function create()
  {
    return view('articles.create');
  }

  /**
   * Save an article
   *
   * @param Request $request
   * @return Response
   */
  // public function store(Request $request)
  public function store(Request $request)
  {
      $this->validate(
        $request,
        [
          'title' => 'required|min:5|max:15',
          'body'  => 'required',
          'published_at' => [
            'required',
            'date'
          ]
        ]
      );

      Article::create($request->all());

      return redirect('articles');
  }

  /**
   * Save an article
   *
   * @param CreateArticleRequest $request
   * @return Response
   */
  // public function store(CreateArticleRequest $request)
  // {
  //   Article::create($request->all());

  //   return redirect('articles');
  // }

  /**
   *
   *
   *
   */
  public function edit($id)
  {
    $article = Article::findOrFail($id);

    return view('articles.edit', compact('article'));
  }

  /**
   *
   *
   *
   */
  public function update($id, Request $request)
  {
    $article = Article::findOrFail($id);

    $article->update($request->all());

    return redirect('articles');
  }



}

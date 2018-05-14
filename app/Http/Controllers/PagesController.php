<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
  {
    // echo data with out escaping
    $name_styled = '<span style="color:red;">Aaditya Walawalkar</span>';
    // $name = 'Aaditya Walawalkar';
    // return view('pages.about')->with('name', $name);

    // return view('pages.about')->with([
    //   'name_styled' => $name_styled,
    //   'name' => 'Aaditya Walawalkar',
    //   'first' => 'Aaditya',
    //   'last' => 'Walawalkar',
    //   'description' => 'Senior Software Engineer @ Intelliswift Software India Pvt. Ltd.'
    // ]);

    // $data = [];
    // $data['name_styled'] = $name_styled;
    // $data['first'] = 'Aaditya';
    // $data['last'] = 'Walawalkar';
    // $data['description'] = 'Senior Software Engineer @ Intelliswift Software India Pvt. Ltd.';
    // return view('pages.about', $data);

    $name_styled = $name_styled;
    $first = 'Aaditya';
    $last = 'Walawalkar';
    $description = 'Senior Software Engineer @ Intelliswift Software India Pvt. Ltd.';
    return view('pages.about', compact('name_styled', 'first', 'last', 'description'));
  }

  public function aboutUs()
  {
    return view('pages.about-us')->with([
        'name' => 'Aaditya Walawalkar',
        'description' => 'Senior Software Engineer @ Intelliswift Software India Pvt. Ltd.',
        'technologies' => ['Php', 'Drupal', 'Laravel', 'Code Igniter', 'Wordpress'],
        // 'technologies' => [],
    ]);
  }
}

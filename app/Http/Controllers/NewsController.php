<?php

namespace App\Http\Controllers;

use App\NewsPosts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function getNews($id = 0) {
        if ($id == 0) {
            return view('news')
                ->with('news', NewsPosts::all());
        } else {
            return view('news_detail')
                ->with('new', NewsPosts::findOrFail($id));
        }
    }

    public function addNew() {
        return view('news_add');
    }

    public function sendData(Request $request) {
        $filename = '';
        if ($request->isMethod('post') && $request->file('userfile')) {
            $file = $request->file('userfile');
            $filename = $file->getClientOriginalName();
            Storage::putFileAs('images', $file, $filename);
        }
        $news = NewsPosts::create([
            'header' => $request->input('header'),
            'article' => $request->input('article'),
            'image' => !empty($filename) ? $filename : null
        ]);
        return redirect('news');
    }

    public function editNew($id) {
        return view('news_edit')
            ->with('new', NewsPosts::findOrFail($id));
    }

    public function editData($id, Request $request) {
        $new = NewsPosts::find($id);
        if ($request->hasFile('userfile')) {
            $file = $request->file('userfile');
            $filename = $file->getClientOriginalName();
            Storage::putFileAs('images', $file, $filename);
            $new->update([
                'header' => $request->input('header'),
                'article' => $request->input('article'),
                'image' => $filename
            ]);
        } else {
            $new->update([
                'header' => $request->input('header'),
                'article' => $request->input('article'),
            ]);
        }
        return redirect('news');
    }
}

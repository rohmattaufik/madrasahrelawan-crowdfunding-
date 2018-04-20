<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    // --------------------------
    //      ADMIN AREA
    // --------------------------

    public function create_article () {
        return view('admin.article.create');
    }

    public function create_article_submit (Request $request){
        $title      = $request->title;
        $content    = $request->content;
        $file = $request->file('image');

        if($title == null or $title=="" or $content==null or $content=="" or empty($file)){
            return redirect::back();
        }
        // save file
        $destinationPath = 'article_image';
        $movea = $file->move($destinationPath,$file->getClientOriginalName());
        $image = "article_image/{$file->getClientOriginalName()}";

        $article = new Article;
        $article->title = $title;
        $article->content = $content;
        $article->image   = $image;
        $article->flag_active = 1;
        $article->save();
        return redirect('admin/article');
    }

    public function viewall_article (){
        $articles = Article::where('flag_active', 1)->get();
        return view('admin.article.viewall')->with('articles', $articles);
    }

    public function view_article($id_article){
        $article = Article::find($id_article);
        if($article==null){
            return redirect::back();
        }
        return view('admin.article.view')->with('article',$article);
    }

    public function edit_article($id_article){
        $article = Article::find($id_article);
        if($article==null){
            return redirect::back();
        }
        return view('admin.article.edit')->with('article',$article);
    }

    public function edit_article_submit(Request $request){
        $article = Article::find($request->id);
        if($article==null){
            return redirect::back();
        }
        $title      = $request->title;
        $content    = $request->content;
        $file = $request->file('image');

        if($title == null or $title=="" or $content==null or $content==""){
            return redirect::back();
        }

        if(!empty($file)){
            // save file
            $destinationPath = 'article_image';
            $movea = $file->move($destinationPath,$file->getClientOriginalName());
            $image = "article_image/{$file->getClientOriginalName()}";

            $article->image   = $image;
        }

        $article->title = $title;
        $article->content = $content;
        $article->flag_active = 1;
        $article->save();
        return redirect('admin/article');
    }

    public function delete_article ($id_article){
        $article = Article::find($id_article);
        if($article==null){
            return redirect::back();
        }
        $article->flag_active = 0;
        $article->save();
        return redirect('admin/article');
    }
}
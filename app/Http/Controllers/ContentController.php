<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    //

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {
        $content = new Content();
        $content->title = $request->title;
        $content->blog = $request->blog;

        $content->save();
            echo (" Record saved successfully.");
            return redirect()->route('list-content');
        
    }

    public function index(){
        $contents = Content::all();
        
        
        return view('contents/list', compact('contents'));
       }

       public function edit($id)
{
    $contents = Content::where('id','=',$id)->get();
    return view('contents/edit',['contents'=>$contents]);
}

public function destroy(Request $request, $id)
    {
        Content::destroy($request->all());
        Content::whereId($id)->delete($request->all());
         
       echo ("Record deleted successfully.");
       return redirect()->back();
    }

    public function update(Request $request, $id){

        
   
        $content = Content::find($id);
        
        $content->title = $request->input('title');
        $content->blog = $request->input('blog');
       
        $content->save();
       
        
            
        
        return redirect()->route('list-content');
    }

    public function show()
{
    $content = Content::get();
    
        $content->title = ('title');
        $content->blog = ('blog');
        
       
   
   return view('home1');
}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    //

    public function create()
    {
        return view('contents.create');
    }

    public function store(Request $request)
    {



        // $postArray      =   array( 
        //     "title"  =>  $request->title,
        //     "blog" => $request->blog
        // );

        // $content  =       Content::create($postArray);

        // if(!is_null($content)) {
        //     return redirect()->route('list-content')->with("success", "Success! Post created");
        // }

        // else {
        //     return back()->with("failed", "Failed! Post not created");
        // }
    


        Content::create(array_merge($request->only('title', 'blog'),[
            
        ]));




    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required',
    //         'blog' => 'required',
    //    ]);

    //    if ($validator->fails()) {
    //         return redirect()->Back()->withInput()->withErrors($validator);
    //    }else{
    //         // Insert record
    //         Content::create([
    //             'title' => $request->title,
    //             'blog' => $request->blog
    //         ]);

    //         Session::flash('message','Form submit Successfully.');
    //    }

       return redirect()->route('list-content');
   

        // $content = new Content();
        // $content->title = $request->title;
        // $content->blog = $request->blog;

        // $content->save();
        //     echo (" Record saved successfully.");
        //     return redirect()->route('list-content');
        
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

   
        // $this->validate($request, [
        //     'title' => 'required',
        //     'blog' => 'required',
        // ]);
    
        // $content = Content::find($id);
    
        // $content->title = $request->title;
        // $content->blog = $request->blog;
    
        // $content->update();
        // return redirect()->back();
        
        $content = Content::findOrFail($id);
        $content->title = $request->input('title');
        $content->blog = $request->input('blog');
        $content->save();
        return redirect()->route('list-content');


        // $content = Content::find($id);        
        // $content->title = $request->input('title');
        // $content->blog = $request->input('blog');
       
        // $content->save();        
        
        // return redirect()->route('list-content');

   
    }

    public function show()
{
    $content = Content::get();
    
        $content->title = ('title');
        $content->blog = ('blog');
        
       
   
   return view('home1');
}

public function view($id)
{
    $content = Content::where('id','=',$id)->get();
    return view('contents/show',['content'=>$content]);

    // $content = Content::findOrFail($id);
    // return view('contents/show', compact('content'));
}


public function uploadFile(Request $request){

    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('uploads'), $fileName);
    
            $url = asset('uploads/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

}
}

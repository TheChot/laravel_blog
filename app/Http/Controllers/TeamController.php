<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TeamMembers;

class TeamController extends Controller
{
    public function index(){
        $team_members= TeamMembers::where('status', 1)->orderBy('level','asc')->get();
        return view('team.index', compact('team_members'));
    }

    

    public function addTeamMemberPage(){
        return view('team.create');
    }

    public function addTeamMember(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable',
        ]);        
        
        //handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'_'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/media/team_images', $fileNameToStore);

        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        $team_member = new TeamMembers;

        $team_member->title = $request->title;
        $team_member->body = $request->body;
        $team_member->cover_image = $fileNameToStore;


        $team_member->save();

        return redirect()->route('home');

    }

    public function editTeamMemberPage($id){

        $team_member = TeamMembers::find($id);

        if(!isset($team_member)){
            return redirect()->route('home');

        }

        return view('team.edit', compact('blog'));
    }

    public function editTeamMember(Request $request, $id){



        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable',
        ]);

        $team_member = TeamMembers::find($id);

        //handle file upload
        if($request->hasFile('cover_image')){
            //Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $filename.'_'.time().'_'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/media/team_images', $fileNameToStore);

            Storage::delete('public/media/team_images/'.$team_member->cover_image);

        }

        


        $team_member->title = $request->title;
        $team_member->body = $request->body;

        
        $team_member->save();

        return redirect()->route('home');

    }
}

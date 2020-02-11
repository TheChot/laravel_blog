<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\TeamMembers;

// Classes
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index(){
        $team_members= TeamMembers::orderBy('created_at','desc')->paginate(10);
        return view('admin.team.index', compact('team_members'));
    }

    

    public function addTeamMemberPage(){
        return view('admin.team.add');
    }

    public function addTeamMember(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'name'=>'required',
            'bio'=>'required',
            'level'=>'required',            
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
            $fileNameToStore = $filename.'_'.time().'_.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/media/team_images', $fileNameToStore);

        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        $team_member = new TeamMembers;

        $team_member->title = $request->title;
        $team_member->name = $request->name;
        $team_member->bio = $request->bio;
        $team_member->level = $request->level;
        $team_member->status = $request->status;
        $team_member->profile_img = $fileNameToStore;


        $team_member->save();

        return redirect()->back();

    }

    public function editTeamMemberPage($id){

        $team_member = TeamMembers::find($id);

        if(!isset($team_member)){
            return redirect()->route('home');

        }

        return view('admin.team.edit', compact('team_member'));
    }

    public function editTeamMember(Request $request, $id){



        $this->validate($request,[
            'title'=>'required',
            'name'=>'required',
            'bio'=>'required',
            'level'=>'required',            
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
            $fileNameToStore = $filename.'_'.time().'_.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/media/team_images', $fileNameToStore);
            
            Storage::delete('public/media/team_images/'.$team_member->cover_image);
            $team_member->profile_img = $fileNameToStore;

        }

        


        $team_member->title = $request->title;
        $team_member->name = $request->name;
        $team_member->bio = $request->bio;
        $team_member->level = $request->level;
        $team_member->status = $request->status;

        
        $team_member->save();

        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\Backend;

use Auth;
use Validator;
use App\Admin;
use App\Venues;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function showVenuePostForm(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'category_name' => 'required',
                'title' => 'required',
                'location'=>'required',
                'contact' => 'required',
                'email' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:2024',
            ]);
            
            $venue = new Venues;
            $venue->category_name = $request->category_name;
            $venue->title = $request->title;
            $venue->sub_title = $request->sub_title;
            $venue->location = $request->location;
            $venue->contact = $request->contact;
            $venue->email = $request->email;
            $venue->description = $request->description;
            

             if ($request->hasFile('image')) {
                
                $dir = 'images/venues_img/';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
                $fileName = str::random() . '.' . $extension; // rename image
                $request->file('image')->move($dir, $fileName);
                $venue->image = $fileName;
            }
            
            $venue->save();
            return redirect(route('admin.add-venues'))->with('add_venue_flash_success','Successfully addeded');
        }

        return view('Backend.add_new_venue');
    }
        
 
//......................................................
    public function showVenueList()
    {
       $venue = Venues::all();
       return view('Backend.show_venues')->with(compact('venue'));
    }

//.........................................................
    public function EditVenuePost(Request $request,$id)
    {
        $venue = Venues::find($id);
 
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'category_name' => 'required',
                'title' => 'required',
                'contact' => 'required',
                'email' => 'required',
               'image'=>'required|mimes:jpeg,jpg,png,gif|max:2024',
            ]);
          
            $venue->category_name = $request->category_name;
            $venue->title = $request->title;
            $venue->sub_title = $request->sub_title;
            $venue->location = $request->location;
            $venue->contact = $request->contact;
            $venue->email = $request->email;
            $venue->description = $request->description;
            

             if ($request->hasFile('image')) {
                
                $dir = 'images/venues_img/';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
                $fileName = str::random() . '.' . $extension; // rename image
                $request->file('image')->move($dir, $fileName);
                $venue->image = $fileName;
            }
            
            $venue->save();

            return redirect()->back()->with('upadte_venue_flash_success','Successfully updated');
        }
        return view('Backend.edit_venue')->with(compact('venue'));
    }


 //.........................................................

   public function deleteVenue($id=null)
{
    if (!empty($id)) {
        $data = Venues::FindOrFail($id);
        if (!empty($data->image))
         {
           unlink('images/venues_img/'.$data->image);
         } 
        Venues::find($id)->delete();
        return redirect()->back()->with('delete_venue_flash_success','Venue-info successfully deleted');
         } 
} 








//For Frontend Venue...............................................

    public function showVenueDetails($id)
    {
        $venue = Venues::find($id);
        return view('venue_details')->with(compact('venue'));
    }


}

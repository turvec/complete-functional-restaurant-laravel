<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getAllusers()
    {
        $users = User::all();
        return view('admin.allusers', compact('users'));
        # code...
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
        # code...
    }

    public function addFood()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.addfood', compact('categories'));
        # code...
    }
    public function uploadFood(Request $request)
    {
        $xtension = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->title) . time() . '.' . $xtension;
        $request->image->move(public_path('foodimage'), $imagename);

        $data = new Food();

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category_id = $request->category_id;

        $data->save();

        return back();
    }
    public function getAllfoods()
    {
        $foods = Food::all();
        return view('admin.allfoods', compact('foods'));
        # code...
    }

    public function deleteFood($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->back();
        # code...
    }
    public function editFood($id)
    {
        $food = Food::find($id);
        return view('admin.editfood', compact('food'));
    }
    public function updateFood(Request $request, $id)
    {
        $update = Food::find($id);
        if ($request->has('image')) {
            $xtension = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->title) . time() . '.' . $xtension;
            $request->image->move(public_path('foodimage'), $imagename);
            $update->image = $imagename;
        }
        $update->title = $request->title;
        $update->price = $request->price;
        $update->description = $request->description;

        $update->save();

        return back();
        # code...
    }
    public function showReservation()
    {
        $reserves = Reservation::all();
        return view('admin.allreservation', compact('reserves'));
    }
    public function deleteReservation($id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return back();
        # code...
    }

    public function addEvent()
    {
        return view('admin.add_event');
    }
    public function uploadEvent(Request $request)
    {
        $val = $request->validate([
            'date' => 'required|date',
            'description' => 'required|max:255',
            'title' => 'required|max:255'
        ]);
        $data = new Event();
        $data->title = $request->title;
        $data->date = $request->date;
        $data->description = $request->description;
        $data->save();

        return back();
        # code...
    }
    public function showAllEvents()
    {
        $events = Event::all();
        return view('admin.all_events',compact('events'));
        # code...
    }
    public function deleteEvent($id)
    {
        $data = Event::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editEvent($id)
    {
        $event = Event::find($id);
        return view('admin.update_event', compact('event'));
        # code...
    }
    public function updateEvent(Request $request, $id)
    {
        $val = $request->validate([
            'date' => 'required|date',
            'description' => 'required|max:255',
            'title' => 'required|max:255'
        ]);
        $data = new Event();
        $data->title = $request->title;
        $data->date = $request->date;
        $data->description = $request->description;
        $data->save();

        return back();
        # code...
    }

    public function addReviews()
    {
        return view('admin.add_reviews');
    }

    public function uploadReviews(Request $request)
    {
        $val = $request->validate([
            'star_rating' => 'required|min:1|max:5',
            'comment' => 'required|max:255',
            'name' => 'required|max:255'
        ]);
        $data = new Review();
        $data->name = $request->name;
        $data->star_rating = $request->star_rating;
        $data->comment = $request->comment;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('reviewsimage'),$imagename);
            $data->image = $imagename;
        }
        $data->save();

        return back();
        # code...
    }
    public function showAllReviews()
    {
        $reviews = Review::all();
        return view('admin.allreviews',compact('reviews'));
        # code...
    }
    public function deleteReview($id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editReview($id)
    {
        $review = Review::find($id);
        return view('admin.update_reviews', compact('review'));
        # code...
    }
    public function updateReview(Request $request, $id)
    {
        $val = $request->validate([
            'star_rating' => 'required|min:1|max:5',
            'comment' => 'required|max:255',
            'name' => 'required|max:255'
        ]);
        $data = Review::find($id);
        $data->name = $request->name;
        $data->star_rating = $request->star_rating;
        $data->comment = $request->comment;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('reviewsimage'),$imagename);
            $data->image = $imagename;
        }
        $data->save();

        return back();
        # code...
    }

    //
}

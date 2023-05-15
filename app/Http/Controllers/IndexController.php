<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\About;
use App\Models\User;
use App\Models\Prices;
use App\Models\Calendar;
use App\Models\Reviews;
use App\Models\Courses;
use App\Models\Statistic;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function addcalendar(Request $request, Calendar $cal){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');
        if ($request->isMethod('post')){
            $cal->start = $request->start;
            $cal->title = $request->title;
            $cal->save();
            return redirect('addcalendar');
        }
        else{
            return view('addcalendar');
        }
    }

    public function calandar(){

        $arr = [];
        $i=0;
        $data = Calendar::all();
        foreach($data as $d){
            $arr[$i]["start"] = $d->start;
            $arr[$i]["title"] = $d->title;
            $arr[$i]["id"] = $d->id;
            if($d->start < date("Y-m-d H:i:s")){
                $arr[$i]["backgroundColor"] = "#f00";
            }
            $i++;
        }
        return view('calandar', ['data'=>json_encode($arr)]);

    }
    public function editreviews(Request $request, Reviews $reviews){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');
        if ($request->isMethod('post')){
            $reviews->name = $request->name;
            $reviews->title = $request->title;
            $reviews->date = $request->date;
            $reviews->link = $request->link;
            $reviews->save();
            return redirect('editreviews');
        }
        else{
            return view('editreviews');
        }
    }
    public function editprice(Request $request){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');
        if ($request->isMethod('post')){
            Prices::where('id', $request->id)->update
                ([
                    'title' => $request->title,
                    'price' => $request->price,
                ]);
            return redirect('editprice');
        }else{
            $prices = Prices::all();
            return view('editprice', ['prices'=>$prices]);
        }
        
    }
    public function addcourses(Request $request, Courses $course){

        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');
        if ($request->isMethod('post')){
             if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('public/images/', $filename);

                    $course->description = $request->description;
                    $course->full_text = $request->full_text;
                    $course->title = $request->title;
                    $course->img = $filename;
                    $course->save();
                    return redirect('courses');
            }
        }
        else{
            return view('addcourses');
        }
    }
    public function editcourses($id, Request $request){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');
        if ($request->isMethod('post')){

            if ($request->hasfile('img')) {
                $del = Courses::where("id", $request->id)->select("img")->get();

                if (file_exists("public/images/" . $del[0]->img)) {
                    unlink("public/images/" . $del[0]->img);
                }
                $file = $request->file('img');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('public/images/', $filename);

                Courses::where('id', $request->id)->update
                ([
                    'description' => $request->description,
                    'full_text' => $request->full_text,
                    'title' => $request->title,
                    'img' => $filename,
                ]);
            } else {
                Courses::where('id', $request->id)->update
                ([
                    'description' => $request->description,
                    'full_text' => $request->full_text,
                    'title' => $request->title,
                ]);
            }
            return redirect('courses');
        }else{
            $course = Courses::where('id', $id)->first();
            return view('editcourses', ['course'=> $course]);
        }
           
    }

    public function courses(){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        $courses = Courses::all();
        return view('courserlist', ['courses'=>$courses]);
    }
    public function about(Request $request){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        if ($request->isMethod('post')){
            if ($request->hasfile('img')) {
                $del = About::where("id", $request->id)->select("img")->get();
                if (file_exists("public/images/" . $del[0]->img)) {
                    unlink("public/images/" . $del[0]->img);
                }
                $file = $request->file('img');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('public/images/', $filename);

                About::where('id', $request->id)->update
                ([
                    'header' => $request->header,
                    'txt' => $request->txt,
                    'img' => $filename,
                ]);
            }else{
                About::where('id', $request->id)->update
                ([
                    'header' => $request->header,
                    'txt' => $request->txt,
                ]);
            }
            return redirect('about');
        }
        else{
            $about = About::first();
            return view('about', ['about'=>$about]);
        }     
    }
    public function coursesview($id){
        $course = Courses::where('id', $id)->first();
        return view('coursesview', ['course'=>$course]);
    }
    public function stat_clear(){
        Statistic::truncate();
        return redirect('statics');
    }
    public function statics(Statistic $stat){
if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        $st = Statistic::orderBy('date', 'desc')->get();
        return view('statistic', ['stats'=>$st]);
    }
    public function index(Statistic $stat){
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $u = json_decode(file_get_contents("https://api.sypexgeo.net/json/".$ip."?lang=ru"));
        $stat->country = $u->country;
        $stat->regionName = $u->region;
        $stat->city = $u->city;
        $stat->save();
        $prices = Prices::all();
        $courses = Courses::all();
        $slider = Slider::all();
        $about = About::first();
        $reviews = Reviews::limit(3)->get();
        $months = [ 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' ];

        $i = 0;
        foreach($reviews as $review){
            $d = explode('-', $review['date']);
            $reviews[$i]['date_1'] = $d[2];
            $reviews[$i]['date_2'] = $months[$d[1][1]];
            $reviews[$i]['date_3'] = $d[0];
            $i++;
            
        }
        //print_r($reviews);
        //exit;
        return view('index', ['sliders'=> $slider, 'about'=>$about, 'courses' => $courses, 'prices'=>$prices, 'reviews'=>$reviews]);
    }

    public function editslider(Request $request){
if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        if ($request->isMethod('post')){
            if ($request->hasfile('img')) {
                $del = Slider::where("id", $request->id)->select("img")->get();
                //echo $del[0]->img;
                //exit;
                if (file_exists("public/images/" . $del[0]->img)) {
                    unlink("public/images/" . $del[0]->img);
                }
                $file = $request->file('img');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('public/images/', $filename);

                Slider::where('id', $request->id)->update
                ([
                    'description' => $request->description,
                    'text_free' => $request->text_free,
                    'img' => $filename,
                    'button' => $request->button,
                    'text_button' => $request->text_button,
                ]);
            } else {
                Slider::where('id', $request->id)->update
                ([
                    'description' => $request->description,
                    'text_free' => $request->text_free,
                    'button' => $request->button,
                    'text_button' => $request->text_button,
                ]);
            }
            return redirect('editslider');

        }else{
            $slider = Slider::all();
            return view('listslider', ['sliders'=> $slider]);
        }
        
    }


    public function addslider(Request $request, Slider $slider){
if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        if ($request->isMethod('post')){
            if ($request->hasfile('img')) {
                
                $file = $request->file('img');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('public/images/', $filename);

                
                $slider->description = $request->description;
                $slider->text_free = $request->text_free;
                $slider->img = $filename;
                $slider->button = $request->button;
                $slider->text_button = $request->text_button;
                $slider->save();
                return redirect('editslider');
            }else{
                return redirect('addslider');
            }
        }
        else{
            return view('addslider');
        } 
    }


    public function deletecourses($id){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        $slider = Courses::where('id',$id)->delete();
        return redirect('courses');
    }

    public function deleteslider($id){
        if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        $slider = Slider::where('id',$id)->delete();
        return redirect('editslider');
    }

    public function showslider($id){
if(!Auth::check()) return redirect('/');
        if(Auth::check() && (Auth::user()->admin == 0)) return redirect('/');        $slider = Slider::where('id',$id)->get();
        return view('editoneslider', ['slider'=>$slider]);
    }


    public function admin(){
        if(Auth::check() && Auth::user()->admin == 1){
            return view('admin');
        }
        return redirect('');
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('');
    }

    public function login(Request $request){
            if ($request->isMethod('post')){
               $users = User::all();
                $data = $request->validate([
                    'email' => 'required|max:100',
                    'password' => 'required|max:255',
                ]);
                if(Auth::attempt(['email' => $data["email"], 'password' => $data["password"]])){
                   return redirect('admin');
                }
                else{
                    return redirect('login');
                }                
            }
            else{

                return view('login');
            }
        
    }
}

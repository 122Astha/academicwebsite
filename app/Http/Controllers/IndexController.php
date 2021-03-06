<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Result;
use App\Models\News;
use App\Models\SiteConfig;
use App\Models\Slider;
use App\Models\WhyChooseUs;
use App\Models\Index;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Coursecat;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Message;
use App\Models\Notice;

use App\Models\Teacher;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
 $categories = Coursecat::all();
        $whychooseus = WhyChooseUs::all();

        $events = Event::all();

        $newses = News::all();
        $sites = SiteConfig::all();

        return view('index', compact('sliders', 'whychooseus', 'events', 'newses', 'sites','categories'));
    }



    public function about_us()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('aboutus', compact('sites','categories'));
    }


    public function messages()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('message', compact('sites','categories'));
    }


    public function planning()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('planning', compact('sites','categories'));
    }


    public function notice()
    {
         $categories = Coursecat::all();
         $sites = SiteConfig::all();
        $notices = Notice::paginate(4);
        return view('notice', compact('notices','sites','categories'));
    }


    public function notice_details($id)
    {
        $notice_details = Notice::find($id);
         $categories = Coursecat::all();
 $sites = SiteConfig::all();
        return view('notice_details', compact('notice_details','sites','categories'));
    }


    public function results()
    {
        $results = Result::paginate(6);
         $sites = SiteConfig::all();
          $categories = Coursecat::all();
        return view('result', compact('results','sites','categories'));

    }


    public function course($id)
    {
// $id=request()->segment(1);
       //$courses = Course::find($id);
        $categories = Coursecat::all();
       // return $courses;
// $course=Course::where('c_id',$id)->get();
// $course=Course::where('c_id',$id)->get();
$course=Course::where('c_id',$id)->paginate(5);
 $sites = SiteConfig::all();

        return view('course', compact('course', 'categories','sites'));
    }

        public function course_details($id)
    {
        // $course_detail=Course::where('status',1)->get();
        $course_detail = Course::find($id);
        $course=Course::all();
         $categories = Coursecat::all();
         $sites = SiteConfig::all();

        return view('course_details', compact('course','course_detail','sites','categories'));
    }


    public function teacher()
    {
        $teachers = Teacher::paginate(8);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('teacher', compact('teachers','sites','categories'));
    }

      public function teacher_details($id)
    {
        $teacher_detail = Teacher::find($id);
 $sites = SiteConfig::all();
 $categories = Coursecat::all();
 $courses= Course::all();
        return view('teacher_details', compact('teacher_detail','sites','categories','courses'));
    }


    public function news()
    {
        $newses = News::paginate(6);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('news', compact('newses','sites','categories'));
    }

    public function gallery()
    {
        $galleries = Gallery::paginate(12);
        $gallerycategories = GalleryCategory::all();
         $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('gallery',compact('sites','categories','galleries','gallerycategories'));
    }


    public function event()
    {
        $Events = Event::paginate(4);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('event', compact('Events','sites','categories'));
    }


    public function event_details($id)
    {
        $event_details = Event::find($id);
        // to take all data of events from database 
        $event=Event::all();
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('event_details', compact('event','event_details','sites','categories'));
    }

      public function news_details($id)
    {
        $news_details = News::find($id);
        $news=News::all();
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('news_details', compact('news','news_details','sites','categories'));
    }


    public function blog()
    {
        $blogs = Blog::paginate(9);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('blog', compact('blogs','sites','categories'));
    }

    public function blog_details($id)
    {
        $blog_details = Blog::find($id);
        $blog=Blog::all();
        $sites = SiteConfig::all();
        $categories = Coursecat::all();
        $blogs=blog::all();
        return view('blog_details', compact('blog','blog_details','sites','categories','blogs'));
    }

    public function contacts()
    {
$sites = SiteConfig::all();
 $categories = Coursecat::all();
        return view('contacts', compact('sites','categories'));
    }

    public function admission()
    {
$sites = SiteConfig::all();
 $categories = Coursecat::all();
        return view('admission', compact('sites','categories'));
    }


    public function whychooseus()
    {
        $whychooseus = WhyChooseUs::where('status', 1)->orderBy('id', 'asc')->limit(1)->get();

        return view('whychooseus', compact('whychooseus'));
    }


}

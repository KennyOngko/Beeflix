<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Episode;
class viewcontrol extends Controller
{
    public function ambildata(){
        $var=Genre::all();
        $var2=Movie::all();
        return view('home',['Genre'=>$var],['Movie'=>$var2]);
    }

    public function detailmovie($id){
        $var3=Movie::find($id);
        $var4=Episode::where('movie_id',$id)->paginate(3);
        return view('detail',['Movie'=>$var3],['Episode'=>$var4]);
    }
    public function detailgenre($id){
        $var5=Genre::find($id);
        return view('genrepage',['Genre'=>$var5]);
    }
}

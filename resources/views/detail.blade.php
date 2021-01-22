<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<title>BeeFlix</title>
</head>
<body>
<h1>BeeFlix</h1>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
        <a href="{{ url()->previous() }}"style="text-decoration:none">Kembali</a>
         </label>
         <label class="btn btn-outline-secondary">
         <a href="/home" style="text-decoration:none">LIHAT SEMUA FILM</a>
        </label>
    </div>

<div class="row no-gutters">
    <div class="col-md-3">
        <img class="card-img-top" src="{{asset($Movie->photo)}}" alt="Card image cap">
    </div>
    <div class="card-group col-md-6">>
        <div class="card" style="width: 18rem;">
            <div class="card-body justify-content-center">
                <h5 class="card-title">{{$Movie->title}}</h5>

    <div style="width:300px;text-align:justify;float:left">
                <h2 style="color:orange">Rating: {{$Movie->rating}}</h2>
                <p class="text">{{$Movie->description}}</p>
                <p>Katergori: <a href="{{route('detailgenre',$Movie->Genre->id)}}">{{$Movie->genre->name}}</a> </p>
    </div>
    <div style="width:300px;float:right">
    <h2>Episode</h2>
   
   <table class="table table-striped">
           <thead>
               <tr>
               <th scope="col">Episode</th>
               <th scope="col">Judul</th>
               </tr>
           </thead>
           <tbody>
           @foreach($Episode as $epis)
               <tr>
               <td>{{$epis->episode}}</td>
               <td>{{$epis->title}}</td>
               </tr>
           @endforeach
           </tbody>
   </table> 
       {{$Episode->links()}}
    
    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
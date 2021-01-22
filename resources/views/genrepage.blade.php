<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      .card-img-top{
        height:400px;
      }
    
    </style>
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
    <div class="container bg-secondary">
       <h2 class='genrelisted' >{{$Genre->name}}</h2>
     <div class="card-group">
      @foreach($Genre->Movie as $movielist)
    <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset($movielist->photo)}}" alt="Card image cap">
      <div class="card-body justify-content-center">
          <h5 class="card-title">{{$movielist->title}}</h5>
          <a href="{{route('detail',$movielist->id)}}" class="btn btn-primary btn-sm btn-block align-item-end" >Lihat Film</a>
      </div>
    </div>
    @endforeach
    </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
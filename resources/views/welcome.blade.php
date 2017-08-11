<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    </head>
    <body>

        <div id="main" class="container">
          <div class="row">
             <div class="col-sm-4">
                  <h1>Lista VUEjs - AJAX</h1>
                  <ul class="list-group">
                    <li v-for="item in lists" class="list-group-item">@{{item.name}} 
                    @{{item.email}}</li>
                  </ul>
             </div>
             <div class="col-sm-8">
                  <h1>JSON</h1>
                  <pre>
                    @{{$data}}
                  </pre>
             </div>
          </div>
    
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
    </body>
</html>

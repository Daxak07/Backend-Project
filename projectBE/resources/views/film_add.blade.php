<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
        body {
            background-image: url("https://ak.picdn.net/shutterstock/videos/1007581339/thumb/1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .jumbotron {
            opacity: 0.9;
            background-color: hsl(228, 3%, 9%);
            color: white;
            font-size: 20px;
        }

        .container {
            margin-top: 75px;
        }
        </style>
    </head>
    <body>
        <div class="container">
        <div id="block">
                @if(Session::has('Success'))
                <div class="alert alert-success">
                    {{ Session::get('Success')}}
                </div>
                @endif
        </div>
            <div class="jumbotron">
                <form action="{{route('film_add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title of Film</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter the title">
                </div>
                <div class="form-group">
                    <label>Duration of film</label>
                    <input type="text" name="duration" class="form-control" placeholder="Enter the duration">
                </div>
                <div class="form-group">
                    <label>Description of film</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter the description">
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <label class="custom-file-label">Choose image</label>
                        <input type="file" name="image" class="custom-file-input">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 15px">Send</button>
            </form>
            </div>
        </div>
        <script>
        setTimeout(function(){
            document.getElementById('block').style.display = 'none';
        }, 3000);
        </script>
    </body>
</html>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Feedback</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <style>
            .row {
                display: flex;
                flex-direction: column;
            }
            body {
                background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20210331/pngtree-blue-watercolor-graded-movie-film-background-image_596744.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .container {
                margin-top: 75px;
                background-color: lightgray;
                opacity: .9;
                border-radius: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="form-group col-12 p-0">
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-12">
                            <h2 style="text-align: center; color:blue">Feedback about our webpage</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Enter the Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter the Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Enter the Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter the Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Enter the Feedback</label>
<!--                            <input type="textarea" name="feedback" class="form-control" id="feedback" placeholder="Enter the Feedback">-->
                            <textarea rows="5" cols="50" style="resize:none"name="feedback" class="form-control" id="feedback" form="usrform" placeholder="Enter the feedback here..."></textarea>

                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-primary" style="width: 80px;">Send</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

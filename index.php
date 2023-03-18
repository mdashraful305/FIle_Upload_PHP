<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <form id="stform" enctype="mltipart/form-data">
    <div class="form-group">
      <label for="name"></label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="roll"></label>
      <input type="text" name="roll" id="roll" class="form-control" placeholder="Enter Roll" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="image"></label>
      <input type="file" name="image" id="image" class="form-control" placeholder="Enter Image" aria-describedby="helpId">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $("#stform").submit(function (e) { 
                e.preventDefault();
                var data=new FormData(this);
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:data,
                    contentType:false,
                    processData:false,
                    cache: false,
                    success:function(data){
                        console.log(data);
                    }
                });
            });
        });
    </script>
</body>

</html>
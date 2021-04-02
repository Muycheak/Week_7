

<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Week 3 | Lab </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container" style="width: 50%; margin-top: 100px;">
            <div class="card">
                <div class="card-title">
                    <h2 class="text-center bg-warning p-3 text-white"> Lab 3  </h2>
                </div>
                <div class="card-body">
                <form class="form-group" action="Answer.php" method="POST">
                    <div class="TASK1 m-3">
                        <h4> TASK 1 | Reverse String </h4>
                        <input type="text" class="form-control mx-2" name="input_string" placeholder="input string"> <br> 
                    </div>
                    <div class="TASK2 m-3">
                        <h4> TASK 2 | Filter by even number </h4>
                        <input type="text" class="form-control mx-2" name="input_array" placeholder="input array"> <br>
                    </div>
                    <div class="TASK3 form-inline m-3">
                        <h4> TASK 3 | Sum </h4>
                        <div class="input-group">
                            <input type="text" class="form-control m-2" name="input_number" placeholder="input number"> <br>
                        </div> 
                    </div>
                </div>
                    <div class="card-footer d-flex justify-content-center align-items-center">
                        <button type="submit" name="submit_button" class="btn btn-warning px-5 py-2 m-3"> Get Result </button>
                    </div>    
                </form>
            </div>    
        </div>
    </body>
</html>
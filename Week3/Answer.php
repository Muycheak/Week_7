

<?php
    // TASK 1 | Reverse String
    $str = $_POST["input_string"] ?? " ";
    function StringReverse($str) {
        $output_str = " ";
        if ( !empty($str) ) {
            $temp = explode(" ", $str);
            for ($j=0; $j<sizeof($temp); $j++) {
                for ( $i=strlen($temp[$j])-1; $i>=0; $i--) {              
                    $output_str .= $temp[$j][$i];          // '.=' is concatenation operator use to append the argument on the                                                                                               
                }                                          // right side to the argument on the left side                   
                $output_str .= " ";   
            }
            echo "Reverse from ($str): $output_str";
        } else {
            echo "<i> null </i>";
        }    
    }

    // TASK 2 | Filter by even number
    $arr = $_POST["input_array"] ?? " ";
    function FilterEvenNumber($arr) {
        if ( !empty($arr) ) {
            $temp = (explode(',' , $arr));
            $output_array = " ";
            // this Arrow function use to modulo each element of array to find odd or even number
            $array_result = array_map( fn($a) => $a%2, $temp);
            echo "Filter by even number: $arr <br>";
            echo "Filtered result: ";
            for ($i=0; $i<sizeof($array_result); $i++) {
                if( $array_result[$i] == 0) {
                    $output_array .= $temp[$i] . " ";
                }
            } echo $output_array;
        } else {
            echo "<i> null </i>";
        }
    }

    // TASK 3 | Sum number
    $num = $_POST["input_number"] ?? " ";
    function sum($num) {
        if ( !empty($num)) {
            $temp = explode("," , $num);
            $total = 0;
            for ($i=0; $i<sizeof($temp); $i++) {
                $total += ($temp[$i]);
            }
            echo "Sum of ($num) = $total";
        } else {
            echo "<i> null </i>";
        }
    }

    function GoBack() {
        header("Location: Homework.php");
    }
?>

<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Week 3 | Lab Result </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container" style="width: 50%; margin-top: 100px;">
            <div class="card">
                <div class="card-title">
                    <h2 class="text-center bg-warning p-3 text-white"> Lab 3 | Result </h2>
                </div>
                <div class="card-body">
                    <div class="TASK1 m-3">
                        <h4> TASK 1 | Reverse String </h4>
                        <span class="border rounded form-control"> <?php StringReverse($str) ?> </span> <br>
                    </div>
                    <div class="TASK2 m-3">
                        <h4> TASK 2 | Filter by even number </h4>
                        <span class="border rounded form-control"> <?php FilterEvenNumber($arr) ?> </span> <br>
                    </div>
                    <div class="TASK3 form-inline m-3">
                        <h4> TASK 3 | Sum </h4>               
                        <span class="border rounded form-control"> <?php sum($num) ?> </span> <br>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center align-items-center">
                    <button type="button" id="GoBack" class="btn btn-warning px-5 py-2" onClick="document.location.href='Homework.php'"> Go Back </button>
                </div>
            </div>    
        </div>
    </body>
</html>
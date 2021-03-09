<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                <?php

                function valueLogic($value){
                    if ($value >= 85){
                        return "A";
                    }
                    elseif ($value >= 70){
                        return "B";
                    }
                    elseif ($value >= 60){
                        return "C";
                    }
                    elseif ($value >= 40){
                        return "D";
                    }
                    else{
                        return "E";
                    }
                }

                $nama = $_GET['nama'];
                $nim = $_GET['nim'];
                $lesson = $_GET['matkul'];
                $uts = $_GET['nilaiuts'];
                $uas = $_GET['nilaiuas'];
                $assignment = $_GET['nilaitugas'];
                $total_value = ($uts + $uas + $assignment)/3;
                $jumlah_total_value = valueLogic($total_value);

                echo '<li class="list-group-item">Name : ',$nama,'</li>';
                echo '<li class="list-group-item">Nim : ',$nim,'</li>';
                echo '<li class="list-group-item">Lesson: ',$lesson,'</li>';
                echo '<li class="list-group-item"> UTS Value : ',valueLogic($uts),'</li>';
                echo '<li class="list-group-item">UAS Value: ',valueLogic($uas),'</li>';
                echo '<li class="list-group-item">Assignment Value : ',valueLogic($assignment),'</li>';
                echo '<li class="list-group-item">Value Total:  ',$total_value,'</li>';
                echo '<li class="list-group-item">Value in Alphabet: ',$jumlah_total_value,'</li>';
                
                ?>
                    
                </ul>
                </div>
            </div>
            
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C : 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>
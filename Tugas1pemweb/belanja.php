<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                <?php 

                function itemPrice($barang){
                    if ($barang == "TV") {
                        return 3000000;
                    }
                    elseif ($barang == "Refrigator") {
                        return 6000000;
                    }
                    elseif ($barang == "Washing Machine") {
                        return 4000000;
                    }
                }

                $customer = $_POST['nama'];
                $item = $_POST['barang'];
                $item_price = itemPrice($item);
                $total_item = $_POST['totalbarang'];
                $date = $_POST['tanggal'];
                $courier_type = $_POST['kurir'];
                $shipping_address = $_POST['alamat'];
                $courier_cost = $_POST['biayakurir'];
                $assurance_cost = $_POST['jaminan'];
                $biaya_item = $item_price * $total_item;
                $total_harga = $biaya_item + $courier_cost + $assurance_cost;

                echo '<li class="list-group-item">Customer : ',$customer,'</li>';
                echo '<li class="list-group-item">Item : ',$item,'</li>';
                echo '<li class="list-group-item">Date : ',$date,'</li>';
                echo '<li class="list-group-item">Courier Type : ',$courier_type,'</li>';
                echo '<li class="list-group-item">Shipping Address : ',$shipping_address,'</li>';
                echo '<li class="list-group-item">Courier Cost : Rp ',$courier_cost,'</li>';
                echo '<li class="list-group-item">Assurance Cost : Rp ',$assurance_cost,'</li>';
                echo '<li class="list-group-item">Total Cost : Rp ',$total_harga,'</li>';
                ?>
                </ul>
                </div>
            </div>
            <div class="col-6 mt-3">
                <div class="card">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 3.000.000</li>
                    <li class="list-group-item">Refrigator : Rp 6.000.000</li>
                    <li class="list-group-item">Washing Machine : Rp 4.000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
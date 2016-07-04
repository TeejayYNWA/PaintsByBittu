<?php
require('header.php');

$ID = $_GET['ID'];

$db = new PDO('mysql:host=localhost;dbname=PaintingsByBitu;charset=utf8mb4', 'root', 'Taxi1208');

$Names = $db->query('SELECT * FROM Paintings where Paintings.ID=' . $ID);
$NameArray = $Names->fetchAll(PDO::FETCH_ASSOC);
//var_dump( $NameArray );
?>



<?php foreach ($NameArray as $Name) { ?>


<div class="row">
    <div class="col-xs-12 col-md-6">
        <h1 class="text-center"><?php echo $Name['Description']; ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <img src="<?php echo $Name['FileLocation']; ?>" class="img-responsive center-block"
             height="500"
             width="400"
        />
    </div>

    <div class="col-xs-12 col-md-4">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h1 class="panel-title">Price</h1>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-9">
                        <ul>
                            <li>Handmade in the UK</li>
                            <li>Premium 400gsm cotton canvas</li>
                            <li>100-year colour guarantee</li>
                            <li>White 38mm-deep edges</li>
                        </ul>
                    </div>
                    <div class="col-xs-3">
                        <div class=" pull-right">
                        <div class="Price" id="price"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <form method="post" action="SelectImgPrice.php">
                            <label for="size" class="sr-only">Size</label>
                            <select name="size" id="size" class="canvasSizeControl">
                                <option value="A4">A4 Print</option>
                                <option value="A3">A3 Print</option>
                                <option value="A2">A2 Print</option>
                                <option value="Original">Original Painting</option>
                            </select>

                        </form>
                    </div>
                    <div class="col-xs-9">
                        <button class="pull-right">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-4">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h1 class="panel-title">Orignal Painting Information</h1>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Painting Name: <?php echo $Name['Description']; ?></li>
                    <li>Meduim: <?php echo $Name['Medium']; ?></li>
                    <li>Canvas Size: <?php echo $Name['CanvasSize']; ?></li>
                    <li>Year Completed: <?php echo $Name['YearCompleted']; ?></li>
                </ul>
                <p>Each original painting purchased is finished with a clear varnish to protect your timeless peice of
                    art. You will also be provided with a Certificate of Authenticity which proves you are the owner of
                    a orignal Painting By Bittu.</p>
            </div>
        </div>
    </div>


    <script>

        var prices = {
            'A4': '25.00',
            'A3': '35.00',
            'A2': '50.00',
            'Original': '500.00'
        };

        var size = document.getElementById('size');

        //listen to change event
        size.addEventListener("change", function (e) {

            //debug statements
            console.log(size.value);
            console.log(prices[size.value]);

            //update dom
            var price = document.getElementById('price');
            price.innerHTML = '<h3>£' + prices[size.value] + '</h3>'

        });

        var event = new Event('change');
        // Dispatch it.
        size.dispatchEvent(event);

    </script>

    <?php } ?>
		
		








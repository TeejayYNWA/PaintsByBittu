<?php
require('header.php');
?>

<?php
$db = new PDO('mysql:host=localhost;dbname=PaintingsByBitu;charset=utf8mb4', 'root', 'Taxi1208');

//this is to get contact details from db
$ContactQuery = $db->query('SELECT * FROM ContactDetails limit 1');
$Contact = $ContactQuery->fetch(PDO::FETCH_ASSOC);
?>


<div class="row">
    <div class="col-xs-12 col-md-1"></div>
    <div class="col-xs-12 col-md-6">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h1 class="panel-title">Request a Painting</h1>
            </div>
            <div class="panel-body">
                <p>Do you have a picture that you want turned into an orignal Painting By Bittu? Fill in your
                    details
                    and we will get back to you with a quote!!!</p>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <form method="post" action="contact.php">
                            <div class="form-group">
                                <label for="InputFirstName">First Name</label>
                                <input type="text" class="form-control" id="InputFirstName" placeholder="First Name">
                            </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <form method="post" action="contact.php">
                            <div class="form-group">
                                <label for="InputSurname">Surname</label>
                                <input type="text" class="form-control" id="InputSurname" placeholder="Surname">
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="InputEmail">Email address</label>
                            <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="InputNumber">Contact Number</label>
                            <input class="form-control" id="InputNumber" placeholder="Contact Number">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="InputComment">Additional Comments</label>
                    <textarea class="form-control" id="InputComment" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="InputFile">Find Picture</label>
                    <div class="row">
                        <div class="col-xs-8">
                            <input type="file" id="InputFile">
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <img src="$InputFile">
                    <div class="col-m-6">

                    <div class="col-xs-12">
                        <button type="submit" class="pull-right">Send</button>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-4">
        <div class="panel panel-custom">
            <div class="panel-heading">
                <h1 class="panel-title">Contact Us</h1>
            </div>
            <div class="panel-body">
                <p><span class=" glyphicon glyphicon-envelope"></span> <?php echo $Contact['Email']; ?></p>
                <p><span class=" glyphicon glyphicon-phone-alt"></span> <?php echo $Contact['Telephone']; ?></p>
                <p><span class=" glyphicon glyphicon-picture"></span> <a
                        href='<?php echo $Contact['Instagram']; ?>'>www.instagram.com/paintingsbybittu </a></p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-1"></div>
</div>

<?php
require('header.php');
?>

<div class="col-xs-12 col-md-10">
    <div class="panel panel-custom">
        <div class="panel-heading">
            <h1 class="panel-title">Payment Details</h1>
        </div>
        <div class="panel-body">
            <div class="container">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="Admin.php">
                        <div class="form-group">
                            <label for="InputCNumber">Card Number</label>
                            <input type="number" class="form-control" id="InputCNumber" placeholder="Card Number">
                        </div>
                </div>

                <div class="col-md-6">
                    <form method="post" action="Admin.php">
                        <div class="form-group">
                            <label for="InputCNumber">Security Code</label>
                            <input type="text" class="form-control" id="InputCNumber" placeholder="Card Number">
                        </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xs-12 col-md-10">
                    <form method="post" action="Admin.php">
                        <div class="form-group">
                            <label for="InputPassword">Password</label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                        </div>
                </div>
            </div>
            <button type="submit" class="pull-left">Login</button>
        </div>
    </div>
</div>

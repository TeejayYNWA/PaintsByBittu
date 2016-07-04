<?php
require('header.php'); 
?>

<?php
$db = new PDO('mysql:host=localhost;dbname=PaintingsByBitu;charset=utf8mb4', 'root', 'Taxi1208');

//this is for names of paintings with file location
$Names = $db->query('SELECT Paintings.ID, Description, FileLocation FROM Paintings');
$NameArray = $Names->fetchAll( PDO::FETCH_ASSOC );


?>

<body>
<?php foreach ($NameArray as $Name){ ?>

	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-2" >
		<div class="panel panel-default">
			<!-- Div Heading -->
			<div class="panel-heading">
			<h3 class="panel-title"><?php echo $Name['Description'];?></h3>
			</div>
			<!-- Div Content -->
			<div class="panel-body">
				<img src="<?php echo $Name['FileLocation'];?>" class="img-responsive"
				/>
				</a>
			</div> 
			<div class="panel-footer">
			<a href="http://localhost/New/SelectImg.php?ID=<?php echo $Name['ID'];?>" method= "GET"><button>View Details</button>
			</a>
			</div>
		</div>
		</div>
	</div>
<?php }?>
</body>

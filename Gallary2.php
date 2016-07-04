<?php
require('header.php'); 
$db = new PDO('mysql:host=localhost;dbname=PaintingsByBitu;charset=utf8mb4', 'root', 'Taxi1208');

//this is for names of paintings with file location
$Names = $db->query('SELECT Paintings.ID, Description, FileLocation FROM Paintings');
$NameArray = $Names->fetchAll( PDO::FETCH_ASSOC );
?>

<style>
		.img-flex{
			display: flex;
			flex-wrap: wrap;
			align-items: top;
			
		}
</style>

<body>
	
	<div class="row img-flex">
<?php foreach ($NameArray as $Name){ ?>

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-2" >
    <a href="http://localhost/New/SelectImg.php?ID=<?php echo $Name['ID'];?>" class="thumbnail">
      <img src="<?php echo $Name['FileLocation'];?>" width="200px" >
    </a>
</div>

<?php }?>

</div>
</body>

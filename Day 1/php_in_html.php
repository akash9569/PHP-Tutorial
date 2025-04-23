<!--  -->

<?php 

echo "<h1 style='color:green'>PHP With HTML</h1>";

?>

<?php 

$h2_color = "red";
$name = "Akash Singh";
echo "<h1 style='color:red'>My name is $name</h1>";

?>

<!-- Color Change using Style Tag -->

<h1 style="color:blue">
    My name is <?php echo $name;?>
</h1>

<!-- Color Change using Variable -->

<h2 style="color:<?php echo $h2_color;?>"><?php echo "This is H2";?></h2>
<h2 style="color:<?php echo $h2_color;?>"><?php echo $name;?></h2>
<h2 style="color:<?php echo $h2_color;?>"><?php echo "PHP Tutorial";?></h2>

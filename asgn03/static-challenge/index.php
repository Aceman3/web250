<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn02 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    // Display instance_count before using create() method
    echo "<p>Initial Bird instance count: " . Bird::$instance_count . "</p>";
    echo "<p>Initial YellowBelliedFlyCatcher instance count: " . YellowBelliedFlyCatcher::$instance_count . "</p>";
    echo "<p>Initial Kiwi instance count: " . Kiwi::$instance_count . "</p>";
    
    // Create new instances using the create() method
    $bird = Bird::create();
    $fly_catcher = YellowBelliedFlyCatcher::create();
    $kiwi = Kiwi::create();
    
    // Display the properties and behaviors as before
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";
    
    echo "<p>After creation, Bird instance count: " . Bird::$instance_count . "</p>";
    echo "<p>After creation, YellowBelliedFlyCatcher instance count: " . YellowBelliedFlyCatcher::$instance_count . "</p>";
    echo "<p>After creation, Kiwi instance count: " . Kiwi::$instance_count . "</p>";
?>

    </body>
</html>


<?php 
require_once('../private/initialize.php');
$page_title = 'Sightings';
include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

<table border="1">
    <!-- Table headers -->
    <thead>
        <tr>
            <th>Common Name</th>
            <th>Habitat</th>
            <th>Food</th>
            <th>Nest Placement</th>
            <th>Behavior</th>
            <th>Conservation ID</th>
            <th>Backyard Tips</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
        $bird_array = $parser->parse();

        // Loop through the birds array and output each bird's data in table rows
        foreach($bird_array as $bird) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($bird['common_name']) . "</td>";
            echo "<td>" . htmlspecialchars($bird['habitat']) . "</td>";
            echo "<td>" . htmlspecialchars($bird['food']) . "</td>";
            echo "<td>" . htmlspecialchars($bird['nest_placement']) . "</td>";
            echo "<td>" . htmlspecialchars($bird['behavior']) . "</td>";
            echo "<td>" . htmlspecialchars($bird['conservation_id']) . "</td>";
            echo "<td>" . htmlspecialchars($bird['backyard_tips']) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

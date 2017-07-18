<?php
include 'header.php';
include_once 'db.php';
?>
<style>
    .cd{
        height: auto;
    }
</style>
<div class="row" style="margin-top: 20px;   width: 90%;">
    <?php
    $results = SmartcarDB::getInstance()->get_accessory_agents();

    while ($row = $results->fetch_assoc()) {
        ?>
        <div class="card col s12 m4 cd">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator img-responsive" src="images/Spare-Parts.png">
            </div>
            <div class="card-content">
                <h5><?php echo $row["name"]; ?></h5>
                <p><span class="orange-text">Contact Person: </span><?php echo $row["contactname"]; ?></p>
                <p><span class="orange-text">Telephone: </span><?php echo $row["telephone"]; ?></p>
                <p><span class="orange-text">Email: </span><?php echo $row["email"]; ?></p>
                <p><span class="orange-text">Telephone: </span><?php echo $row["location"]; ?></p>
                <p><span class="orange-text">Email: </span><?php echo $row["website"]; ?></p>
            </div>
            <span class="card-title activator green-text text-darken-4 right">Details</span>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Summary<i class="material-icons right">close</i></span>
                <p><?php echo $row["description"]; ?></p>
            </div>
        </div>

        <?php
    }
    ?>
</div>
<?php
include 'servicesarea.php';
include 'accessoriesarea.php';
include 'footer.php';
?>

<script>
    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        hover: true, // Activate on hover
        belowOrigin: true, // Displays dropdown below the button
        alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
    );
</script>
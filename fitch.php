<?php
include 'conaction.php';


echo '<BR>';
$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <pre>
        <?php
        print_r($row);
        ?>
    </pre>
<?php
}





// while ($row = mysqli_fetch_row($result)) {
// print_r($row);
// }
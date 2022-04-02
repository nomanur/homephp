<?php

$connection = mysqli_connect("localhost", "root", "123", "query");

if (!$connection) {
    echo "not connected successfully";
}

$query = "SELECT * from User";
$query = mysqli_query($connection, $query);

while ($result = mysqli_fetch_assoc($query)) { ?>
    <h2>Name: <?php echo $result['fname']; ?></h2>
    <h2>Email: <?php echo $result['email']; ?></h2>
    <img src="images/<?php echo $result['image']; ?>" alt="">
    <a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
    <a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a>

<?php } ?>
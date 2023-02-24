<?php
$conn = mysqli_connect("localhost:5431", "root", "40028922.jj", "teste");

$category = $_POST['category'];

if ($category == "") {
  $query = "SELECT name, description, image FROM files";
} else {
  $query = "SELECT name, description, image FROM files WHERE description LIKE '%$category%'";
}

$result = mysqli_query($conn, $query);

while ($item = mysqli_fetch_assoc($result)) {
  echo '<div class="item">';
  echo '<h2>' . $item['name'] . '</h2>';
  echo '<p>' . $item['description'] . '</p>';
  echo '<img src="' . $item['image'] . '" alt="' . $item['name'] . '" style="heigth:50px; width: 150px;" data-toggle="modal" data-target="#itemModal" data-name="' . $item['name'] . '" data-description="' . $item['description'] . '" data-image="' . $item['image'] . '">';
  echo '</div>';
}
?>

<?php 
include("../../config.php");

if(isset($_POST['playlistId']) && isset($_POST['songId'])) {
    $playlistId = $_POST['playlistId'];
    $songId = $_POST['songId'];

    $orderIdQuery = mysqli_query($con, "select ifnull(max(playlistOrder) + 1, 1) as playlistOrder from playlistssongs where playlistId = '$playlistId'");
    $row = mysqli_fetch_array($orderIdQuery);
    $order = $row['playlistOrder'];

    $query = mysqli_query($con,"insert into playlistssongs values('','$songId','$playlistId','$order')");
}
else {
    echo "Playlist id or song id was not passed to addToPlaylist.php";
}

?>
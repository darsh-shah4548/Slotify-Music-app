<?php 
include("../../config.php");

if(isset($_POST['playlistId'])) {
    $playlistId = $_POST['playlistId'];

    $playlistQuery = mysqli_query($con, "DELETE from playlists where id = '$playlistId'");
    $songsQuery = mysqli_query($con, "DELETE from playlistsongs where playlistId = '$playlistId'");
}
else {
    echo "Playlist id was not passed to deletePlaylist.php";
}

?>
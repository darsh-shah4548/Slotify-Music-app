<?php 
include("../../config.php");

if(isset($_POST['playlistId']) && isset($_POST['songId'])) {
    $playlistId = $_POST['playlistId'];
    $songId = $_POST['songId'];

    $query = mysqli_query($con, "delete from playlistssongs where playlistId = '$playlistId' and songId = '$songId'");
    
}
else {
    echo "Playlist id was not passed to deletePlaylist.php";
}

?>

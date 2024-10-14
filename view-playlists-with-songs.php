<h1>Playlists with Songs</h1>

<div class="container">
    <div class="row">
        <?php 
        $count = 0;
        while($playlist = $playlists->fetch_assoc()) { 
            if ($count % 4 == 0 && $count != 0) { 
                // Close the current row and start a new one every 4 cards
                echo '</div><div class="row">';
            }
            $count++;
        ?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $playlist['PlaylistName']; ?></h2>
                        <h class="card-subtitle"><?php echo $playlist['Username']; ?></h>
                        <p class="card-text">
                            <ul class="list-group">
                                <?php
                                $songs = selectSongsByPlaylist($playlist['PlaylistName']);
                                while ($song = $songs->fetch_assoc()) { ?>
                                    <li class="list-group-item"><?php echo $song['Title']; ?></li>
                                <?php } ?>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

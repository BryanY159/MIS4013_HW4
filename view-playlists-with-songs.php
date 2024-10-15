<div class = "row">
    <div class = "col">
        <h1>Playlists with Songs</h1>
    </div>
    <div class = "col-auto">
        <?php
            include "view-playlists-with-songs-add-playlist.php";
        ?>
    </div>
</div>

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
                        <div class = "row">
                          <div class = "col">
                            <h3 class="card-title"><?php echo $playlist['PlaylistName']; ?></h3>
                            <h class="card-subtitle"><?php echo $playlist['Username']; ?></h>
                          </div>
                          <div class = "col-auto">
                            <?php
                                include "view-playlists-with-songs-add.php";
                            ?>
                            <?php
                            ?>
                          </div>
                        </div>
                        <p class="card-text">
                            <ul class="list-group">
                                <?php
                                $songs = selectSongsByPlaylist($playlist['PlaylistName']);
                                while ($song = $songs->fetch_assoc()) { ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <?php echo $song['Title']; ?>
                                        <span class="flex-shrink-0">
                                            <form method="post" action="">
                                                <input type="hidden" name="PlaylistName" value="<?php echo htmlspecialchars($playlist['PlaylistName'], ENT_QUOTES, 'UTF-8'); ?>">
                                                <input type="hidden" name="SongID" value="<?php echo $song['SongID']; ?>">
                                                <input type = "hidden" name = "actionType" value = "Delete">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

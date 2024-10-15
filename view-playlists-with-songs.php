<div class = "row">
    <div class = "col">
        <h1>Playlists with Songs</h1>
    </div>
    <div class = "col-auto">
        <div style="margin-top:10px;">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addPlaylistModal">Add Playlist</button>
        </div>   
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
                            <div>
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
                            </div>
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
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $song['SongID']; ?>">Delete</button>
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

<h1>Playlists with Songs</h1>

<div class="card-group">
    <?php while($playlist = $playlists->fetch_assoc()) { ?>                                                 
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?php echo $playlist['PlaylistName']; ?> </h2>
          <p class="card-text">
            <ul class="list-group">
              <?php
                $songs = selectSongsByPlaylist($playlist['PlaylistName']);
                while ($song = $songs->fetch_assoc()) { ?>
                  <li class="list-group-item"><?php echo $song['SongID']; ?> - <?php echo $song['Title']; ?></li>
              <?php } ?>
            </ul>
          </p>
        </div>
      </div>
    <?php } ?>
</div>

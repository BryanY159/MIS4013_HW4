<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $user['UserID']; ?>">Edit</button>

<!-- Edit Modal -->
<div class="modal fade" id="editModal<?php echo $user['UserID']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $user['UserID']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel<?php echo $user['UserID']; ?>">Edit User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="Username<?php echo $user['UserID']; ?>" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username<?php echo $user['UserID']; ?>" name="Username" value="<?php echo $user['Username']; ?>">
          </div>
          <div class="mb-3">
            <label for="SubscriptionType<?php echo $user['UserID']; ?>" class="form-label">Subscription Type</label>
            <input type="text" class="form-control" id="SubscriptionType<?php echo $user['UserID']; ?>" name="SubscriptionType" value="<?php echo $user['SubscriptionType']; ?>">
          </div>
          <input type="hidden" name="UserID" value="<?php echo $user['UserID']; ?>">
          <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-primary">Edit User</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div style="margin-top:10px;">
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addModalLabel">New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="Username" name="Username">
          </div>
          <div class="mb-3">
            <label for="SubscriptionType" class="form-label">Subscription Type</label>
            <input type="text" class="form-control" id="SubscriptionType" name="SubscriptionType">
          </div>
          <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Add User</button>
        </form>
      </div>
    </div>
  </div>
</div>

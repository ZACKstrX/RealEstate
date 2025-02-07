@include('template.header')

<div class="container">
  <div class="d-flex justify-content-between mb-5">
    <h1>Status :</h1>
    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStatusModal">Add Status</a>
  </div>

  <table class="table table-striped text-center align-middle">
    <thead>
        <th scope="col">Name</th>
        <th scope="col">Operations</th>
    </thead>
    <tbody>
        @foreach ($statuses as $status )
          <tr>
            <td class="">{{$status->name}}</td>
            <td>
              <a class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#updateStatusModal" data-status-id="{{ $status->id }}" data-status-name="{{ $status->name }}">Update</a>
              
              <form action="{{ route('status.destroy', $status->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this status?')">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>

@include('template.footer')

<!-- Modal for Add Status -->
<div class="modal fade" id="addStatusModal" tabindex="-1" aria-labelledby="addStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addStatusModalLabel">Add Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/addstatus">
          @csrf
          <div class="mb-3">
            <label for="statusName" class="form-label">Status Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter status name">
          </div>
          <button type="submit" class="btn btn-primary">Save Status</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Update Status -->
<div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateStatusModalLabel">Edit Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateStatusForm" method="POST">
          @csrf
          @method('POST')
          <input type="hidden" name="id" id="updateStatusId">
          <div class="mb-3">
            <label for="updateStatusName" class="form-label">Status Name</label>
            <input type="text" class="form-control" name="name" id="updateStatusName" placeholder="Enter new status name">
          </div>
          <button type="submit" class="btn btn-primary">Update Status</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to handle the modal updates -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const updateStatusModal = document.getElementById('updateStatusModal');
    updateStatusModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      const statusId = button.getAttribute('data-status-id');
      const statusName = button.getAttribute('data-status-name');
      
      const modalInput = document.getElementById('updateStatusName');
      const modalForm = document.getElementById('updateStatusForm');
      const modalIdInput = document.getElementById('updateStatusId');

      modalInput.value = statusName;
      modalIdInput.value = statusId;
      modalForm.action = `/updatestatus/${statusId}`;
    });
  });
</script>

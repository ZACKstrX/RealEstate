@include('template.header')

<div class="container">
    <div class="d-flex justify-content-between mb-5">
        <h1>Types:</h1>
        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTypeModal">Add Type</a>
    </div>

    <table class="table table-striped">
        <thead>
            <th scope="col">Name</th>
            <th scope="col">Operations</th>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>
                        <a class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#updateTypeModal"
                            data-type-id="{{ $type->id }}" data-type-name="{{ $type->name }}">Update</a>
                        <form action="{{ route('type.destroy', $type->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
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

<!-- Modal for Add Type -->
<div class="modal fade" id="addTypeModal" tabindex="-1" aria-labelledby="addTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTypeModalLabel">Add Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('type.add') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="typeName" class="form-label">Type Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter type name">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Type</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Update Type -->
<div class="modal fade" id="updateTypeModal" tabindex="-1" aria-labelledby="updateTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTypeModalLabel">Edit Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateTypeForm" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" id="updateTypeId">
                    <div class="mb-3">
                        <label for="updateTypeName" class="form-label">Type Name</label>
                        <input type="text" class="form-control" name="name" id="updateTypeName" placeholder="Enter new type name">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Type</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Modal -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const updateTypeModal = document.getElementById('updateTypeModal');
        updateTypeModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const typeId = button.getAttribute('data-type-id');
            const typeName = button.getAttribute('data-type-name');

            const modalInput = document.getElementById('updateTypeName');
            const modalForm = document.getElementById('updateTypeForm');
            const modalIdInput = document.getElementById('updateTypeId');

            modalInput.value = typeName;
            modalIdInput.value = typeId;
            modalForm.action = `/updatetype/${typeId}`;
        });
    });
</script>

@include('template.header')

<div class="container">
  <div class="d-flex justify-content-between mb-5">
    <h1>Cities :</h1>
    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCityModal">Add City</a>
  </div>
  
  <table class="table table-striped">
    <thead>
        <th scope="col">Name</th>
        <th scope="col">Operations</th>
    </thead>
    <tbody>
        @foreach ($cts as $city )
          <tr>
            <td>{{$city->name}}</td>
            <td><a class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#updateCityModal" data-city-name="">Update</a>
              <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this city?')">Delete</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>

@include('template.footer')

<!-- Modal for Add City -->
<div class="modal fade" id="addCityModal" tabindex="-1" aria-labelledby="addCityModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCityModalLabel">Add City</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/addcity">
          @csrf
          <div class="mb-3">
            <label for="cityName" class="form-label">City Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter city name">
          </div>
          <button type="submit" class="btn btn-primary">Save City</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Update City -->
<div class="modal fade" id="updateCityModal" tabindex="-1" aria-labelledby="updateCityModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateCityModalLabel">Update City</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form >
          <div class="mb-3">
            <label for="updateCityName" class="form-label">City Name</label>
            <input type="text" class="form-control" id="updateCityName" placeholder="Enter new city name">
          </div>
          <button type="submit" class="btn btn-primary">Update City</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to handle the modal updates -->
<script>
  const updateCityModal = document.getElementById('updateCityModal');
  updateCityModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const cityName = button.getAttribute('data-city-name');
    const modalInput = updateCityModal.querySelector('#updateCityName');
    modalInput.value = cityName;
  });
</script>





 {{-- <td>
          <a class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#updateCityModal" data-city-name="Oujda">Update</a>
          <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this city?')">Delete</a>
        </td> --}}
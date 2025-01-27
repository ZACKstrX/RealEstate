@include('template.header')

<div class="container">
    <h1>Type : </h1>
    <table class="table table-striped " style="">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">operations</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fes</td>
            <td><a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr>
          <tr>
            <td>Rabat</td>
            <td><a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr>
          <tr>
            <td>Tanger</td>
            <td> <a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr><tr>
            <td>Marakech</td>
            <td> <a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr><tr>
            <td>Oujda</td>
            <td> <a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr>
          
        </tbody>
      </table>
</div>


@include('template.footer')

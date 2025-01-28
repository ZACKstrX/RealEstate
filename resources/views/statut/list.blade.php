@include('template.header')
<div class="container">
  <div class="d-flex justify-content-between mb-5"><h1>Statut :</h1> <a class="btn btn-success ">Add Statut </a> </div> <!--Model to create-->
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Name :</th>
            <th scope="col">operations :</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>On loan</td>
            <td><a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr>
          <tr>
            <td>for loan</td>
            <td><a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr>
          <tr>
            <td>for sell</td>
            <td><a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr><tr>
            <td>buyed</td>
            <td><a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a></td>
          </tr>
        </tbody>
      </table>
</div>
@include('template.footer')
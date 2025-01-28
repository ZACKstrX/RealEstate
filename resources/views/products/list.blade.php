@include('template.header')
<div class="container">
    <h1>Products :</h1>
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Title </th>
            <th scope="col">Surface </th>
            <th scope="col">Price </th>
            <th scope="col">City </th>
            <th scope="col">Product Type </th>
            <th scope="col">Owner </th>
            <th scope="col d-flex row gap">oaperations </th>
            <th> <a class="btn btn-secondary me-3">Update</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Villa</td>
            <td>600 m</td>
            <td>8.000.000</td>
            <td>Tanger</td>
            <td>2</td>
            <td>15</td>
            <td>       
              <a class="btn btn-secondary  me-3">Update</a>
              <a  class="btn btn-danger  " onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a>
          </td>
          </tr>
          <tr>
            <td>appartement</td>
            <td>100 m</td>
            <td>400.000</td>
            <td>Fes</td>
            <td>4</td>
            <td>19</td>
            <td>       
              <a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a>
          </td>
          </tr>
          <tr>
            <td>appartement</td>
            <td>180 m</td>
            <td>800.000</td>
            <td>Rabat</td>
            <td>3</td>
            <td>9</td>
            <td>       
              <a class="btn btn-secondary me-3">Update</a>
              <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this restaurant?')">Delete</a>
          </td>
          
        </tbody>
      </table>
</div>
@include('template.footer')
@include('template.header')
<div class="container">  
    <div class="d-flex justify-content-between mb-5"><h1>Products :</h1> <a href="/productform" class="btn btn-success ">Add Product</a> </div>
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">Title </th>
            <th scope="col">Surface </th>
            <th scope="col">Price </th>
            <th scope="col">City </th>
            <th scope="col">Product Type </th>
            <th scope="col">Owner </th>
            <th scope="col d-flex row gap">operations </th>
          </tr>
        </thead>
          <tbody>
          @foreach ($products as $product)
          <tr>  
          <td>{{$product->title}}</td>
            <td>{{$product->surface}}</td>
            <td>{{$product->prix}}</td>
            <td>{{$product->city_id}}</td>
            <td>{{$product->type_bien_id}}</td>
            <td>@if($product->user_id ===null)
              null
              @else
              {{$product->user_id }}
              @endif  
            </td>
            <td>
              <button type="button" class="btn btn-secondary me-3">Update</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </tr>
          @endforeach
          </tbody>
      </table>
</div>
@include('template.footer')
@include('template.header')
<div class="container">  
    <div class="d-flex justify-content-between mb-5"><h1>Products :</h1> <a href="/productform" class="btn btn-success ">Add Product</a> </div>
    <table class="table table-striped text-center align-middle">
        <thead>
          <tr>
            <th scope="col">Title </th>
            <th scope="col">Surface </th>
            <th scope="col">Price </th>
            <th scope="col">City </th>
            <th scope="col">Product Type </th>
            <th scope="col">Owner ID</th>
            <th scope="col">Owner Name</th>
            <th scope="col d-flex row gap">operations </th>
          </tr>
        </thead>
          <tbody>
          @foreach ($products as $product)
          <tr>  
          <td>{{$product->title}}</td>
            <td>{{$product->surface}} m²</td>
            <td>{{$product->prix}} MAD</td>
            <td>{{$product->city->name}}</td>
            <td>{{$product->typeBien->name}}</td>
            <td>{{$product->user_id}}</td>
            <td>{{$product->user->first_name }} {{$product->user->last_name}}</td>
           
            </td>
            <td>
              <a class="btn btn-secondary me-3" href="{{url('/getupdate/'.$product->id)}}">Update</a>
              <form action="{{ route('product.destroy',$product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this product?')">
                    Delete
                </button>
            </form>
            </tr>
          @endforeach
          </tbody>
      </table>
</div>
@include('template.footer')
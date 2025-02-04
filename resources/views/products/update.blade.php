@include('template.nav')
<div class="container_form">
    <div class="container">
        <form class="form2" method="POST" action="{{route('updateProduct',$previous->id)}}">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <div class="form-row w-50">
                <div class="d-flex flex-column align-items-center">
                    <img class="w-25" src="{{asset('images/logo.png')}}" alt="">
                    <h2 class="SignINc"><b><i>Real Estate Information:</i> </b></h2>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title" value={{$previous->title}}>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="inputTittle" name="description">{{$previous->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Picture</label>
                    <input class="form-control" type="file" id="formFile" name="image" >
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone_number"
                            pattern="[0-9]{10}" maxlength="10" title="Enter a valid 10-digit phone number" 
                            value={{$previous->phone_number}}>
                    </div>
                    

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="exemple@exemple.com"
                        value={{$previous->email}}>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-6 col">
                        <label for="inpuPrice">Price</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="prix" placeholder="" value={{$previous->prix}}>
                            <span class="input-group-text">MAD</span>
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="inputAddress">Surface</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="surface" placeholder="" value={{$previous->surface}}>
                            <span class="input-group-text">m²</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-row w-50">
                <div class="row"> {{-- Here --}}
                    <div class="col">
                        <label for="inputCity">City</label>
                        <select class="form-control" name="city_id" >
                            <option >Choose...</option >
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}"{{ $previous->city_id == $city->id ? 'selected' : ''}}>
                                    {{$city->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputType">Type de bien</label>
                        <select class="form-control" name="type_bien_id">
                            <option selected>Choose...</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"{{ $previous->type_bien_id == $type->id ? 'selected' : '' }}>
                                    {{$type->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="inputStatut">Statut</label>
                        <select class="form-control" name="status_id">
                            <option selected>Choose...</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}"{{ $previous->status_id == $status->id ?'selected' : '' }}>
                                    {{$status->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputEtat">Etat</label>
                        <select class="form-control" name="etat_id">
                            <option selected>Choose...</option>
                            <option value="1"{{$previous->etat_id == 1 ? 'selected': ''}}>New</option>
                            <option value="2" {{$previous->etat_id == 2 ? 'selected' : ''}}>Old</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputBaths">Number of rooms</label>
                        <select class="form-control" name="rooms">
                            <option >Choose...</option>
                            @for($i = 1; $i <=5; $i++)
                            <option value="{{$i}}"{{$bienDetails->rooms == $i ? 'selected' : ''}}>{{$i}}</option>
                        @endfor
                            <option value="6"{{$bienDetails->rooms > 5 ? 'selected' : ''}}>More...</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputBaths">Number of baths</label>
                        <select class="form-control" name="baths">
                            <option >Choose...</option>
                            @for($i = 1 ; $i<=5; $i++)
                            <option value="{{$i}}"{{$bienDetails->baths == $i ? 'selected' : ''}}>{{$i}}</option>
                            @endfor
                            <option>More...</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="inputGarages">Number of garages</label>
                        <select class="form-control" name="garages">
                            <option >Choose...</option>
                            @for($i = 1 ; $i<=5; $i++)
                            <option value="{{$i}}" {{$bienDetails->garages == $i ? 'selected' : ''}}>{{$i}}</option>
                            @endfor
                            <option>More...</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputBalconies">Number of balconies</label>
                        <select class="form-control" name="balconies">
                            <option >Choose...</option>
                            @for ($i = 1; $i <= 5; $i++)
                            <option value="{{$i}}"{{$bienDetails->balconies == $i ? 'selected' : ''}}>{{$i}}</option>
                            @endfor
                            <option>More...</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Post</button>
            </div>
        </form>
    </div>
</div>

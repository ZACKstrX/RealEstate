@include('template.nav')

<div class="container_form">
    <div class="container">
        <form class="form2" method="POST" action="{{ route('updateProduct', $previous->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <div class="form-col">
                <div class="d-flex flex-column align-items-center">
                    <img class="w" src="{{ asset('images/logo.png') }}" alt="">
                    <h3 class="SignINc"><b><i>Real Estate Information:</i> </b></h3>
                </div>

                <div class="row">
                    <div class="form-row w-50">
                        <div class="form-group col-md-6 w-100">
                            <label for="inputPassword4">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="title" name="title" value="{{ $previous->title }}">
                        </div>

                        <div class="form-group">
                            <label for="inputTittle">Description</label>
                            <textarea class="form-control" id="inputTittle" name="description" 
                                      style="height: 30px; max-height: 80px; overflow-y: auto;">{{ $previous->description }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Picture</label>
                            <div class="d-flex">
                                <input type="file" class="form-control me-2" name="image" id="imageInput" style="max-width: 60%; height: 38px;" />
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#imageModal" style="height: 38px; width: 150px;">previous image</button>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Phone Number</label>
                                <input type="tel" class="form-control  @error('phone_number') is-invalid @enderror " placeholder="Phone Number" name="phone_number"
                                    pattern="[0-9]{10}" maxlength="10" title="Enter a valid 10-digit phone number"
                                    value="{{ $previous->phone_number }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="exemple@exemple.com"
                                    value="{{ $previous->email }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col">
                                <label for="inpuPrice">Price</label>
                                <div class="input-group">
                                    <input type="number" class="form-control  @error('prix') is-invalid @enderror"min="100" max="9999999999" name="prix" placeholder="" value="{{ $previous->prix }}">
                                    <span class="input-group-text" >MAD</span>
                                </div>
                            </div>

                            <div class="form-group col">
                                <label for="inputAddress">Surface</label>
                                <div class="input-group">
                                    <input type="number" min="10" max="9999999" class="form-control  @error('surface') is-invalid @enderror" name="surface" placeholder="" value="{{ $previous->surface }}">
                                    <span class="input-group-text">m²</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row w-50">
                        <div class="row">
                            <div class="col">
                                <label for="inputCity">City</label>
                                <select class="form-control  @error('city_id') is-invalid @enderror" name="city_id">
                                    <option>Choose...</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" {{ $previous->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputType">Type de bien</label>
                                <select class="form-control  @error('type_bien_id') is-invalid @enderror" name="type_bien_id">
                                    <option>Choose...</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" {{ $previous->type_bien_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="inputStatut">Statut</label>
                                <select class="form-control @error('status_id') is-invalid @enderror" name="status_id">
                                    <option>Choose...</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}" {{ $previous->status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputEtat">Etat</label>
                                <select class="form-control  @error('etat_id') is-invalid @enderror" name="etat_id">
                                    <option>Choose...</option>
                                    <option value="1" {{ $previous->etat_id == 1 ? 'selected' : '' }}>New</option>
                                    <option value="2" {{ $previous->etat_id == 2 ? 'selected' : '' }}>Old</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="inputBaths">Number of rooms</label>
                                <select class="form-control" name="rooms">
                                    <option value="0">Choose...</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $bienDetails->rooms == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                    <option value="6" {{ $bienDetails->rooms > 5 ? 'selected' : '' }}>More...</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputBaths">Number of baths</label>
                                <select class="form-control" name="baths">
                                    <option value="0">Choose...</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $bienDetails->baths == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="inputGarages">Number of garages</label>
                                <select class="form-control" name="garages">
                                    <option value="0">Choose...</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $bienDetails->garages == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputBalconies">Number of balconies</label>
                                <select class="form-control" name="balconies">
                                    <option value="0">Choose...</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $bienDetails->balconies == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
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

                        <button type="submit" class="btn btn-success w-100">Update</button>
                    </div>
                </div>
            </div>
        </form>
        
        <!-- Error Modal -->
        @if ($errors->any())
        <div class="modal" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalLabel">Missing Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Image Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Current Image</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @if ($previous->image)
                            <img src="{{ asset('storage/'.$previous->image) }}" class="img-fluid" alt="Current Image">
                        @else
                            <p>No image available</p>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

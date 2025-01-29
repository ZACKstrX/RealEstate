@include('template.nav')
<div class="container_form">
    <div class="container">
        <form class="form2">
            <div class="form-row w-50">
                <div class="d-flex flex-column align-items-center">
                    <img class="w-25" src="./images/logo.png" alt="">
                    <h2 class="SignINc"><b><i>Real Estate Information:</i> </b></h2>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="inputTittle" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Picture</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 col">
                        <label for="inpuPrice">Price</label>
                        <input type="text" class="form-control" id="inputPrice" name="prix" placeholder="in MAD">
                    </div>

                    <div class="form-group col">
                        <label for="inputAddress">Surface</label>
                        <input type="text" class="form-control" placeholder="Ex: 500 m" name="surface">
                    </div>
                </div>
            </div>

            <div class="form-row w-50">
                <div class="row"> {{-- Here --}}
                    <div class="col">
                        <label for="inputCity">City</label>
                        <select class="form-control" name="city_id">
                            <option selected>Choose...</option>
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputType">Type de bien</label>
                        <select class="form-control" name="type_bien_id">
                            <option selected>Choose...</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="inputStatut">Statut</label>
                        <select class="form-control" name="status_id">
                            <option selected>Choose...</option>
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputEtat">Etat</label>
                        <select class="form-control" name="etat_id">
                            <option selected>Choose...</option>
                            <option value="1">New</option>
                            <option>Old</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="inputBaths">Number of rooms</label>
                        <select class="form-control" name="rooms">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>More...</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputBaths">Number of baths</label>
                        <select class="form-control" name="baths">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>More...</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="inputGarages">Number of garages</label>
                        <select class="form-control" name="parages">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>More...</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="inputBalconies">Number of balconies</label>
                        <select class="form-control" name="balconies">
                            <option selected>Choose...</option>
                            <option value="1">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
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

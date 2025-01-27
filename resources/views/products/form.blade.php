@include('template.nav')
<form>
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputPassword4">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descreption</label>
            <textarea class="form-control" id="inputTittle" name="description"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Phone Number</label>
            <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Surface</label>
        <input type="text" class="form-control" placeholder="Ex: 500 m " name="surface">
    </div>
    {{-- <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div> --}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inpuPrice">Price</label>
            <input type="text" class="form-control" id="inputPrice" name="prix" placeholder="in MAD">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">City</label>
            <select class="form-control" name="city_id">
                <option selected>Choose...</option>
                <option value='1'>Fes</option>
                <option>Rabat</option>
                <option>Tanger</option>
                <option>Marakech</option>
                <option>Oujda</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputType">Type de bien</label>
            <select  class="form-control" name="type_bien_id">
                <option selected>Choose...</option>
                <option value='1'>Land</option>
                <option>Apartement</option>
                <option>Villa</option>
                <option>Studio</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputStatut">Statut</label>
            <select  class="form-control" name="status_id">
                <option selected>Choose...</option>
                <option value='1'>On loan</option>
                <option>for loan</option>
                <option>for sell</option>
                <option>buyed</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputEtat">Etat</label>
            <select  class="form-control" name="etat_id">
                <option selected>Choose...</option>
                <option value='1'>New</option>
                <option>Old</option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <label for="inputBaths">Number of rooms</label>
            <select  class="form-control" name="rooms">
                <option selected>Choose...</option>
                <option value='1'>1</option>
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
        <div class="form-group col-md-4">
            <label for="inputBaths">Number of baths</label>
            <select  class="form-control" name="baths">
                <option selected>Choose...</option>
                <option value='1'>1</option>
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
        <div class="form-group col-md-4">
            <label for="inputGarages">Number of garages</label>
            <select  class="form-control" name="parages">
                <option selected>Choose...</option>
                <option value='1'>1</option>
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
        <div class="form-group col-md-4">
            <label for="inputBalconies">Number of balconies</label>
            <select  class="form-control" name="balconies">
                <option selected>Choose...</option>
                <option value='1'>1</option>
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
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Post</button>
</form>

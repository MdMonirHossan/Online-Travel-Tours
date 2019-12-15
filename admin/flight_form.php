<!-- Form for Add, Update, Delete flight -->
    <div class="form-group row">
        <label class="col-sm-2" for="flightno">Flight No.</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="flightno" placeholder="Flight Number" name="flightno" required>
        </div> 
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="airplaneid">Airplane ID</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="airplaneid" placeholder="Air ID" name="airplaneid" required>
        </div>
        <label class="col-sm-1" for="airpiddetail" id = "ad1"><font color="gray">details</font></label>
        <div class="col-md-3" id = "detail1"></div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="departure">Departure Airport</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="departure" placeholder="Departure" name="departure" required>
        </div>
        <label class="col-sm-1" for="dairportdetail" id="ad2" ><font color="gray">details</font></label>
        <div class="col-sm-3" id = "adetail2">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="dtime">Departure Time</label>
        <div class="col-sm-6">
            <input type="datetime-local" class="form-control" id="dtime" placeholder="" name="dtime" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="arrival">Arrival Airport</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="arrival" placeholder="Arrival Airport" name="arrival" required>
        </div>
        <label class="col-sm-1" for="dairportdetail" id="ad3" ><font color="gray">details</font></label>
        <div class="col-sm-3" id = "adetail3">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="atime">Arrival Time</label>
        <div class="col-sm-6">
            <input type="datetime-local" class="form-control" id="atime" placeholder="" name="atime" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="ecapacity">Economy Capacity</label>
        <div class="col-sm-6">
            <input type="number" step=any class="form-control" id="ecapacity" placeholder="Economy Capacity" name="ecapacity" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="eprice">Economy Price</label>
        <div class="col-sm-6">
            <input type="number" step=any class="form-control" id="eprice" placeholder="Economy Price" name="eprice" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="bcapacity">Business Capacity</label>
        <div class="col-sm-6">
            <input type="number" step=any class="form-control" id="bcapacity" placeholder="Business Capacity" name="bcapacity" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2" for="bprice">Business Price</label>
        <div class="col-sm-6">
            <input type="number" step=any class="form-control" id="bprice" placeholder="Business Price" name="bprice" required>
        </div>
    </div>
    <br />
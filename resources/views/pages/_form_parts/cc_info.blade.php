<div class="form-group row">
    <label for="card-number" class="col-sm-4">Card Number</label>
    <div class="col-sm-8">
        <input class="form-control input-md card-number" data-stripe="number" id="card-number" type="text">
    </div>
</div>
<div class="form-group row">
    <label for="expiration" class="col-sm-4">Expiration</label>
    <div class="col-sm-3">
        <select id="cc-expiration-month" class="form-control expry card-expiry-month" data-stripe="exp-month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
    </div>
    <div class="col-sm-2">
        <select id="cc-expiration-year" class="form-control expry card-expiry-year" data-stripe="exp-year">
            @for ($i=0;$i<11;$i++ )
                <option value="{{ date("Y")+$i }}">{{ date("Y")+$i }}</option>
            @endfor
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="card-cvc" class="col-sm-4">CVC</label>
    <div class="col-md-3">
        <input class="form-control input-md card-cvc" data-stripe="cvc" id="card-cvc" type="text">
    </div>
</div>

<div class="payment-errors bold"></div>
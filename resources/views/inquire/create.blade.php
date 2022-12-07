<form action="{{ route('inquire.store') }}" method="POST">
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
        <input type="hidden" name="my_name" id="my_name" value="">
        <input type="hidden" name="my_title" id="my_title" value="">
        <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
        <div class="form-group mt-3 fw-bold">
            <label for="firstName">First Name</label>
            <input id="firstName" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}">
            <div>{{ $errors->first('firstName') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="lastName">Last Name</label>
            <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}">
            <div>{{ $errors->first('lastName') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="phone">Phone</label>
            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            <div>{{ $errors->first('phone') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="city">City</label>
            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}">
            <div>{{ $errors->first('city') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="state">State</label>
            <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}">
            <div>{{ $errors->first('state') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="zip">Zip Code</label>
            <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}">
            <div>{{ $errors->first('zip') }}</div>
        </div>
        <div class="form-group mt-3 fw-bold">
            <label for="availability">Availability</label>
            <input id="availability" type="text" class="form-control" name="availability" value="{{ old('availability') }}">
            <div>{{ $errors->first('availability') }}</div>
        </div>
    </div>

    <div class="form-group mt-3 fw-bold">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="5" class="form-control">{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>
    @csrf
    <button type="submit" class="btn btn-lg brand-bg-logo-blue shadow my-3 brand-btn" style="width: 175px;">
        <div class="text-white text-decoration-none">Submit</div>
    </button>
</form>


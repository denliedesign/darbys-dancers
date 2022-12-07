{{--<div class="form-group my-3">--}}
{{--    <label for="user_id">User ID</label>--}}
{{--    <input id="user_id" type="text" class="form-control" name="user_id" value="{{ $person->user_id }}">--}}
{{--    <div>{{ $errors->first('user_id') }}</div>--}}
{{--</div>--}}
<div class="form-group my-3">
    <label for="name">Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $person->name ) }}">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group mt-3 fw-bold">
    <label for="role">Role</label>
    <select id="role" name="role" class="form-select">
        <option value="dancer">Dancer</option>
        <option value="volunteer">Volunteer</option>
    </select>
</div>
<div class="form-group my-3">
    <label for="phone">Phone</label>
    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone', $person->phone ) }}">
    <div>{{ $errors->first('phone') }}</div>
</div>
<div class="form-group my-3">
    <label for="email">Email</label>
    <input id="email" type="text" class="form-control" name="email" value="{{ old('email', $person->email ) }}">
    <div>{{ $errors->first('email') }}</div>
</div>
<div class="form-group my-3">
    <label for="addressOne">Address 1</label>
    <input id="addressOne" type="text" class="form-control" name="addressOne" value="{{ old('addressOne', $person->addressOne ) }}">
    <div>{{ $errors->first('addressOne') }}</div>
</div>
<div class="form-group my-3">
    <label for="addressTwo">Address 2</label>
    <input id="addressTwo" type="text" class="form-control" name="addressTwo" value="{{ old('addressTwo', $person->addressTwo ) }}">
    <div>{{ $errors->first('addressTwo') }}</div>
</div>
<div class="form-group my-3">
    <label for="city">City</label>
    <input id="city" type="text" class="form-control" name="city" value="{{ old('city', $person->city ) }}">
    <div>{{ $errors->first('city') }}</div>
</div>
<div class="form-group my-3">
    <label for="state">State</label>
    <input id="state" type="text" class="form-control" name="state" value="{{ old('state', $person->state ) }}">
    <div>{{ $errors->first('state') }}</div>
</div>
<div class="form-group my-3">
    <label for="zip">Zip Code</label>
    <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip', $person->zip ) }}">
    <div>{{ $errors->first('zip') }}</div>
</div>
<div class="form-group my-3">
    <label for="comments">Comments</label>
    <textarea name="comments" cols="30" rows="10" class="form-control" id="comments">{{ old('comments', $person->comments ) }}</textarea>
    <div>{{ $errors->first('comments') }}</div>
</div>

@csrf

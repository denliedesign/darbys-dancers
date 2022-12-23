<div class="text-center d-flex justify-content-center">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>
</div>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
        <div class="form-group mt-3 fw-bold">
            <x-input-label for="name" :value="__('Name')" />

            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Studio -->
        <div class="form-group mt-3 fw-bold">
            <x-input-label for="studioName" :value="__('Studio Name')" />

            <x-text-input id="studioName" class="form-control" type="text" name="studioName" :value="old('studioName')" required autofocus />

            <x-input-error :messages="$errors->get('studioName')" class="mt-2" />
        </div>

    {{--                <div class="form-group mt-3 fw-bold">--}}
    {{--                    <label for="studioName">Studio Name</label>--}}
    {{--                    <input id="studioName" type="text" class="form-control" name="studioName" value="{{ old('studioName') }}">--}}
    {{--                    <div>{{ $errors->first('studioName') }}</div>--}}
    {{--                </div>--}}

    <!-- Membership -->
    {{--                <div class="form-group mt-3 fw-bold">--}}
    {{--                    <label for="membership">Membership</label>--}}
    {{--                    <select id="membership" name="membership" class="form-select">--}}
    {{--                        <option value="Silver">Studio Silver Membership</option>--}}
    {{--                        <option value="Gold">Studio Gold Membership</option>--}}
    {{--                    </select>--}}
    {{--                </div>--}}

    <!-- Phone -->
        <div class="form-group mt-3 fw-bold">
            <x-input-label for="phone" :value="__('Phone')" />

            <x-text-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autofocus />

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

    {{--                <div class="form-group mt-3 fw-bold">--}}
    {{--                    <label for="phone">Phone</label>--}}
    {{--                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">--}}
    {{--                    <div>{{ $errors->first('phone') }}</div>--}}
    {{--                </div>--}}

    <!-- Email Address -->
        <div class="form-group mt-3 fw-bold">
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group mt-3 fw-bold">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group mt-3 fw-bold">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="form-control"
                          type="password"
                          name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-3">
            <button class="btn btn-lg brand-bg-logo-blue shadow brand-btn text-white text-decoration-none" style="width: 175px;">
                {{ __('Register') }}
            </button>
        </div>
</form>


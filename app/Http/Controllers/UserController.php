<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function show_registration()
    {
        return view('register',(['title' => 'Регистрация']));
    }

    public function create(Request $request)
    {
        $userFields = $request->validate([
            'last_name' => ['required', 'min:2'],
            'first_name' => ['required', 'min:2'],
            'patronymic' => '',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
            'apartment' => ['required'],
        ]);

        $userFields = array_merge($userFields, [
            'password' => bcrypt($userFields['password'])
        ]);

        $addressFields = $request->only(['city_type', 'city', 'street_type', 'street', 'house_type', 'house', 'block_type', 'block', 'geo_lat', 'geo_lon']);
        if (Address::where($addressFields)->exists()) {
            $userFields = array_merge($userFields, [
                'address_id' => Address::where($addressFields)->first()->id
            ]);
        } else {
            $address = Address::create($addressFields);
            $userFields = array_merge($userFields, [
                'address_id' => $address->id,
            ]);
        }
        $user = User::create($userFields);
        auth()->login($user);
        return redirect('/')->with('message', 'Спасибо за регистрацию!');
    }

    public function login()
    {
        return view('login', (['title' => "Вход"]));
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('title', 'Здравствуйте!')->with('message', 'Вы успешно вошли!');
        }

        return back()->withErrors(['email' => 'Неверный email или пароль'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('title', 'До свидания!')->with('message', 'Вы успешно вышли из учетной записи!');
    }
}
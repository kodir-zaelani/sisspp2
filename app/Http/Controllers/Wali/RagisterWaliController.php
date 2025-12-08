<?php

namespace App\Http\Controllers\Wali;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RagisterWaliController extends Controller
{
    /**
    * Display the registration view.
    */
    public function create(): View
    {
        return view('wali.auth.register');
    }

    /**
    * Handle an incoming registration request.
    *
    * @throws \Illuminate\Validation\ValidationException
    */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'sekolahId'             => ['required'],
            'pesertadidikId'        => ['required'],
            'tahunajaranId'         => ['required'],
            'pilihan'               => ['required'],
            'nameortu'              => ['required', 'string', 'max:255'],
            'email'                 => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password'              => ['required', 'confirmed', Rules\Password::defaults()],
            'username'              => ['string', 'min:3','unique:'.User::class],
            'phone'                 => ['numeric','unique:'.User::class],
            'password_confirmation' => ['required'],
        ]);

        $data = [
            'name'      => $request->nameortu,
            'email'     => $request->email,
            'username'  => $request->username,
            'phone'     => $request->phone,
            'type_user' => 'wali',
            'type_ortu' => $request->pilihan,
            'password'  => Hash::make($request->password)
        ];


        $wali = User::create($data);

         $datapesertadidik = [
            'sekolah_id'      => $request->sekolahId,
            'pesertadidik_id' => $request->pesertadidikId,
        ];

        $wali->walimuridsekolahs()->create($datapesertadidik);

        //assign role to user
        $wali->syncRoles('wali-web');

        return redirect()->to('console-signin')->with(['success' => 'Sign Up ' . $wali['name'] . ' was successfully!']);

    }
}

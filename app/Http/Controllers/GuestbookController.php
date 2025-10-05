<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    //Data statis
    private $guests = ["Andi", "Budi", "Caca"];

    public function index() {
        return view("guestbook.index", ["guests" => $this->guests]);
    }

    public function store(Request $request){
        // Vlaidasi Input
        $request->validate(
            ["nama_tamu" => "required|string|max:100"]
        );

        // AMbil nama tamu dari request
        $new_guest_name = $request->input("nama_tamu");

        // Kembalikan view yang menampilkan nama yang ditambahkan
        return view("guestbook.success", [
            "nama_yang_ditambahkan" => $new_guest_name
        ]);
    }
}

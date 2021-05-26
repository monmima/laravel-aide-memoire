<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karaoke;

class KaraokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // $karaokes = Karaoke::all();

        // return view("karaoke/index", [
        //     "karaokes" => $karaokes
        // ]);

        $karaokes = Karaoke::all();

        return view("index", [
            "karaokes" => $karaokes
        ]);

        // return view("karaoke/index");
        
    }
}

///

// <?php

// namespace App\Http\Controllers;

// use App\Models\Produit;
// use Illuminate\Http\Request;

// class ProduitController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //

//         $produits = Produit::all();

//         return view("index", [
//             "produits" => $produits
//         ]);
        
//     }

//     // show the edit form
//     public function edit($id)
//     {
//         $produit = Produit::findOrFail($id);

//         return view("/edit", [
//             "produit" => $produit
//         ]);
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $this->validate($request, array(
//             "nom" => "required|min:5|max:255",
//             "prix" => "required",
//             "quantite_disponible" => "required",
//             "quantite_restockage" => "required",
//             "categorie" => "required"
//         ));

//         //

//         $produit = new Produit();

//         $produit->nom = request("nom");
//         $produit->prix = request("prix");
//         $produit->quantite_disponible = request("quantite_disponible");
//         $produit->quantite_restockage = request("quantite_restockage");
//         $produit->categorie = request("categorie");

//         $produit->save();

//         return redirect("/")->with("msg", "Produit ajouté");
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Produit  $produit
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Produit $produit)
//     {
//         // JSON
//         return [
//             "foo" => "bar",
//             "laravel" => "automatically turns arrays into JSON",
//             "Firefox" => "gives a nice layout to arrays, but not Brave"
//         ];
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Produit  $produit
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //

//         $this->validate($request, array(
//             "nom" => "required|min:5|max:255",
//             "prix" => "required",
//             "quantite_disponible" => "required",
//             "quantite_restockage" => "required",
//             "categorie" => "required"
//         ));

//         $produit = Produit::findOrFail($id);

//         $produit->nom = request("nom");
//         $produit->prix = request("prix");
//         $produit->quantite_disponible = request("quantite_disponible");
//         $produit->quantite_restockage = request("quantite_restockage");
//         $produit->categorie = request("categorie");
//         $produit->save();

//         // back to the main page
//         $produits = Produit::all();

//         return redirect("/");
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Produit  $produit
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//         $produit = Produit::findOrFail($id);
//         $produit->delete();

//         return redirect("/");
//     }


// }


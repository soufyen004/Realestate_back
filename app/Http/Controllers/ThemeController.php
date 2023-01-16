<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ThemeController extends Controller
{
    public function getThemeColors()
    {
        $theme = new Theme;
        return $theme->all();
    }

    public function updateThemeColors( Request $request)
    {
        $theme = new Theme;
        $save = $theme->update(['mainColor' => $request->mainColor,'secondaryColor'=>$request->secondaryColor]);
        if($save){
            return True;
        }else{
            return false;
        }
    }
}

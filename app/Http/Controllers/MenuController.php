<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrainingType;

class MenuController extends Controller
{
    // getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        return view('Trainingmenus.index');
    }

    public function selectmenu()
    {
        return view('Trainingmenus.Selectmenu');
    }
    
    // ボタンを押すとトレーニングの種類をデータベースに格納
    public function selecttype()
    {
        $items = TrainingType::all(); 
        return view('Trainingmenus.Selecttype', ['item' => $items]);
    }
    
    
    public function weighttraining()
    {
        return view('TrainingType.weighttraining');
    }
    
    public function aerobictraining()
    {
        return view('TrainingType.aerobictraining');
    }
    
    public function arm_chest()
    {
        return view('TrainingParts.Arm-Chest');
    }
    
    public function back_shoulder()
    {
        return view('TrainingParts.Back-Shoulder');
    }
    
    public function foot()
    {
        return view('TrainingParts.Foot');
    }
    
    public function confirmation()
    {
        return view('Trainingconfirmation.confirmation');
    }
    
    
    
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managecontroller extends Controller
{
    function index(){
        return view('Home');
    }

    // หน้าหลัก
    function main_management(){
        return view('login');
    }

    // หน้าบันทึกการลา
    function leave(){
        return view('leave');
    }

    // เก็บรูปสินค้า
    function keepvender(){
        return view('keepvender');
    }
}


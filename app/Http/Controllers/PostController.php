<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Post; 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // VÌ CÁC LỆNH KHÁC ĐÃ BÁO LỖI, TA TẠM THỜI TẮT HẾT VÀ CHỈ GỌI VIEW
        // Nếu màn hình hiển thị "VIEW FILE IS WORKING", nghĩa là Controller và View đã kết nối thành công.

        // TẠO BIẾN RỖNG ĐỂ VIEW KHÔNG BÁO LỖI BIẾN KHÔNG TỒN TẠI
        $posts = []; 

        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // TẠM THỜI BỎ QUA LOGIC TRUY VẤN
        // return view('posts.show', compact('post'));
        return "Show page is working!";
    }
}
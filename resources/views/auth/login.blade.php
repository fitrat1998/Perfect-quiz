@extends('layouts.app')
@section('content')
    <div class="h-screen">
        <div class="bg-blue-500 h-1/2">
            <div class="float-left">
                <div class="p-8 text-blue-50">
                    <h3 class="text-2xl">Logo</h3>


                    <h2 class="pt-5 text-2xl">Kirish</h2>
                    <p class="text-xl">Tizimga kirish uchun <br> email & passwordni kiriting</p>
                </div>
            </div>
            <div class="float-right">

            </div>
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="bg-white p-8 rounded-l-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Kirish</h2>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Foydalanuvchi nomi</label>
                    <input class="border rounded w-full py-2 px-3" type="text" id="username" placeholder="Foydalanuvchi nomi">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Parol</label>
                    <input class="border rounded w-full py-2 px-3" type="password" id="password" placeholder="Parol">
                </div>
                <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">Kirish</button>
            </div>
        </div>
        <div class="bg-white h-1/2"></div>
    </div>
@endsection
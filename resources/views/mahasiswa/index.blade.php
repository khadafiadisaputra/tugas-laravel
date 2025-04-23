@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Mahasiswa</h1>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">NIM</th>
                <th class="border border-gray-300 px-4 py-2">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mhs)
            <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $mhs->id }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $mhs->nama }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $mhs->nim }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $mhs->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

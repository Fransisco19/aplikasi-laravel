@extends('layouts.main')

@section('container')

<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA RSO PELAKSANA</th>
        <th scope="col">TANGGAL MULAI</th>
        <th scope="col">TANGGAL BERAKHIR</th>
        <th scope="col">JUMLAH PESERTA</th>
        <th scope="col">TEMPAT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>PT. DONPRO</td>
        <td>18 Januari 2021</td>
        <td>19 Januari 2021</td>
        <td>15</td>
        <td>Virtual Zoom Meeting</td>
      </tr>
      
    </tbody>
  </table>


@endsection
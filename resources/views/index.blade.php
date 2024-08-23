@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">CRUD Sederhana Menggunakan Laravel</h4>
        </div>
        <div class="card-body">
          <p class="lead">
            Selamat datang di aplikasi CRUD sederhana.Dengan aplikasi ini,Anda dapat melakukan operasi dasar Create, Read, Update, dan Delete pada data.
          </p>
        </div>
        <div class="card-footer">
          <a href="{{ route('posts.index') }}" class="btn btn-primary w-100">Mulai Programnya</a>
        </div>
      </div>
    </div>
  </div>
</div>
@extends('layouts.master')

@section('konten')
  <div class="alert alert-primary" role="alert">
  beranda
  </div>

  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f0f4f8;
      color: #333;
      padding: 50px 20px;
      line-height: 1.6;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    h1, h2, h3 {
      margin-bottom: 10px;
      font-weight: 600;
      color: #222;
      transition: color 0.3s;
    }

    h1 {
      font-size: 2.5em;
      text-align: center;
      margin-bottom: 30px;
      color: #5c6bc0;
    }

    h2 {
      font-size: 2em;
      margin-top: 30px;
      color: #ff8a65;
    }

    h3 {
      font-size: 1.5em;
      margin-top: 20px;
      color: #4db6ac;
    }

    p {
      margin-bottom: 20px;
      color: #555;
    }

    /* Card aesthetic */
    .card {
      background: linear-gradient(135deg, #ffffff, #f7f9fc);
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.08);
      margin-bottom: 25px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 25px rgba(0,0,0,0.12);
    }

    /* Small accent underline for h2 */
    h2::after {
      content: "";
      display: block;
      width: 50px;
      height: 3px;
      background-color: currentColor;
      margin-top: 5px;
      border-radius: 2px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Beranda</h1>
    <div class="card">
      <p>Ini adalah deskripsi untuk judul utama. Warna pastel lembut dan card dengan shadow membuat tampilannya enak dilihat.</p>
    </div>

    <h2>Sub Judul 1</h2>
    <div class="card">
      <p>Keterangan untuk sub judul 1. Card ini memiliki efek hover halus untuk interaksi yang lebih menarik.</p>
    </div>

    <h2>Sub Judul 2</h2>
    <div class="card">
      <p>Keterangan untuk sub judul 2. Desain tetap minimalis namun lebih hidup dengan warna dan gradien.</p>
    </div>

    <h3>Sub Judul Kecil</h3>
    <div class="card">
      <p>Keterangan untuk sub judul kecil. Efek hover dan warna pastel membuat konten terasa modern dan rapi.</p>
    </div>
  </div>
@endsection
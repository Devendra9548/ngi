@extends('templates.front.main')
@section('customcss')
<style>

</style>
@endsection
@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICC-NCNDA</title>
  <style>
    h1
    {
      padding: 15px;
      text-align: center;
    }

    .container {
      padding: 20px;
      text-align: center;
    }

    button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      margin-bottom: 20px;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    iframe {
      width: 100%;
      height: 90vh;
      border: none;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="pt-5 mt-5">
  <div class="container">
    <button onclick="downloadPDF()">📥 Download ICC-NCNDA</button>

    <iframe src="/assets/pdfs/ICC-NCNDA.pdf"></iframe>
  </div>

  <script>
    function downloadPDF() {
      const link = document.createElement('a');
      link.href = '/assets/pdfs/ICC-NCNDA.pdf';
      link.download = 'NCNDA.pdf';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  </script>

@endsection
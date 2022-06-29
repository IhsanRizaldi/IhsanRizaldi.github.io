<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laporan Surat Keluar</title>
  </head>
  <body>
    <style>
      table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
      </style>
      <p style="text-align: center"><strong>Laporan Surat {{ $nama }}</strong></p>
        <table>
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">No Surat</th>
                <th scope="col">Perihal</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Dok</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $s)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $s->no_surat }}</td>
                <td>{{ $s->perihal }}</td>
                <td>{{ $s->alamat }}</td>
                <td>{{ $s->tanggal }}</td>
                <td>{{ $s->dok }}</td>                      
              </tr>
              @endforeach
            </tbody>
          </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  </html>
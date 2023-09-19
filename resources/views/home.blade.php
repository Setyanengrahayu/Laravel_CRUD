<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang kita</title>
</head>
<body>
    <h1>Setya Neng Rahayu</h1>
    <h1>SMK N 1 SAYUNG, {{$nama}}</h1>

    @if($nama=='admin')
    <a href ="">Ke Halaman Admin</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman User</a>
    @else
    <h1>Anda bukan ADMIN dan USER</h1>
    @endif

    @switch($i)
        @case(1)
           First case...
            @break
 
        @case(2)
           Second case...
           @break
 
        @default
           Default case...
    @endswitch
<br>

     @for ($i = 0; $i < 10; $i++)
     {{ $i }}
     @endfor

     @foreach ($buah as $nama)
     {{$nama}}</br>
     @endforeach


</body>
</html>
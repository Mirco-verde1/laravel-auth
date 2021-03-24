<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
    <title>Document</title>
</head>
<body>

    {{-- inizio form con annessa validazione campi --}}




      <form class="needs-validation" action="{{route('shoes.store')}}" method="post" novalidate>



        @csrf
        @method('POST')


       <DIV>CREATE</DIV>

        <button type="submit" value="submit">Add New</button>

      </form>


</body>
</html>

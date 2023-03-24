<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOM</title>
</head>
<body>
   
<H1><?= $msj?>  </H1>
<H1>Con BLADE {{$msj}} </H1>
<?php var_dump ($datos)?>
{{var_dump($datos)}}
<!-- tambien puedes dd($datos) pero el dd corta y no sigue-->
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $datos[$i] }}
@endfor

@foreach ($datos as $indice=> $valor)
    <p>{{$indice}}=> {{$valor}}</p>
@endforeach
Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatum laboriosam sunt nemo ab eaque eveniet expedita facere tenetur! A voluptatem accusamus corporis id earum ad sunt expedita similique blanditiis?
</body>
</html>

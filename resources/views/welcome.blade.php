<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <div class="container text-center">
        <h3>Mi calculadora con Laravel</h3>
        <br><br>
                <form class="form-horizontal"action="{{route('welcome.calculatefunc')}}" method="POST">
                    <div class="row text-center">

                    <div class="col-md-3">
                        <input type="number" name="first" class="form-control" placeholder="Escribe un número" required>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="operator" required>
                            <option value="" selected="">seleccione opcion</option>
                            <option value="plus">+</option>
                            <option value="minus">-</option>
                            <option value="multiply">*</option>
                            <option value="divide">/</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="second" class="form-control" placeholder="Escribe otro número" required>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" value="Enviar formulario" class="btn btn-success">Calcular
                    </div>
                </div>
              {{ csrf_field() }}
                </form>
                <br><br>
        <div class="row text-center">
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                @if(session('info'))
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
                @endif
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
        </div>
</div>
</body>
</html>

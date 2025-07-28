<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @foreach($user as $u)
    <div class="card mb-2" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="card-header">
                    Datos del usuario: 
                </div>
                <div class="card-body">
                    <h3 class="h3"> {{$u->name}} </h3>
                    <p> {{$u->email}} </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-header">
                    Teléfonos del usuario: 
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($u->phone as $p)
                            <li class="list-group-item">Phone: ( +{{$p->prefix}} ) {{$p->phone_number}}</li>    
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-header">
                    Roles del usuario: 
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach($u->roles ?? [] as $r)
                            <li class="list-group-item">{{$r->name}}, added by : {{ $r->pivot->added_by }}</li>    
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
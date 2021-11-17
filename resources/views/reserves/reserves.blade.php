@extends('layouts.main')

@section('title', 'Criar um agendamento')

@section('content')
   <div id="search-container" class="col-md-12">
       <h1>Busque sua consulta</h1>
       <form action="">
           <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
       </form>
   </div>
   <div id="reserves-container" class="col-md-12">
       <h2>Consultas</h2>
       <p class="subtitle">Veja suas proximas consultas</p>
       <div id="cards-container" class="row">
            @foreach($reserves as $reserve)
            <div class="col-md-3">
                <div class="card-body">
                    <div class="card-date">{{$reserve->date_reserve}}</div>
                    <div class="card-type_consult">{{$reserve->specialty}}</div>
                    <div class="card-doctor">{{$reserve->doctor_name}}</div>
                    @if($reserve->retorn == 1)
                        <div class="card-return">Retorno</div>
                    @endif
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
       </div>
   </div>
@endsection
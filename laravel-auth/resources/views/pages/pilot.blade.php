@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               <h1>
                    Pilot: {{$pilot -> name}} {{$pilot -> lastname}}
               </h1>

               <h1>
                    Nationality: {{$pilot -> nationality}}
               </h1>

               <ul>
                    @foreach ($pilot -> cars as $car)
                    <li>
                         <h3>Car {{$car -> id}}: </h3>
                         <h4>{{$car -> name}}</h4>
                         <h4>{{$car -> model}}</h4>
                         <h4>{{$car -> kW}}</h4>
                         <h3>Brand</h3>
                         <h4>{{$car -> brand -> name}}</h4>
                         <h4>{{$car -> brand -> nationality}}</h4>
                    </li>
                    @endforeach
               </ul>
          </ul>
     </main>
@endsection
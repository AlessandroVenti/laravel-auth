@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               <li>
                    Brand name: {{$brand -> name}}
               </li>

               <li>
                    Brand nationality: {{$brand -> nationality}}
               </li>
          </ul>
     </main>
@endsection
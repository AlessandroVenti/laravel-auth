@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               @foreach ($cars as $car)
               <li>
                    <details> 
                         <summary>
                              Car #{{$car -> id}}:  {{ $car -> name}} , {{$car -> model }}
                         </summary>
                         <p>
                              <a href="{{ route('pilot', $car -> id) }}">
                                   Click here for see the PILOTS.
                              </a>
                         </p>
                         <p>
                              <a href="{{ route('brand', $car -> id) }}">
                                   Click here for see the BRAND.
                              </a>
                         </p>                             
                    </details>
               </li>
               @endforeach
          </ul>

          <button>
               <a href="{{ route('create') }}">
                    Create new pilote
               </a>
          </button>
     </main>
@endsection
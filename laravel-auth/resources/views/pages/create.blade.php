@extends('layouts.main-layout')

@section('content')
     <main>
          <form method="POST" class="form" action="{{ route('store') }}">
               <fieldset>
                    @csrf
                    @method('POST')
                   <legend>New Car Form</legend>
                   <h3>Contact information</h2>
                   <ul>
                       <li>
                           <label for="name">
                               <span>Name: </span>
                               <abbr title="required">*</abbr>
                           </label>
                           <input type="text" name="name" id="name">
                       </li>

                       <li>
                           <label for="model">
                               <span>Model: </span>
                               <abbr title="required">*</abbr>
                           </label>
                           <input type="text" name="model" id="model">
                       </li>

                       <li>
                           <label for="kW">
                               <span>kW: </span>
                               <abbr title="required">*</abbr>
                           </label>
                           <input type="text" name="kW" id="kW">
                       </li>

                       <li>
                         <label for="brand_id">
                             <span>Brand: </span>
                             <abbr title="required">*</abbr>
                         </label>
                         <select name="brand_id" id="brand_id">
                              @foreach ($brands as $brand)
                              <option value="{{ $brand -> id }}">{{ $brand -> name }} , {{ $brand -> nationality }} </option>
                              @endforeach
                         </select>
                     </li>

                       <li>
                         <input class="submit" type="submit" placeholder="CREATE">
                       </li>

                   </ul>

               </fieldset>
           </form>
     </main>
@endsection
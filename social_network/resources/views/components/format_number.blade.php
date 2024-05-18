   @php
    $count = $number;
    if($count >= 1000) {
    $count = round(1.0 * $count / 1000, 1).'K' ;
   }
   @endphp
   {{$count}}
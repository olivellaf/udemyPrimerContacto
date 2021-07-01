{{-- This is a comment --}}
<?php // This is another comment. Blade templates allows old php writting, and new ways as "{{}}" ?>

<h3>This is the product page of #{!! $id !!} and is type: {{-- isset($type) && !is_null($type) ? $type : 'No type especified' --}}</h3>

@if( is_null($type) )
    No type especified
@else
    Type especified: {{ $type }}
@endif
<br/><br/>

{{-- Trying FOR LOOP. This starts in 1 because we wanted --}}

<?php $num = 4; ?>

<h4>Table of {{ $num }}</h4>

@for($i=1; $i<=10; $i++)
    {{ $i . ' x ' . $num . ' = ' . ($i*$num) }}<br/>
@endfor

<h4>WHILE LOOP</h4>

<?php $x=1; // better use php cuotes for variables ?>
@while($x <= 7)
    {{ 'Hello World ' . $x }} <br/>
    <?php $x++; ?>
@endwhile

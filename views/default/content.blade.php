<p>"Это include-страница с artilce</p>
@if(count($data) < 3)
	В массиве меньше трех элементов
@elseif(count($data) >10)
	В массиве больше 10 элементов
@else
	В массиве больше 10 элементов
@endif

<ul>
@forelse($data as $key=>$elem)
	<li>{{$key.'=>'.$elem}}</li>
@empty
	<p>Нет элементов</p>
@endforelse
</ul>
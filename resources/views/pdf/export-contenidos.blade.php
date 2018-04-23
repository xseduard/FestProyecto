<html><header><title>Pdf Proyecto</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></header>
<style>
.page-break {
    page-break-after: always;
}</style><body>
	<center><h2>{{ $proyecto->titulo }}</h2></center>	
	<br>
	<br>
	@foreach ($titulos as $titulo)
		<h3>{{ $titulo->titulo }}</h3>
		<p>{!! $contenido[$titulo->codigo] !!}</p>
		@if ($titulo->codigo != 'a4' && $titulo->codigo != 'a5' )
			<div class="page-break"></div>
		@endif
	@endforeach
</body></html>
<html><header><title>Pdf Proyecto</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></header>
<style>
.page-break {
    page-break-after: always;
}@page {
   margin-top: 3cm;
   margin-bottom: 2cm;
   margin-left: 3cm;
   margin-right: 2cm;
}</style><body>
	<center><h2>{{ $proyecto->titulo }}</h2></center>	
			<br>
			<br>
	@foreach ($titulos as $titulo)
		@if (!empty($contenido[$titulo->codigo]))
		@if (strlen($contenido[$titulo->codigo]) > 20)
			
			<h3>{!! $titulo->titulo !!}</h3>
			<p>{!! $contenido[$titulo->codigo] !!}</p>

			@if ($titulo->codigo != 'a4' && $titulo->codigo != 'a5' )
			<div class="page-break"></div>
		@endif
		@endif
		@endif
		
	@endforeach
</body></html>
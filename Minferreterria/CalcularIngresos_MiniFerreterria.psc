Proceso CalcularIngresos_MiniFerreterria
	Escribir 'Ingresa la cantidad (#) de MARTILLOS vendidos al mes:' Sin Saltar
	Leer cantidad_martillos
	Escribir 'Ingresa Precio de Venta. Producto MARTILLO (UNIDAD):' Sin Saltar
	Leer precio_martillo
	Escribir 'Ingresa la cantidad # de PUNTILLAS vendidas al mes' Sin Saltar
	Leer cantidad_puntillas
	Escribir 'Ingresa Precio de Venta. Producto PUNTILLAS (UNIDAD):' Sin Saltar
	Leer precio_puntilla
	ventas_mensuales <- cantidad_martillos*precio_martillo+cantidad_puntillas*precio_puntilla
	Escribir 'VENTAS MENSUALES='
	Escribir ventas_mensuales
	Si ventas_mensuales>=1000000 Entonces
		Escribir 'Felicidades, Ganas $200.000 de bonificación.'
	SiNo
		Escribir 'No cumpliste con las metas minimas del mes.'
	FinSi
FinProceso

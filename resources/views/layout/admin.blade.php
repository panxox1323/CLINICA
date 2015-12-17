<!DOCTYPE html>
<html lang="es" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="img/favicon.ico">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cl&iacute;nica Dental Oral Plus</title>
	<style>
		div.ui-datepicker{
			font-size:13px;
		}
	</style>

	{!!  Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
	{!!  Html::style('bootstrap-datetimepicker.css') !!}
	{!!  Html::style('css/material.css') !!}
	{!!  Html::style('icomoon/style.css') !!}
	{!!  Html::style('css/backend.css')  !!}
	{!!  Html::style('css/boton.css') !!}
	{!! Html::style('calendario/jquery-ui.css') !!}
	{!! Html::script('calendario/jquery-ui.js') !!}
	{!! Html::script('calendario/jquery.js') !!}


	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	{!! Html::script('calendario/jquery.ui.datepicker-es.js') !!}
		<script>
		$(function() {
			$( "#acordion" ).accordion();
		});
	</script>




	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/backend.js') !!}
	{!! Html::script('js/jquery.Rut.js') !!}
	{!! Html::script('dateTimePicker/moment.js') !!}
	{!! Html::script('dateTimePicker/es.js') !!}
	{!! Html::script('dateTimePicker/dateTimepicker.js') !!}
	{!! Html::script('js/formatoMoneda.js') !!}
	{!! Html::script('js/agendar/agendar.js') !!}
	{!! Html::script('js/agendar/dao.js') !!}
	{!! Html::script('js/agendar/init.js') !!}
	{!! Html::style('css/select2.css') !!}
	{!! Html::script('js/select2.js') !!}
	<script language="javascript" type="text/javascript">

		$(document).ready(function () {
			{

				$("#subtotal").autoNumeric("init",
						{
							aSep: '.',
							aDec: ',',
							aSign: '$',
						}
				);

			}

			$('select').select2(

			);



		});

	</script>


</head>
<body class="skin-blue">
	<div class="wrapper">

		@include('admin.partials.header')
		@include('admin.partials.aside')
		<div class="content-wrapper ajuste">

			@yield('content')

		</div>



	</div>

	@yield('script')

	<script type="text/javascript">
		$('#type').change(function(){
			if ($(this).val() == 3) {
				$('#Especialidad').show();
			}
			else {
				$('#Especialidad').hide();
			}
		});

	</script>
	<script>

		$('#verifica').Rut({
			on_error: function()
			{
				alert('Rut incorrecto');

				$('input[id="verifica"]').val('');

			},

			format_on: 'keyup'
		});

	</script>


	<script type="text/javascript">
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT',
				stepping: 30
			});

		});

	</script>



	<script type="text/javascript">

		//$( "#datepicker" ).datepicker( "option", "showAnim", Slide );

		$('#datepicker').datepicker(
				{
					showOn: "button",
					buttonImage: "../../img/iconos/calendario.png",
					buttonImageOnly: true,
					closeText: "Cerrar",
					buttonText: "Seleciona una fecha",
					dateFormat: "yy-mm-dd",
					maxDate: 0,
					changeMonth: true,
					changeYear: true,

				}
		);

		$('#datepicker2').datepicker(
				{
					showOn: "button",
					buttonImage: "../../img/iconos/calendario.png",
					buttonImageOnly: true,
					closeText: "Cerrar",
					buttonText: "Seleciona una fecha",
					//dateFormat: "yy-mm-dd",
					maxDate: 0,

				}
		);


		$('#datetimepicker12').datetimepicker({
			inline: true,
			stepping: 30,
			locale: 'es',


			format: ("YYYY MM dd"),
			minDate: moment(),

			maxDate: moment("2016-12-31"),
			disabledDates: [
				moment(false),
				new Date(2015, 10 - 25, 21),
				"12/25/2015",
				"01/01/2016",
				"10/31/2015",
				"12/08/2015",
				"03/25/2016",
				"03/26/2016",
				"05/21/2016",
				"06/27/2016",
				"07/16/2016",
				"08/15/2016",
				"09/19/2016",
				"10/10/2016",
				"10/31/2016",
				"11/01/2016",
				"12/08/2016",
				"12/25/2016"

			],
			 daysOfWeekDisabled: [0, 6],


		});

		$('#datetimepicker12').on('dp.change', function (e) {
			var fecha = e.date.format("YYYY-MM-DD");
			var url = fecha;

			document.getElementById("fechaOculta").value= fecha;


		});



		function soloNumeros(e) {

			e = (e) ? e : window.event

			var charCode = (e.which) ? e.which : e.keyCode

			if (charCode > 31 && (charCode < 48 || charCode > 57)) {

				status = "This field accepts numbers only."

				return false

			}

			status = ""

			return true

		}

	</script>

	<script>
		function funcionAgendar()
		{
			if(confirm("Los datos estan correctos?"))
			{
				return true

			}
			else
				return false
		}
	</script>




</body>
</html>

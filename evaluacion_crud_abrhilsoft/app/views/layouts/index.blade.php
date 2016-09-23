<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Evaluación CRUD</title>
	{{HTML::style("styles/kendo.common.min.css")}}
	{{HTML::style("styles/kendo.black.min.css")}}
</head>

<body>
	@yield("content")

  {{HTML::script("js/jquery-3.1.0.min.js")}}
  {{HTML::script("js/kendo.all.min.js")}}
	{{HTML::script("js/messages/kendo.messages.es-MX.min.js")}}
  <script type="text/javascript">
    var root_url = "{{Request::url()}}";
  </script>

  @yield("script")
</body>

</html>

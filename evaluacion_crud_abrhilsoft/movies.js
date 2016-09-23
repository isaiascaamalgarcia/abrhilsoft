$(document).ready( function() {

  $("#movies_table").kendoGrid({
    scrollable: true,
    pageable  : {
        pageSize: 10
    },
    sortable: true,
    toolbar: [{name: "create", text: "Añadir película"}],
    dataSource: {
        transport: {
            read: {
                url     : root_url + "/movies/getMovies",
                dataType: "JSON"
            },
            create: {
                url     : root_url + "/movies",
                type    : "POST"
            },
            update: {
              url       : root_url + "/movies",
              dataType  : "JSON",
              type      : "PUT"
            },
            destroy: {
              url       : root_url + "/movies",
              type      : "DELETE"
            }
        },
        schema:{
          data: "movies",
          total: "total",
          model: {
            id: "id",
            fields: {
              Id: { type: "number"},
              name: { type: "string", validation: { required: { message: "El nombre es requerido"}, min: 1, max: { value: 100, message: "Máximo 100 caracteres"}}},
              gender: { type: "string", validation: { required: { message: "El género es requerido"}, min: 1, max: { value: 100, message: "Máximo 100 caracteres"}}},
              year: { type: "string", validation: { pattern: { value: "[0-9]{4}", message: "Solo números, longitud máxima: 4"} } },
              actors: { type: "string", validation: { max: { value: 200, message: "Máximo 200 caracteres"}}},
              country: { type: "string", validation: { max: { value: 50, message: "Máximo 50 caracteres"}}}
            },
            errors: "errors"
          }
        },
    },
    columns   : [
        { field: "name", title: "Nombre" },
        { field: "gender", title: "Género" },
        { field: "year", title: "Año" },
        { field: "actors", title: "Actores" },
        { field: "country", title: "País" },
        { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }
    ],
    editable  : "inline"
  });

});

<script type="text/javascript">

  // Inicializa  boton collapse
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    //$('.modal-trigger').leanModal();
    $('.modal').modal();
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
    $('.parallax').parallax();
    $('input.input_text, textarea#textarea1').characterCounter();

    //validacin del formulario
    $("#formNoticia").materialvalidation({
        theme: "materialize"
    });
    $("#formNoticia").submit(function (evt) {
        evt.preventDefault();
        evt.stopPropagation();
        if ($("#formNoticia").data().materialvalidation.methods.validate()) {
            alert("Do something");
        }
        return false;
    });
  });
</script>

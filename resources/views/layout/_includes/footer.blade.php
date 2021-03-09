<!--Import jQuery before materialize.js-->
{{-- <script src="{{('public/js/boostrap.min.js')}}"></script> --}}
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<!--TROCAR ESSE CDN POR AQUIVO LOCAL!!!! -->
<script src="{{('public/js/bootstrap.min.js')}}" ></script>
<script type="text/javascript">
  $(document).ready(function(){
    Materialize.updateTextFields();
    $(".button-collapse").sideNav();
  });
</script>
</body>
</html>

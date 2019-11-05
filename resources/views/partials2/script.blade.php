	<!-- SCIPTS -->

	<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>

	<script src="plugin-frameworks/tether.min.js"></script>

	<script src="plugin-frameworks/bootstrap.js"></script>

    <script src="common/scripts.js"></script>

        <script type="text/javascript">
        function handleSelect(elm)
        {
        window.location = elm.value+".php";
        }
        </script>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

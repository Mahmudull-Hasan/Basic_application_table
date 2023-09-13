
    <!-- jQuery Libery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    
    
    
    <!-- Bootstrap bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- script -->

    <!-- table js -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
          $('#students').DataTable();
      });
    </script>



    <?php 
      ob_end_flush();
    ?>
  </body>
</html>
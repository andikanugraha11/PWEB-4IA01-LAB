    <footer class="footer text-center">
        <p>Copyright &copy; Andika Nugraha <?=Date('Y')?></p>
    </footer>
    </body>
    <script type="text/javascript" src="<?=base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#datetimepicker1').datetimepicker({
            format: 'hh:mm:ss'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'hh:mm:ss'
        });
    });
    </script>
</html>
 <script src="{{ asset('/backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript">
      $('.start_date').datepicker({
        format: 'yyyy-mm-dd',
      }).on('hide', function(event) {
        event.preventDefault();
        event.stopPropagation();
      });
      $('.end_date').datepicker({
        format: 'yyyy-mm-dd',
      }).on('hide', function(event) {
        event.preventDefault();
        event.stopPropagation();
      });
    </script>
    <script src="{{ asset('/backend/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Here is navigation script -->
    <script src="{{ asset('/backend/vendor/quixnav/quixnav.min.js') }}"></script>
    <script src="{{ asset('/backend/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('/backend/js/custom.min.js') }}"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="{{ asset('/backend/js/styleSwitcher.js') }}"></script>
    <!--endRemoveIf(production)-->
    <script src="{{ asset('/backend/vendor/highlightjs/highlight.pack.min.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

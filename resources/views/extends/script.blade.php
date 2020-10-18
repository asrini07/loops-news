<script src="{{ asset('js/require.min.js') }}"></script>
<script>
    requirejs.config({
        baseUrl: '.'
    });
</script>
<script>
    require(['jquery'], function(){
        $(document).ready(function(){
        console.log("Document Loaded !")
        })
    })
</script>
<!-- Dashboard Core -->

<script src="{{ asset('js/dashboard.js') }}"></script>
<!-- Input Mask Plugin -->
<script src="{{ asset('plugins/input-mask/plugin.js') }}"></script>
<script src="{{ asset('plugins/datatables/plugin.js') }}"></script>
<script src="{{ asset('plugins/swal/plugin.js') }}"></script>
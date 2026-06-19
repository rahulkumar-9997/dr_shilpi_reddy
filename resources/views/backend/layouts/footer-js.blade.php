
<script src="{{asset('backend/assets/js/jquery-1.11.2.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('backend/assets/js/jquery.easing.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('backend/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>  
<script src="{{asset('backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('backend/assets/plugins/viewport/viewportchecker.js')}}" type="text/javascript"></script>  
<script src="{{asset('backend/assets/plugins/messenger/js/messenger.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/messenger/js/messenger-theme-future.js')}}" type="text/javascript">
</script>
<script src="{{asset('backend/assets/plugins/messenger/js/messenger-theme-flat.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/messenger.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/assets/js/scripts.js') }}?v={{ time() }}" type="text/javascript"></script>
<script src="{{asset('backend/assets/plugins/sparkline-chart/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/chart-sparkline.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stack('scripts')
<script>
    $(document).ready(function() {
		@if(session()->has('error'))
		showErrorMessage('{{ session()->get('error') }}');
		@elseif(session()->has('success'))
		showSuccess('{{ session()->get('success') }}');
		@endif
	
    });
</script>



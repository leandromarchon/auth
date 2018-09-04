		</div> <!-- End div row -->
	</div> <!-- End div container-fluid -->

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/jquery.min.js"><\/script>')</script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/holder.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>

		<!-- DataTables -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/dataTables/js/jquery.dataTables.min.js"></script>
		<script>
			$(document).ready(function(){
				oTable = $('#table-users').dataTable({
		            "bPaginate": true,
		            "bJQueryUI": true,
		            "sPaginationType": "full_numbers"
		        });
			});
		</script>
	</body>
</html>
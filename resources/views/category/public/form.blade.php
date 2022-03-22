

		 {!! Form::open(array('url'=>'category', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Categorys</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Offer" class=" control-label col-md-4 text-left"> Offer </label>
										<div class="col-md-6">
										  <input  type='text' name='offer' id='offer' value='{{ $row['offer'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Icon" class=" control-label col-md-4 text-left"> Icon </label>
										<div class="col-md-6">
										  <input  type='text' name='icon' id='icon' value='{{ $row['icon'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Category" class=" control-label col-md-4 text-left"> Category </label>
										<div class="col-md-6">
										  <input  type='text' name='category' id='category' value='{{ $row['category'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Defination" class=" control-label col-md-4 text-left"> Defination </label>
										<div class="col-md-6">
										  <input  type='text' name='defination' id='defination' value='{{ $row['defination'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Select Option" class=" control-label col-md-4 text-left"> Select Option </label>
										<div class="col-md-6">
										  
					<?php $select_option = explode(',',$row['select_option']);
					$select_option_opt = array( 'Floors cleaning' => 'Floors cleaning' ,  'Window cleaning' => 'Window cleaning' ,  'Carpet cleaning' => 'Carpet cleaning' ,  'Washroom cleaning' => 'Washroom cleaning' , ); ?>
					<select name='select_option' rows='5'   class='select2 '  > 
						<?php 
						foreach($select_option_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['select_option'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#status").jCombo("{!! url('category/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
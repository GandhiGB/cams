
					<div class="page-content">		

						<div class="row">
							<div class="col-xs-12 ">
								<!-- PAGE CONTENT BEGINS -->

								<h4></h4>

								<div class="form-group">
								    <div class="input-group">
								    	<span class="input-group-addon">Search</span>
								    	<input type="text" name="search_text" id="search_text" placeholder="Search by Device Details" class="form-control" />
								    	<a href="#" class="input-group-addon btn-warning" data-toggle="modal" data-target="#modal-add-asset" style="color:white;">Add asset</a>
								    </div>	    
								 </div>

								<div class="table-responsive">
      								<table class="table table-bordered">
        								<thead>
											<tr>
												<th style="width:auto;text-align:center;">#</th>
												<th style="width:auto;text-align:center;">Device ID</th>
												<th style="width:auto;text-align:center;">PO NO.</th>
												<th style="width:auto;text-align:center;">Serial NO.</th>
												<th style="width:auto;text-align:center;">Device type</th>
												<th style="width:auto;text-align:center;">Brand</th>
												<th style="width:auto;text-align:center;">Model</th>
												<th style="width:auto;text-align:center;">Description</th>
												<th style="width:auto;text-align:center;">Date Acquired</th>
												<th style="width:auto;text-align:center;">Cost</th>
												<th style="width:auto;text-align:center;">Action</th>
											</tr>
										</thead>
										<tbody id="result">
											
											<?php 

												foreach ($assets as $key => $value) {
													echo '<tr>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.($key+1).'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->id.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->po_number.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->serial_number.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->category.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->brand.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->model.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->description.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->date_acquired.'</td>';
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">'.$value->cost.'</td>';
														
														echo '<td style ="width:auto;vertical-align:middle;text-align:center;">
																	
																	<button class="btn-info" id="edit-asset" 
																	device-id="'.$value->id.'" 
																	po-number="'.$value->po_number.'" 
																	device-type="'.$value->category.'" 
																	serial-number="'.$value->serial_number.'" 
																	brand="'.$value->brand.'"
																	model="'.$value->model.'" 
																	description="'.$value->description.'"
																	date-acquired="'.$value->date_acquired.'" 
																	cost="'.$value->cost.'"   

																	data-toggle="modal" data-target="#modal-edit-asset" data-toggle="tooltip" title="Update this asset" id='.$value->id.'><i class="ace-icon fa fa-edit"></i></button>


																</td>';


													echo '<tr>';																						
													}
												?>
										
											</tbody>
										</table>
									</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				

			
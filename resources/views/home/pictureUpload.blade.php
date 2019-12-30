@extends('home.mainLayout')
@section('content')

<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="{{asset('home_asset/css/fileupload.css')}}">
	
</head>
<div class="main_full">
	
		
		<div class="container">
			<form method="post" enctype="multipart/form-data">
			<div class="panel">
				<div class="form-row align-items-center">
					<table style="width:100%">
						<tr>
							<td><h5 class="mb-1">Image Type : </h5>  </td>
							<td>
								<div class="col-auto my-1">
									<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="selectbox">
										<option selected>Choose...</option>
										<option value="boats">Boats</option>
										<option value="cars">Cars</option>
										<option value="trucks">Trucks</option>
										<option value="people">People</option>
										<option value="travel">Travel</option>
									 </select>
								</div>
							</td>
						</tr>
						
						<tr>
							<td><h5 class="mb-1">Description : </h5> </td>
							<td><textarea rows="7" cols="36" name="description"> </textarea></td>
						</tr>
					</table>
				</div>
			</div>  
			
			<div class="panel">
				<div class="button_outer">
					<div class="btn_upload">
						<input class="btn btn-success" type="file" id="upload_file" name="image">
						Upload Image
					</div>
					<div class="processing_bar"></div>
					<div class="success_box"></div>
				</div>
			</div>
			<div class="error_msg"></div>
			<div class="uploaded_file_view" id="uploaded_view">
				<span class="file_remove">X</span>
				
			</div>
			
			<div class="panel">
				<div>
					<input class="btn btn-success" type="submit" name="fileSubmit" value="Submit">
				</div>
			</div>
			</form>
		</div>
	
</div>
@endsection

@section('title')
	Picture Upload
@endsection
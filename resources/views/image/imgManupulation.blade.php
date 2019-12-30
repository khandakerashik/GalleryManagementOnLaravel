@extends('home.mainLayout')
@section('content')

		
		<div align="center">
			<form method="post" enctype="multipart/form-data">
				<img src="{{asset('storage/'. $img)}}" alt="Image" name="tempImage">
				<br/><br/>
				<input class="btn btn-success" type="submit" name="button" value="rotate Left">
				
				<input class="btn btn-success" type="submit" name="button" value="rotate Right">
				
				<a href="{{route('imgMan.crop', $img)}}"> <input class="btn btn-success" type="button" name="save" value="crop"> </a>

			
				
				<a href="{{route('imgMan.delete', $img)}}"> <input class="btn btn-success" type="button" name="save" value="delete"> </a>
				<a href=""> <input class="btn btn-success" type="button" name="save" value="Save In Home"> </a>
			</form>
		</div>
		
@endsection

@section('title')
	Edit Image
@endsection
<div class="col-md-2">
	<div class='song' id="{{$album->id}}">
	 	<img class="imgP" src="/uploadedPics/{{$album->picName}}">
		<div class='name' >{{$album->songName}}</div>
		<div class='artist' >{{$album->artistName}}</div>
		<div class='rating' >
			@for($i=1;$i<=5;$i++)
				@if($i<=$album->rating)
					<img src='/images/star.png'>
				@else
					<img src='/images/star2.png'>
				@endif
			@endfor
		</div>
		<a class="btn btn-primary btn-xs my-btn updatePanel" >Update</a>
		<a class="btn btn-primary btn-xs my-btn delete">Delete</a>
	</div>
</div>
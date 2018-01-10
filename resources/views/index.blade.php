@extends('home')

@section('content')

	

	<section>
		<ol id="friends">
			
		</ol>
	</section>
	<form>
		<input type="button" name="" id="searchFriends" value="Намери приятели" onclick="pagination.getFriends(pagination.showFriends)">
		<select id="country">
			@foreach ($countries as $country)
				<option value="{{$country->language_id}}">{{$country->country_name}}</option>
			@endforeach
		</select>
	</form>
@endsection

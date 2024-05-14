@include('pages.frontend.head')

        	<section class="page-cover-section">
		<div class="container">
			<div class="row">
				<h1>Welcome to ABP Gallery</h1>
			</div>
		</div>
	</section>
	<section class="gallery-veiw-section">
		<div class="container">
			<div class="row">
                @foreach ($data as $data)


				<div class="gallery-view-column">
					<a href="#"><img src="{{ asset('images/'.$data->image) }}" align="4th Graduation Ceremony"></a>
				</div>
                @endforeach
			</div>
		</div>
	</section>

	<section class="visiting-section text-align">
		<div class="container">
			<div class="row">
				<h2>Thanks For Visiting</h2>
			</div>
		</div>
	</section>


<!---------------------- Footer Section -------------------->
@include('pages.frontend.footer')

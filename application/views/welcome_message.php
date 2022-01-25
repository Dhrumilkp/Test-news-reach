<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <title>News Fetch API GNEWS</title>
  </head>
  <body>
	<main class="app_wrapper">
		<div class="container">
			<h1>Let's Fetch some news</h1>
			<div class="row mt-5">
				<div class="col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<div class="filter_wrapper">
								<div class="country_drop_down_wrap">
									<select class="form-select" aria-label="Default select example" id="country_meta">>
										<option value="in" data-id="1" selected>India</option>
										<option value="fr" data-id="2">France</option>
									</select>
								</div>
								<div class="language_drop_down_wrap">
									<select class="form-select" aria-label="Default select example" id="language_meta">
										<option value="en" data-id="1" selected>English</option>
										<option value="hi" data-id="2">Hindi</option>
									</select>
								</div>
								<div class="submit_filter_wrapper">
									<button class="btn btn-md btn-primary" id="filter_news_btn">Filter</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="dis_news_wrapper">
							<div class="new_news_loader_spinner"></div>
							<div class="load_news_data_here">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Title</th>
											<th scope="col">Description</th>
											<th scope="col">PATH</th>
										</tr>
									</thead>
									<tbody class="show_data">
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    <!-- Optional JavaScript; choose one of the two! -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
	<script src="<?php echo base_url(); ?>assets/js/fetch.js"></script>
  </body>
</html>
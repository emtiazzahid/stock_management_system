<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width cf">

			<ul id="nav" class="fl">
				<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong><?php echo $POSNIC['username'] ?></strong></a></li>
				<li class="v-sep"><a href="logout.php" class="round button dark menu-logoff image-left">Log out</a></li>
				<li>
					<form class="form-inline" action="view_product_search_result.php" method="post">
						<div class="form-group">
							<select name="search_for" id="search_for" class="form-control">
								<option value="">Search By</option>
								<option value="name">Product Name</option>
								<option value="cost">Product Cost</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="search_key" id="search_key" placeholder="Keyboard">
						</div>
						<button class="btn btn-success"  name="btn_prd_search" id="btn_prd_search">Search</button>
					</form>
				</li>


			</ul>
		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
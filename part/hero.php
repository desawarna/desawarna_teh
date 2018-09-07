	<header id="fh5co-header" class="fh5co-cover" role="banner">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><?php echo $sysconf['library_name']; ?></h1>
							<h2><?php echo $sysconf['library_subname']; ?></h2>
							<div class="row">
								<form action="index.php" method="get" autocomplete="off" class="form-inline" id="fh5co-header-subscribe">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<input  type="text" placeholder="<?php echo __('Keyword'); ?>" class="s-search" id="keyword" name="keywords" value="" lang="<?php echo $sysconf['default_lang']; ?>" aria-hidden="true" autocomplete="off" >
											<button type="submit" name="search" value="search" class="btn btn-default"><?php echo __('Search'); ?></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
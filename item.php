		<?php
		$query = "SELECT * from items WHERE itemid = ".$id;
		$result = mysqli_query($link,$query);
		$item = mysqli_fetch_assoc($result);
		?>
		
		
		
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/sports" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-map-marker"></i><span><?php echo $item['area']; ?></span></li>
					<li><i class="glyphicon glyphicon-euro"></i> <span><?php echo $item['priceperday']; ?></span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Electronics, Phone</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title=""><?php echo $item['title']; ?></a></h3>
				<p><?php echo $item['description']; ?></p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>	
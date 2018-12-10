<div class="card">
	<div class="card-body">
		<p><strong>Weapon of Mass Destruction</strong></p>
		<ul class="list-arrow">
			<li <?php echo is_page( 'nuclear-weapons' ) ? 'class="active-cat-photo"' : '' ?>><a href="<?php echo site_url( '/nuclear-weapons' ) ?>"><?php echo pll__( 'Nuclear' ) ?></a></li>

			<li <?php echo is_page( 'missile' ) ? 'class="active-cat-photo"' : '' ?>><a href="<?php echo site_url( '/missile' ) ?>"><?php echo pll__( 'Missile' ) ?></a></li>

			<li <?php echo is_page( 'chemical' ) ? 'class="active-cat-photo"' : '' ?>><a href="<?php echo site_url( '/chemical' ) ?>"><?php echo pll__( 'Chemical' ) ?></a></li>

			<li <?php echo is_page( 'biological' ) ? 'class="active-cat-photo"' : '' ?>><a href="<?php echo site_url( '/biological' ) ?>"><?php echo pll__( 'Bilogical' ) ?></a></li>
		</ul>
	</div>
</div>
<?php $affiliate = affwp_get_affiliate( absint( $_GET['affiliate_id'] ) ); ?>
<div class="wrap">

	<h2><?php _e( 'Edit Affiliate', 'affiliate-wp' ); ?></h2>
	
	<form method="post" id="affwp_edit_affiliate">

		<?php do_action( 'affwp_edit_affiliate_top' ); ?>

		<table class="form-table">

			<tr class="form-row form-required">

				<th scope="row">
					<label for="user_id"><?php _e( 'User ID', 'affiliate-wp' ); ?></label>
				</th>

				<td>
					<input type="text" name="user_id" id="user_id" value="<?php echo esc_attr( $affiliate->user_id ); ?>" disabled="1"/>
					<div class="description"><?php _e( 'The affiliate\'s user ID. This cannot be changed.', 'affiliate-wp' ); ?></div>
				</td>

			</tr>

		</table>

		<?php do_action( 'affwp_edit_affiliate_bottom' ); ?>

		<input type="hidden" name="affwp_action" value="edit_affiliate" />

		<?php submit_button( __( 'Edit Affiliate', 'affiliate-wp' ) ); ?>

	</form>

</div>
<?php
/**
 * @package    mod_squalomail
 *
 * @author     Elvis Sedić elvis@spletodrom.si
 * @copyright  Spletodrom
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://www.spletodrom.si
 */

defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStyleDeclaration('
	.tm-footer .enovice input[type="text"] {
    	height: 48px;
    	font-size: 14px;
    	padding: 4px 8px;
    	margin-right: 5px;
	}
	.enovice-labels {
		height: 38px;
	    vertical-align: middle;
	    display: inline-block;
	    padding-top: 5px;
	}
');

?>

<div class="mod_squalomail <?php echo $params->get('moduleclass_sfx')?>">
    <form name="form-squalomail" id="form-squalomail" action="https://<?php echo $appid; ?>.squalomail.net/subscribe" method="get" class="uk-form">

    	<div class="uk-display-inline-block">
			<span class="acymailing_introtext"><?php echo $naslov; ?></span>
		</div>
		<div class="uk-display-inline-block">
        	<input type="text" id="name" name="user[name]" class="form-control" value="" placeholder="<?php echo $name; ?>">
		</div>
		<div class="uk-display-inline-block">
	        <input type="text" id="email"  name="user[email]" class="form-control" value="" placeholder="<?php echo $email; ?>">
		</div>
		<div class="uk-display-inline-block">
			<div class="enovice-labels">
				<div>
					<label>
						<input id="gdpr_can_track" name="user[gdpr_can_track]" required="" type="checkbox" value="1">Soglasje za pošiljanje
					</label>
				</div>
				<div>
					<label>
						<input id="gdpr_can_send" name="user[gdpr_can_send]" required="" type="checkbox" value="1">Soglasje za profiliranje
					</label>
				</div>
			</div>
		</div>
		<div class="uk-display-inline-block">
        	<button type="submit" class="acysubbuttons <?php echo $btnclass; ?>"><?php echo $btn; ?></button>
    	</div>
        <input type="hidden" name="hiddenlists" value="<?php echo $listid; ?>">
        <input type="hidden" name="redirect" value="<?php echo JUri::root().trim( JRoute::_( 'index.php?Itemid='.$url ), '/' );?>">
    </form>
</div>

<script>
jQuery(document).ready(function($) {
   /* $("form#form-squalomail").on("submit", function(e){
        e.preventDefault();
        console.log("send data");
        form = $(this);

        $.ajax({
            type: "GET",
            url: 'https://xxxx.squalomail.net/subscribe?hiddenlists=4&user[email]=' + $('#email', form),
            crossDomain: true,
            dataType: 'jsonp',
            success: function (result) {
                alert("Uspešno ste se prijavili na e-novice.");
            }
        });
        return false;
    });
    */ 
});
</script>
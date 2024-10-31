<?php
/*
Plugin Name: Send Text Message Tool Widget
Plugin URI: http://www.textmessagetool.com/tools.php
Description: Wordpress Widget Plugin enabling your visitors to send free text messages for any receipient in the US and Canada.
Author: TextMessageTool.com
Version: 1.0
Author URI: http://www.textmessagetool.com

*/

$domainnametext=$_SERVER['HTTP_HOST'];


// We're putting the plugin's functions inside the init function to ensure the
// required Sidebar Widget functions are available.
  
  function widget_sendtextmessageplugin_init() 
	  {
	  /* Your custom code starts here */
	  /* ---------------------------- */
	  
	  /* Your Function */
	  function sendtextmessageplugin()
	  {
		  
		  /* Our Code ----------------- */ 

$basesdir = $_SERVER["PHP_SELF"];
$fullURL1 = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
echo '<iframe src="';echo $fullURL1;echo '/wp-content/plugins/send-text-message-tool-widget/textmessagetool.php" frameborder="0" border="0" scrolling="no" width="200" height="300"></iframe>';

	  
		  /* End of Your Code ---------- */
		  
	  }
	  
	  /* -------------------------- */
	  /* Your custom code ends here */
	  
	  function widget_sendtextmessageplugin($args) 
	  {
	  
	  	  // Collect our widget's options, or define their defaults.
		  $options = get_option('widget_sendtextmessageplugin');
		  //$title = empty($options['title']) ? __('TITLE') : $options['title'];
			
		  $title = $options['title'];

		  extract($args);

		  sendtextmessageplugin();

		  if($title=='yes'){echo "<div align=\"center\" style=\"width:200px;text-align:center;\"><font color=\"#000000\" size=\"1\">Powered by <a href=\"http://www.textmessagetool.com/\" target=\"_blank\">Text Message Tool</a></font></div><br /><br />";}	
	  }  
	  
	  // This is the function that outputs the form to let users edit
	  // the widget's title. It's an optional feature, but were're doing 
	  // it all for you so why not!
	  
	  function widget_sendtextmessageplugin_control()
	  {
	  
		// Collect our widget options.
		$options = $newoptions = get_option('widget_sendtextmessageplugin');
		
		// This is for handing the control form submission.
		if ( $_POST['widget_sendtextmessageplugin-submit'] ) 
		{
			// Clean up control form submission options
//			$newoptions['title'] = strip_tags(stripslashes($_POST['widget_sendtextmessageplugin-title']));
$newoptions['title'] = $_POST['widget_sendtextmessageplugin-title'];
		}
				
		// If original widget options do not match control form
		// submission options, update them.
		if ( $options != $newoptions ) 
		{
			$options = $newoptions;
			update_option('widget_sendtextmessageplugin', $options);
		}
						
		$title = $options['title'];

		echo '<p><label for="sendtextmessageplugin-title1">';
		echo 'Give Credit to Plugin Author: <input name="widget_sendtextmessageplugin-title" value="yes" type="checkbox" ';if($title=='yes'){echo 'checked';}echo " />";
		echo '</label></p>';
		echo '<font size=1>* if you accept above, widget will add a small link to plugin developer on bottom of widget.</font>';
		echo '<input type="hidden" id="widget_sendtextmessageplugin-submit" name="widget_sendtextmessageplugin-submit" value="1" />';
	  }
	  
	  
	// This registers the widget.
    register_sidebar_widget('Send Text Message Tool Plugin', 'widget_sendtextmessageplugin');
	
	// This registers the (optional!) widget control form.
    register_widget_control('Send Text Message Tool Plugin', 'widget_sendtextmessageplugin_control');
	
  }
    
  add_action('plugins_loaded', 'widget_sendtextmessageplugin_init');

?>
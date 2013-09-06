<?php
 /**
 * class Bs_Walker_Nav_Menu()
 *
 * Extending Walker_Nav_Menu to modify class assigned to submenu ul element
 *
 * @author e3mark
 *
 **/
class Bs_Walker_Nav_Menu extends Walker_Nav_Menu {


 /**
     * Opening tag for menu list before anything is added
     *
     *
     * @param array reference       &$output    Reference to class' $output
     * @param int                   $depth      Depth of menu (if nested)
     * @param array                 $args       Class args, unused here
     *
     * @return string $indent
     * @return array by-reference   &$output
     *
     */
      // Set the properties of the element which give the ID of the current item and its parent  
    //var $db_fields = array( 'parent' => 'parent_id', 'id' => 'object_id' );  
  
  
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }
  
    // Displays end of a level. E.g '</ul>'  
    // @see Walker::end_lvl()  
    function end_lvl(&$output, $depth=0, $args=array()) {  
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }  
  
    // Displays start of an element. E.g '<li> Item Name'  
    // @see Walker::start_el()  
    
    function start_el(&$output, $item, $depth=0, $args=array()) {  
        $indent = str_repeat("\t", $depth);
        $output .= $indent."<li class=\"dropdown\">";
        if($depth==0){
        	$output .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.esc_attr($item->title).' <b class="caret"></b></a>';
        }else{
	        $output .= '<a href="'.$item->url.'">'.esc_attr($item->title).'</a>';
	        
        }
    }  
  
    // Displays end of an element. E.g '</li>'  
    // @see Walker::end_el()  
    function end_el(&$output, $item, $depth=0, $args=array()) {  
        $output .= "</li>\n";  
    }  
    

}
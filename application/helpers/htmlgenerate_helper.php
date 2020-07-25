<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('generatehtml'))
{
    
	function inputan($type,$names,$class,$placeholder,$required,$values,$tags)
        {       
            if(empty($tags))
            {
                $tagtemp="";
            }
            else
            {
                $tagtemp="";
                foreach($tags as $name => $tag)
                {
                    $tagtemp=$tagtemp." $name='$tag' ";
                }
            }
            $requred=$required==0?'':"required='required'";
            return "<div class='$class'><input type='$type' name='$names' placeholder='$placeholder' class='form-control' $requred value='$values' $tagtemp></div>";
        }
    
        
        
        
        // ---------------------------------- Textarea --------------------------------------------
    function textarea($name,$id,$class,$rows,$values)
    {
            return "<div class='$class'><textarea name='".$name."' id='".$id."' rows='".$rows."' class='form-control'>".$values."</textarea></div>";
    }
  }
 
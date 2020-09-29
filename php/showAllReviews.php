<?php


if(count($allReviews) == 0){

    echo '<p class="word">No Reviews Yet</p>';
	echo('<p>Add your Review</p>
                        <button class="review-btn" id="review-btn">
    Write a Review
</button>');
}else{
	if (empty($_SESSION['email'])){
		$dapat = false;
	}else{
		$dapat = true;
		foreach ($allReviews as $value){
			foreach ($value as $key=>$value){
				if($key == 'User Email'){
					if($value == $_SESSION['email']){
						$dapat = false;
					}
				}
			}
		}
	}
	if($dapat && !empty($_SESSION['email'])){
		
		echo('<p>Add your Review</p>
                        <button class="review-btn" id="review-btn">
    Write a Review
</button>');
	}else{
	
	}
	
    $name= "";
    foreach ($allReviews as $key=>$value){

        echo '<div style="margin: 3rem">';
	    echo '<p style="margin: 0.5rem"> name : '.$names[$key].'</p>';
        foreach ($value as $key=>$value){
                echo '<p style="margin: 0.5rem">'.$key.' : '.$value.'</p>';
        }
        echo '</div>';
    }
}



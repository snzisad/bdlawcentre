$(document).ready(function(){

	//training click action
	$('.training_list').on("click", function(e){

		$title = $(this).children(".training_title").html();
		$description = $(this).children(".training_description").html();
		setDataToModal($title, $description);
		return true;
	});	

	//banner learn more action
	$('.carousel_button').on("click", function(e){

		$title = $(this).parent().children(".title").html();
		$description = $(this).parent().children(".description").html();
		setDataToModal($title, $description);
		return true;
	});

	//practice title click action
	$('.practice_title').on("click", function(e){

		$title = $(this).html();
		$description = $(this).parent().children(".practice_descrption").html();
		setDataToModal($title, $description);
		return true;
	});

	//practice details click action
	$('.practice_details').on("click", function(e){
		$title = $(this).children(".feature_title").html();
		$description = $(this).children(".feature_description").html();
		setDataToModal($title, $description);
		return true;
	});

	function setDataToModal($title, $description){
		$("#descriptionModalTitle").html($title);
		$("#descriptionModalContent").text($description);
	}	
});
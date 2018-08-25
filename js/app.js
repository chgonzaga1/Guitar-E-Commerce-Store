$(document).ready(function(){
	setBindings();

});

function setBindings(){
	$("nav a").click(function(e){
		e.preventDefault();
		var sectionID = e.currentTarget.id + "Section";
		
		$("html body").animate({
			scrollTop: $("#" + sectionID).offset().top
			
		},1000)//sweet, it scrolls beautiful on the menu
		
	})

}

function popOne() {
    alert("You have selected The Chambered Body Type!");
}


function popup() {
    alert("Hello World");
}

function sides(){
    // Slide up displayed paragraphs
    $(".up-btn").click(function(){
        $("images/Chambered.jpg").slideUp();
    });
    
    // Slide down hidden paragraphs
    $(".down-btn").click(function(){
        $("images/Chambered.jpg").slideDown();
    });
}

var shown = false;
function showhideEmail(){
	if(shown){
		document.getElementById('email').innerHTML = "Show my Email";
		shown = false;
	}
	else{
		var myemail= "<a href='mailto:kalagam1" + "@" + "udayton.edu'>kalagam1" + "@" + "udayton.edu</a>";
		document.getElementById('email').outerHTML = myemail;
		shown = true;

	}
}
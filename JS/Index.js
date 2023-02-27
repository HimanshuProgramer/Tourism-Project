var images=["Pench.jpg","Ujjainn1.jpg","Rupmati_Mahal.jpg","Rajwada-Palace.jpg","Pachmarhi.jpg",
				"Gwalior-Fort.jpg","Patalpani-Falls.jpg","Sanchi2.jpg","Dhuandhar-Falls.jpg","Bagh_caves.jpg"];
		var i=0;
		function slides(){
			document.getElementById("slideimage").src=images[i];
			if(i<(images.length-1)){
				i++;
			}
			else
				i=0;
		}
		setInterval(slides,2500)
		


function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
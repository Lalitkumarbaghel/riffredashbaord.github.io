

<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="index2.php">About</a></li>
		<li><a href="/clients/">Clients</a></li>
		<li><a href="/contact/">Contact Us</a></li>
	</ul>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
	$(function() {
  $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});
</script>








<!-- <div id="divWebsites">
   <a href="index.html">Yahoo!</a> | 
   <a href="index1.html">CNN</a> | 
   <a href="index2.html">ABC News</a> | 
   <a href="index3.html">Wall Street Journal</a> | 
   <a href="index4.html">BBC</a>
</div>

<script type="text/javascript">
	window.onload=setupLinks;

function setupLinks()
{
	var webSites = document.getElementById("divWebsites");
	if (webSites)
	{
	
		var links = webSites.getElementsByTagName("a");
		var i, href, title;
		for (i=0; i<links.length; i++)
		{
			href = links[i].getAttribute("href");
			title = links[i].getAttribute("title");
			links[i].onclick = function(){
				window.open(href,title);
				this.style.color = "green";
				 return true;};
		}
	}	
}
</script> -->
</body>
</html>
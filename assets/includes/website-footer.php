<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.js"></script>

<!-- CUSTOM JS SCRIPTS -->
<script type="text/javascript">
$(document).ready(function() {
	// Form validation on all pages
	$.validate();
});

// Google Analytics Code
var _gaq = _gaq || [];
// Use enhanced link attribution 
var pluginUrl = 
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);

_gaq.push(['_setAccount', 'UA-47102909-1']);
_gaq.push(['_setDomainName', 'gamehub.ca']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

// Enable Demographics and Interest Reports 
ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/form-validator.min.js"></script>

</body>
</html>
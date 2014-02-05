import xml.etree.ElementTree as ET

tree = ET.parse('crawlers/surrenderat20/surrenderat20/surrenderat20.xml')
root = tree.getroot()

for item in root.findall('item'):
  
		body = item.find('body').find('value').text
		title = item.find('title').find('value').text
		link = item.find('link').find('value').text

		html_string = """
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
<div class='client-pin'>
  <h4 class='title'>
  	<a href=" """ + link.encode('utf-8','ignore') + """ ">
  		<b>""" + title.encode('utf-8','ignore') + """</b>
  	</a>
  </h4>
  <p class="info">
    <img src="assets/images/website_sources/surrenderat20.png" height="18px" width="18px">
   	Surrender @ 20
  </p>
  <div class='client-pin-content-holder'>
    """ + body.encode('utf-8','ignore') + """
  </div>
  <br/>
  <div class='view-more'>
	  <a href=" """ + link.encode('utf-8','ignore') + """ ">
	  	View More
	  </a>
  </div>
</div>
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>
"""
		title = title.replace(' ','_')
		title = title.lower()
		title = ''.join(c for c in title if c.islower() or c is '_')
		f = open('cards/LoL/lol_general_news/surrenderat20/'+title+'.php', 'w+')
		f.write(html_string)
	



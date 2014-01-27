import xml.etree.ElementTree as ET

tree = ET.parse('crawlers/lolitems/lolitems/lolitems_products.xml')
root = tree.getroot()

for item in root.findall('item'):
	desc = item.find('body').find('value').text
	image = item.find('image').find('value').text
	cost = item.find('cost').find('value').text
	title = item.find('title').find('value').text

	image = image.replace('"></span>', 'no-repeat; display: inline-block; width: 90px; height: 90px;"></span>')
	desc = desc.replace(' style="color: #FFDB4C;"', '') 

	html_string = """
<?php include('C:/xampp/htdocs/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>
<div class='client-pin'>
  <h4 class='title'><b>""" + title + """</b></h4>
  <h5 class='sub-title'><b>Item Wiki</b></h5>
  
  <div class='client-pin-content-holder'>
  """ + image + """
  """ + cost + """
    <br/>
  """ + desc + """
  </div>
</div>
</div>
</body>
</html>
"""
	title = title.replace(' ','_')
	title = title.lower()
	title = ''.join(c for c in title if c.islower() or c is '_')
	f = open('cards/LoL/lol_items_wiki/'+title+'.php', 'w+')
	f.write(html_string)
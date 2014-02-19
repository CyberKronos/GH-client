import xml.etree.ElementTree as ET

tree = ET.parse('crawlers/gameupdates/gameupdates/gameupdates_products.xml')
root = tree.getroot()

for item in root.findall('item'):
  
	if item.find('title').find('value') is not None:
		if item.find('preview_image').find('value') is not None:
			preview_image = item.find('preview_image').find('value').text
		else:
			preview_image = ' '
		if item.find('preview_video').find('value') is not None:
			preview_video = item.find('preview_video').find('value').text
		else:
			preview_video = ' '
		category_tag = item.find('category_tag').find('value').text
		body = item.find('body').find('value').text
		title = item.find('title').find('value').text

		html_string = """
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
<div class='client-pin'>
  <h4 class='title'><b>""" + title.encode('utf-8','ignore') + """</b></h4>
  <h5 class='sub-title'><b>""" + category_tag.encode('utf-8','ignore') + """</b></h5>
  
  <div class='client-pin-content-holder'>
  	<div>
      <img src=""" + preview_image.encode('utf-8','ignore') + """>
    </div>
    <div> """ + preview_video.encode('utf-8','ignore') + """ </div>
  </div>
  <br/>
  <div class='accordion' id='accordion2'>
    <div class='accordion-group'>
      <div class='accordion-heading'>
        <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseOne'>
          View More
        </a>
      </div>
      <div id='collapseOne' class='accordion-body collapse'>
        <div class='accordion-inner'>
          """ + body.encode('utf-8','ignore') + """
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>
"""
		title = title.replace(' ','_')
		title = title.lower()
		title = ''.join(c for c in title if c.islower() or c is '_')
		f = open('cards/LoL/lol_general_news/'+title+'.php', 'w+')
		f.write(html_string)
	



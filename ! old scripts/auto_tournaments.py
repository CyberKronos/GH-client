import xml.etree.ElementTree as ET

tree = ET.parse('crawlers/lolesports_tournaments/lolesports_tournaments/tournaments.xml')
root = tree.getroot()

for item in root.findall('item'):
  
	tournaments = item.find('tournaments').find('value').text

	html_string = """
  <?php include('C:/xampp/htdocs/GH-client/assets/includes/client-header.php'); ?>
  <div class='client-pin'>
    <h4 class='title'><b>2014 Global Tournaments</b></h4>
    <h5 class='sub-title'><b>Tournaments Schedule</b></h5>
    <p class="info">
      <img src="assets/images/website_sources/leaguepedia.png" height="18px" width="18px">
      Leaguepedia
    </p>
    <div class='client-pin-content-holder' id="tournaments-card">
      <div> """ + tournaments.encode('utf-8','ignore') + """ </div>
    </div>
  </div>
  <?php include('C:/xampp/htdocs/GH-client/assets/includes/client-footer.php'); ?>
  """
	# title = title.replace(' ','_')
	# title = title.lower()
	# title = ''.join(c for c in title if c.islower() or c is '_')
	f = open('cards/LoL/global_tournaments.php', 'w+')
	f.write(html_string)
	



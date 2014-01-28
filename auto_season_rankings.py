import xml.etree.ElementTree as ET

tree = ET.parse('crawlers/lolesports_season_rankings/lolesports_season_rankings/lcs_season_rankings.xml')
root = tree.getroot()

for item in root.findall('item'):
  
  tournament_name = item.find('tournament_name').find('value').text
  table_rankings = item.find('table_rankings').find('value').text

  html_string = """
  <?php include('C:/xampp/htdocs/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>
  <div class='client-pin'>
    <h4 class='title'><b> """ + tournament_name.encode('utf-8','ignore') + """ </b></h4>
    <h5 class='sub-title'><b>Season Rankings</b></h5>
    <p class="info">
      <img src="assets/images/website_sources/leaguepedia.png" height="18px" width="18px">
      Leaguepedia
    </p>
    <div class='client-pin-content-holder' id="season-rankings">
      <div> """ + table_rankings.encode('utf-8','ignore') + """ </div>
    </div>
  </div>

  </div>
  </body>
  </html>
  """
  tournament_name = tournament_name.replace(' ','_')
  tournament_name = tournament_name.lower()
  tournament_name = ''.join(c for c in tournament_name if c.islower() or c is '_')
  f = open('cards/LoL/season_rankings/'+tournament_name+'.php', 'w+')
  f.write(html_string)
	



import xml.etree.ElementTree as ET

tree = ET.parse('crawlers/lolchamps/lolchamps/lolchamps_products.xml')
root = tree.getroot()

for item in root.findall('item'):

	name = item.find('champ_name').find('value').text
	picture = item.find('champ_pic').find('value').text
	title = item.find('champ_title').find('value').text
	tags = item.find('champ_tags').find('value').text
	ipcost = item.find('champ_ip_cost').find('value').text
	rpcost = item.find('champ_rp_cost').find('value').text
	if item.find('champ_release_date').find('value') is not None:
		releasedate = item.find('champ_release_date').find('value').text
	else:
		releasedate = '2009-02-21'

	health = item.find('champ_stats_health').find('value').text
	healthregen = item.find('champ_stats_health_regen').find('value').text
	mana = item.find('champ_stats_mana').find('value').text
	manaregen = item.find('champ_stats_mana_regen').find('value').text
	attackrange = item.find('champ_stats_range').find('value').text
	ad = item.find('champ_stats_ad').find('value').text
	aspd = item.find('champ_stats_as').find('value').text
	armor = item.find('champ_stats_armor').find('value').text
	mr = item.find('champ_stats_mr').find('value').text
	ms = item.find('champ_stats_ms').find('value').text

	passive_name = item.find('skill_passive_name').find('value').text
	passive_picture = item.find('skill_passive_picture').find('value').text
	passive_stats = item.find('skill_passive_stats').find('value').text
	passive_description = item.find('skill_passive_description').find('value').text

	if item.find('skill_q_name').find('value') is not None:
		q_name = item.find('skill_q_name').find('value').text
		q_picture = item.find('skill_q_picture').find('value').text
		q_stats = item.find('skill_q_stats').find('value').text
		q_description = item.find('skill_q_description').find('value').text
		q_level = item.find('skill_q_level').find('value').text
	else:
		q_name = item.find('skill_name').find('value').text
		q_picture = item.find('skill_picture').find('value').text
		q_stats = item.find('skill_stats').find('value').text
		q_description = item.find('skill_description').find('value').text
		q_level = item.find('skill_level').find('value').text

	w_name = item.find('skill_w_name').find('value').text
	w_picture = item.find('skill_w_picture').find('value').text
	w_stats = item.find('skill_w_stats').find('value').text
	w_description = item.find('skill_w_description').find('value').text
	w_level = item.find('skill_w_level').find('value').text

	e_name = item.find('skill_e_name').find('value').text
	e_picture = item.find('skill_e_picture').find('value').text
	e_stats = item.find('skill_e_stats').find('value').text
	e_description = item.find('skill_e_description').find('value').text
	e_level = item.find('skill_e_level').find('value').text

	r_name = item.find('skill_r_name').find('value').text
	r_picture = item.find('skill_r_picture').find('value').text
	r_stats = item.find('skill_r_stats').find('value').text
	r_description = item.find('skill_r_description').find('value').text
	r_level = item.find('skill_r_level').find('value').text

	html_string = """
	<?php include('C:/Program Files (x86)/xampp/htdocs/GH-client/assets/inc/incfiles/client-header.inc.php'); ?>
	<div class="client-pin">
	<h4 class="title"><b> """ + name.encode('utf-8','ignore') + """ </b></h4>
	<h5 class="sub-title"><b>Champion Wiki</b></h5> 
	<div class="client-pin-content-holder">

		<p class="champion-wiki-side-by-side-image">
			""" + picture.encode('utf-8','ignore') + """
		</p>
		<div class="champion-wiki-side-by-side-text">
			<p>
				<b>Cost:</b> <img src="assets/images/website_sources/ip_logo.png" style="width:20px;"> """ + ipcost.encode('utf-8','ignore') + """ or <img src="assets/images/website_sources/rp_logo.png" style="width:20px;"> """ + rpcost.encode('utf-8','ignore') + """
			</p>
			<p>
				<b>Release date</b> """ + releasedate.encode('utf-8','ignore') + """
			</p>
			<p>
				""" + tags.encode('utf-8','ignore') + """
			</p>
		</div>
		<br/><br/>
		<table class="table table-condensed" style="background-color: #d9edf7; border-radius: 3px;">
			<tbody>
				<tr>
					<th>Health</th>
					""" + health.encode('utf-8','ignore') + """
					<th>Attack Damage</th>
					""" + ad.encode('utf-8','ignore') + """
				</tr>
				<tr>
					<th>Health regen.</th>
					""" + healthregen.encode('utf-8','ignore') + """
					<th>Attack speed</th>
					""" + aspd.encode('utf-8','ignore') + """
				</tr>
				<tr>
					<th>Uses Health</th>
					<td></td>
					<th>Armor</th>
					""" + armor.encode('utf-8','ignore') + """
				</tr>
				<tr>
					<th></th>
					<td></td>
					<th>Magic res.</th>
					""" + mr.encode('utf-8','ignore') + """
				</tr>
				<tr>
					<th>Range</th>
					""" + attackrange.encode('utf-8','ignore') + """
					<th>Mov. speed</th>
					""" + ms.encode('utf-8','ignore') + """
				</tr>
			</tbody>
		</table>
	</div>
	<div class="accordion" id="accordion2">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					View More
				</a>
			</div>
			<div id="collapseOne" class="accordion-body collapse">
				<div class="accordion-inner">
					<h6>""" + passive_name.encode('utf-8','ignore') + """</h6>
					<div class="champion-wiki-side-by-side-image">
						<img class="rounded_pics" src=\"""" + passive_picture.encode('utf-8','ignore') + """\">
					</div>
					<div class="champion-wiki-side-by-side-text">
						""" + passive_stats.encode('utf-8','ignore') + """
					</div>
					<p>
						""" + passive_description.encode('utf-8','ignore') + """
					</p>

					<h6>""" + q_name.encode('utf-8','ignore') + """</h6>
					<div class="champion-wiki-side-by-side-image">
						<img class="rounded_pics" src=\"""" + q_picture.encode('utf-8','ignore') + """\">
					</div>
					<div class="champion-wiki-side-by-side-text">
						""" + q_stats.encode('utf-8','ignore') + """
					</div>
					<p>
						""" + q_description.encode('utf-8','ignore') + q_level.encode('utf-8','ignore') +"""
					</p>

					<h6>""" + w_name.encode('utf-8','ignore') + """</h6>
					<div class="champion-wiki-side-by-side-image">
						<img class="rounded_pics" src=\"""" + w_picture.encode('utf-8','ignore') + """\">
					</div>
					<div class="champion-wiki-side-by-side-text">
						""" + w_stats.encode('utf-8','ignore') + """
					</div>
					<p>
						""" + w_description.encode('utf-8','ignore') + w_level.encode('utf-8','ignore') +"""
					</p>

					<h6>""" + e_name.encode('utf-8','ignore') + """</h6>
					<div class="champion-wiki-side-by-side-image">
						<img class="rounded_pics" src=\"""" + e_picture.encode('utf-8','ignore') + """\">
					</div>
					<div class="champion-wiki-side-by-side-text">
						""" + e_stats.encode('utf-8','ignore') + """
					</div>
					<p>
						""" + e_description.encode('utf-8','ignore') + e_level.encode('utf-8','ignore') +"""
					</p>

					<h6>""" + r_name.encode('utf-8','ignore')+ """</h6>
					<div class="champion-wiki-side-by-side-image">
						<img class="rounded_pics" src=\"""" + r_picture.encode('utf-8','ignore') + """\">
					</div>
					<div class="champion-wiki-side-by-side-text">
						""" + r_stats.encode('utf-8','ignore') + """
					</div>
					<p>
						""" + r_description.encode('utf-8','ignore') + r_level.encode('utf-8','ignore') +"""
					</p>
				</div>
			</div>
		</div>
	</div>
	
</div>


</div>
</body>
</html>
"""

	name = name.replace(' ','_')
	name = name.lower()
	name = ''.join(c for c in name if c.islower() or c is '_')
	f = open('cards/LoL/lol_champ_wiki/'+name+'.php', 'w+')
	f.write(html_string)
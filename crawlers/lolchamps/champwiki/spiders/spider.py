from scrapy.spider import BaseSpider
from scrapy.selector import HtmlXPathSelector
from items import LolchampsItem

class MySpider(BaseSpider):
    name = "lolchamps"
    allowed_domains = ["http://leagueoflegends.wikia.com/wiki/League_of_Legends_Wiki"]
    start_urls = [
        "http://leagueoflegends.wikia.com/wiki/Aatrox",
        "http://leagueoflegends.wikia.com/wiki/Ahri",
        "http://leagueoflegends.wikia.com/wiki/Akali",
        "http://leagueoflegends.wikia.com/wiki/Alistar",
        "http://leagueoflegends.wikia.com/wiki/Amumu",
        "http://leagueoflegends.wikia.com/wiki/Anivia",
        "http://leagueoflegends.wikia.com/wiki/Annie",
        "http://leagueoflegends.wikia.com/wiki/Ashe",        
        "http://leagueoflegends.wikia.com/wiki/Blitzcrank",
        "http://leagueoflegends.wikia.com/wiki/Brand",
        "http://leagueoflegends.wikia.com/wiki/Caitlyn",
        "http://leagueoflegends.wikia.com/wiki/Cassiopeia",
        "http://leagueoflegends.wikia.com/wiki/Cho'Gath",
        "http://leagueoflegends.wikia.com/wiki/Corki",
        "http://leagueoflegends.wikia.com/wiki/Darius",
        "http://leagueoflegends.wikia.com/wiki/Diana",
        "http://leagueoflegends.wikia.com/wiki/Dr._Mundo",
        "http://leagueoflegends.wikia.com/wiki/Draven",
        "http://leagueoflegends.wikia.com/wiki/Elise",
        "http://leagueoflegends.wikia.com/wiki/Evelynn",
        "http://leagueoflegends.wikia.com/wiki/Ezreal",
        "http://leagueoflegends.wikia.com/wiki/Fiddlesticks",
        "http://leagueoflegends.wikia.com/wiki/Fiora",
        "http://leagueoflegends.wikia.com/wiki/Fizz",
        "http://leagueoflegends.wikia.com/wiki/Galio",
        "http://leagueoflegends.wikia.com/wiki/Gangplank",
        "http://leagueoflegends.wikia.com/wiki/Garen",
        "http://leagueoflegends.wikia.com/wiki/Gragas",
        "http://leagueoflegends.wikia.com/wiki/Graves",
        "http://leagueoflegends.wikia.com/wiki/Hecarim",
        "http://leagueoflegends.wikia.com/wiki/Heimerdinger",
        "http://leagueoflegends.wikia.com/wiki/Irelia",
        "http://leagueoflegends.wikia.com/wiki/Janna",
        "http://leagueoflegends.wikia.com/wiki/Jarvan_IV",
        "http://leagueoflegends.wikia.com/wiki/Jax",
        "http://leagueoflegends.wikia.com/wiki/Jayce",
        "http://leagueoflegends.wikia.com/wiki/Karma",
        "http://leagueoflegends.wikia.com/wiki/Karthus",
        "http://leagueoflegends.wikia.com/wiki/Kassadin",
        "http://leagueoflegends.wikia.com/wiki/Katarina",
        "http://leagueoflegends.wikia.com/wiki/Kayle",
        "http://leagueoflegends.wikia.com/wiki/Kennen",
        "http://leagueoflegends.wikia.com/wiki/Kha'Zix",
        "http://leagueoflegends.wikia.com/wiki/Kog'Maw",
        "http://leagueoflegends.wikia.com/wiki/LeBlanc",
        "http://leagueoflegends.wikia.com/wiki/Lee_Sin",
        "http://leagueoflegends.wikia.com/wiki/Leona",
        "http://leagueoflegends.wikia.com/wiki/Lissandra",
        "http://leagueoflegends.wikia.com/wiki/Lulu",
        "http://leagueoflegends.wikia.com/wiki/Lux",
        "http://leagueoflegends.wikia.com/wiki/Malphite",
        "http://leagueoflegends.wikia.com/wiki/Malzahar",
        "http://leagueoflegends.wikia.com/wiki/Maokai",
        "http://leagueoflegends.wikia.com/wiki/Master_Yi",
        "http://leagueoflegends.wikia.com/wiki/Miss_Fortune",
        "http://leagueoflegends.wikia.com/wiki/Mordekaiser",
        "http://leagueoflegends.wikia.com/wiki/Morgana",
        "http://leagueoflegends.wikia.com/wiki/Nami",
        "http://leagueoflegends.wikia.com/wiki/Nasus",
        "http://leagueoflegends.wikia.com/wiki/Nautilus",
        "http://leagueoflegends.wikia.com/wiki/Nidalee",
        "http://leagueoflegends.wikia.com/wiki/Nocturne",
        "http://leagueoflegends.wikia.com/wiki/Nunu",
        "http://leagueoflegends.wikia.com/wiki/Olaf",
        "http://leagueoflegends.wikia.com/wiki/Orianna",
        "http://leagueoflegends.wikia.com/wiki/Pantheon",
        "http://leagueoflegends.wikia.com/wiki/Poppy",
        "http://leagueoflegends.wikia.com/wiki/Quinn",
        "http://leagueoflegends.wikia.com/wiki/Rammus",
        "http://leagueoflegends.wikia.com/wiki/Renekton",
        "http://leagueoflegends.wikia.com/wiki/Rengar",
        "http://leagueoflegends.wikia.com/wiki/Riven",
        "http://leagueoflegends.wikia.com/wiki/Rumble",
        "http://leagueoflegends.wikia.com/wiki/Ryze",
        "http://leagueoflegends.wikia.com/wiki/Sejuani",
        "http://leagueoflegends.wikia.com/wiki/Shaco",
        "http://leagueoflegends.wikia.com/wiki/Shen",
        "http://leagueoflegends.wikia.com/wiki/Shyvana",
        "http://leagueoflegends.wikia.com/wiki/Singed",
        "http://leagueoflegends.wikia.com/wiki/Sion",
        "http://leagueoflegends.wikia.com/wiki/Sivir",
        "http://leagueoflegends.wikia.com/wiki/Skarner",
        "http://leagueoflegends.wikia.com/wiki/Sona",
        "http://leagueoflegends.wikia.com/wiki/Soraka",
        "http://leagueoflegends.wikia.com/wiki/Swain",
        "http://leagueoflegends.wikia.com/wiki/Syndra",
        "http://leagueoflegends.wikia.com/wiki/Talon",
        "http://leagueoflegends.wikia.com/wiki/Taric",
        "http://leagueoflegends.wikia.com/wiki/Teemo",
        "http://leagueoflegends.wikia.com/wiki/Thresh",
        "http://leagueoflegends.wikia.com/wiki/Trundle",
        "http://leagueoflegends.wikia.com/wiki/Tryndamere",
        "http://leagueoflegends.wikia.com/wiki/Twisted_Fate",
        "http://leagueoflegends.wikia.com/wiki/Twitch",
        "http://leagueoflegends.wikia.com/wiki/Udyr",
        "http://leagueoflegends.wikia.com/wiki/Urgot",
        "http://leagueoflegends.wikia.com/wiki/Varus",
        "http://leagueoflegends.wikia.com/wiki/Vayne",
        "http://leagueoflegends.wikia.com/wiki/Veigar",
        "http://leagueoflegends.wikia.com/wiki/Vi",
        "http://leagueoflegends.wikia.com/wiki/Viktor",
        "http://leagueoflegends.wikia.com/wiki/Vladimir",
        "http://leagueoflegends.wikia.com/wiki/Volibear",
        "http://leagueoflegends.wikia.com/wiki/Warwick",
        "http://leagueoflegends.wikia.com/wiki/Wukong",
        "http://leagueoflegends.wikia.com/wiki/Xerath",
        "http://leagueoflegends.wikia.com/wiki/Xin_Zhao",
        "http://leagueoflegends.wikia.com/wiki/Yorick",
        "http://leagueoflegends.wikia.com/wiki/Zac",
        "http://leagueoflegends.wikia.com/wiki/Zed",
        "http://leagueoflegends.wikia.com/wiki/Ziggs",
        "http://leagueoflegends.wikia.com/wiki/Zilean",
        "http://leagueoflegends.wikia.com/wiki/Zyra"       
    ]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        
        item = LolchampsItem()
        
        item['champ_pic'] = hxs.select("//table[@id='champion_info-upper']/tr[1]/td[1]/a/img").extract()
        item['champ_name'] = hxs.select("//table[@id='champion_info-upper']/tr[1]/td[2]/span[1]/text()").extract()
        item['champ_title'] = hxs.select("//table[@id='champion_info-upper']/tr[1]/td[2]/span[2]/text()").extract()
        item['champ_tags'] = hxs.select("//table[@id='champion_info-upper']/tr[2]/td/table/tr/td[1]/a/text()").extract()
        item['champ_ip_cost'] = hxs.select("//table[@id='champion_info-upper']/tr[1]/td[3]/span/a[1]/text()").extract()
        item['champ_rp_cost'] = hxs.select("//table[@id='champion_info-upper']/tr[1]/td[3]/span/a[3]/text()").extract()
        item['champ_release_date'] = hxs.select("//table[@id='champion_info-upper']/tr[2]/td/table/tr/td[2]/a/text()").extract()

        item['champ_stats_health'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[2]/td[2]").extract()
        item['champ_stats_health_regen'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[3]/td[2]").extract()
        item['champ_stats_mana'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[4]/td[2]").extract()
        item['champ_stats_mana_regen'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[5]/td[2]").extract()
        item['champ_stats_range'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[6]/td[2]").extract()
        item['champ_stats_ad'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[2]/td[4]").extract()
        item['champ_stats_as'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[3]/td[4]").extract()
        item['champ_stats_armor'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[4]/td[4]").extract()
        item['champ_stats_mr'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[5]/td[4]").extract()
        item['champ_stats_ms'] = hxs.select("//table[@id='champion_info-lower']/tr/td[2]/table/tr[6]/td[4]").extract()

        item['skill_passive_name'] = hxs.select("//div[@class='skill skill_innate']/div[@class='skill_header']/span/text()").extract()
        item['skill_passive_description'] = hxs.select("//div[@class='skill skill_innate']/div[@class='skill_wrapper']/div[2]/div[1]").extract()
        item['skill_passive_stats'] = hxs.select("//div[@class='skill skill_innate']/div[@class='skill_header']/ul").extract()  
        item['skill_passive_picture'] = hxs.select("//div[@class='skill skill_innate']/div[@class='skill_wrapper']/div[1]/img/@data-src").extract()   

        item['skill_q_name'] = hxs.select("//div[@class='skill skill_q']/div[@class='skill_header']/span/text()").extract()
        item['skill_q_description'] = hxs.select("//div[@class='skill skill_q']/div[@class='skill_wrapper']/div[2]/div[1]").extract()
        item['skill_q_picture'] = hxs.select("//div[@class='skill skill_q']/div[@class='skill_wrapper']/div[1]/img/@data-src").extract()
        item['skill_q_stats'] = hxs.select("//div[@class='skill skill_q']/div[@class='skill_header']/ul").extract()
        item['skill_q_level'] = hxs.select("//div[@class='skill skill_q']/div[@class='skill_wrapper']/div[2]/div[2]").extract()

        item['skill_name'] = hxs.select("//div[@class='skill']/div[@class='skill_header']/span/text()").extract()
        item['skill_description'] = hxs.select("//div[@class='skill']/div[@class='skill_wrapper']/div[2]/div[1]").extract()
        item['skill_picture'] = hxs.select("//div[@class='skill']/div[@class='skill_wrapper']/div[1]/img/@data-src").extract()
        item['skill_stats'] = hxs.select("//div[@class='skill']/div[@class='skill_header']/ul").extract()
        item['skill_level'] = hxs.select("//div[@class='skill']/div[@class='skill_wrapper']/div[2]/div[2]").extract()


        item['skill_w_name'] = hxs.select("//div[@class='skill skill_w']/div[@class='skill_header']/span/text()").extract()
        item['skill_w_description'] = hxs.select("//div[@class='skill skill_w']/div[@class='skill_wrapper']/div[2]/div[1]").extract()
        item['skill_w_picture'] = hxs.select("//div[@class='skill skill_w']/div[@class='skill_wrapper']/div[1]/img/@data-src").extract()
        item['skill_w_stats'] = hxs.select("//div[@class='skill skill_w']/div[@class='skill_header']/ul").extract()
        item['skill_w_level'] = hxs.select("//div[@class='skill skill_w']/div[@class='skill_wrapper']/div[2]/div[2]").extract()

        
        item['skill_e_name'] = hxs.select("//div[@class='skill skill_e']/div[@class='skill_header']/span/text()").extract()
        item['skill_e_description'] = hxs.select("//div[@class='skill skill_e']/div[@class='skill_wrapper']/div[2]/div[1]").extract()
        item['skill_e_picture'] = hxs.select("//div[@class='skill skill_e']/div[@class='skill_wrapper']/div[1]/img/@data-src").extract()
        item['skill_e_stats'] = hxs.select("//div[@class='skill skill_e']/div[@class='skill_header']/ul").extract()
        item['skill_e_level'] = hxs.select("//div[@class='skill skill_e']/div[@class='skill_wrapper']/div[2]/div[2]").extract()

        
        item['skill_r_name'] = hxs.select("//div[@class='skill skill_r']/div[@class='skill_header']/span/text()").extract()
        item['skill_r_description'] = hxs.select("//div[@class='skill skill_r']/div[@class='skill_wrapper']/div[2]/div[1]").extract()
        item['skill_r_picture'] = hxs.select("//div[@class='skill skill_r']/div[@class='skill_wrapper']/div[1]/img/@data-src").extract()
        item['skill_r_stats'] = hxs.select("//div[@class='skill skill_r']/div[@class='skill_header']/ul").extract()
        item['skill_r_level'] = hxs.select("//div[@class='skill skill_r']/div[@class='skill_wrapper']/div[2]/div[2]").extract()

        
        
        return item
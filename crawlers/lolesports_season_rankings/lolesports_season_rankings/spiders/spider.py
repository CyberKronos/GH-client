from scrapy.spider import BaseSpider
from scrapy.selector import HtmlXPathSelector
from lolesports_season_rankings.items import LolesportsSeasonsRankingsItem

class MySpider(BaseSpider):
    name = "lolesports_season_rankings"
    allowed_domains = ["lol.gamepedia.com/League_of_Legends_Wiki"]
    start_urls = [
        "http://lol.gamepedia.com/Riot_League_Championship_Series/North_America/2014_Season/Spring_Round_Robin",
        "http://lol.gamepedia.com/Riot_League_Championship_Series/Europe/2014_Season/Spring_Round_Robin"
    ]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        
        item = LolesportsSeasonsRankingsItem()

        # For NA and EU LCS

        item['tournament_name'] = hxs.select("//h1[@id='firstHeading']/span/text()").extract()
        item['table_rankings'] = hxs.select("//div[@id='mw-content-text']//table[@class='prettytable']").extract()
        
        return item
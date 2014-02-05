from scrapy.spider import BaseSpider
from scrapy.selector import HtmlXPathSelector
from lolesports_tournaments.items import LolesportsTournamentsItem

class MySpider(BaseSpider):
    name = "lolesports_tournaments"
    allowed_domains = ["lol.gamepedia.com/League_of_Legends_Wiki"]
    start_urls = ["http://lol.gamepedia.com/League_of_Legends_Wiki"]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        
        item = LolesportsTournamentsItem()

        item['tournaments'] = hxs.select("//td[@class='content separator2']").extract()
        
        return item
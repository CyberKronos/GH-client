from scrapy.spider import BaseSpider
from scrapy.selector import HtmlXPathSelector
from lolesports.items import LolesportsItem

class MySpider(BaseSpider):
    name = "lolesports"
    allowed_domains = ["lol.gamepedia.com/League_of_Legends_Wiki"]
    start_urls = ["http://lol.gamepedia.com/League_of_Legends_Wiki"]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        
        item = LolesportsItem()
        
        item['na_lcs'] = hxs.select("//div[@id='lcsnatab']").extract()
        # item['europe'] = hxs.select("//div[@class='_toggle tab1 tabs']/div[3]/div[1]/table").extract()
        # item['na'] = hxs.select("//div[@class='_toggle tab1 tabs']/div[3]/div[2]/table").extract()
        # item['lpl'] = hxs.select("//div[@class='_toggle tab2 tabs']/div[2]/div[1]/table").extract()
        # item['ogn'] = hxs.select("//div[@class='_toggle tab3 tabs']/div[3]/div[1]/table").extract()
        # item['gpl'] = hxs.select("//div[@class='_toggle tab4 tabs']/div[2]/div[1]/table").extract()
        # item['tesl'] = hxs.select("//div[@class='_toggle tab5 tabs']/div[2]/div[1]/table").extract()
        # item['tlc'] = hxs.select("//div[@class='_toggle tab6 tabs']/div[2]/div[1]/table").extract()
        
        return item
from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.selector import HtmlXPathSelector
from lolitems.items import LolitemsItem

class MySpider(CrawlSpider):
    name = "lolitems"
    allowed_domains = ["www.lolking.net"]
    start_urls = ["http://www.lolking.net/items/"]   

    # LoL King Items
    rules = (Rule (SgmlLinkExtractor(restrict_xpaths=('//div[@class="jerek-list item-list"]',))
    , callback="parse_items", follow=True),
    )

    def parse_items(self, response):
        hxs = HtmlXPathSelector(response)

        # LoL News
        articles = hxs.select("//div[@class='lol-tt-cont']")
        articlespic = hxs.select("//div[@class='lol-tt-wrapper']")
        items = []
        for articles in articles:
            item = LolitemsItem()
            item['title'] = articles.select("div[@class='lol-tt-innercont']/div[@class='lol-tt-name']/text()").extract()
            item['cost'] = articles.select("div[@class='lol-tt-innercont']/div[@class='lol-tt-cost']").extract()
            item['body'] = articles.select("div[@class='lol-tt-innercont']/div[@class='lol-tt-desc']").extract()
            item['image'] = articlespic.select("span[@class='lol-icon large with-tooltip']").extract()
            items.append(item)
        return (items)
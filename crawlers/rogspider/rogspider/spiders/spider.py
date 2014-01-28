from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.selector import HtmlXPathSelector
from scrapy.selector import Selector
from items import RogspiderItem

class MySpider(CrawlSpider):
    name = "rogspider"
    allowed_domains = ["www.reignofgaming.net"]
    start_urls = ["http://www.reignofgaming.net/news"]   
    rules = (Rule (SgmlLinkExtractor(restrict_xpaths=('//h2[@class="p-article-title"]',))
    , callback="parse_items", follow=True),
    )

    def parse_items(self, response):
        hxs = Selector(response)

        articles = hxs.xpath("//article[@class='p-article p-article-a post']")
        items = []
        for articles in articles:
            item = GameupdatesItem()
            item['title'] = articles.xpath("//h2[@class='p-article-title']/text()").extract()
            item['body'] = articles.xpath("section[@class='p-article-content u-typography-format']").extract()
            items.append(item)
        return (items)
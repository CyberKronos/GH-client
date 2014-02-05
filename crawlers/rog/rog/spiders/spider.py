from scrapy.spider import BaseSpider
from scrapy.selector import HtmlXPathSelector
from rog.items import RogItem

class MySpider(BaseSpider):
    name = "rog"
    allowed_domains = ["www.reignofgaming.net"]
    start_urls = ["http://www.reignofgaming.net/"]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)

        articles = hxs.select("//ul[@class='listing listing-post post-listing']/li")
        items = []
        for articles in articles:
            item = RogItem()
            item['title'] = articles.select("//h2[@class='p-article-title']/a/text()").extract()
            # item['body_p_tag'] = articles.select("section[@class='p-article-content u-typography-format']/p").extract()
            # item['body_h2_tag'] = articles.select("section[@class='p-article-content u-typography-format']/h2").extract()
            # item['link'] = articles.select("//h2[@class='p-article-title']/a/@href").extract()
            items.append(item)
        return (items)
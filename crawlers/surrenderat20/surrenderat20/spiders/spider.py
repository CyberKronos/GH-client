from scrapy.spider import BaseSpider
from scrapy.selector import HtmlXPathSelector
from surrenderat20.items import Surrenderat20Item

class MySpider(BaseSpider):
    name = "surrenderat20"
    allowed_domains = ["www.surrenderat20.net"]
    start_urls = ["http://www.surrenderat20.net/index.html"]

    def parse(self, response):
        hxs = HtmlXPathSelector(response)
        
        articles = hxs.select("//div[@class='post hentry']")
        items = []
        for articles in articles:
            item = Surrenderat20Item()
            item['title'] = articles.select("h1[@class='news-title']/a/text()").extract()
            # item['body'] = articles.select("div[@class='news-content']").extract()
            # item['link'] = articles.select("div[@class='jump-link']/a[contains(@href, 'http://')]/@href").extract()
            items.append(item)
        return (items)
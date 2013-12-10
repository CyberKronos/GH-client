from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.selector import HtmlXPathSelector
from gameupdates.items import GameupdatesItem

class MySpider(CrawlSpider):
    name = "gameupdates"
    allowed_domains = ["na.leagueoflegends.com",
                        "www.reignofgaming.net",
                        "www.lolking.net",
                        "www.surrenderat20.net"
    ]
    start_urls = [  # "http://www.lolking.net/",
                    "http://na.leagueoflegends.com/en/news?page=0",
                    # "http://www.reignofgaming.net/news",
                    # "http://www.reignofgaming.net/tier-lists/solo-tier-list",
                    # "http://www.reignofgaming.net/tier-lists/competitive-tier-list",
                    # "http://www.reignofgaming.net/tier-lists/jungle-tier-list",
                    # "http://www.reignofgaming.net/tier-lists/threes-tier-list",
                    # "http://www.reignofgaming.net/tier-lists/dominion-tier-list",
                    # "http://www.surrenderat20.net/index.html"

    ]   

    # LoL News
    rules = (Rule (SgmlLinkExtractor(restrict_xpaths=('//div[@class="default-2-3"]/h4',))
    , callback="parse_items", follow=True),
    )

    # LoL King
    # rules = (Rule (SgmlLinkExtractor(restrict_xpaths=('//h3[@class="headline"]',))
    # , callback="parse_items", follow=True),
    # )

    # RoG News
    # rules = (Rule (SgmlLinkExtractor(restrict_xpaths=('//h2[@class="p-article-title"]',))
    # , callback="parse_items", follow=True),
    # )

    # Surrender @ 20
    # rules = (Rule (SgmlLinkExtractor(restrict_xpaths=('//h1[@class="news-title"]',))
    # , callback="parse_items", follow=True),
    # )

    def parse_items(self, response):
        hxs = HtmlXPathSelector(response)

        # LoL News
        articles = hxs.select("//div[@class='default-2-3']")
        items = []
        for articles in articles:
            item = GameupdatesItem()
            item['title'] = articles.select("h1[@class='article-title']/text()").extract()
            item['preview_image'] = articles.select("//div[@class='file file-image file-image-jpeg']").extract()
            item['preview_video'] = articles.select("//div[@class='media-youtube-video media-youtube-1']").extract()
            item['body'] = articles.select("div[@class='field field-name-body field-type-text-with-summary field-label-hidden']").extract()
            item['category'] = articles.select("div[@class='field field-name-field-category field-type-taxonomy-term-reference field-label-hidden']/text()").extract()
            items.append(item)
        return (items)

        # LoL King News
        # articles = hxs.select("//div[@class='pane news-post']")
        # items = []
        # for articles in articles:
        #     item = GameupdatesItem()
        #     item['title'] = articles.select("div[@id='page-header']/h3[@class='headline']/a/text()").extract()
        #     # item['body'] = articles.select("//div[3]").extract()
        #     body_item = articles.select("div[3]")
        #     for body_item in body_item:
        #         item['body'] = body_item.select("div").extract()

        #     items.append(item)
        # return (items)

        # RoG Articles/News/Tier List
        # articles = hxs.select("//article[@class='p-article p-article-a post']")
        # items = []
        # for articles in articles:
        #     item = GameupdatesItem()
        #     item['title'] = articles.select("//h2[@class='p-article-title']/text()").extract()
        #     item['body'] = articles.select("section[@class='p-article-content u-typography-format']").extract()
        #     items.append(item)
        # return (items)

        # Surrender @ 20 News
        # articles = hxs.select("//div[@class='post hentry']")
        # items = []
        # for articles in articles:
        #     item = GameupdatesItem()
        #     item['title'] = articles.select("h1[@class='news-title']/text()").extract()
        #     item['body'] = articles.select("div[@class='news-content']").extract()
        #     items.append(item)
        # return (items)
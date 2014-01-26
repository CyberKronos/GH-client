from twisted.internet import reactor
from scrapy.crawler import Crawler
from scrapy import log, signals
from spiders.spider import MySpider
from scrapy.utils.project import get_project_settings

spider = MySpider(domain='http://leagueoflegends.wikia.com/wiki/League_of_Legends_Wiki')
settings = get_project_settings()
crawler = Crawler(settings) 
crawler.install()

crawler.signals.connect(reactor.stop, signal=signals.spider_closed)
crawler.configure()
crawler.crawl(spider)
crawler.start()
log.start()
reactor.run()
# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/topics/items.html

from scrapy.item import Item, Field

class LolesportsSeasonsRankingsItem(Item):
    # define the fields for your item here like:
    
    tournament_name = Field()
    table_rankings = Field()


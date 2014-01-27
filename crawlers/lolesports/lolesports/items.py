# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/topics/items.html

from scrapy.item import Item, Field

class LolesportsItem(Item):
    # define the fields for your item here like:
    na_lcs = Field()
    
    europe = Field()
    na = Field()
    lpl = Field()
    ogn = Field()
    gpl = Field()
    tesl = Field()
    tlc = Field()

# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/topics/items.html

from scrapy.item import Item, Field

class RogItem(Item):
   
    title = Field()
    body_p_tag = Field()
    body_h2_tag = Field()
    link = Field()
    

    

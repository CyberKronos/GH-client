# Scrapy settings for lolchamps project
#
# For simplicity, this file contains only the most important settings by
# default. All the other settings are documented here:
#
#     http://doc.scrapy.org/topics/settings.html
#

BOT_NAME = 'lolchamps'

SPIDER_MODULES = ['lolchamps.spiders']
NEWSPIDER_MODULE = 'lolchamps.spiders'
ITEM_PIPELINES = ['lolchamps.pipelines.XmlExportPipeline']

# Crawl responsibly by identifying yourself (and your website) on the user-agent
#USER_AGENT = 'lolchamps (+http://www.yourdomain.com)'

# Scrapy settings for lolesports project
#
# For simplicity, this file contains only the most important settings by
# default. All the other settings are documented here:
#
#     http://doc.scrapy.org/topics/settings.html
#

BOT_NAME = 'lolesports_season_rankings'

SPIDER_MODULES = ['lolesports_season_rankings.spiders']
NEWSPIDER_MODULE = 'lolesports_season_rankings.spiders'

# Crawl responsibly by identifying yourself (and your website) on the user-agent
#USER_AGENT = 'lolesports_season_rankings (+http://www.yourdomain.com)'

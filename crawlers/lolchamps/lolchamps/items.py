# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/topics/items.html

from scrapy.item import Item, Field

class LolchampsItem(Item):
    
    champ_pic = Field()
    champ_name = Field()
    champ_title = Field()
    champ_tags = Field()
    champ_ip_cost = Field()
    champ_rp_cost = Field()
    champ_release_date = Field()
    
    champ_stats_health = Field()
    champ_stats_health_regen = Field()
    champ_stats_mana = Field()
    champ_stats_mana_regen = Field()
    champ_stats_range = Field()
    champ_stats_ad = Field()
    champ_stats_as = Field()
    champ_stats_armor = Field()
    champ_stats_mr = Field()
    champ_stats_ms = Field()

    skill_passive_name = Field()
    skill_passive_description = Field()
    skill_passive_picture = Field()
    skill_passive_stats = Field()

    skill_q_name = Field()
    skill_q_description = Field()
    skill_q_picture = Field()
    skill_q_stats = Field()

    skill_w_name = Field()
    skill_w_description = Field()
    skill_w_picture = Field()
    skill_w_stats = Field()

    skill_e_name = Field()
    skill_e_description = Field()
    skill_e_picture = Field()
    skill_e_stats = Field()
    
    skill_r_name = Field()
    skill_r_description = Field()
    skill_r_picture = Field()
    skill_r_stats = Field()
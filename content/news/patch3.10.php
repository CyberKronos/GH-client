<?php include($_SERVER['DOCUMENT_ROOT'].'/GH-client/assets/inc/incfiles/client-header-with-navbar.inc.php'); ?>

<div class="container">
  <div class="row-fluid">

	<div class="span8">
	  <div class="pin-web">
	    <h4 class="title">Patch 3.10 Notes</h4 > 
	    <h5 class="sub-title">Patch Notes</h5>
	    <div class="client-pin-content-holder">
	    	<p>
	    		<img class="rounded_pics" src="assets/images/news_pics/patch3.10.jpg">
	    	</p>

	    	<p>
	    		"The Patch Preview has been temporarily delayed due to technical difficulties and will arrive tomorrow! Thanks for your patience, Summoners – you can consider this a Patch (p)Review in spirit."
			</p>

			<hr/>

			<div>
				<h5>Champions</h5>

				<p>Ashe</p>
				<p>While cleaning up Ashe's passive, we found a small bug that had been granting unwarranted Focus stacks. We ordered an orbital strike on the bug, and gave Focus a minor buff to compensate.</p>
				
				<p>Focus</p>
				<ul>
					<li>Focus stacks per second increased to 4/5/6/7/8 from 3/4/5/6/7.</li>
					<li>Fixed a bug where Focus was granting stacks while on cooldown in certain situations.</li>	
				</ul>
				

				<p>Elise</p>
				<p>Spiderlings are now less tanky overall, particularly against champions who build armor penetration. Spiderlings will also descend from Rappel after Elise, meaning if she Rappels with tower aggro and no friendly minions around, she'll be targeted first once she lands (towers used to target Spiderlings first because they would descend first). Rappel also no longer allows Elise to travel outside of the indicated range.
				Elise has been a high-value pick in competitive play for some time thanks to the overall strength of her kit. We considered reducing the damage of some of her abilities, but felt like we should target her more frustrating aspects first. Specifically, we wanted to reduce the tankiness of Elise's spiderlings and lower their utility as damage sponges. With these changes we can add a little more counterplay for her opponents, meaning Elise players will need to think more carefully about her Spider Swarm passive.
				The other ability we targeted was the deceptively long range of Rappel. We initially designed Elise's Rappel to allow for some extra travel space outside of her indicated range, but in retrospect this made the skill extremely frustrating to play against. These changes mean the circular visual indicator will more accurately show who Elise is able to descend upon.</p>				

				<p>Spiderlings</p>
				<ul>
					<li>Health reduced to 90-260 from 125-550.</li>
					<li>Armor increased to 30/50/70/90 from 30 (based on Spider Form rank).</li>
					<li>Magic resist increased to 50/70/90/110 from 50 (based on Spider Form rank).</li>
					<li>Multi-target damage reduction adjusted to 25% from 10/20/30/40%.</li>
					<li>Spiderlings no longer continue taking actions before vanishing once Elise shifts into Human Form.</li>
					<li>Spiderlings now group closer together while moving.</li>
				</ul>	

				<p>Volatile Spiderling</p>
				<ul>
					Movement speed reduced.
				</ul>

				<p>Rappel</p>
				<ul>
					<li>Elise can no longer descend outside of the indicated area.</li>
					<li>Fixed a bug where Elise could begin casting spells and attacking as soon as she began her descent while she was still untargetable.</li>
					<li>Spiderlings will now descend from Rappel slightly after Elise instead of descending at the same time.</li>
				</ul>

		
				<p>Fiddlesticks</p>
				<p>Crowstorm</p>
				<ul>
					<li>No longer reduces Baron Nashor's, Dragon's, or Vilemaw's magic resist.</li>
				</ul>	


				<p>Fizz</p>	
				<p>Playful/Trickster</p>
				<ul>
					<li>Fixed a bug that occasionally caused rapid casts to deal no damage.</li>
				</ul>	


				<p>Karthus</p>
				<p>Lay Waste</p>
				<ul>
					<li>Now casts at max range when targeted beyond max range during Death Defied.</li>
				</ul>	


				<p>Defile</p>	
				<ul>
					<li>Ability power ratio reduced to 0.2 from 0.25.</li>
					<li>Fixed a bug where cooldown reduction allowed Defile to be rapidly toggled, increasing its damage output.</li>
				</ul>	

			
				<p>Malzahar</p>
				<p>Summon Voidling</p>
				<ul>
					<li>Voidlings no longer repeatedly switch targets when more than one unit is affected with  Malefic Visions.</li>
				</ul>
				
				
				<p>Master Yi remade</p>
				<p>Master Yi has been reworked with a new model and changes to his kit. For a full rundown of the Wuju Master's changes, click here.</p>

				<p>Stats</p>
				<ul>
					<li>Health per level increased to 92 from 86.</li>
					<li>Base mana reduced to 180 from 199.</li>
					<li>Mana per level increased to 42 from 36.</li>
					<li>Base armor reduced to 15 from 16.3.</li>
					<li>Armor per level reduced to 3 from 3.7.</li>
					<li>Attack speed per level reduced to 2.75% from 2.98%.</li>
				</ul>

				<p>Double Strike (Innate)</p>
				<ul>
					<li>Every 4th consecutive basic attack, Master Yi will attack twice, dealing 50% damage on the second strike.</li>
				</ul>
 				<p>Alpha Strike (Q)</p>
 				<ul>
					<li>Master Yi becomes untargetable and dashes to up to 4 units, dealing 25/60/95/130/165 (+1.0 total attack damage) physical damage and 75/100/125/150/175 bonus damage to minions. Alpha Strike can critically strike for 60% of Master Yi's total attack damage.</li>
					<li>Alpha Strike's cooldown is reduced by 1 second each time Master Yi basic attacks.</li>
					<li>Mana cost: 70/80/90/100/110.</li>
					<li>Cooldown: 18/17/16/15/14 seconds.</li>
				</ul>
 				<p>Meditate (W)</p>
 				<ul>
					<li>Master Yi channels for 4 seconds, gaining 40/45/50/55/60% damage reduction and healing for 30/50/70/90/110 (+0.3 ability power) per second. This heal is increased by 1% for every 1% Health Master Yi is missing. The damage reduction is halved against turrets.</li>
					<li>Mana Cost: 50/65/80/95/110.</li>
					<li>Cooldown: 35 seconds.</li>
				</ul>
 				<p>Wuju Style (E)</p>
 				<ul>
					<li>Passive: Master Yi gains 7/9/11/13/15% attack damage.</li>
					<li>Active: Master Yi deals 10/15/20/25/30 (+0.1/0.125/0.15/0.175/0.2 total attack damage) true damage on hit for 5 seconds. Wuju Style's passive bonus is lost while the skill is on cooldown.</li>
					<li>Mana Cost: 0.</li>
					<li>Cooldown: 18/17/16/15/14 seconds.</li>
				</ul>
 				<p>Highlander (Ultimate)</p>
 				<ul>
					<li>Passive: when Master Yi kills a champion, the cooldowns on his basic abilities are reduced by 18 seconds (half for assists)</li>
					<li>Active: grants Master Yi 30/55/80% attack speed and 25/35/45% movement speed for 10 seconds. If Master Yi scores a kill or assist while Highlander is active, Highlander's duration is extended by 4 seconds.</li>
					<li>Mana Cost: 100.</li>
					<li>Cooldown: 75 seconds.</li>
				</ul>

		
			
				<p>Nami</p>
				<p>Aqua Prison</p>
				<ul>
					<li>Fixed a bug where the stun sometimes lasted longer than intended.</li>
				</ul>

				
				
				<p>Poppy</p>
				<p>Heroic Charge</p>
				<ul>
					<li>Fixed a bug where Poppy would retain her previous move or attack order after charging.</li>
					<li>Fixed a bug that caused Poppy to stutter briefly after charging.</li>
				</ul>	


				
				<p>Ryze</p>
				<p>The ranges of Ryze's spells are being reduced this patch, but his Desperate Power movement speed buff has been increased to compensate.
				With his spell range and high late game damage, Ryze could effectively nuke back line squishies from distance while still playing the role of "tanky beast" (when built in that way). We wanted to refocus on Ryze's core identity as a mid-range mage, meaning his positioning and proximity to the enemy team is more important than before, while his increased speed should allow him to get up close to priority targets to melt their delicate little faces.</p>

				<p>Overload</p>
				<ul>
					<li>Cast range reduced to 600 from 650.</li>
				</ul>
 				<p>Rune Prison</p>
 				<ul>
					<li>Cast range reduced to 600 from 625.</li>
					<li>Mana cost reduced to 60/70/80/90/100 from 80/90/100/110/120.</li>
				</ul>
 				<p>Spell Flux</p>
 				<ul>
					<li>Cast range reduced to 600 from 675.</li>
				</ul>
 				<p>Desperate Power</p>
 				<ul>
					<li>Bonus movement speed increased to 60/70/80 from 35/45/55.</li>
				</ul>

						
				<p>Thresh</p>
				<p>Thresh's reduced base health and armor make him more vulnerable at early levels, but collected souls now grant a flat bonus with no diminishing returns.
				We wanted to make trading in lanes a little riskier for Thresh as he had a lot of crowd control through Death Sentence and Flay. Additionally, collecting souls, while a vital part of early game Thresh play, had the tendency to become negligible late game due to their diminishing returns. Giving souls a flat bonus means Thresh's passive stays relevant throughout the game.</p>
				
				<p>Stats</p>
				<ul>
					<li>Base health reduced to 441 from 452.</li>
					<li>Base armor reduced to 12 from 18.</li>
				</ul>

 				<p>Damnation</p>
 				<ul>
					<li>Souls now always grant 0.75 armor and ability power instead of starting at 1.0 and granting diminishing returns per soul collected.	</li>
				</ul>

				
				
				<p>Twisted Fate</p>
				<p>Loaded Dice no longer grants global bonus gold, but instead gives Twisted Fate between 1-6 gold per kill. Pick a Card has been changed, too, giving TF players a smaller window to throw the card after locking it instead of one long window to both lock and throw the card.
				Loaded Dice was giving Twisted Fate and his team a lot of hidden power without feeling individually impactful. The change fits more thematically with his kit and allows his passive to feel more noticeable by giving TF more gold on average over the course of the match.
				The Pick a Card changes are intended to introduce more counterplay to the ability, as many players were locking their card within a second or two of shuffling, then sitting on the locked card for the rest of the duration to intimidate opponents. While these changes mean TF players have more time to utilize Pick a Card, they'll have a smaller window to act once they lock in their card.</p>

				<p>Loaded Dice remade</p>
				<ul>
					<li>Upon killing a unit, Twisted Fate rolls his dice, gaining anywhere from 1 to 6 bonus gold. Naturally, Twisted Fate has a higher chance to receive a larger bonus.</li>
 				</ul>

 				<p>Pick a Card</p>
 				<ul>
					<li>Now has 8 seconds to lock the card and 4 seconds to throw it instead of 10 seconds to do both.</li>
				</ul>

				
				
				<p>Udyr</p>
				<ul>
 					<li>Spirit Guard Udyr has new death animations.</li>
 				</ul>

 				<p>Vayne</p>
 				<p>Condemn</p>
 				<ul>
					<li>Fixed a bug where the cast range was longer than intended (650 instead of 550).</li>
				</ul>

 				<p>Final Hour</p>
 				<ul>
					<li>Cooldown increased to 100/85/70 seconds from 70.</li>
				</ul>
 
 				<p>Warwick</p>
 				<p>Infinite Duress</p>
 				<ul>
					<li>Fixed a bug where damage would continue to be dealt after being interrupted by enemy champions.</li>
				</ul>

 				<p>Zac</p>
 				<p>Elastic Slingshot</p>
 				<ul>
					<li>Damage reduced to 80/120/160/200/240 from 80/130/180/230/280.</li>
				</ul>
			</div>

			<hr/>
			
			<div>
				<h5>General Champion Notes</h5>
				<p>Champions with dash abilities will no longer be able to activate them while taunted (ex.  Jax's  Leap Strike,  Katarina's  Shunpo, and  Shen's  Shadow Dash).</p>
				<p>Champions that waste basic attacks or abilities on damage nullifying shields or absorption shields without breaking the shield (ex.  Kayle's  Intervention,  Poppy's  Diplomatic Immunity,  Morgana's  Black Shield,  Barrier, etc.) will now be properly granted assists if that champion dies within the appropriate time frame.</p>			
			</div>	

			<hr/>

			<div>
				<h5>Items</h5>

				<p>Blade of the Ruined King</p>
				<ul>
					<li>Active haste/slow duration reduced to 3 seconds from 4.</li>
				</ul>

				<p>Warden's Mail</p>
				<ul>
					<li>Passive slow duration reduced to 1 second from 1.5.</li>
					<li>Cost reduced to 1000 from 1100.</li>
				</ul>

				<p>Randuin's Omen</p>
				<ul>
					<li>Passive slow duration reduced to 1 second from 1.5.</li>
					<li>Cost reduced to 3000 from 3100 (combine cost unchanged).</li>
				</ul>

				<p>Frozen Heart</p>
				<ul>
					<li>Cost reduced to 2900 from 3000 (combine cost unchanged).</li>
				</ul>

				<h5>Magic resistance items</h5>

				<p>A new magic resistance item has been added to the game in the form of a mid-level MR item that builds into Spirit Visage and Banshee's Veil.
We wanted to reposition magic resistance as a personal stat as opposed to an aura-focused stat (see below for our Runic Bulwark updates). With these changes we specifically wanted to create more itemization options against sustained magic damage dealers in the mid game as well as create more options for tanks versus late game poke teams.</p>

				<p>Spectre's Cowl added</p>
				<ul>
					<li>Recipe:  Ruby Crystal +  Negatron Cloak + 205g = 1400g</li>
					<li>+200 health</li>
					<li>+45 magic resist</li>
					<li>Unique Passive: grants +15 health regen per 5 seconds for up to 10 seconds after taking damage from an enemy champion.</li>
				</ul>

 				<p>Spirit Visage</p>
 				<ul>
					<li>Recipe changed:  Spectre's Cowl +  Kindlegem + 375g = 2625g (total cost increased from 2200g)</li>
					<li>Health increased to 400 from 200.</li>
					<li>Magic resist increased to 55 from 45.</li>
					<li>Now grants +20 health regen per 5 seconds.</li>
				</ul>

 				<p>Banshee's Veil</p>
 				<ul>
					<li>Recipe changed:  Spectre's Cowl +  Ruby Crystal + 875g = 2750g (total cost increased from 2520g)</li>
					<li>Health increased to 450 from 400.</li>
					<li>Magic resist increased to 55 from 45.</li>
					<li>Mana reduced to 0 from 300.</li>
					<li>New Unique Passive: Grants +45 health regen per 5 seconds for up to 10 seconds after taking damage from an enemy champion or when the spell shield breaks.</li>
 				</ul>

 				<p>Guardian Angel</p>
 				<ul>
					<li>Recipe changed:  Negatron Cloak +  Chain Vest + 1310g = 2750g (total cost increased from 2600g)</li>
					<li>Magic resist increased to 40 from 30.</li>
				</ul>		

				<h5>Runic Bulwark and Locket of the Iron Solari</h5>
				<p>
					Runic Bulwark has been removed from the game. Aegis of the Legion now builds into Locket of the Iron Solari. We wanted to reduce the burden of buying an Aegis/Bulwark every game. By combining Aegis and Locket, we can more clearly push them into their strategic niche of team fight area-effect damage reduction items.
				</p>

				<p>Aegis of the Legion</p>
				<ul>
					<li>Combine cost reduced to 375 from 625 (total cost reduced to 1900 from 2150)</li>
					<li>Health reduced to 200 from 250.</li>
					<li>No longer grants self-only magic resist.</li>
					<li>Unique Aura – Legion</li>
					<li>No longer grants armor.</li>
					<li>Magic resist increased to 20 from 15.</li>
					<li>No longer grants additional bonuses to minions.</li>
				</ul>

 				<p>Runic Bulwark</p>
 				<ul>
					<li>Removed.</li>
				</ul>
 				<p>Locket of the Iron Solari</p>
 				<ul>
					<li>Recipe changed:  Aegis of the Legion + 600g = 2500g</li>
					<li>+300 health</li>
					<li>+20 armor</li>
					<li>+10% cooldown reduction</li>
					<li>Unique Active retained.</li>
					<li>Now grants Unique Aura - Legion.</li>
				</ul>

				<h5>New Icons</h5>
				<p>The following items have received new icons</p>
				<ul>
					<li>Abyssal Scepter</li>
					<li>Catalyst the Protector</li>
					<li>Deathfire Grasp</li>
					<li>Glacial Shroud</li>
					<li>Haunting Guise</li>
					<li>Hextech Revolver</li>
					<li>Thornmail</li>
					<li>Vampiric Scepter</li>
				</ul>
			</div>

			<hr/>

			<div>
				<h5>Maps</h5>

				<p>Summoner's Rift</p>

				<p>Jungle Monsters</p>
				<p>All camps outside of buff camps will now spawn later in the game. Some experience has been moved back from the Ancient Golem and Lizard Elder to their Young Lizard spawns meaning junglers will have to fully clear the camp in order to hit level 2, and not just kill the buff monster.
Our first jungle modifications in 3.8 were not quite enough to enact the changes we wanted, so we're pushing spawn timers even further to finish the job while fixing some other unintended side effects.
Junglers could completely cripple their enemy team counterparts – especially early on – without fully committing to confrontation by smiting the buff and escaping, or killing their opponent with the immediate level advantage. We like the importance of aggressive early game invades, but want to make sure there's an appropriate amount of risk involved.</p>
				<ul>
					<li>Wolves</li>
					<ul>
						<li>Spawn time increased to 2:05 from 1:55.</li>
 						<li>Giant Wolf</li>
						<ul>
							<li>Base experience granted increased to 170 from 153.</li>
						</ul>
					</ul>
					<li>Wraiths</li>
					<ul>
						<li>Spawn time increased to 2:05 from 1:55.</li>
					</ul>
					<li>Golems</li>
					<ul>	
						<li>Spawn time increased to 2:05 from 1:55.</li>
						<li>Big Golem</li>
						<ul>
							<li>Base experience granted increased to 160 from 137.</li>
						</ul>	
					</ul>
					<li>Ancient Golem</li>
					<ul>	
						<li>Base experience granted reduced to 260 from 340.</li>
						<li>Base health reduced to 1400 from 1500.</li>
					</ul>
					<li>Lizard Elder</li>
					<ul>	
						<li>Base experience granted reduced to 260 from 340.</li>
						<li>Base health reduced to 1400 from 1500.</li>
					</ul>
					<li>Young Lizard</li>
					<ul>
						<li>Base experience granted increased to 50 from 10</li>
						<li>Base health increased to 400 from 300</li>
					</ul>
				</ul>

				<p>Baron Nashor</p>

				<p>Baron Nashor now takes less physical and magical damage from targets affected by Voracious Corrosion (the single target debuff he applies to whoever's tanking him) as opposed to directly reducing attack damage.
Soloing Baron with sustained magic damage was too easy for a select few champions. This change makes things more consistent overall. A noted side effect is that teams who start fighting Baron will be at less of a disadvantage when engaged upon by the enemy team due to the fact that Voracious Corrosion no longer alters overall attack damage and instead only reduces damage directed at Baron Nashor. We'll continue to monitor this and act if it seems to be a significant problem.</p>

				<p>Voracious Corrosion</p>
				<ul>
					<li>
					Now reduces the physical and magic damage the target deals to Nashor by 50% instead of reducing the target's attack damage by 50%.
					</li>
				</ul>

				<p>Turrets</p>
				<p>Turrets are now harder to push down within the very early stages of the game. We've also corrected a minor bug that gave purple side inner turrets slightly more armor than intended.
Due to the high global value of map objectives and the ease of taking down turrets in the early game with certain compositions, players – particularly in competitive play – have been entirely bypassing the laning phase. Ultimately we didn't want to completely eliminate this strategy but its prevalence was invalidating many champions who have high potential during the laning phase. These changes should introduce more risk into aggressive early-game objective-focused strategies without eliminating its viability completely.
For additional context, while the numbers might initially seem high (in particular the purple side inner turrets having 10 more armor than intended), turrets begin the game with much more armor relative to champions so these changes are not as significant as they might first seem.</p>
				<ul>
					<li>Outer turrets now gain 60 bonus armor at the start of the game, which starts decaying after 4 minutes have passed and finishes decaying 4 minutes later.</li>
					<li>Outer turret base armor increased to 60 from 54.</li>
					<li>Outer turrets no longer gain armor over the first 8 minutes of the game.</li>
					<li>Fixed a bug where purple side inner turrets had 10 more armor than intended.</li>
				</ul>

				<p>Twisted Treeline and Crystal Scar</p>

				<p>General Changes</p>
				<p>Needlessly Large Rod and Deathfire Grasp have been removed from these map modes, with more mid-level AP items added in, including Liandry's Torment, Seeker's Armguard, and Moonflair Spellblade – a mid-tier defensive AP item. Blackfire Torch now has the same active ability of Deathfire Grasp.
This small-scale AP rework is intended to address AP survivability and viability in Twisted Treeline and Crystal Scar. Needlessly Large Rod (and, by extension, Deathfire Grasp) have been removed because it was unreasonably difficult to save up for on these maps. The addition of Moonflair Spellblade and Seeker's Armguard should help with early-mid game survivability.</p>

				<p>Removed:</p>
				<ul>
					<li>Needlessly Large Rod</li>
					<li>Deathfire Grasp</li>
				</ul>

				<p>Enabled:</p>
				<ul>
					<li>Liandry's Torment</li>
					<li>Seeker's Armguard</li>
				</ul>

				<p>Blackfire Torch reworked</p>
				<ul>
					<li>Blasting Wand +  Fiendish Codex + 720g = 2400g</li>
					<li>+80 ability power</li>
					<li>+10% cooldown reduction</li>
					<li>Unique Active: Deals 20% of target champion's maximum health in magic damage over 6 seconds and increases all subsequent magic damage taken by the target by 20% (60 second cooldown).</li>
				</ul>

				<p>Moonflair Spellblade (Ranged Only) reintroduced</p>
				<ul>
					<li>Recipe:  Seeker's Armguard +  Negatron Cloak + 420g = 2300g</li>
					<li>+50 ability power</li>
					<li>+50 armor</li>
					<li>+50 magic resist</li>
					<li>Unique Passive - Tenacity: Reduces the duration of stuns, slows, taunts, fears, silences, blinds, and immobilizes by 35%.</li>
				</ul>

				<p>Wooglet's Witchcap</p>
				<ul>
					<li>Recipe changed:  Seeker's Armguard +  Blasting Wand +  Amplifying Tome + 1045g = 3500g</li>
					<li>Armor increased to 45 from 40.</li>
				</ul>

				<p>Bug Fixes</p>
				<ul>
					<li>Vilemaw now properly selects his melee attack for melee champions with more than 100 range.</li>
					<li>Vilemaw no longer twitches when players leave his lair.</li>
					<li>Lesser Wraith health now properly scales with time.</li>
				</ul>

			</div>
		
			<hr/>

			<div>
				<h5>General</h5>

				<p>Champion Search Tags</p>
				<p>Now, champion search tags more accurately represent the team role each champion plays and better explains the recommended play style for a particular champion to new players. In future releases, we'll continue to refine these tags and how they appear in PvP.net. For more information on our changes, read more here></p>
				<ul>
					<li>Champions will now be tagged with a single, primary role from the following></li>
					<ul>
						<li>Assassin, Fighter, Mage, Marksman, Support, Tank</li>
					</ul>
					<li>You'll see these changes across PvP.net</li>
				</ul>

				<p>Ready Check</p>
				<p>In order to get players into games faster, those that habitually fail to accept matched games will be temporarily removed from the queue. This should help players with longer queue times in addition to removing some fringe abuse cases></p>
				<ul>	
					<li>Players that frequently fail a Ready Check will be given time-outs from re-entering the queue to prevent them from lengthening the queue times of other players></li>
					<li>Normal play patterns (including missing a Ready Check every once in a while) will not trigger this penalty></li>
				</ul>

				<p>Chat</p>
				<ul>
					<li>Fixed a bug where the /mute chat command did not work></li>
					<li>Fixed a bug where you could not use the /mute @ChamliionName chat command unless the target was on your friends list></li>	
				</ul>
			</div>
			
	    </div>
	  </div>
	</div>

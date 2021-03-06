<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Maximilian Kiermeier">
    <title>X4mi Runescape</title>
    <base href="index.html">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="timeline.css">
    <link rel="icon" type="image/gif" href="src/logoklein.ico">
    <style type="text/css">
        html {
            background-color: black;
            background-image: url('src/rs\ background.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position-y: -200px;
        }

        main {
            margin-top: 200px;
        }

        .inlineDisplay h4 {
            margin-bottom: 0px;
        }

        #wiki {
            margin-bottom: 0px;
        }

        #stats {
            margin-top: 25px;
        }

        dl {
            margin-top: 0;
        }

        dd {
            margin-top: 15px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 2px solid black;
            padding : 10px;
        }

        th{
            font-size: 30px;
        }

        td {
            color: lightblue;
        }

        .num{
            font-size: 30px;
            color: rgba(45, 168, 188, 255);
        }

        #meter {
            margin-right: 10px;
        }
        #playername, #choice, #playerform{
            font-size: 25px;
        }

        #statheading{
            margin-bottom : 30px;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <header>
        <a href="index.html"><img src="src/logo.png" alt="Logo X4mi" width="250" height="250" class="logo"></a>
        <aside>
            <nav class="vertical nav">
                <menu class="menubar">
                    <li class="menubarli"><a href="index.html">Start</a></li>
                    <li class="menubarli"><a href="about.html">About</a></li>
                    <li class="menubarli"> <a href="runescape.php">Runescape</a></li>
                    <li class="menubarli"><a href="csgo.html">CounterStrike</a></li>
                </menu>
            </nav>
        </aside>
    </header>
    <main>
        <article>
            <h1 class="mainheading"><slot>Runescape</slot></h1>
            <section>
                <h4>General</h4>
                <div>
                    <div>
                        <figcaption>
                            <blockquote>
                                <q>RuneScape is a Java and C++-based massively multiplayer online role-playing game
                                    (MMORPG) operated by British developer Jagex Ltd. With over 9.5 million active free
                                    accounts and more than 500 thousand paid member accounts, RuneScape is the second
                                    most-played MMORPG in the world, and the most popular free MMORPG in the world for
                                    three years in a row. RuneScape offers both free and subscription content and is
                                    able to be played from any computer which is connected to the internet, and runs in
                                    any Java-capable ordinary web browser without straining on/or expending system
                                    resources. Since its release, the game has been praised for its free-playing
                                    abilities and its availability on a web browser. Each month, the website has around
                                    ten million unique visitors, and around ten million unique players access their
                                    accounts to play the game.</q>
                                <br>
                                <small><a href="https://runescape.wiki/w/RuneScape" target="_blank">- Runescape Wiki
                                        Article</a></small>
                            </blockquote>
                        </figcaption>
                    </div>
                    <div>
                        <p id="wiki">For more Informations about Runescape itself or any Content browse the <a
                                href="https://runescape.wiki/" target="_blank">Official Runescape Wiki</a> or use the
                            direct search down below.</p>
                        <form action="https://runescape.wiki/w/Special:Search?search=%search.value" method="get"
                            target="_blank">
                            <label>Wiki: <input type="search" name="search"></label>
                            <button type="submit">Search</button>
                        </form>
                    </div>

                </div>
            </section>
            <section class="inlineDisplay">
                <h4 class="righth">My Account</h4>
                <div>
                    <div>
                        <h5>My Stats</h5>
                        <a href="https://www.runeclan.com/uid/268264" target="_blank">
                            <picture>
                                <source srcset="https://www.runeclan.com/signature/user/268264/user1-dark.png">
                                <img src="https://www.runeclan.com/signature/user/268264/user1-light.png" id="stats"
                                    alt="X4MI on RuneClan" width="100%">
                            </picture>
                        </a>
                    </div>
                    <div>
                        <dl>
                            <dt>
                                <h5>Current goals</h5>
                            </dt>
                            <dd>Level 120 in all Skills</dd>
                            <dd>Pvm to achieve <a href="https://runescape.wiki/w/Boss_pets" target="_blank">bosspets</a>
                                for the
                                <a href="https://runescape.wiki/w/Insane_Final_Boss" target="_blank">insane Final
                                    Boss</a> feat <br>(mainly Aod)
                            </dd>

                        </dl>
                    </div>
                </div>
            </section>
            <section id="stats"> 
                <h4 id="statheading">120 Skills to go</h4>
                <form method="POST" id="playerform">
                <label>Playername: <input type="text" name="playername" value="" id="playername"></label>
                <select name="choice" id="choice">
                    <option value="Level-99" id="99">LvL 99</option>
                    <option value="Level-120" id="120" selected>LvL 120</option>
                    <option value="200m" id="200">200m</option>
                </select> 
                <button type="submit">Go</button>
                </form>
                <div>
                    <?php 
                    include('api.php');
                    if(empty($_POST)) {
                    getUserData("x4mi", "120");
                    }
                    else {
                    getUserData($_POST["playername"], $_POST["choice"]);
                    }
                    ?>
                    <table id="skilltable">
                        <tr>
                            <th>#</th>
                            <th>Skill</th>
                            <th>Current XP</th>
                            <th>XP to 120</th>
                            <th>Progress</th>
                        </tr>
                    </table>
                    <script src="runescape.js"></script>
                </div>
                </script>
            </section>
            <section>
                <h4>My Timeline</h4>
                <a href="runescape.php#end">
                    <h3 id="start">To the origin</h3>
                </a>
                <div class="timeline">
                    <div class="container left">
                        <div class="content">
                            <h2>06.01.2021</h2>
                            <h3>Final Boss</h3>
                            <details>
                                <summary>Info</summary>
                                <p><a href="https://runescape.wiki/w/Final_Boss" target="_blank">Final Boss</a> is a
                                    title unlocked by killing a total of at least 5,000 bosses and having at least 100
                                    kills on each boss.</a>
                                    <img src="src/runescape/Fb.png" alt="FinalBossVariations" width="100%">
                                </p>
                            </details>
                            <img src="src/runescape/Final Boss.png" alt="FinalBoss" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>29.08.2020</h2>
                            <h3>Completionist Cape Trimmed</h3>
                            <details>
                                <summary>Info</summary>
                                <p><a href="https://runescape.wiki/w/Completionist_cape_(t)" target="_blank">The
                                        completionist cape</a> is a cape that is awarded to players who have "completed
                                    the game" by finishing all major content available, <strong>to whatever extent is
                                        possible.</strong><br> The colours of a completionist cape can be customised by
                                    using the option in the right-click menu of the cape. In the Skillcape Customiser
                                    interface, players have the right-click option on the either of the four colour
                                    palettes to get or set a certain colour via the <a
                                        href="https://en.wikipedia.org/wiki/HSL_and_HSV" target="_blank">HSL colour
                                        algorithm</a>
                                </p>
                            </details>
                            <embed src="src/runescape/Trim.gif" width="100%" title="Trim">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>20.04.2020</h2>
                            <h3>Archaeology</h3>
                            <img src="src/runescape/arch.png" alt="Archaeology99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>17.12.2016</h2>
                            <h3>Viatlis</h3>
                            <details>
                                <summary>Info</summary>
                                <p>
                                    <a href="https://runescape.wiki/w/Vitalis_(pet)" target="_blank">Vitalis</a> is a
                                    boss pet obtained by inspecting the ancient summoning stone, a rare drop from <a
                                        href="https://runescape.wiki/w/Vorago" target="_blank">Vorago</a>. <br> It's one
                                    of the hardest pets to obtain and really rare. I got extremely lucky as i had hardly
                                    any kills on that boss. <br> Here's the clip from when i got it:
                                </p>
                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/Q1QaEWSezVI"
                                    frameborder="0" allowfullscreen></iframe>
                            </details>
                            <img src="src/runescape/viatlis.png" alt="Vitalis" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>04.05.2016</h2>
                            <h3>Completionist Cape</h3>
                            <details>
                                <summary>Info</summary>
                                <p><a href="https://runescape.wiki/w/Completionist_cape" target="_blank">The
                                        completionist cape</a> is a cape that is awarded to players who have "completed
                                    the game" by finishing all major content available.<br> The colours of a
                                    completionist cape can be customised by using the option in the right-click menu of
                                    the cape. In the Skillcape Customiser interface, players have the right-click option
                                    on the either of the four colour palettes to get or set a certain colour via the <a
                                        href="https://en.wikipedia.org/wiki/HSL_and_HSV" target="_blank">HSL colour
                                        algorithm</a>
                                </p>
                            </details>
                            <embed src="src/runescape/Comp.gif" title="Comp" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>07.02.2016</h2>
                            <h3>Invention 99</h3>
                            <img src="src/runescape/inv.png" alt="Invention99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>.2015</h2>
                            <h3>Master Quest Cape</h3>
                            <details>
                                <summary>Info</summary>
                                <p>The <a href="https://runescape.wiki/w/Master_quest_cape" target="_blank">master quest
                                        cape</a> is a cape which represents a player's achievements in quests and
                                    lore-related content. It is available to players who complete all
                                    <a href="https://runescape.wiki/w/Quest" target="_blank">quests</a>,
                                    <a href="https://runescape.wiki/w/Post-quest_rewards" target="_blank">post-quest
                                        rewards</a>,
                                    <a href="https://runescape.wiki/w/Miniquest" target="_blank">miniquests</a>, find
                                    most
                                    <a href="https://runescape.wiki/w/Lore" target="_blank">lore-related books</a> and
                                    fulfil various other requirements.
                                </p>
                            </details>
                            <object data="src/runescape/MQC.gif" width="100%" title="MQC">
                                <param name="autoplay" value="true">
                            </object>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>04.11.2015</h2>
                            <h3>Max Cape</h3>
                            <details>
                                <summary>Info</summary>
                                <p><a href="https://runescape.wiki/w/Max_cape" target="_blank">The max cape</a> is a
                                    cape available to players who have attained at least level 99 in all 28 skills. <br>
                                    The colours of a max cape can be customised by using the option in the right-click
                                    menu of the cape. In the Skillcape Customiser interface, players have the
                                    right-click option on the either of the four colour palettes to get or set a certain
                                    colour via the <a href="https://en.wikipedia.org/wiki/HSL_and_HSV"
                                        target="_blank">HSL colour algorithm</a></p>
                            </details>
                            <object data="src/runescape/max.gif" width="100%" title="Max">
                                <param name="autoplay" value="true">
                            </object>
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>04.11.2015</h2>
                            <h3>Divination 99</h3>
                            <img src="src/runescape/div.png" alt="Divination99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>23.10.2015</h2>
                            <h3>Fishing 99</h3>
                            <img src="src/runescape/fishing.png" alt="Fishing99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>27.09.2015</h2>
                            <h3>Theiving 99</h3>
                            <img src="src/runescape/thiev.png" alt="Theiving99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>26.09.2015</h2>
                            <h3>Agility 99</h3>
                            <img src="src/runescape/agi.png" alt="Agility99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>05.09.2015</h2>
                            <h3>Runecrafting 99</h3>
                            <img src="src/runescape/rc.png" alt="Runecrafting99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>30.08.2015</h2>
                            <h3>Dungeoneering 99</h3>
                            <img src="src/runescape/dg.png" alt="Dungeoneering99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>24.07.2015</h2>
                            <h3>Farming 99</h3>
                            <img src="src/runescape/farm.png" alt="Farming99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>28.04.2015</h2>
                            <h3>Woodcutting 99</h3>
                            <img src="src/runescape/wc.png" alt="Woodcutting99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>30.03.2015</h2>
                            <h3>Smithing 99</h3>
                            <img src="src/runescape/smith.png" alt="Smithing99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>18.03.2015</h2>
                            <h3>Mining 99</h3>
                            <img src="src/runescape/mining.png" alt="Mining99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>22.02.2015</h2>
                            <h3>Fletching 99</h3>
                            <img src="src/runescape/fletch.png" alt="Fletching99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>21.02.2015</h2>
                            <h3>Crafting 99</h3>
                            <img src="src/runescape/craft.png" alt="Crafting99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>21.02.2015</h2>
                            <h3>Construction 99</h3>
                            <img src="src/runescape/cons.png" alt="Construction99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>24.01.2015</h2>
                            <h3>Stength 99</h3>
                            <img src="src/runescape/str.png" alt="Strength99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>18.01.2015</h2>
                            <h3>Attack 99</h3>
                            <img src="src/runescape/att.png" alt="Attack99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>15.01.2015</h2>
                            <h3>Mage 99</h3>
                            <img src="src/runescape/mage.png" alt="Mage99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>09.01.2015</h2>
                            <h3>Summoning 99</h3>
                            <img src="src/runescape/sum.png" alt="Summoning99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>21.12.2014</h2>
                            <h3>Firemaking 99</h3>
                            <img src="src/runescape/fm.png" alt="Firemaking99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>09.12.2014</h2>
                            <h3>Slayer 99</h3>
                            <img src="src/runescape/slay.png" alt="Slayer99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>30.11.2014</h2>
                            <h3>Defense 99</h3>
                            <img src="src/runescape/def.png" alt="Defense99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>01.11.2014</h2>
                            <h3>Herblore 99</h3>
                            <img src="src/runescape/herb.png" alt="Herblore99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>30.10.2014</h2>
                            <h3>Constitution 99</h3>
                            <img src="src/runescape/hp.png" alt="Constitution99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>18.10.2014</h2>
                            <h3>Range 99</h3>
                            <img src="src/runescape/range.png" alt="Range99" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>11.10.2014</h2>
                            <h3>Pray 99</h3>
                            <img src="src/runescape/pray.png" alt="Pray99" width="100%">
                        </div>
                    </div>
                    <div class="container right">
                        <div class="content">
                            <h2>18.08.2014</h2>
                            <h3>Quest Cape</h3>
                            <details>
                                <summary>Info</summary>
                                <p><a href="https://runescape.wiki/w/Quest_point_cape" target="_blank">The quest point
                                        cape</a> is worn by players who have achieved the current maximum number of
                                    quest points.</p>
                            </details>
                            <img src="src/runescape/qc.png" alt="QuestCape" width="100%">
                        </div>
                    </div>
                    <div class="container left">
                        <div class="content">
                            <h2>30.03.2011</h2>
                            <h3>Started the Adventure - Account created</h3>
                            <img src="src/runescape/start.png" alt="QuestCape" width="100%">
                            <small>(picture from 27.03.2021)</small>
                        </div>
                    </div>
                </div>
                <a href="runescape.php#start">
                    <h3 id="end">Back to the top</h3>
                </a>
            </section>
        </article>
    </main>
    <footer>
        <address>
            Contact Me:
            <a href="mailto:maximilian.kiermeier@hof-university.de">Maximilian Kiermeier</a>
        </address>
        <small>Made by Maximilian Kiermeier <time>2021-03</time></small>
    </footer>
</body>

</html>
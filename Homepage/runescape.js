window.addEventListener("load", e => {
    let elem = document.getElementById("120stats");
    let str = elem.innerHTML;
    let stats = JSON.parse(str);
    let skills = stats.skillvalues;
    skills.forEach(element => {
        let map = getMap();
        element.name = map[element.id][(element.id).toString()]
    });
    printSkills(skills, stats.name, elem.getAttribute("choice"));
})


function getMap() {
    let str = '[{"0":"Attack"},{"1":"Defence"},{"2":"Strength"},{"3":"Constitution"},{"4":"Ranged"},{"5":"Prayer"},{"6":"Magic"},{"7":"Cooking"},{"8":"Woodcutting"},{"9":"Fletching"},{"10":"Fishing"},{"11":"Firemaking"},{"12":"Crafting"},{"13":"Smithing"},{"14":"Mining"},{"15":"Herblore"},{"16":"Agility"},{"17":"Thieving"},{"18":"Slayer"},{"19":"Farming"},{"20":"Runecrafting"},{"21":"Hunter"},{"22":"Construction"},{"23":"Summoning"},{"24":"Dungeoneering"},{"25":"Divination"},{"26":"Invention"},{"27":"Archaeology"}]';
    return JSON.parse(str);
}

function numberWithDots(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function printSkills(skills, name, choice) {
    const LEVEL99 = 13034431;
    const LEVEL120 = 104273167;
    const L200M = 200000000;
    const NS = "http://www.w3.org/1999/xhtml";
    let table = document.getElementById("skilltable")
    let filter = LEVEL120;
    let tr, td;
    let cnt = 0;

    switch (choice) {
        case "Level-99":
            document.getElementById("99").setAttribute("selected", true);
            filter = LEVEL99;
            break;
        case "Level-120":
            document.getElementById("120").setAttribute("selected", true);
            filter = LEVEL120;
            break;
        case "200m":
            document.getElementById("200").setAttribute("selected", true);
            filter = L200M;
            break;
    }

    skills.forEach(skill => {
        let xp = Math.round(skill.xp / 10)
        if (xp < filter) {
            tr = document.createElementNS(NS, "tr");

            td = document.createElementNS(NS, "td");
            td.innerHTML = ++cnt;
            td.setAttribute("class", "num");
            tr.appendChild(td);

            td = document.createElementNS(NS, "td");
            td.innerHTML = skill.name;
            tr.appendChild(td);

            td = document.createElementNS(NS, "td");
            td.innerHTML = numberWithDots(xp);
            tr.appendChild(td);

            td = document.createElementNS(NS, "td");
            td.innerHTML = numberWithDots(filter - xp);
            tr.appendChild(td);

            td = document.createElementNS(NS, "td");

            meter = document.createElementNS(NS, "progress");
            meter.setAttribute("id", "meter");
            meter.setAttribute("value", Math.trunc(xp / filter * 1000) / 1000);
            meter.innerHTML = Math.trunc((xp / filter) * 1000) / 10 + '%';
            td.appendChild(meter);

            label = document.createElementNS(NS, "label");
            label.setAttribute("id", "lmeter");
            label.setAttribute("for", "meter");
            label.innerHTML = Math.trunc((xp / filter) * 1000) / 10 + "%";
            td.appendChild(label);

            tr.appendChild(td);

            table.appendChild(tr);
        }
    });
    if(cnt == 0) {
        tr = document.createElementNS(NS, "tr");
        td = document.createElementNS(NS, "td");

        td.setAttribute("colspan", "5");
        td.setAttribute("style", " text-align: center")
        td.innerHTML = name + " hat alle Skills auf " + choice;

        tr.appendChild(td);
        table.appendChild(tr);
    }
    document.getElementById("statheading").innerHTML = "#" + cnt + " " + choice + " Skills for <u>" + name + "</u> to go";
    document.getElementById("playername").value = name;
}
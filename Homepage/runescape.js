window.addEventListener("load", e => {
    let str = document.getElementById("120stats").innerHTML;
    let stats = JSON.parse(str);
    let skills = stats.skillvalues;
    skills.forEach(element => {
        let map = getMap();
        element.name = map[element.id][(element.id).toString()]
    });
    printSkills(skills);
})


function getMap() {
    let str = '[{"0":"Attack"},{"1":"Defence"},{"2":"Strength"},{"3":"Constitution"},{"4":"Ranged"},{"5":"Prayer"},{"6":"Magic"},{"7":"Cooking"},{"8":"Woodcutting"},{"9":"Fletching"},{"10":"Fishing"},{"11":"Firemaking"},{"12":"Crafting"},{"13":"Smithing"},{"14":"Mining"},{"15":"Herblore"},{"16":"Agility"},{"17":"Thieving"},{"18":"Slayer"},{"19":"Farming"},{"20":"Runecrafting"},{"21":"Hunter"},{"22":"Construction"},{"23":"Summoning"},{"24":"Dungeoneering"},{"25":"Divination"},{"26":"Invention"},{"27":"Archaeology"}]';
    return JSON.parse(str);
}

function numberWithDots(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function printSkills(skills) {
    const LEVEL120 = 104273167;
    let table = document.getElementById("skilltable")
    let tr, td;
    let cnt = 0;
    skills.forEach(skill => {
        let xp = Math.round(skill.xp / 10)
        if (xp < LEVEL120) {
            tr = document.createElementNS("http://www.w3.org/1999/xhtml", "tr");

            td = document.createElementNS("http://www.w3.org/1999/xhtml", "td");
            td.innerHTML = ++cnt;
            td.setAttribute("class", "num");
            tr.appendChild(td);

            td = document.createElementNS("http://www.w3.org/1999/xhtml", "td");
            td.innerHTML = skill.name;
            tr.appendChild(td);

            td = document.createElementNS("http://www.w3.org/1999/xhtml", "td");
            td.innerHTML = numberWithDots(xp);
            tr.appendChild(td);

            td = document.createElementNS("http://www.w3.org/1999/xhtml", "td");
            td.innerHTML = numberWithDots(LEVEL120 - xp);
            tr.appendChild(td);

            td = document.createElementNS("http://www.w3.org/1999/xhtml", "td");

            meter = document.createElementNS("http://www.w3.org/1999/xhtml", "progress");
            meter.setAttribute("id", "meter");
            meter.setAttribute("value", Math.trunc(xp/LEVEL120*1000)/1000);
            meter.innerHTML = Math.trunc((xp/LEVEL120) * 1000)/10+'%';
            td.appendChild(meter);

            label = document.createElementNS("http://www.w3.org/1999/xhtml", "label");
            label.setAttribute("id", "lmeter");
            label.setAttribute("for", "meter");
            label.innerHTML = Math.trunc((xp/LEVEL120) * 1000)/10+"%";
            td.appendChild(label);

            tr.appendChild(td);

            table.appendChild(tr);
        } 
    });
    document.getElementById("statheading").innerHTML = "#"+cnt + " - " + document.getElementById("statheading").innerHTML;
}
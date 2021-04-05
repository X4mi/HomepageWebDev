var area = document.getElementById('textarea');
var length = area.getAttribute("maxlength");
var count = document.getElementById('count');
var progress = document.getElementById('progress');
var form = document.getElementById('feedbackform');
var feedback = document.getElementById("feedback");
count.innerHTML = length;

form.onreset = function () {
    count.innerHTML = length;
    progress.setAttribute("value", 0)
};

area.onkeyup = function () {
    count.value = (length - this.value.length);
    progress.setAttribute("value", Math.round((this.value.length / length * 100)))
};

function openDialog() {
    feedback.showModal();
}

function closeDialog() {
    feedback.close();
}

function showContent() {
    var temp = document.getElementsByTagName("template")[0];
    var clone = temp.content.cloneNode(true);
    document.body.appendChild(clone);
}
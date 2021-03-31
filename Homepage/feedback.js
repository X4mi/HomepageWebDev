var area = document.getElementById('textarea');
var length = area.getAttribute("maxlength");
var count = document.getElementById('count');
var progress = document.getElementById('progress');
var form = document.getElementById('feedbackform');
count.innerHTML = length;

form.onreset = function () {
    count.innerHTML = length;
    progress.setAttribute("value", 0)
    };

area.onkeyup = function () {
count.innerHTML = (length - this.value.length);
progress.setAttribute("value", Math.round((this.value.length / length * 100)))
};

document.querySelector('#open-feedback').addEventListener('click', toggleDialog);
document.querySelector('#close-feedback').addEventListener('click', toggleDialog);
function toggleDialog(event){ 
    var dialog = document.querySelector('#feedback');
    var closebutton = document.querySelector('#close-feedback');
    if (!dialog.hasAttribute('open')) {
        dialog.setAttribute('open','open');
    }
    else {		
        dialog.removeAttribute('open');  
    }
}  

function showContent() {
    var temp = document.getElementsByTagName("template")[0];
    var clone = temp.content.cloneNode(true);
    document.body.appendChild(clone);
  }
function popUp() {
  //   const btnMod = document.getElementById("mod-btn");
  let msgBox = document.createElement("div");
  msgBox.className = "msg-box";
  msgBox.id = "msgBoxId";

  let cancelBox = document.createElement("div");
  cancelBox.className = "cancel";
  cancelBox.innerHTML = "close";
  cancelBox.onclick = function (e) {
    msgBox.parentNode.removeChild(msg - box);
  };
  let msg = document.createElement("span");
  msg.innerHTML =
    "Your information have been saved, you will be notified once we launch";
  msgBox.appendChild(msg);
  msgBox.appendChild(cancelBox);
  document.body.appendChild(msgBox);
}

function openPopUp() {
  document.getElementById("pop").style.display = "block";
}
function closePopUp() {
  document.getElementById("pop").style.display = "none";
}

let user = JSON.parse(localStorage.getItem('usuario'));

console.log(user);

const nameCard = document.querySelector(".card__text__name");

const p = document.createElement("p");

p.textContent="Bienvenido " + user.nombre + "!";

nameCard.appendChild(p);
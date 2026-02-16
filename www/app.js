document.getElementById("myForm").addEventListener("submit", function (e) {

  const name = this.name.value;
  const film = this.film_name.value;
  const date = this.date.value;

  alert("Оплата успешно выполнена! " + name + ", ваш билет на \"" + film + "\" оформлен. \nЖдем вас " + date + "!");
});
